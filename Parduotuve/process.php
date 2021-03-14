
 <?php
session_start();
$host = "localhost";
$username = "root";
$password = "wanrltw";
$database = "parduotuve";
$message = "";


if(!(isset($_SESSION['cart']))){ //Ar egzistuoja variable
    $_SESSION['cart'] = array(); //Sukuria
}

 if(isset($_GET['clear'])){ //Ar egzistuoja variable
    $_SESSION['cart'] = array(); //Sukuria
}


 $out = "";
if(isset($_GET['productID'])){
    $productID = $_GET['productID'];
    $quant = $_GET['quant'];

    if($quant > 0 && filter_var($quant, FILTER_VALIDATE_INT)) {
        if(isset($_SESSION['cart'][$productID])){
            $_SESSION['cart'][$productID] += $quant;// Prideda prekiu skaiciu
        }else{
            $_SESSION['cart'][$productID] = $quant;// Prideda nauja ID ir prekiu skaiciu
            
        }
    }else {
        $out = "Įveskite prekių skaičiu";
    } 
     
}
print_r($_SESSION['cart']);

try {
   
    $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_POST["login"])) {
        if (empty($_POST["username"]) || empty($_POST["password"])) {
            $message = '<label>Prašome užpylditi visus laukelius</label>';
        } else {
            $query = "SELECT * FROM vartotojai WHERE name = :username AND password = :password";
            $statement = $connect->prepare($query);
            $statement->execute(
                    array(
                        'username' => $_POST["username"],
                        'password' => $_POST["password"]
                    )
            );
            $count = $statement->rowCount();
            if ($count > 0) {
                $_SESSION["username"] = $_POST["username"];
                header("location:index.php");
            } else {
                $message = '<label>Wrong Data</label>';
            }
        }
    }
  
      
} catch (PDOException $error) {
    $message = $error->getMessage();
}

setcookie("vartotojas", $_SESSION['username'], time()+60*60*4);
setcookie("slaptazodis", $_SESSION['password'], time()+60*60*4);


    $myConnect= mysqli_connect("$host","$username","$password", "$database") or die ("could not connect to mysql");
    $sql = "SELECT * FROM prekes";
    $result = mysqli_query($myConnect, $sql) or die("Bad Insert: $sql");
    
    //Ivertinimas 
if (isset($_POST["submitt"])){
    $sqlFour = "INSERT INTO vertinimas (vidurkis, name) VALUES ('" .  $_SESSION['average'] . "', '" . $_SESSION['username'] . "')";
    $resultFour = mysqli_query($myConnect, $sqlFour) or die("Bad Insert: $sqlFour");
    
    
};

print_r($sqlFour);

echo $_SESSION['average'];
?>  


<?php
if (isset($message)) {
    echo '<label>' . $message . '</label>';
}
