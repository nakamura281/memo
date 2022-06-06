<?php
class SqlConnect 
{
  //定数の宣言
  const DBUSERNAME = "root";
  const DBPASSWORD = "password";
  //データベースに接続する関数
  function pdo()
  {
    $pdo = new PDO("mysql:host=mysql; dbname=memo; charset=utf8", self::DBUSERNAME, self::DBPASSWORD);
    return $pdo;
  }
 }
?>