<?php
include('process.php');
 echo '<h3>Sveiki - ' . $_SESSION["username"] . '</h3>';

 if(!(isset($_SESSION['cart']))){ //Ar egzistuoja variable
    $_SESSION['cart'] = array(); //Sukuria
}

 if(isset($_GET['clear'])){ //Ar egzistuoja variable
    $_SESSION['cart'] = array(); //Sukuria
}
        
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>   
        
        <a href="logout.php">Logout</a>
        
    <table>
        <h2>Jūsų Prekių krepšelis išsaugotas duombazėje</h2>
        <tr>
            <th>Pavadinimas</th><th>Kategorija</th><th>Kiekis</th>
        </tr>
   
    <?php
        foreach($_SESSION['cart'] as $key => $val) {
            $sqlTwo = "SELECT * FROM prekes WHERE ID = '$key'"; 
            $resultTwo = mysqli_query($myConnect, $sqlTwo) or die("Bad Insert: $sqlTwo");
            $rowTwo = mysqli_fetch_assoc($resultTwo);
            
       echo"
              <tr>
                <td>{$rowTwo['name']}</td>
                <td>{$rowTwo['category']}</td>
                <td>$val</td>
              </tr>
            ";
                
    if (isset($_POST["checkout"])){
    $sqlTwo = "INSERT INTO cart_userid (pavadinimas, kategorija, kiekis, vartotojas) VALUES ('" . $rowTwo['name'] . "', ' " . $rowTwo['category'] . "', '$val', '" . $_SESSION["username"] . "')";
    $result = mysqli_query($myConnect, $sqlTwo) or die("Bad Insert: $sqlTwo");
    } 
    
            
    if (isset($_POST["main"])){
      
    $sqlThree = "TRUNCATE TABLE cart_userid";
    $resultThree = mysqli_query($myConnect, $sqlThree) or die("Bad Insert: $sqlThree");
    header('location: index.php');
    } 
                
          
        }
        
  
          
    ?>
    </table>    
    
        <a href='<?php echo $_SERVER['PHP_SELF']; ?>?clear=1'>Išvalyti krepšeli</a>   <br><br>
    
        <form action="cart.php" method="POST">
          <input type="submit" id="btn2" name="main" value="pagrindinis"/>
        </form>
        
    </body>
</html>
