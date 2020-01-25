<?php
    require_once 'connectDB.php';
    error_reporting(E_ALL^E_NOTICE);
    $id = $_REQUEST['id'];
    $con = new connectDB();
    $con ->Delete($id);
?>