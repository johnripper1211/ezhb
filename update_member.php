
<?php
require_once 'connectDB.php';
error_reporting(E_ALL ^ E_NOTICE);
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$idCard = $_POST['idCard'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$id = $_REQUEST['id'];
$con = new connectDB();
if (isset($_POST['submit'])) {
    $con->update_member($fname, $lname, $idCard, $user, $pass, $email,$id);
} 