<?php
$host = 'localhost'; 
$username = 'fjvwmxfm_atila';
$password = 'XvMaster_12';
$database = 'fjvwmxfm_atilanfl';

// Create a new mysqli connection
$conn = new mysqli($host, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
