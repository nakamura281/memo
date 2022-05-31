<?php
class sql_connect 
{
  //定数の宣言
  const DBUSERNAME = "root";
  const DBPASSWORD = "password";
  //データベースに接続する関数
  function pdo(){
    $pdo = new PDO("mysql:host=mysql; dbname=memo; charset=utf8", self::DBUSERNAME, self::DBPASSWORD);
    return $pdo;
  }
  //SELECT文のとき
  function select($sql)
  {
    $hoge=$this->pdo();
    $stmt = $hoge->prepare($sql);
    $stmt->execute(); 
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $contacts;
  }
  //INSERT文のとき
  function insert($sql , $title , $content)
  {
    $hoge=$this->pdo();
    $stmt=$hoge->prepare($sql);
    $stmt->bindParam(":title" , $title , PDO:: PARAM_STR);
    $stmt->bindParam(":content" , $content , PDO:: PARAM_STR);
    $stmt->execute(); 
    return $stmt;
  }
  //DERETE文の時
  function delete($sql , $id)
  {
    $hoge=$this->pdo();
    $stmt=$hoge->prepare($sql);
    $stmt->bindParam(":id" , $id , PDO:: PARAM_STR);
    $stmt->execute(); 
    return $stmt;
  }
  //update文の時
  function update($sql , $id , $title , $content)
  {
    $hoge=$this->pdo();
    $stmt=$hoge->prepare($sql);
    $stmt->bindParam(":id" , $id , PDO:: PARAM_STR);
    $stmt->bindParam(":title" , $title , PDO:: PARAM_STR);
    $stmt->bindParam(":content" , $content , PDO:: PARAM_STR);
    $stmt->execute(); 
    return $stmt;
  }
}

class action
{
  //リダイレクト
  function redirect(string $redirectPath): void
  {
	  header("Location: " . $redirectPath);
	  exit;
  }
}
?>