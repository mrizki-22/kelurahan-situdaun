<?php
include 'database.php';

// get slug
$slug = $_GET['slug'];

// get berita
$result = mysqli_query($conn, "SELECT * FROM berita WHERE slug = '$slug'");

//convert
$result = mysqli_fetch_assoc($result);
