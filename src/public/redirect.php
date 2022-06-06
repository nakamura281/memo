<?php
class Action
{
  //リダイレクト
  function redirect(string $redirectPath): void
  {
	  header("Location: " . $redirectPath);
	  exit;
  }
}
?>