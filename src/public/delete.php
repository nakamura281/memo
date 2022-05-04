<?php

$id = $_GET["id"];
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=memo; charset=utf8", $dbUserName, $dbPassword);  
  
$sql = "DELETE FROM pages WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();

$sql1 = "SELECT * FROM pages";
$statement = $pdo->prepare($sql1);
$statement->execute();
$contacts = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<a href="index.php">トップページへ</a> 
</html>