<?php
include __DIR__ . ('/sqlInsert.php');
include __DIR__ . ('/redirect.php');
$title = filter_input(INPUT_POST, "title");;
$content = filter_input(INPUT_POST, "content");;

if (empty($title) && empty($content)) {
  $request = new Action;
  $action = $request->redirect('edit.php');
}

$obj = new Insert();
$sql = "INSERT INTO pages (
  title , content , created_at , updated_at	
  ) VALUES (
  :title , :content , now() , now()
)";
$stmt = $obj->insert($sql , $title , $content);

$request = new Action;
$action = $request->redirect('index.php');
?>