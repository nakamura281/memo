<?php
include __DIR__ . ('/function.php');
$id = $_GET["id"];
$obj = new sql_connect(); 
$sql = "DELETE FROM pages WHERE id = :id";
$stmt = $obj->delete($sql , $id);

$request = new action;
$action = $request->redirect('index.php');
?>