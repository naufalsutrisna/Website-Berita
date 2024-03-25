<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Berita <?php echo $x['title']?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
  </head>
  
  <body>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- Header -->
    <header>

    </header>

    <!-- Main -->
    <main>
        <div class="container">
            <h2 class="center"><?php echo $x['title']?></h2>
            <hr>

            <!-- Content -->
            <img src="<?php echo $x['image']?>" class="rounded mx-auto d-block" width="600px" height="400px">
            <hr>

            <p><?php echo $x['description']?></p>
        </div>
    </main>
  </body>
</html>