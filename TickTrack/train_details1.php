<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Bookings</title>
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
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--<style >
		body {
				background: #7f9b4e url(images1/bus3.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
		</style>-->
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

	/*	echo '<h3 style="text-align:left;"> <font color="red"> <i> Hello ';
		echo $_SESSION['user'];
		echo "</i> </font>";
		echo '</h3>';*/
		?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<center><font size="35"><strong>Hello <?php echo $_SESSION['fname']. " ". $_SESSION['lname']?></font></strong></center>
						<br>
						<h3>Here's your options</h3>
					</header>

			</section>


				<!--	<a href="#" class="image fit"><img src="images1/bus3.jpg" alt="" /></a>-->
			<!--		<p>Vis accumsan feugiat adipiscing nisl amet adipiscing accumsan blandit accumsan sapien blandit ac amet faucibus aliquet placerat commodo. Interdum ante aliquet commodo accumsan vis phasellus adipiscing. Ornare a in lacinia. Vestibulum accumsan ac metus massa tempor. Accumsan in lacinia ornare massa amet. Ac interdum ac non praesent. Cubilia lacinia interdum massa faucibus blandit nullam. Accumsan phasellus nunc integer. Accumsan euismod nunc adipiscing lacinia erat ut sit. Arcu amet. Id massa aliquet arcu accumsan lorem amet accumsan.</p>
					<p>Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia adipiscing placerat lorem turpis at. Aliquet lorem porttitor interdum. Amet lacus. Aliquam lobortis faucibus blandit ac phasellus. In amet magna non interdum volutpat porttitor metus a ante ac neque. Nisi turpis. Commodo col. Interdum adipiscing mollis ut aliquam id ante adipiscing commodo integer arcu amet Ac interdum ac non praesent. Cubilia lacinia interdum massa faucibus blandit nullam. Accumsan phasellus nunc integer. Accumsan euismod nunc adipiscing lacinia erat ut sit. Arcu amet. Id massa aliquet arcu accumsan lorem amet accumsan commodo odio cubilia ac eu interdum placerat placerat arcu commodo lobortis adipiscing semper ornare pellentesque.</p>
					<p>Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia adipiscing placerat lorem turpis at. Aliquet lorem porttitor interdum. Amet lacus. Aliquam lobortis faucibus blandit ac phasellus. In amet magna non interdum volutpat porttitor metus a ante ac neque. Nisi turpis. Commodo col. Interdum adipiscing mollis ut aliquam id ante adipiscing commodo integer arcu amet blandit adipiscing arcu ante.</p>

-->				</div>

<?php
include "include.php";
$req=$_POST["Seats"];
$dateoj=$_POST["Date"];                           
$Bus_id;                            
$origin = $_POST['Origin'];
$destination = $_POST['Destination'];
//$date = $_POST['Date'];
$seats=$_POST["Seats"];
$Bus_id;
$query = "SELECT * FROM train where Origin='{$origin}' and Destination='{$destination}' and Date='{$dateoj}'" ;
$select_vehicle_query = mysqli_query($connection, $query);
$rows= mysqli_num_rows($select_vehicle_query) ;
if($rows==0)
{
//	header('Refresh:5; url=generic.php');

	echo '<h3 style= "text-align:center;"> <font color="red">No available Trains </font></h3>';
	echo "<br>";
//	echo '<p style= "text-align:center">Redirecting to the home page in 5 seconds</p>';
}
else
{

	echo '<h3 style= "text-align:center;"> <font color="red"><center>Available Trains </center></font></h3>';
echo '<table align="center" border=1 >
<tr>
<th> Id </th>
<th> Name of the Train</th>

<th> Origin </th>
<th> Destination </th>
<th> Date of journey</th>
<th> Departure time </th>
<th> Arrival time </th> 
<th> Fare </th>
<th> Book </th>
</tr>';
while($row = mysqli_fetch_array($select_vehicle_query)){
	$Train_id = $row['Id'];
	$Total_fare= $row['Fare'] * $req;
	//echo $Train_id;
	echo "<tr>";

	echo "<td>".$row['Id']."</td>";
	echo "<td>".$row['Name']."</td>";

	echo "<td>".$row['Origin']."</td>";
	echo "<td>".$row['Destination']."</td>";
	echo "<td>".$row['Date']."</td>";
	echo "<td>".$row['Departure_time']."</td>";
    echo "<td>".$row['Arrival_time']."</td>";

    echo "<td>".$row['Fare']."</td>";
	/*echo
	'<td>  <form action="payment.php" method="POST" >
	<input name="Bus_id" type="hidden" value= "<?php echo $Bus_id; ?>" >
	<input name="Seats_no" type="hidden" value="<?php echo $Req; ?>" >
	<input class="btn btn-primary" type="submit" value="Book"  />
	</td>';*/
	echo "<td>";
//	echo "$req";
	echo '<a href="payment1.php?Seats_no='.$req.'& Train_id='.$Train_id.'& Total_fare='.$Total_fare.'& Date='.$dateoj.'">Book Now</a>';
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
}
?>
<br>

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
									<a href="#">mahibarnob2k14@gmail.com</a>
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
