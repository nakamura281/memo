<?php 
$contacts = [];
$dbUserName = "root";
$dbPassword = "password";
$pdo = new PDO("mysql:host=mysql; dbname=memo; charset=utf8", $dbUserName, $dbPassword);

$sql = "SELECT * FROM pages";
$statement = $pdo->prepare($sql);
$statement->execute();
$contacts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($contacts as $value) {
  $array[] = $value['created_at'];
}
if ($_GET["order"] === "desc") {
  array_multisort($array , SORT_DESC , $contacts);
} elseif ($_GET["order"] === "asc") {
  array_multisort($array , SORT_ASC , $contacts);
}

?>
<!Doctype html>
<meta charset="utf-8">
<form action="" method="POST">
  <input type="text" name=“textbox” placeholder="search...">
  <input type="submit" name="search" value="検索">
</form>
<h3>メモ一覧</h3>
<a href="create.php">メモ追加</a><br>
<a href="index.php?order=desc">新しい順</a>
<a href="index.php?order=asc">古い順</a>
<table border="1">
<tr>
<th>タイトル</th>
<th>内容</th>
<th>作成日時</th>
<th>編集</th>
<th>削除</th>
</tr>
<?php foreach($contacts as $row) : ?>
<tr>
<td><?php echo $row["title"]  ; ?></td>
<td><?php echo $row["content"] ; ?></td>
<td><?php echo $row["created_at"] ; ?></td>
<td><?php echo "<a href=edit.php?id=" . $row["id"] . ">編集</a>"; ?></td>
<td><?php echo "<a href=delete.php?id=" . $row["id"] . ">削除</a>"; ?></td>
</tr>
<?php endforeach; ?>
