<?php
session_start();

$con = mysqli_connect('localhost','root','','rms');

if(!$con){
  die("Not connected.".mysqli_error());
}



?>
<?php

 if(isset($_POST['submit']))
  
{
  
   
$username = $_POST['email'];
$pass = $_POST['pass'];

$queram= "SELECT * FROM volunteer WHERE email='$username' AND pass = '$pass'";
$connam=mysqli_query($con,$queram);
  
  if(mysqli_num_rows($connam) >0)
      {
       $_SESSION['login_success']=true;
       $_SESSION['login_user']=$username;
       header("location:dashboard.php");
    }
    
    else
  {
  
     echo "<script>
    alert('Wrong Password Or Username ');
    </script>";
    header("location:login.php");
    }
}
    
  
  
  ?>



<?php
require_once("includes/header.php");
?>

  <!--Navbar-->
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
      <li class="nav-item "><a href="donate.php" class="btn">Donate</a></li>
      
      
    </ul>
    <!--

      <form class="form-inline my-2 my-lg-0">
      
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="register.php">Register</a></button>
    </form>
    -->
    <form class="form-inline my-4 my-lg-2">
      
      <button class="btn btn-outline-success my-4 my-sm-2" type="submit"><a href="register.php">Register </a> </button>
   
    </form>
  
  </div>

</nav>
  
  
                
               <div class="vol">
                <img src="img/vol1.jpg" height="550vh" width="100%">
                <div class="regbox">
              
                <div class="pt">
                <h1><center><b>Log In</b></center> </h1>
                </div>
                <div>

                  <?php

 if(isset($_POST['submit']))
  
{
  
   
  $username = $_POST['email'];
$pass = $_POST['pass'];

$queram= "SELECT * FROM volunteer WHERE email='$username' AND pass = '$pass'";
$connam=mysqli_query($con,$queram);
  
  if(mysqli_num_rows($connam) >0)
      {
       header("location:dashboard.php");
    }
    
    else
  {
  
     echo "<script>
    alert('Wrong Password Or Username ');
    </script>";
    header("location:login.php");
    }
}
    
  
  
  ?>
               <form action="login.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Username" name="email" required="email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" required="pass">
  </div>
  
  <div class=sub>
    <input  type="submit" class="btn btn-light" name="submit">
   </div>
</form>
</div>
</div>
</div>


    
    