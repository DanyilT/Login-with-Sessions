<?php
/** Configuration for database connection */

$host = "localhost"; // 127.0.0.1
$username = "root";
$password = "root";
$dbname = "login_with_sessions";
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
