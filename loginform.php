<?php
  session_start();
  
  $error_message = (isset($_SESSION['error_message'])) ? $_SESSION['error_message'] : '';
  $success_message =(isset($_SESSION['success_message'])) ?$_SESSION['success_message'] : '';
  
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
<div class="row">
        <div class="col-md-12">
          <?php
            if($success_message){
                echo '<div class="alert alert-success mb-0 " role="alert">'
                .$success_message.
                '</div>';
                unset($_SESSION['success_message']);
            }
          ?>
        </div>
    </div>


    <h1
      class="text-green text-center font-weight-bold"
      style="font-size: 40px;"
    >
      Welcome To Project Shala
    </h1>

    <h4 class="text-blue text-center font-weight-bold" style="font-size: 20px;">
      Login Now
    </h4>

    <div class="container">
      <br />

      <div class="col-lg-5 m-auto d-block">
        <form action="login.php" method="post" onsubmit="return validation()" class="bg-light">
          <div class="form-group">
            <label for="email" class="font-weight-regular"> Username/Email </label>
            <input
              type="text"
              name="email"
              class="form-control"
              id="user"
              autocomplete="off"
            />
            <span id="username" class="text-danger font-weight-regular"> </span>
          </div>

          <div class="form-group">
            <label for="pass" class="font-weight-regular"> Password </label>
            <input
              type="password"
              name="pass"
              class="form-control"
              id="pass"
              autocomplete="off"
            />
            <span id="passwords" class="text-danger font-weight-regular">
            </span>
          </div>

          <button type="submit" class="btn btn-success">Log in</button>
          &emsp;&emsp;&emsp;&emsp; Did not have an account?
          <a href="index.php">SignUp</a>
        </form>

        <br /><br />
      </div>
    </div>
    <script src="./scripts/login.js"></script>
  </body>
</html>