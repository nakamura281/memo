<?php

$title = $_REQUEST['title'];
$content = $_REQUEST['content'];

if (empty($title) && empty($content)) {
  header('Location: ./edit.php');
  exit();
}

$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=memo; charset=utf8", $dbUserName, $dbPassword);

$sql = "INSERT INTO pages (
  title , content , created_at , updated_at	
  ) VALUES (
  :title , :content , now() , now()
)";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(":title" , $title , PDO:: PARAM_STR);
$stmt->bindValue(":content" , $content , PDO:: PARAM_STR);
$stmt->execute();

header('Location: ./index.php');
exit();
?>
<!DOCTYPE html>
<a href="index.php">トップページへ</a> 
</html>