<?php
include 'database/DB.php';
$db = new DB();

$input = file_get_contents("");

if($input->location){
	echo json_encode($db->getAllLocations());
}

if($input->heirahce){
	echo json_encode($db->getAccessHirachi());
}



?>