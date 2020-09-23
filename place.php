<?php

require_once("includes/header.php");

$con = mysqli_connect('localhost','root','','rms');
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
<div class="vol">
                <img src="img/vol1.jpg" height="550vh" width="100%">
                <div class="regbox">
              
                <div class="pt">
                <h1><center><b>Place</b></center> </h1>
                </div>
                <div>

                  <?php

 if(isset($_POST['submit']))
  
{
  
   
  $area = $_POST['area'];
$people = $_POST['people'];
if ($area=="Dhaka") {
  $query="INSERT INTO p_d (area,people) VALUES ('$area','$people')";
  }
 elseif ($area=="Chittagong") {
  $query="INSERT INTO p_ctg (area,people) VALUES ('$area','$people')";
  }
  elseif ($area=="Khulna") {
  $query="INSERT INTO p_khu (area,people) VALUES ('$area','$people')";
  }
  elseif ($area=="Cumilla") {
  $query="INSERT INTO p_cm (area,people) VALUES ('$area','$people')";
  }
  elseif ($area=="Barishal") {
  $query="INSERT INTO p_bari (area,people) VALUES ('$area','$people')";
  }
  else {
  $query="INSERT INTO p_dnj (area,people) VALUES ('$area','$people')";
  }


    $result= mysqli_query($con,$query);

    header("location: thanks.php");
   
     if(!$result)
{
  die ("Not inserted.". mysqli_error());
}
    }

 
?>  
  <form action="place.php" method="POST">
   <div class="form-group">
    <label for="exampleFormControlSelect1">Area</label>
    <select class="form-control" id="exampleFormControlSelect1"  name="area" required="area">
      <option>Choose</option>
      <option>Dhaka</option>
      <option>Chittagong</option>
      <option>Khulna</option>
      <option>Cumilla</option>
      <option>Barishal</option>
      <option>Dinajpur</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPeople">Affected People</label>
    <input type="text" class="form-control" id="exampleInputPeople" placeholder="Affected People" name="people" required="people">
  </div>
  
  <div class=sub>
    <input  type="submit" class="btn btn-light" name="submit">
   </div>
</form>
</div>
</div>
</div>