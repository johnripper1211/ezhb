<?php
require_once 'connectDB.php';
error_reporting(E_ALL ^ E_NOTICE);
$account = $_POST['acc'];
$monny = $_POST['monny'];
$conn = new connectDB();
$result1 = mysqli_query($conn->connect(), $conn->select_bank($account));
$row1 = mysqli_fetch_array($result1);
$cid = $row1['c_id'];
$name = "ถอนเงิน";
$conn->insert_history($cid,$name,$monny);
if (isset($_POST['submit'])) {
    $result = mysqli_query($conn->connect(), $conn->select_bank($account));
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        if ($monny <= $row['money']) {
            if($row['b_name']=="ธนาคาร Easy Hack"){
                $conn->update_monney_withdraw($account, $monny);
                echo '<script>alert("ถอนเงินสำเร็จ"); window.location.href = "withdraw.php";</script>';
            }else{
                echo '<script>alert("บัญชี้นี้ไม่ใช่ของธนาคาร Easy Hack"); window.location.href = "withdraw.php";</script>';
            }
        }else{
            echo '<script>alert("ไม่สามารถถอนได้เนื่องจากวงเงินเกินบัญชี"); window.location.href = "withdraw.php";</script>';
        }
    }
}
