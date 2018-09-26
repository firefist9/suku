<?php
$servername="localhost";
$username="root";
$password="";
$dbname="suku";

$cn= new mysqli($servername, $username, $password, $dbname);

if($cn->connect_error){
	echo "connection failed".$cn->connect_error;
}
?>