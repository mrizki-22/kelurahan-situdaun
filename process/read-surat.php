<?php
include 'database.php';

// get surat
$query = "SELECT * FROM surat ORDER BY nama_surat ASC";
$result = mysqli_query($conn, $query);
