<?php 
include __DIR__ . ('/sqlUpdate.php');
include __DIR__ . ('/redirect.php');
$id = $_GET["id"];
$title = filter_input(INPUT_POST, "title1");
$content = filter_input(INPUT_POST, "content1");

$obj = new update();
$sql = "UPDATE pages SET title = :title , content = :content , updated_at = now() WHERE id = :id";
$stmt = $obj->update($sql , $id , $title , $content);

$request = new action;
$action = $request->redirect('index.php');
?>