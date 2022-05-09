<?php 
$id = $_GET["id"];
$title1 = $_REQUEST['title1'];
$content1 = $_REQUEST['content1'];
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=memo; charset=utf8", $dbUserName, $dbPassword);

$sql = "UPDATE pages SET title = :title , content = :content , updated_at = now() WHERE id = :id";

$statement = $pdo->prepare($sql);
$statement->bindValue( ':id' , $id , PDO::PARAM_INT);
$statement->bindValue( ':title' , $title1 , PDO::PARAM_STR);
$statement->bindValue( ':content' , $content1 , PDO::PARAM_STR);
$statement->execute();

header('Location: ./index.php');
exit();
?>