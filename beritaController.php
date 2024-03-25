<?php 

  include_once("database.php");

  class beritaController {
    public $model;

    public function __construct() { 
      $this->model = new Berita();
    }

    public function viewUpdate($Id) {
      $x = $this->model->getBerita($Id);
      include "edit.php";
    }
    
    public function update($Id, $Title, $Description, $Category, $Image) {
      $modifiedImagePath = str_replace(" ", "%20", $Image); // Encode spaces in the file path
      $this->model->updateBerita($Id, $Title, $Description, $Category, $modifiedImagePath);
      header("location:admin.php");
    }
    
    public function delete($Id) {
      $this->model->deleteBerita($Id); 
      header("location:admin.php");
    }
    
    public function viewInsert() {
      header("location:add.php");
    }
    
    public function insert($Id, $Title, $Description, $Category, $Image) {
      $modifiedImagePath = str_replace(" ", "%20", $Image); // Encode spaces in the file path
      $this->model->addBerita($Id, $Title, $Description, $Category, $modifiedImagePath);
      header("location:admin.php");
    }

    public function view($Id) {
      $x = $this->model->getBerita($Id);
      include "view.php";
    }
  }
?>