<?php

include 'connect.php';

$id = $_GET['id'];
if(isset($id)){
	$query = $mysqli->query("delete from profile where id='$id'");
	if($query){
		echo "<script>alert('file deleted successfully!');location.href='index.php'</script>";
	}else{
		header('location: index.php');
	}
}

?>