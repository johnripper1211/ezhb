<?php
require_once 'connectDB.php';
error_reporting(E_ALL ^ E_NOTICE);

$acc = $_POST['acc'];

$money = $_POST['money'];
echo $acc."<br>";
if ($acc==""){
    echo '<script>alert("กรุณาตรวจสอบบัญชีก่อนฝากเงิน"); window.history.back();</script>';
}else if($money == ""){
    echo '<script>alert("กรุณากรอกจำนวนเงิน"); window.history.back();</script>';
}
echo $money."<br>";
$conn = new connectDB();
$result1 = mysqli_query($conn->connect(), $conn->select_bank($acc));
$row1 = mysqli_fetch_array($result1);
$cid = $row1['c_id'];
$name = "ฝากเงิน";
$conn->insert_history($cid,$name,$money);
if (isset($_POST['submit'])) {
    $result = mysqli_query($conn->connect(), $conn->select_bank($acc));
    if (mysqli_num_rows($result) == 1) {
        // echo $acc."<br>";
        // echo $money."<br>";
        $row = mysqli_fetch_array($result);
        if ($money >= 1) {
            $conn->update_monney_deposit($acc, $money);
            // echo '<script>alert("ฝากเงินสำเร็จ"); window.location.href = "deposit.php";</script>';
        }else{
            echo '<script>alert("ไม่สามารถฝากเงินได้ได้เนื่องจากจำนวนเงินไม่ถูกต้อง"); window.location.href = "deposit.php";</script>';
        }
    }
}
?>