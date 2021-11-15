<?php

$serverName = "localhost:3308";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpProject01";

$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

if (!$conn){
    die("Connection failed" . mysqli_connect_error());
}