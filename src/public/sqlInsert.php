<?php
include  __DIR__ . ('/function.php');
class Insert
{
  function insert($sql , $title , $content)
  {
    $obj = new SqlConnect();
    $hoge = $obj->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->bindParam(":title" , $title , PDO:: PARAM_STR);
    $stmt->bindParam(":content" , $content , PDO:: PARAM_STR);
    $stmt->execute(); 
    return $stmt;
  }
}
?>