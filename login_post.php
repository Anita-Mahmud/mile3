
<?php
session_start();

$con = mysqli_connect('localhost','root','','rms');

$email=$_POST['email'];
$pass=$_POST['pass'];

$queram= "SELECT COUNT(*) AS is_exists FROM volunteer WHERE email='$email' AND pass = '$pass'";
$result=mysqli_query($con,$queram);
$res=mysql_fetch_assoc($result);
if ($res[ 'is_exists']==0) {
	echo 
	$_SESSION['login_error']="Your email or password is incorrect";
	header("location: login.php");
}

?>








?>