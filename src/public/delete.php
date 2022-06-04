<?php
include __DIR__ . ('/sqlDelete.php');
include __DIR__ . ('/redirect.php');
$id = $_GET["id"];
$obj = new Delete(); 
$sql = "DELETE FROM pages WHERE id = :id";
$stmt = $obj->delete($sql , $id);

$request = new Action;
$action = $request->redirect('index.php');
?>