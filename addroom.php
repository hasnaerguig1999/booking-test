<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
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
                <a class="nav-link active" aria-current="page" href="addroom.php">add chambre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php.php">Dashboard</a>
              </li>
             
             
			
              
              <li class="nav-item">
                <a class="nav-link " href="logout.php" >Loug Out</a>
              </li>
             
             
            </ul> 
          </div>
        </div>
      </nav>
      <section class="showcase-area" id="showcase">
        <div class="showcase-container">
            <h1 class="main-title" id="home">the perfect base for you</h1>
            <p> the best hotel booking</p>
            <a href="dashboard.php" class="btn btn-primary">Dashboard</a>
        </div>
    </section>
    
            <div class="add">
                <h2 style="color:white"> fill room Info</h2>
            <div class="d-flex justify-content-center">
            <?php
     require '../controller/rooms.controller.php';
?>
            <form class="col-4" action="" method="post" autocomplete="off">
            <div class="container">
        <label >Type de chambre:</label><br>
        <select name="room_type"  id="room_type" onchange="updateForm()"><option value=""></option>
          
          <option value="single" >Lit single</option>
          <option value="double" >Lit double</option>
          <option value="suite">Suite</option>
        </select><br>
        <div id="suite_type_section" style="display: none;">
        <label >Type de suite:</label><br>
            <select name="suite_type">
              <option></option>
              <option value="standard">Standard</option>
              <option value="junior">Junior</option>
              <option value="presidential">Présidentielle</option>
              <option value="penthouse">Penthouse</option>
              <option value="honeymoon">Lune de miel</option>
              <option value="bridal">Mariage</option>
            </select><br>
          </div>
              <label for="username" style="color:dark"> room price </label>
              <input class="form-control"  type="text" name="room_price" id = "username"   value=""> 
              
              
              <label class="form-label" style="color:dark" for="password">room image</label>
              <input class="form-control"  type="file" name="room_image" id = "password"   value=""> 

              
<br>
               <button class="btn btn-primary" type="submit" name="add">add room</button>
            </form>
            </div>
            </div>
        
		</div>
	</section>


	

	<!--link to js--->
	<script type="text/javascript" src="./js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>

</html>