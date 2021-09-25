<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming_Droid | Home</title>
      <!-- Favicons -->
  <link href="./assets/img/logo.png" rel="icon" />
  <!-- <link href="./assets/img/logo.png" rel="apple-touch-icon"> -->
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <!-- Vendor CSS Files -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- <link href="assets/aos/aos.css" rel="stylesheet"> -->
  <link href="assets/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/glightbox/css/glightbox.min.css" rel="stylesheet">
  
  
  <link rel="stylesheet" href="./styles.css" /> 
  <link rel="stylesheet" href="./style.css" />
</head>
<body>
<style media="screen">
    #loader{
      display: none;
      height: 100vh;
      width: 100%;
      background: white;
      position: fixed;
      z-index: 1000;
    background-color: rgba(255,255,255,0.7);
    }
      #loading {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    /* position: fixed; */
    margin-top: 55%;
    z-index: 1;
    /* left: 35%; */
    /* align-content: center; */
    /* position: absolute; */
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
    }

    @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
    }
    @-webkit-keyframes spin {
      from {-webkit-transform:rotate(0deg);}
      to {-webkit-transform:rotate(360deg);}
    }
</style>
	<div id="loader">
		<center><p id="loading"></p></center>
	</div>
    <!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top">              
    <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="">Programming_Droid</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="subscribe.php" tabindex="-1" aria-disabled="true">Subscribe</a>
        </li>
      </ul>
    </div>
</nav>