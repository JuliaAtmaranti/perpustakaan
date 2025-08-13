<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "perpustakaan";

$dbconnect = mysqli_connect($host, $user, $pass, $db);

if (!$dbconnect) {
    die("failed connection : " . mysqli_connect_error());
}