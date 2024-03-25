<?php 

  include_once("database.php");

  class adminController {
    public $model;

    public function __construct() { 
      $this->model = new Admin();
    }

    public function login($email, $password) {
      $this->model->login($email, $password);
    }

    public function logout() {
      $this->model->logout();
      header("location:main.php");
    }
  }
?>