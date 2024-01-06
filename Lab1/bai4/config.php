<?php
$servername = 'localhost';
$username = 'root';
$password = 'mysql';
$database = 'huutinh_php2';
$conn =new mysqli($servername, $username, $password, $database);
if (!$conn) {
    die(mysqli_connect_errno());
}
