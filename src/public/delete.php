<?php
include __DIR__ . ('/sqlDelete.php');
include __DIR__ . ('/redirect.php');
$id = $_GET["id"];
$obj = new delete(); 
$sql = "DELETE FROM pages WHERE id = :id";
$stmt = $obj->delete($sql , $id);

$request = new action;
$action = $request->redirect('index.php');
?>