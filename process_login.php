<?php 
//$_SESSION['email'] = $_POST['email'];

if(!isset($_POST['email']) || empty($_POST['password']) ||  empty($_POST['email']))
{
require('wrong_login.php');
exit;
}
else
{
	
$email=$_POST['email'];
$email = trim($email);
$email = strtolower("$email");

$password=$_POST['password']; 
$password = trim($password);
$password = strtolower("$password");

}
?>

<?php
include('./connect.php');

$check_login = mysqli_query($db, "select * from userdetails where email='$email' and password='$password'");
if (!$check_login)
{
echo '...Error 1. Could not execute query';
exit;
} 
if (mysqli_num_rows($check_login)!=1)
{
require('wrong_login.php');
exit;
}



?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
      <title>Login Successful - XYZ Airline Flight Schedule Portal</title>

</head>
   
<body background="">  
<br />
<div align="center" style="color:#090;">
<h3><u>You have successfully logged in!</u></h3>
<a href="index.html"><button type="button" class="btn btn-custom" style="background-color:#060; font-weight:bold; color:#FFF;">Logout</button></a>
</div>
<div align="center">

       
</div>
</body>
</html>                                                
