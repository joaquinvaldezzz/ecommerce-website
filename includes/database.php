<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_database = 'ecommerce';

$mysqli = mysqli_connect($db_host, $db_user, $db_password, $db_database);

if (mysqli_connect_error()) {
  echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
}
?>
