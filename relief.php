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
                <h1><center><b>Relief</b></center> </h1>
                </div>
                <div>

                  <?php

 if(isset($_POST['submit']))
  
{
  
   
$type = $_POST['type'];
$amount = $_POST['amount'];
if ($type=="Money") {
  $query="INSERT INTO mon (amount) VALUES ('$amount')";
  }
 elseif ($type=="Rice") {
  $query="INSERT INTO rice (amount) VALUES ('$amount')";
  }
  elseif ($type=="Snacks") {
  $query="INSERT INTO snack (amount) VALUES ('$amount')";
  }
  elseif ($type=="Lentil") {
  $query="INSERT INTO len (amount) VALUES ('$amount')";
  }
  else {
  $query="INSERT INTO cloth (amount) VALUES ('$amount')";
  }
  


    $result= mysqli_query($con,$query);

    header("location: thanks.php");
   
     if(!$result)
{
  die ("Not inserted.". mysqli_error());
}
    }

 
?>  
  <form action="relief.php" method="POST">
   <div class="form-group">
    <label for="exampleFormControlSelect1">Type</label>
    <select class="form-control" id="exampleFormControlSelect1"  name="type" required="type">
      <option>Choose</option>
      <option>Money</option>
      <option>Rice</option>
      <option>Snacks</option>
      <option>Lentil</option>
      <option>Cloths</option>
      
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPeople">Amount</label>
    <input type="text" class="form-control" id="exampleInputPeople" placeholder="Amount" name="amount" required="amount">
  </div>
  
  <div class=sub>
    <input  type="submit" class="btn btn-light" name="submit">
   </div>
</form>
</div>
</div>
</div>
