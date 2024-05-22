<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "db_daptar";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed: " . mysqli_connect_error() . "')</script>");
}
?>
