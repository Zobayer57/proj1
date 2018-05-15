<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>History</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<style type="text/css">

input    {
width:375px;
display:block;
border: 1px solid #999;
height: 25px;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
input.button {
width:100px;
position:absolute;
right:20px;
bottom:20px;
background:#09C;
color:#fff;
font-family: Tahoma, Geneva, sans-serif;
height:30px;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
border: 1p solid #999;
}
input.button:hover {
background:#fff;
color:#09C;
}
form    {
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
margin:auto;
position:relative;
width:550px;
height:450px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: italic;
line-height: 24px;
font-weight: bold;
color: #000000;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}

input::-webkit-input-placeholder {
  color: 	#f00;
}
textarea#feedback {
width:375px;
height:150px;
}
textarea.message {
display:block;
}
h2{
	color:red;
}
h4
{
	color:white;
}
td{
	color:white;
}
		</style>
	</head>
	<body style="background:-webkit-linear-gradient(left top,BurlyWood,Chocolate,Darkkhaki,BlanchedAlmond,BurlyWood); background: linear-gradient(to bottom right,BurlyWood,CadetBlue,Darkkhaki,BlanchedAlmond,BurlyWood);">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">TickTrack</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="generic.php">Home</a></li>
					<!--	<li><a href="#book">Book Now</a></li>-->
						<li><a href="history1.php">Booking History</a></li>
						<li><a href="profile.php">View Profile</a></li>
					<!--	<li><a href="update.php">Update Profile</a></li>	-->
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
			</header>
			<div class="container">
			<?php
		session_start();

			if(isset($_SESSION['del']))
		{
			echo '<p class="message"> <font size="4" color="MediumMagenta"><center> <i>';
			echo $_SESSION['del'];
			echo $_SESSION['refund'];
			echo $_SESSION['mesg'];
			echo "</i></center></font></p>";
			unset($_SESSION['del']);
		}

		?>


			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<center><font size="35"><strong>Hello <?php echo $_SESSION['fname']. " ". $_SESSION['lname']?></font></strong></center>
						<br>
						<h3>Here's your booking history</h3>
					</header>
			</div>
<center>	<h2>Booking History</h2> </center>
<?php
include "include.php";
//$user=$_SESSION['user'];
//$Bus_id;
$sel="SELECT * FROM booking where user='".$_SESSION['username']."'" ;
$str= mysqli_query($connection, $sel);
$rows= mysqli_num_rows($str);
if($rows==0 )
{
	echo '<h3 style= "text-align:center;"> <font color="red">You have not booked any buses </font></h3>';
	echo "<br>";
}
else
{
	//echo '<h3 style= "text-align:center;"> <font color="red">Booking History </font></h3>';
echo '<table align="center" border=1 >
<tr>
<th> Booking ID</th>
<th> Purchased on</th>
<th> Bus id  </th>
<th> No of seats</th>
<th> Total fare </th>
<th> Bank </th>
<th> Payment method </th>
<th> Date of Journey </th>
<th> Cancel now </th>
<th> View Ticket</th>
</tr>';
while($row=mysqli_fetch_array($str))
{
	$Booking_id= $row['Booking_id'];
    $Date= $row['Date'];
	$Fare= $row['Total_fare'];
	$id= $row['Bus_id'];
	$req=$row['Seats_no'];
	echo "<tr>";
    echo "<td>".$row['Booking_id']."</td>";
	echo "<td>".$row['Date']."</td>";
	echo "<td>".$row['Bus_id']."</td>";
	echo "<td>".$row['Seats_no']."</td>";
	echo "<td>".$row['Total_fare']."</td>";
	echo "<td>".$row['Bank']."</td>";
	echo "<td>".$row['Payment_method']."</td>";
    echo "<td>".$row['Dep_date']."</td>";
    echo "<td><a href='history1.php?delete={$Booking_id}'>Cancel Booking</a></td>";
	echo "<td>";
	echo '<a href="view_ticket1.php?id='.$Booking_id.'">View Ticket</a>';
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
}
?>
        <?php 
if(isset($_GET['delete'])){
    $the_booking_id = $_GET['delete'];
    $query = "DELETE FROM booking WHERE Booking_id = {$the_booking_id}";
    $delete_query = mysqli_query($connection, $query);
if(!$delete_query){
    die("". mysqli_error($connection));
}else{
    echo "Cancellation succesfull! You will be refunded!";
}
}
?>
			</section>

<br>
<a href="#" class="image fit"><img src="images1/bus3.jpg" alt="" /></a>
</div>
		<!-- Footer --><footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u$(medium) 12u$(small)">
							<h3>Top Train Routes</h3>
							<ul class="alt">
								<li>DHK - PBT</li>
								<li>DHK - CTG</li>
								<li>DHK - RJS</li>
								<li>DHK - KHL</li>
							</ul>
						</section>
						<section class="4u 6u$(medium) 12u$(small)">
							<h3>Top Bus Routes</h3>
							<ul class="alt">
								<li>DHK - RNG</li>
								<li>DHK - CTG</li>
								<li>CTG - DHK</li>
								<li>DHK - SYL</li>
							</ul>
						</section>
					<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact Us</h3>
							<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
						<ul class="tabular">
								<li>
									<h3>Address</h3>
									Bangladesh University of Professionals
									<br>
      							<li>
									<h3>Mail</h3>
									<a href="#">zobayer10@gmail.com</a>
								</li>
							</ul>
						</section>
					
					</div>
					<ul class="copyright">
						<li>&copy; 2018 TickTrack. All rights reserved. Brought To You By NoobSquad</li>
					</ul>
				</div>
			</footer>
	</body>
</html>
