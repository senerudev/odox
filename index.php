<?php
include('database/DB.php');
$db = new DB();
$db->userLogin('hakan','hakan');

//$db->getAccessLevel();
//$db->getAccessHirache();

$db->getLocations() ;

?>