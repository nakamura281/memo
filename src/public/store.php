<?php

$title = $_REQUEST['title'];
$content = $_REQUEST['content'];

$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=memo; charset=utf8", $dbUserName, $dbPassword);

$sql = "INSERT INTO pages (
  title , content , created_at , updated_at	
  ) VALUES (
  :title , :content , now() , now()
)";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(":title" , $title , PDO:: PARAM_STR);
$stmt->bindParam(":content" , $content , PDO:: PARAM_STR);
$stmt->execute();

$sql1 = "SELECT * FROM pages";
$statement = $pdo->prepare($sql1);
$statement->execute();
$contacts = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($contacts);
?>
<!DOCTYPE html>
<a href="index.php">トップページへ</a> 
</html>