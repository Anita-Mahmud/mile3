
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












  
  
<img src="img/services-4.jpg" class="d-block w-100" alt="..."style="height:400px;">
<br>
<h1><center>DONATE</center></h1>
    <br>
        <p style="font-size: 20px;">
        Your thoughtful donation, of any amount or value can go a long way towards helping communities, families and individuals shape their lives in new and improved ways. From new cattle to new books, from improved sanitation to greater awareness, your donation is crucial to lives across Bangladesh.

 <br><br>

See below for different ways you can donate online, in person, as well as to our dedicated fundraising bank account.
<div class=do>  
<ol>
  <p style="font-size:35px"><b>BKASH</b></p><br>
  <div class="row">
    <div class="col-7">
    
      <div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">Please Fill Up the form below:</h5>
	
	
<?php
if (isset($_POST['submit'])) {
  

	  $tid = $_POST['tid'];
    $amount = $_POST['amount'];
   
    //$queram= "SELECT * FROM donate WHERE t_id = '$t_id'";
     //$connam=mysqli_query($con,$queram);
    
      
 
    
    $query="INSERT INTO donate (tran,amount) VALUES ('$tid','$amount')";
    $result= mysqli_query($con,$query);

    header("location: thankdo.php");
   
     if(!$result)
{
	die ("Not inserted.". mysqli_error());
}
    }

 
?>	
	
    <form action="donate.php" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput" >Transaction ID:</label>
    <input type="text" class="form-control" id="formGroupTrix" placeholder="Transaction ID" name="tid" required="tid">
  </div>
  <div class="form-group">
    <label for="formGroupAmount">Enter Donated Amount:</label>
    <input type="text" class="form-control" id="formGroupAmount" placeholder="Amount" name="amount" required="amount">
  </div>
   <br>
  <div class=sub>
    <input  type="submit" class="btn btn-light" name="submit">
   </div>
  
  
  
</form>


  </div>
</div>


  
              
  </div>


  
  
  <div class="col-lg-5">
    
  <img src="img/bkash.jpg" style="height:500px;width: 400px;">
  </div>
  
</div>

<p style="font-size:35px"><b>ROCKET</b></p><br>
  <div class="row">
    <div class="col-7">
    
      <div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">Please Fill Up the form below:</h5>

    <form action="donate.php" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput" >Transaction ID:</label>
    <input type="text" class="form-control" id="formGroupTrix" placeholder="Transaction ID" name="tid" required="tid">
  </div>
  <div class="form-group">
    <label for="formGroupAmount">Enter Donated Amount:</label>
    <input type="text" class="form-control" id="formGroupAmount" placeholder="Amount" name="amount" required="amount">
  </div>
   <br>
  <div class=sub>
    <input  type="submit" class="btn btn-light" name="submit">
   </div>
  
  
  
</form>
</div>
</div>
</div>


  
  
  <div class="col-lg-5">
    
  <img src="img/rocket.jpg" style="height:500px;width: 400px;">
  </div>
  
</div>

</ol> 





</div>

<!--footer-->
<?php
require_once("includes/footer.php");
 ?>

