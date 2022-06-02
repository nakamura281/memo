<?php
include  __DIR__ . ('/function.php');
class delete
{
  function delete($sql , $id)
  {
    $obj = new sqlConnect();
    $hoge = $obj->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->bindParam(":id" , $id , PDO:: PARAM_STR);
    $stmt->execute(); 
    return $stmt;
  }
}
?>