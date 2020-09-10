<?php
$dbuser = "root";
$dbname = "test_1";
$db_pass="";
$dsn = "mysql:host=localhost;dbname=$dbname";

try{
  $pdo = new PDO($dsn,$dbuser,$db_pass);

}catch(PDOException $e){
    echo "conection error";
    // echo $e;
  }
  

?>