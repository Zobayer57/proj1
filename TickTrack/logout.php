<?php
session_start();
unset($_SESSION['username']);
	$_SESSION['msg'] = 'Logged out succesfully';
//echo '<script language="javascript">document.location.href="home.php"</script>';
header('Location: index4.php');
?>