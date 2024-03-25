<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Berita</title>
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
              <!-- Login -->
              <div class="me-5">
                <a>Hello, Admin!</a>
                <span class="material-symbols-outlined inline-span">
                    account_circle
                </span>
              </div>
            </div>
        </nav>
    </header>

    <!-- Main -->
    <main>
        <div class="container">
            <!-- Judul -->
            <h2 class="center">Tambah Berita</h2>
            <hr>

            <!-- Form -->
            <form class="mx-3" method="post" action="beritaAction.php" enctype="multipart/form-data">

                <!-- Id -->
                <div class="my-3">
                    <input class="form-control" type="text" placeholder="Id" name="id" required>
                </div>

                <!-- Judul -->
                <div class="my-3">
                    <input class="form-control" type="text" placeholder="Judul" name="title" required>
                </div>

                <!-- Kategori -->
                <select class="form-select my-3" name="category" required>
                    <option disabled selected>Pilih kategori berita</option>
                    <option value="Bencana">Bencana</option>
                    <option value="Olahraga">Olahraga</option>
                </select>

                <!-- Input file -->
                <div class="my-3">
                    <label for="formFile" class="form-label">Upload Image</label>
                    <input class="form-control" type="file" id="formFile" name="image" required>
                </div>

                <!-- Text -->
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>
                </div>

                <!-- Button -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-secondary" type="submit" name="saveInsert">
                        <span class="material-symbols-outlined inline-span">
                            done
                        </span>
                        Save
                    </button>
                </div>
            </form>
            
        </div>
    </main>
  </body>
</html>