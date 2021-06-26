<?php
$host='localhost';
$user='root';
$pass='';
$database='web_database';
session_start();
$mysqli=new mysqli("$host","$user","$pass","$database");
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit(); 
}
	?>