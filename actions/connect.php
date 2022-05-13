<?php
$host = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$dbname = 'online-voting-system';

// MySQL connection status
$con = new mysqli($host, $dbuser, $dbpass, $dbname);
if (!$con) {
  die(mysqli_error($con));
}

?>