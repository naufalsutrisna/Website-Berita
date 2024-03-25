<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
    <link rel="icon" href="Picture/Logo/Logo.jpeg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="form.css">
    <link rel="stylesheet" type="text/css" href="button.css">
  </head>
  <body>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <!-- Login From -->
    <div class="container"><br>
      <div class="row mt-5">
        <!-- Input -->
        <div class="col-md-1"></div>
        <div class="container loginForm p-5 col-md-5 border border-light round">
          <h4 class="mb-5">Welcome to Malanews</h4>
          <h2 class="mb-4">Login</h2>

          <!-- Form -->
          <form id="loginForm" method="post" action="auth.php">
            <!-- Username -->
            <div class="mb-3">
              <label for="email" class="form-label mb-3">Enter your email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            </div>

            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label mb-3">Enter your Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            </div>

            <!-- Error -->
            <?php 
              if (isset($_GET["error"])) {
                echo $_GET["error"];
              }
            ?>
            
            <!-- Login -->
            <div class="d-grid gap-2 mb-5">
              <button class="btn btn-lg btn-light buttonPrimary" type="submit" name="login">Login</button>
            </div>
          </form>

        </div>
        <div class="col-md-1"></div>

        <!-- Logo -->
        <div class="col-md-5 mt-5"><br><br>
          <img src="Picture/Logo/Medium.png" class="rounded mt-5" alt="Logo" width="376" height="140">
        </div>

      </div>
    </div>

  </body>
</html>