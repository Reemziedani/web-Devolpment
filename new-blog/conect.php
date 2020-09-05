<?php
include 'db.php';
//require db.php;
//use /blog
//use db.php;
$titel = $_POST['titel'];
$body = $_POST['content'];
// $dbuser = "root";
// $dbname = "test_1";
// $db_pass="";
// $dsn = "mysql:host=localhost;dbname=$dbname";

try{
  // $pdo = new PDO($dsn,$dbuser,$db_pass);
  // best connectio way
  $sql="insert into posts (title,body,user_id) values (:title,:body,1)";
  $stm=$pdo->prepare($sql);
  $stm->execute([
    'title'=> $titel,
    'body'=> $body
  ]);
  header('Location: /index.php');
  //echo "succefully added";

  //old connection way
  //$stm = $pdo->query("insert into posts (title,body,user_id) values ('$titel','$body',1)");
  //INSERT INTO `posts`( `title`, `body`,`user_id`) VALUES ('test ','post trest',1);

  //echo "conection done ";
//   $sql="insert into posts (title,body) values($titel,$body)";
//  $stm=$pdo->prepare($sql);
//  $stm->execute();
  
 
}catch(PDOException $e){
  echo "conection error";
  // echo $e;
}


//echo $titel;
//echo $body;