<?php

$mysqli = new mysqli('localhost', 'root', '', 'crud-php');

if($mysqli->connect_errno){
	echo "There is an error in ".$mysqli->connect_errno;
}else{
	//echo "Database Connected";
}