<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbs = "mahasiswaseal";

$conn = mysqli_connect($host, $user, $pass, $dbs);

if ($conn->connect_error) {
    die("No Connection to Database");
}