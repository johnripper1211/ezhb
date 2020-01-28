<?php
require_once 'connectDB.php';
error_reporting(E_ALL ^ E_NOTICE);
$id = $_REQUEST['ll_id'];
// echo $id;
$con = new connectDB();

$con->delete_ll($id);

?>