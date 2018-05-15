<?php include "include.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User List</title>
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
						<li><a href="bus_list.php">Buses</a></li>
					</ul>
				</nav>
			</header>

				
		<div class="container">
<table class="table table-bordered table-hover">
    <thead>
     <tr>
        <th>User Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Joined on</th>
     </tr>
    </thead>
    <tbody>
<?php 
    $query = "select * from user";
    $select_users = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($select_users)){
    $user_id = $row['UserID'];
    $firstname = $row['Fname'];
    $lastname = $row['Lname'];                 
    $email = $row['Email'];
    $user_name = $row['Username'];
    $join_date = $row['Timestamp'];
    echo "<tr>";
        echo "<td>$user_id</td>";
        echo "<td>$firstname</td>";
        echo "<td>$lastname</td>";
        echo "<td>$email</td>";
        echo "<td>$user_name</td>";
        echo "<td>$join_date</td>";
        echo "<td><a href='user_list.php?delete={$user_id}'>Delete</a></td>";
    echo "</tr>";
    }           
?>
</table>
<?php 
if(isset($_GET['delete'])){
    $the_user_id = $_GET['delete'];
    $query = "DELETE FROM user WHERE UserID = {$the_user_id}";
    $delete_query = mysqli_query($connection, $query);
}
?>
		</div> 
    </body>
</html>
