<?php 
$servername = "localhost";
$username = "admin";
$password = "n1md@";
$dbname = "gudang";

// Create connection
$koneksi = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>