<?php
include  __DIR__ . ('/function.php');
class insert
{
  function insert($sql , $title , $content)
  {
    $obj = new sqlConnect();
    $hoge = $obj->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->bindParam(":title" , $title , PDO:: PARAM_STR);
    $stmt->bindParam(":content" , $content , PDO:: PARAM_STR);
    $stmt->execute(); 
    return $stmt;
  }
}
?>