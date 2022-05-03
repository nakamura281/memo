<?php 
$id = $_GET["id"];
$title1 = $_REQUEST['title1'];
$content1 = $_REQUEST['content1'];
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=memo; charset=utf8", $dbUserName, $dbPassword);

$sql = "UPDATE pages SET title = :title , content = :content , updated_at = now() WHERE id = :id";

$statement = $pdo->prepare($sql);
$statement->bindParam( ':id' , $id , PDO::PARAM_INT);
$statement->bindParam( ':title' , $title1 , PDO::PARAM_STR);
$statement->bindParam( ':content' , $content1 , PDO::PARAM_STR);
$statement->execute();
?>
<!DOCTYPE html>
<a href="index.php">トップページへ</a> 
</html>