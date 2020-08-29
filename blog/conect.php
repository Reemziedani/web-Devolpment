<?php
$titel = $_POST['titel'];
$body = $_POST['content'];
$dsn = "";
$dbuser = "";
$dbname = "";

try{
  $pdo = new PDO($dsn,$dbuser,$dbname);
  echo "conection dan";
}catch(PDOException $e){
  echo "conection error";
  // echo $e;
}


echo $titel;
echo $body;