<?php
require_once 'connectDB.php';
error_reporting(E_ALL ^ E_NOTICE);
$account = $_POST['acc'];
$monny = $_POST['monny'];
$conn = new connectDB();
if (isset($_POST['submit'])) {
    $result = mysqli_query($conn->connect(), $conn->select_bank($account));
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        if ($monny <= $row['money']) {
            $conn->update_monney_withdraw($account, $monny);
        }else{
            echo '<script>alert("ไม่สามารถถอนได้เนื่องจากวงเงินเกินบัญชี"); window.location.href = "withdraw.php";</script>';
        }
    }
}
