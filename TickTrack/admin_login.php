<?php
include "include.php";
?>
<?php
session_start();
?>
<?php
if(isset($_POST['login'])){
/*    echo "found";
}else{
    die("QUERY FAILED" . mysqli_error($connection));*/
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    $query = "SELECT * FROM admin WHERE Username = '{$username}'";
    $select_user_query = mysqli_query($connection, $query);
    while($row = mysqli_fetch_array($select_user_query)){
        $db_id = $row['UserID'];
        $db_username = $row['Username'];
        $db_password = $row['Password'];
        $db_fname = $row['Fname'];
        $db_lname = $row['Lname'];
    }
    if($username !== $db_username && $password !== $db_password){
        header("Location: admin.php");
    }else if($username == $db_username && $password == $db_password){
        $_SESSION['username'] = $db_username;
        $_SESSION['fname'] = $db_fname;
        $_SESSION['lname'] = $db_lname;
        
        
        header("Location: admin_page.php");
    }else{
        header("Location: admin.php");
    }

}


?>
