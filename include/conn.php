<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "election";


if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect");
}