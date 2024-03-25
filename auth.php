<?php 

  include_once("adminController.php");

  $controller = new adminController();

  if (isset($_POST["login"])) {
    $controller->login($_POST["email"], $_POST["password"]);

  } else if (isset($_POST["logout"])) {
    $controller->logout();

  }
?>