<?php
include  __DIR__ . ('/function.php');
class select
{
  function select($sql)
  {
    $obj = new sqlConnect();
    $hoge = $obj->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->execute(); 
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $contacts;
  }
}
?>