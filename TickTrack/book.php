<?php
include "include.php";

session_start();
$query="INSERT INTO booking (user,Bus_id,Seats_no,Total_fare,Bank,Payment_method,Dep_date) VALUES('".$_SESSION['username']."','".$_SESSION['Bus_id']."','".$_SESSION['Seats_no']."','".$_SESSION['Total_fare']."','".$_POST['Bank']."','".$_POST['Payment_method']."','".$_SESSION['Dep_date']."')";
$req=$_SESSION['Seats_no'];
$id = $_SESSION['Bus_id'];
$dateoj = $_SESSION['Dep_date'];

$upd= "UPDATE bus SET seats=(seats-$req) WHERE Id=$id";

// insert into booking
// train setas decrease

$book_seat = mysqli_query($connection, $query);
if(!$book_seat){
    die("Query Failed". mysqli_error($connection));
}
$update_query = mysqli_query($connection, $upd);
if(!$update_query){
    die("Query Failed". mysqli_error($connection));
}
//echo "registered succesfully";
	//$_SESSION['user']=$_POST["Username"];
	$_SESSION['pay'] = 'Payment successful...';
	header('location: generic.php');
//echo '<script language="javascript">document.location.href="web_home.php"</script>';
?>