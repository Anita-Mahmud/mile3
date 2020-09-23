



<?php
require_once("includes/header.php");
?>
<?php

$con = mysqli_connect('localhost','root','','rms');

if(!$con){
  die("Not connected.".mysqli_error());
}



?>




<?php

 if(isset($_POST['submit']))
  
{
  if(!$email)
  
  {header("location:register.php");}  
    
$username = $_POST['name'];
$phn = $_POST['phn'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];


//$area = $_POST['area'];
$queram= "SELECT * FROM volunteer WHERE email = '$email'";
$connam=mysqli_query($con,$queram);


if($cpass!=$pass)
{
       echo "Password doesn't matched";}
  else
  {
    $query = "INSERT INTO volunteer(name,phn,email,pass) VALUES ('$username','$phn','$email','$pass')";

    $result = mysqli_query($con,$query);

     header("location:login.php");
    }



if(!$result)
{
  die ("Not inserted.". mysqli_error());
}

}
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
      
      <button class="btn btn-outline-success my-4 my-sm-2" type="submit"><a href="login.php">Login </a> </button>
   
    </form>
  
  </div>

</nav>
  
  
                <img src="img/vol1.jpg" height="850vh" width="100%">
               <div class="vol">
                
                <div class="regbox">
              <div class="row">
                <div class="pt" style="text-align: center;">
                <h1><center><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register</b></center></h1>
                </div>

               

  <form action="register.php" method="POST">
                  
  
   <div class="form-group">
    <label for="exampleInputname">Full Name</label>
    <input type="text" class="form-control" id="exampleInputname" placeholder="Full Name" name="name" required="name">
    
  </div>
    <div class="form-group ">
      <label for="inputphone">Phone</label>
      <input type="text" class="form-control" placeholder="phone number" name="phn" required="phn" >
    </div>
    <div class="em">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email"required="email" >
    </div>
    <div class="form-group ">
      <label for="inputpass">Password</label>
      <input type="password" class="form-control" placeholder="Password" name="pass" required="pass" >
    </div>
    <div class="form-group ">
      <label for="inputcpass">Confirm Password</label>
      <input type="password" class="form-control" placeholder="Confirm Password" name="cpass" required="cpass" >
    </div>
    
    
 <br>
 <div class=sub>
    <input  type="submit" class="btn btn-light" name="submit">
   </div>
  </form>


</div>
</div>
</div>
<?php
require_once("includes/footer.php");
?>
 
    