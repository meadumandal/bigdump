<?php
//modify your connections here
$servername = "10.128.115.83";
$username = "rrvalencia";
$password = "\$W32PUua";
$dbname = "db_ussd_gw";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>