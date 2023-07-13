<?php
$hostname = "localhost:3307";
$username = "root";
$password = "";
$database = "db_kelurahan";

// create connection mysql
$conn = mysqli_connect($hostname, $username, $password, $database);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
