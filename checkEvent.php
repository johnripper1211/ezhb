
<?php

require_once 'connectDB.php';
error_reporting(E_ALL ^ E_NOTICE);
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$idCard = $_POST['idCard'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$promptPay = $_POST['promptPay'];
$birthDate = $_POST['birthDate'];
$submit = $_POST['submit'];
$m = $_POST['money'];
$ac = $_POST['acc'];
$id = $_REQUEST['id'];
$radioVal = $_POST["example-radio1"];
$gender = '';
if ($radioVal == "M") {
    $gender = 'M';
} else if ($radioVal == "F") {
    $gender = 'F';
}
$con = new connectDB();
if ($submit == "register") {
    $con->insert($fname, $lname, $idCard, $user, $pass, $email, $phone, $promptPay, $birthDate, $ac, $m, $gender);
} else {
    $con->update($fname, $lname, $idCard, $user, $pass, $email, $phone, $promptPay, $birthDate, $m, $id,$gender);
}


?>
