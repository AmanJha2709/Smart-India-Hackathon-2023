<?php
  session_start();

  $error_message = (isset($_SESSION['error_message'])) ? $_SESSION['error_message'] : '';
  $success_message =(isset($_SESSION['success_message'])) ?$_SESSION['success_message'] : '';
 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Register Page</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />

     <link href="style.css" rel="stylesheet" type="text/css"  title="style.css">

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
           if($error_message){
              echo '<div class="alert alert-danger mb-0" role="alert">'
              .$error_message.
              '</div>';
             unset($_SESSION['error_message']);
          }
        ?>
      </div>
    </div>

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
      Welcome to Project Shala
    </h1>

    <h4 class="text-blue text-center font-weight-bold" style="font-size: 20px;">
      Register Now
    </h4>

    <div class="container">
      <br />

      <div class="col-lg-5 m-auto d-block">
        <form action="registration.php" method="post" onsubmit="return validation()" class="bg-light">
          <div class="form-group">

            
            <label for="name" class="font-weight-regular"> Name </label>
            <input
              type="text"
              name="name"
              class="form-control"
              id="name"
              autocomplete="off"
            />
            <span id="Name" class="text-danger font-weight-regular"> </span>
          </div>

          <div class="form-group">
            <label for="email" class="font-weight-regular"> Email </label>
            <input
              type="text"
              name="email"
              class="form-control"
              id="email"
              autocomplete="off"
            />
            <span id="emailids" class="text-danger font-weight-regular"> </span>
          </div>

          <div class="form-group">
            <label for="user" class="font-weight-regular"> Username </label>
            <input
              type="text"
              name="user"
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

          <div class="form-group">
            <label for="conpass" class="font-weight-regular"> Confirm Password </label>
            <input
              type="password"
              name="conpass"
              class="form-control"
              id="conpass"
              autocomplete="off"
            />
            <span id="confrmpass" class="text-danger font-weight-regular">
            </span>
          </div>

          <div class="form-group">
            <label for="mobile" class="font-weight-regular"> Mobile Number </label>
            <input
              type="text"
              name="mobile"
              class="form-control"
              id="mobileNumber"
              autocomplete="off"
            />
            <span id="mobileno" class="text-danger font-weight-regular"> </span>
          </div>

        
          <div class="form-group"> 
            
            <select class="form-select form-control" aria-label="Default select example">
            <option selected>Account Type</option>
            <option value="1">College/University</option>
            <option value="2">Student</option>
            <option value="3">Company</option>

            
          </select>
        </div>
         

          <span></span>

          <button type="submit" class="btn btn-success">Sign Up</button>
          <button type="reset" class="btn btn-danger">Reset</button>
          &emsp;&emsp;&emsp;Already have an account?
          <a href="loginform.php">Login</a>
        </form>

        <br /><br />
      </div>
    </div>

    <script src="./scripts/signup.js"></script>
  </body>
</html>