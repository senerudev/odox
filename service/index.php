<?php

require 'config/cinfig.php';
$input = file_get_contents('php://input');
$data = json_decode($input); 

if($data->getLocation){
	echo json_encode($db->getLocations());
}


// /service
?>