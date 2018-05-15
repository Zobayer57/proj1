<?php include "include.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bus List</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css1/style.css" />
		<script src="js1/modernizr.custom.63321.js"></script>
       	<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>

		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
			}
			.container > header h1,
			.container > header h2 {
				color: black;

				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
			a {
    color: black;
}
h1 {
    color:black;
}
		</style>
    </head>
    <body >
    <header id="header">
				<h1><a href="index.php">TickTrack</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="admin_page.php">Admin</a></li>
					<!--	<li><a href="admin1.php">Admin</a></li> -->
						<li><a href="user_list.php">Users</a></li>
						<li><a href="bus_list.php">Buses</a></li>
						
					</ul>
				</nav>
			</header>

				
		<div class="container">

<?php 
    if(isset($_POST['add_bus'])){
        $bus_name = $_POST['Name'];
        $origin = $_POST['Origin'];
        $dest = $_POST['Destination'];
        $seats = $_POST['Seats'];
        $arr_time = $_POST['Arrival_time'];
        $dep_time = $_POST['Departure_time'];
        $type = $_POST['Type'];
        $fare = $_POST['Fare'];
        $dateoj = $_POST['Date'];
        $query = "INSERT INTO bus(Name, Origin, Destination, Seats, Arrival_time, Departure_time, Type, Fare, Date)";
        $query .= "VALUES('{$bus_name}','{$origin}', '{$dest}', {$seats}, '{$arr_time}', '{$dep_time}', '{$type}', '{$fare}', '{$dateoj}')";
        $add_bus_query = mysqli_query($connection, $query);
        
    }
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Bus name</label>
        <input type="text" class="form-control" name="Name">
    </div>
    <div class="form-group">
        <label for="post_category">Origin</label>
        <input type="text" class="form-control" name="Origin">
    </div>
    <div class="form-group">
        <label for="title">Destination</label>
        <input type="text" class="form-control" name="Destination">
    </div>
    <div class="form-group">
        <label for="post_status">Seats</label>
        <input type="text" class="form-control" name="Seats">
    </div>
    <div class="form-group">
        <label for="post_tags">Departure Time</label>
        <input type="text" class="form-control" name="Departure_time">
    </div>
    <div class="form-group">
        <label for="post_tags">Arrival Time</label>
        <input type="text" class="form-control" name="Arrival_time">
    </div>
        <div class="form-group">
        <label for="post_tags">Type</label>
        <input type="text" class="form-control" name="Type">
    </div>
        <div class="form-group">
        <label for="post_tags">Fare</label>
        <input type="text" class="form-control" name="Fare">
    </div>
        <div class="form-group">
        <label for="post_tags">Date of Journey</label>
        <input type="text" class="form-control" name="Date" placeholder="yyyy-mm-dd">
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="add_bus" value="Add Bus">
    </div>
</form>
		</div>
    </body>
</html>
