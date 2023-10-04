<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ProjectShala</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="home.css">
</head>

<body>
  <nav class="navbar-section container-fluid bg-black text-white">
    <div class="navbar d-flex">
      <div class="left-container">
        <p>ProjectShala</p>
        <h1>Hi! User</h1>
      </div>
      <div class="right-container">
        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Delhi, India</p>
      </div>
     
      <form class="search-form" role="search">
        <input class="form-control me-2 my-search-bar" type="search" placeholder="Search" aria-label="Search">
      </form>
    </div>
  </nav>
  <div class="content-page container-fluid">

    <div class="department container-fluid">
      <div class="d-flex">
        <div class="department-heading">
          <h1>Department</h1>
        </div>
        <div class="departments d-flex text-white">
          <div class="department-name">
            <span>CSE</span>
          </div>
          <div class="department-name">
            <span>ECE</span>
          </div>
          <div class="department-name">
            <span>EEE</span>
          </div>
          <div class="department-name">
            <span>ME</span>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="row container"> -->
    <h1 class="text-white">Popular</h1>
    <div class="my-cards-section">

      <div class="card-section posts-section">
        <div class="card text-bg-dark">
          <img src="./images/satcom.jpg" class="card-img" alt="...">
          <div class="card-img-overlay card-overlay-width">
            <h5 class="card-title card-topic">Satcom(DSP)</h5>
            <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
            <p class="card-text card-rating"><small>⭐4.1</small></p>
          </div>
        </div>
      </div>
      <div class="card-section posts-section ">
        <div class="card text-bg-dark">
          <img src="./images/drone.avif" class="card-img" alt="..."
          >
          <div class="card-img-overlay card-overlay-width">
            <h5 class="card-title card-topic">Drone Surveillance</h5>
            <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
            <p class="card-text card-rating"><small>⭐4.3</small></p>
          </div>
        </div>
      </div>
      <!-- </div> -->
      <!-- <div class="row container"> -->
    </div>
    <br>
    <h1 class="text-white">Explore</h1>
    <div class="my-cards-section">

      <div class="card-section posts-section">
        <div class="card text-bg-dark">
          <img src="./images/lidar.png" class="card-img" alt="...">
          <div class="card-img-overlay card-overlay-width">
            <h5 class="card-title card-topic">LiDar</h5>
            <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
            <p class="card-text card-rating"><small>⭐4.8</small></p>
          </div>
        </div>
      </div>
      <div class="card-section posts-section ">
        <div class="card text-bg-dark">
          <img src="./images/face-detection.jpg" class="card-img" alt="...">
          <div class="card-img-overlay card-overlay-width">
            <h5 class="card-title card-topic">Face Detection</h5>
            <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
            <p class="card-text card-rating"><small>⭐4.2</small></p>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
  </div>
 
  <footer class="bg-white ">
    <div class="footer-icons row text-center">

      <div class="globe-i icon col">
        <i class="fa fa-globe" aria-hidden="true"></i>
      </div>
      <div class="search-i icon col">
        <i class="fa fa-search" aria-hidden="true"></i>

      </div>
      <div class="home-i icon col">
        <i class="fa fa-home" aria-hidden="true"></i>
      </div>
      <div class="user-i icon col">
        <i class="fa fa-user" aria-hidden="true"></i>
      </div>
    </div>

  </footer>
</body>

<!-- script for Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- SCRIPT FOR FONTAWESOME -->

<script src="https://kit.fontawesome.com/26504e4a1f.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</html>