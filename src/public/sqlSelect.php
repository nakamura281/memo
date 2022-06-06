<?php
include  __DIR__ . ('/function.php');
class Select
{
  function select($sql)
  {
    $obj = new SqlConnect();
    $hoge = $obj->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->execute(); 
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $contacts;
  }
}
?>