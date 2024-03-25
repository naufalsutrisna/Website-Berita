<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin</title>
    <link rel="icon" href="Picture/Logo/Logo.jpeg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="button.css">
    <!-- Google Apis -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>
  
  <body>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- Header -->
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
          <div class="container-fluid">
              <!-- Logo -->
              <div class="mx-5">
                <img src="Picture/Logo/Small.png" alt="MALANEWS" width="200" height="41">
              </div>

              <form class="me-5" method="post" action="auth.php">
                <button class="btn btn-light btn-outline-dark" type="submit" name="logout">Logout</button>
              </form>
          </div>
        </nav>
    </header>

    <!-- Main -->
    <main>
      <br><br><br>
      <div class="container mt-5">
        <h2>Daftar Berita</h2>
        <hr class="shadow-sm">

        <!-- Tambah Berita -->
        <form>
          <a href="beritaAction.php?insert=?" class="btn btn-primary my-3">
            <span class="material-symbols-outlined inline-span">
              add
            </span>
            Add
          </a>
        </form>

        <!-- Table -->
        <table class="table">
          <thead>
            <tr>
              <th scope="col-1">No</th>
              <th scope="col-6">Judul Berita</th>
              <th scope="col-2">Kategori Berita</th>
              <th scope="col-3">Aksi</th>
            </tr>
          </thead>
          <tbody>

            <!-- Loop data -->
            <?php 
            include "connection.php";

            $rs = $mysqli->query("SELECT * FROM news");
            $rows = array();
      
            while($row = $rs->fetch_assoc()) { 
              $rows[] = $row;
            }

            $num = 1;
            foreach ($rows as $x) {
            ?>

            <tr>
              <th scope="col-1"><?php echo $num?></th>
              <td scope="col-6"><?php echo $x['title'] ?></td>
              <td scope="col-2"><?php echo $x['category'] ?></td>
              <td scope="col-3">
                <a href="beritaAction.php?view=<?php echo $x['id']?>" class="btn btn-secondary">
                  <span class="material-symbols-outlined inline-span">
                    visibility
                  </span>
                  View
                </a>

                <a href="beritaAction.php?edit=<?php echo $x['id']?>" class="btn btn-success">
                  <span class="material-symbols-outlined inline-span">
                    edit
                  </span>
                  Edit
                </a>

                <a href="beritaAction.php?delete=<?php echo $x['id']?>" class="btn btn-danger">
                  <span class="material-symbols-outlined inline-span">
                    delete
                  </span>
                  Delete
                </a>
              </td>
            </tr>
            
            <?php 
              $num++;
            }?>

          </tbody>
        </table>

      </div>
    </main>
  </body>
</html>