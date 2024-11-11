<?php
$connection = mysqli_connect("localhost", "root", "", "uinjak_db");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
