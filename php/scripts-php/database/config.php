<?php

$HOST = 'localhost';
$USER = 'root';
$PASSWORD = 'root';
$DB = "aula01";
$PORT = 3306;
$CHARSET = "utf8mb4";

$conn = new mysqli($HOST, $USER, $PASSWORD, $DB, $PORT);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>