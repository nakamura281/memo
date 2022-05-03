<?php
$id = $_GET["id"];
$contacts = [];
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=memo; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM pages WHERE id = :id";
$statement = $pdo->prepare($sql);
$statement->bindParam(':id' ,  $id , PDO::PARAM_INT);
$statement->execute();
$contacts = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php foreach($contacts as $row) : ?>
    <?php echo "<form method=post action=update.php?id=" . $row["id"] . ">"; ?>
      <div style="text-align: center">
        <table>
          <h3>編集</h3>
          <a>title</a><br>
          <input name="title1" value="<?php echo $row["title"]; ?>"/><br>
          <a>本文</a><br>
          <input name="content1" value="<?php echo $row["content"]; ?>"/><br>
          <button style="background-color:#0080ff" type="submit" name="button">更新</button>
        </table>  
      </div>
    </form>
  <?php endforeach; ?>    
</body>