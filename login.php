<?php 
require_once '../controller/admin.controller.php';



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/form.css?=<?php time() ?>">
    
    <link rel="stylesheet" type="text/css" href="./css/style.css?=<?php time() ?>"><link src="./css/bootstrap.min.css">
    <link src="./css/bootstrap.css">

    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Hotel</title>
</head>

<body>
  <!--  require('inc/header.php'); -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Hotel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="addchambre.php">add chambre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Dashboard.php.html">Dashboard</a>
              </li>
             
             
			
              
              <li class="nav-item">
                <a class="nav-link " href="logout.php" >Loug Out</a>
              </li>
             
             
            </ul> 
          </div>
        </div>
      </nav>
    

	

    <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username" name="value" >
            </div>
            <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="password" name="value">
            </div>
            
            <input class="btn btn-success" type="button" name="" value="log in" >
         </div>


	<!--link to js--->
	<script type="text/javascript" src="js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>

</html>