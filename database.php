<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'ecommerce';

$connect = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_error()) {
  echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
}
?>
