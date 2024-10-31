<?php

$host = 'localhost';
$dbusername = 'root';
$dbpassword = 'rahasia';
$dbname = 'pemweb';

$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);
if ($mysqli->connect_errno) {
    die('Database connection failure');
}