<?php
include "include.php";

session_start();

if($_POST["Password"] == NULL)
{
$upd= "UPDATE user SET Fname='".$_POST["Fname"]."',Lname='".$_POST["Lname"]."',Security='".$_POST["Security"]."' WHERE Username='".$_SESSION['username']."'";

	
}
else
{
$pass=$_POST["Password"];

$upd= "UPDATE user SET Fname='".$_POST["Fname"]."',Lname='".$_POST["Lname"]."',Security='".$_POST["Security"]."',Password='$pass' WHERE Username='".$_SESSION['username']."'";

}
mysqli_query($connection, $upd);

	$_SESSION['updt'] = 'Profile updated successfully...';
	header('location: generic.php');
?>