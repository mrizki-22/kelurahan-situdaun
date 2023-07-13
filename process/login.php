<?php
include 'database.php';


// get data from form
$username = $_POST['username'];
$password = $_POST['password'];


//check username and password
$sql = "SELECT * FROM user WHERE username='$username' AND password=md5('$password')";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['id_user'] = $row['id'];
    $_SESSION['status'] = "login";
    header("Location:../admin/index.php");
} else {
    header("Location:../login.php?pesan=username atau password salah");
}