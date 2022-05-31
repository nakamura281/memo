<?php
include __DIR__ . ('/function.php');
$title = filter_input(INPUT_POST, "title");;
$content = filter_input(INPUT_POST, "content");;

if (empty($title) && empty($content)) {
  $request = new action;
  $action = $request->redirect('edit.php');
}

$obj = new sql_connect();
$sql = "INSERT INTO pages (
  title , content , created_at , updated_at	
  ) VALUES (
  :title , :content , now() , now()
)";
$stmt = $obj->insert($sql , $title , $content);

$request = new action;
$action = $request->redirect('index.php');
?>