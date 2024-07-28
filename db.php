<?php

$conn = new mysqli("localhost", "root", "", "reso");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
