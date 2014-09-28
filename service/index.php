<?php

require 'database/DB.php';
$input = file_get_contents('php://input');
$data = json_decode($input); 

$db = new DB();

if($data->getLocation){
	echo json_encode($db->getLocations());
}

if(isset($_GET['service'])){
	$db->saveUrls($_GET['service']);
	echo 'success';
}
?>