<?php
include "include.php";

$pass=$_POST["Password"];
$sel="SELECT * FROM user where Email='".$_POST["Email"]."'";

$res=mysqli_query($connection, $sel);
if(!$res){
    die("QUERY FAILED". mysqli_error($connection));
}
if(mysqli_num_rows($res) == 0)
{
	$mail=$_POST["Email"];
if(empty($mail)==false)
{

$query="INSERT INTO user(Fname,Lname,Email,Username,Password,Security)VALUES('".$_POST['Fname']."','".$_POST['Lname']."','".$_POST['Email']."','".$_POST['Username']."','$pass','".$_POST['Security']."')";

$insert_query = mysqli_query($connection, $query);
if(!$insert_query){
    die("QUERY FAILED". mysqli_error($connection));
}
session_start();
	$_SESSION['reg'] = 'Registered succesfully...Login now!!';
	header('location: index4.php');
}
	else
{
session_start();
	$_SESSION['reg_error'] = 'Invalid email!!';
	header('location: index4.php');
}
}
else
{

	session_start();
	$_SESSION['reg_error'] = 'Email registered already!!';
	header('location: index4.php');
}
?>