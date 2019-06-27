<?php

$host = "localhost";
$name = "root";
$pass = "1";
$db = "test";

$con = mysqli_connect($host, $name, $pass) or die ('Database error !.');
mysqli_select_db($con, $db);


?>