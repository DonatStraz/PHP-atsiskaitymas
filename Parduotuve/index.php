<?php
include('process.php');
 echo '<h3>Sveiki - ' . $_SESSION["username"] . '</h3>';
 
 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>   
        
        <button><a href="http://localhost/Parduotuve/1question.php">Parduotuves Įvertinimas</a></button><br>
        <a href="logout.php">Logout</a>
    <table>
    <tr>
        <th>Pavadinimas</th><th>Kategorija</th><th>Sandėliavimas</th><th>Pasirinkite kiekį</th>
    </tr>
            
<?php 
           
    while($row = mysqli_fetch_assoc($result)){
      echo"
          <tr>
            <td>
             {$row['name']}<br>
             </td>
             <td>
             {$row['category']}<br>
             </td>
             <td>
             {$row['storage']}<br>
             </td>
             <td>
                <form action = ' {$_SERVER['PHP_SELF']}'>
                    <input type='text' name='quant' id='quant'>
                    <input type='hidden' name='productID' id='productID' value='{$row['ID']}'>
                    <input type='submit' value='Idėti į krepšeli'>
                </form>
           ";
    }
   
        
    
    echo $out;
    ?>
    
    <a href='<?php echo $_SERVER['PHP_SELF']; ?>?clear=1'>Išvalyti krepšeli</a>
    
        </table>   
        
    <table>
     
        
       <form action="cart.php" method="POST">
          <input type="submit" id="btn" name="checkout" value="Baigti apsipirkima"/>
        </form>
    
    <?php
   

    
    ?>
    </table>    
    
    </body>
</html>