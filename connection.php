<?php
$host ='localhost';  // specify host 
$db   = 'employe_db';
$user = 'root';     // user name
$pass = '';        // password
$port = '5000';
$con = mysqli_connect($host, $user, $pass, $db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful!";
}

mysqli_close($con);
?>
