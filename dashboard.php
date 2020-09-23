<?php
session_start();
require_once("includes/header.php");

$con = mysqli_connect('localhost','root','','rms');
if (!isset($_SESSION['login_success'])) {
  # code...

  header("location: login.php");
}




?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
<img src="img/bird.png"style="width:100px;height:96px;">
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
        <li class="nav-item">
        <a class="nav-link" href="index.php#learn">Service</a>
      </li>
      <li class="nav-item">
        <a href="about.php" class="nav-link">About</a></li>
      <!--
      <li class="nav-item">
        <a class="nav-link" href="#learn">Volunteer</a>
      </li>
    -->
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      
      
      
    </ul>
      
    <form class="form-inline my-2 my-lg-0">
      
      <button class="btn btn-outline-success my-4 my-sm-2" type="submit"><a href="index.php">Logout</a></button>
   
    </form>
  </div>

</nav>

<div class="card text-center">

  <div class="card bg-light">

    <h1><center><b>Dashboard</b></center></h1>
  </div>
  <div class="card-body">
    
    <h2 class="card-title"><b> Welcome</b> </h2>
    <br><h3>
    <?php
     echo $_SESSION['login_user'];
    ?>
    </h3>
    
    <center>
      
    <div class="card w-50">
      <div class="card bg-secondary text-white">
  <div class="card-body">
    <div class="container">
      <div class="row">
    <div class="col-lg-6">
  <img src="img/hand.png"style="width:85%;height:250px;" >
  </div>
  
     <div class="col-lg-6">
      <h5 class="card-body" style="font-weight: bold; font-size: 50px"><b>&nbsp;</b></h5>
    <h5 class="card-body" style="font-weight: bold; font-size: 50px"><b>RELIEF</b></h5>
   
    <a href="relief.php" class="btn btn-light">Button</a>
  </div>

</div>
</div>
</div>
</div>
</div>

<div class="card w-50">
      <div class="card bg-dark text-white">
  <div class="card-body">
    <div class="container">
      <div class="row">
    <div class="col-lg-6">
  <img src="img/log1.jpg"style="width:85%;height:250px;" >
  </div>
  
     <div class="col-lg-6">
      <h5 class="card-body" style="font-weight: bold; font-size: 50px"><b>&nbsp;</b></h5>
    <h5 class="card-body" style="font-weight: bold; font-size: 50px"><b>PLACE</b></h5>
   
    <a href="place.php" class="btn btn-light">Button</a>
  </div>
</div>
</div>
</div>
</div>
</div>
  </center> 
    
  </div>
  
</div>

<?php
require_once("includes/footer.php");


?>
