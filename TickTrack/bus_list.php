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
						<li><a href="add_bus.php">Add Bus</a></li>
					</ul>
				</nav>
			</header>

				
		<div class="container">

<table class="table table-bordered table-hover">
    <thead>
     <tr>
        <th>Bus Id</th>
        <th>Bus Name</th>
        <th>Origin</th>
        <th>Destination</th>
        <th>Seats</th>
        <th>Type</th>
        <th>Date of Journey</th>
     </tr>
    </thead>
    <tbody>
<?php 
    $query = "select * from bus";
    $select_users = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($select_users)){
    $bus_id = $row['Id'];
    $bus_name = $row['Name'];
    $origin = $row['Origin'];                 
    $dest = $row['Destination'];
    $seats = $row['Seats'];
    $type = $row['Type'];
    $dateoj = $row['Date'];
    echo "<tr>";
        echo "<td>$bus_id</td>";
        echo "<td>$bus_name</td>";
        echo "<td>$origin</td>";
        echo "<td>$dest</td>";
        echo "<td>$seats</td>";
        echo "<td>$type</td>";
        echo "<td>$dateoj</td>";
        echo "<td><a href='bus_list.php?delete={$bus_id}'>Delete</a></td>";
    echo "</tr>";
    }           
?>
</table>
<?php 
if(isset($_GET['delete'])){
    $the_bus_id = $_GET['delete'];
    $query = "DELETE FROM bus WHERE Id = {$the_bus_id}";
    $delete_query = mysqli_query($connection, $query);
}
?>
			
			

		</div>
   
    </body>
</html>
