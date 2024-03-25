<?php 

  include_once("beritaController.php");

  $controller = new beritaController();

  if (isset($_GET["insert"])) {
    $controller->viewInsert();

  } else if (isset($_POST["saveInsert"])) {
    // Get the file details
    $file = $_FILES["image"];
    $fileName = $file["name"];
    $fileTmpName = $file["tmp_name"];
    $fileError = $file["error"];
  
    // Define the destination folder
    $uploadDir = "images/";

    // Generate a unique file name
    $uniqueFileName = uniqid() . "_" . $fileName;
  
    // Move the uploaded file to the destination folder
    move_uploaded_file($fileTmpName, $uploadDir . $uniqueFileName);
  
    // Save the file path in the database
    $controller->insert($_POST["id"] ,$_POST["title"], $_POST["description"], $_POST["category"], "Images/" . $uniqueFileName);

  } else if (isset($_GET["delete"])) {
    $controller->delete($_GET["delete"]);

  } else if (isset($_GET["edit"])) {
    $controller->viewUpdate($_GET["edit"]);

  } else if (isset($_POST["saveEdit"])) {
    // Get the file details
    $file = $_FILES["image"];
    $fileName = $file["name"];
    $fileTmpName = $file["tmp_name"];
    $fileError = $file["error"];

    // Define the destination folder
    $uploadDir = "images/";

    // Check if a new file was selected
    if ($fileTmpName !== "") {
        // Generate a unique file name
        $uniqueFileName = uniqid() . "_" . $fileName;

        // Move the uploaded file to the destination folder
        move_uploaded_file($fileTmpName, $uploadDir . $uniqueFileName);

        // Update the image path in the database
        $imagePath = "Images/" . $uniqueFileName;
    } else {
        // Keep the existing image path
        $imagePath = $x['image'];
    }

    // Update the record in the database
    $controller->update($_POST["id"], $_POST["title"], $_POST["description"], $_POST["category"], $imagePath);

  } else if (isset($_GET["view"])) {
    $controller->view($_GET["view"]);
  }
?>