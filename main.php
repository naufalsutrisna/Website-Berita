<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Main</title>
    <link rel="icon" href="Picture/Logo/Logo.jpeg">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="content.css">
    <!-- Google Apis -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>

    <script> 
        $(function(){
            $("#header").load("header.html"); 
            $("#footer").load("footer.html"); 
        });
    </script> 
  </head>
  
  <body>
    <!-- Bootstrap -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
        crossorigin="anonymous">
    </script>
    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
      crossorigin="anonymous">
    </script>

    <!-- Navbar -->
    <header>
        <div id="header"></div>
    </header>

    <!-- Content -->
    <main>
      <br id="Home"><br><br><br>
      <div class="container">
      
        <!-- First Content -->
        <div class="container">
          <!-- Image -->
          <img class="rounded mx-auto d-block mb-5" src="Picture/Logo/Large.png" alt="Malanews" width="266" height="100">

          <!-- Text -->
          <div class="container">
            <div class="row">
              <div class="col-2"></div>
              <div class="col">
                <p class="lh-base">
                  Malanews adalah lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                  ullamco laboris nisi ut aliquip ex ea commodo consequat. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>
              </div>
              <div class="col-2"></div>
            </div>
          </div>
        </div>

        <!-- Second Content -->
        <div class="container mt-5 d-flex align-items-center" id="Bencana">
          <div class="flex-shrink-0">
            <h3>Bencana</h3>
          </div>
          <div class="flex-grow-1 ms-3">
            <hr class="bg-black border-2 border-top border-black">
          </div>
        </div>
        
        <?php 
          include "connection.php";

          $rs = $mysqli->query("SELECT * FROM news WHERE category='Bencana'");
          $rows = array();
      
          while($row = $rs->fetch_assoc()) { 
               $rows[] = $row;
          }

          foreach ($rows as $x) {
        ?>
        <div class="d-flex mt-4">
          <div class="flex-shrink-0 ms-2">
            <img class="rounded mx-auto d-block mb-5" src="<?php echo $x['image'] ?>" width="400" height="200">
          </div>
          <div class="flex-grow-1 ms-3 me-5">
            <p class="w500-22px">
              <a href="beritaAction.php?view=<?php echo $x['id'] ?>" class="link">
                <?php echo $x['title'] ?>
              </a>
            </p> 
            <p class="w500-14px">
              <?php echo $x['description'] ?>
            </p> 
          </div>
        </div>
        <?php }?>

        <!-- Third Content -->
        <div class="container mt-2 d-flex align-items-center" id="Olahraga">
          <div class="flex-shrink-0">
            <h3>Olahraga</h3>
          </div>
          <div class="flex-grow-1 ms-3">
            <hr class="bg-black border-2 border-top border-black">
          </div>
        </div>

        <?php 
          include "connection.php";

          $rs2 = $mysqli->query("SELECT * FROM news WHERE category='Olahraga'");
          $rows2 = array();
      
          while($row2 = $rs2->fetch_assoc()) { 
               $rows2[] = $row2;
          }

          foreach ($rows2 as $y) {
        ?>
        <div class="d-flex mt-4">
          <div class="flex-shrink-0 ms-2">
            <img class="rounded mx-auto d-block mb-5" src="<?php echo $y['image'] ?>" alt="Malanews" width="400" height="200">
          </div>
          <div class="flex-grow-1 ms-3 me-5">
            <p class="w500-22px">
              <a href="beritaAction.php?view=<?php echo $y['id'] ?>" class="link">
                <?php echo $y['title'] ?>
              </a>
            </p> 
            <p class="w500-14px">
              <?php echo $y['description'] ?>
            </p> 
          </div>
        </div>
        <?php }?>

      </div>
    </main>

    <!-- Footer -->
    <footer>
        <div id="footer"></div>
    </footer>
  </body>
</html>