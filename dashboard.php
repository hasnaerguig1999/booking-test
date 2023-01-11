
<?php
require_once '../Controller/rooms.controller.php'


?>



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
                <a class="nav-link active" aria-current="page" href="addroom.php">add room</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php.html">Dashboard</a>
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
    <div class="admin">
      <center>
      <button class="btn btn-primary.text-white " ><a href="addroom.php">add room</a></button>
</center>
    </div>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">room_id</th>
      <th scope="col">room_type</th>
      <th scope="col">room_price</th>
      <th scope="col">room_image</th>
      <th scope="col">available</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach( $new_rooms as $room){
      
    
    ?>
    
    
  
    <tr>
      <form action="" method="post">
      <input type="hidden" name="room_id" value="<?php echo $room['room_id'] ?>">
     
      <th scope="row"><?php echo $room['room_id'] ?></th>
      <td><?php echo $room['room_type'] ?></td>
      <td><?php echo $room['room_price'] ?></td>
      <td><?php echo $room['room_image'] ?></td>
      
      <td><?php echo $room['reservation'] ?></td>
      <td>
      <button  type="submit" name="update" class="btn btn-primary "><a style="color:powderblue;" href="updateroom.php?id=<?php echo $room['room_id'] ?>">update</a></button>
      <button type="submit" name="delete" class="btn btn-danger">delete</button>
    </td>
   
      </form>
      
      
      
    </tr>
    <?php
   
   


    }
    ?>
  </tbody>
</table>

	

	<!--link to js--->
	<script type="text/javascript" src="js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>