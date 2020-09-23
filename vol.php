



<?php
require_once("includes/header.php");
require_once("includes/navbar.php");

?>
<?php

$con = mysqli_connect('localhost','root','','rms');

if(!$con){
  die("Not connected.".mysqli_error());
}



?>

  <!--Navbar-->
  
  
                <img src="img/vol1.jpg" width="100%" height="900vh">
               <div class="vol">
                
                <div class="regbox">
              <div class="row">
                <div class=pt mt-4>
                <h1><center><b>Become a Volunteer</b></center> </h1>
                </div>
                <?php
   if (isset($_POST['submit'])) {

  
     $fname = $_POST['first'];
      $lname = $_POST['last'];
       $phn = $_POST['phn'];
        $email = $_POST['email'];
        $occupation = $_POST['occupation'];
         $institution = $_POST['institution'];
        $area = $_POST['area'];


   
    //$queram= "SELECT * FROM donate WHERE t_id = '$t_id'";
     //$connam=mysqli_query($con,$queram);
    

    
    $query="INSERT INTO volregs (fname,lname,phn,email,occupation,institution,area) VALUES ('$fname','$lname','$phn','$email','$occupation','$institution','$area')";
    $result= mysqli_query($con,$query);

    header("location: thanks.php");

    if ($area=="Dhaka") {
    $S_query= "INSERT INTO dhaka (fname,lname,phn,email,occupation,institution) VALUES ('$fname','$lname','$phn','$email','$occupation','$institution')";
      $res= mysqli_query($con,$S_query);
    }
    elseif ($area=="Chittagong") {
    $S_query= "INSERT INTO ctg (fname,lname,phn,email,occupation,institution) VALUES ('$fname','$lname','$phn','$email','$occupation','$institution')";
      $res= mysqli_query($con,$S_query);
    }
    elseif ($area=="Khulna") {
    $S_query= "INSERT INTO khulna (fname,lname,phn,email,occupation,institution) VALUES ('$fname','$lname','$phn','$email','$occupation','$institution')";
      $res= mysqli_query($con,$S_query);
    }
    elseif ($area=="Cumilla") {
    $S_query= "INSERT INTO cumilla (fname,lname,phn,email,occupation,institution) VALUES ('$fname','$lname','$phn','$email','$occupation','$institution')";
      $res= mysqli_query($con,$S_query);
    }
    elseif ($area=="Barishal") {
    $S_query= "INSERT INTO barishal (fname,lname,phn,email,occupation,institution) VALUES ('$fname','$lname','$phn','$email','$occupation','$institution')";
      $res= mysqli_query($con,$S_query);
    }
    else {
    $S_query= "INSERT INTO dinajpur (fname,lname,phn,email,occupation,institution) VALUES ('$fname','$lname','$phn','$email','$occupation','$institution')";
      $res= mysqli_query($con,$S_query);
    }


     if(!$result)
{
  die ("Not inserted.". mysqli_error());
}
    }

 
?>  
  <form action="vol.php" method="POST">
                  
  <div class="form-row">
    <div class="row">
    <div class="col">
        <label for="inputAddress">First Name</label>
      <input type="text" class="form-control" placeholder="First name" name="first" required="first" >
    </div>
    <div class="col">
        <label for="inputAddress">Last Name</label>
      <input type="text" class="form-control" placeholder="Last name" name="last" required="last" >
    </div>
  </div>
</div>

    <div class="form-group ">
      <label for="inputphone">Phone</label>
      <input type="text" class="form-control" placeholder="phone number" name="phn" required="phn" >
    </div>
    <div class="em">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email"required="email" >
    </div>
    <label for="inputOccupation">Occupation</label>
      <input type="text" class="form-control" placeholder="Occupation" name="occupation" required="occupation" >
      <label for="inputInstitute">Institution</label>
      <input type="text" class="form-control" placeholder="Institution" name="institution" required="institution" >
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
    <!--
      <label for="inputState">Area</label>
      <select id="inputState" class="form-control" name="area">
        <option selected>Choose...</option>
        <option>Dhaka</option>
        <option>Chittagong</option>
        <option>Rajshahi</option>
        <option>Cumilla</option>
     </select>
    -->
        
  
   
    
  
   <!--  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
       
      </label>
    </div>
  </div>
 -->
 <br>
 <div class=sub>
    <input  type="submit" class="btn btn-light" name="submit">
   </div>
  </form>


</div>
</div>
</div>

 
    