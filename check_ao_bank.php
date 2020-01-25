
<?php

require_once 'connectDB.php';
error_reporting(E_ALL ^ E_NOTICE);
$money = (int)$_POST['money'];
$acc = $_POST['acc'];
$submit = $_POST['submit'];
$moneyc = (int)$_POST["moneyc"];
$bank = $_POST["bank"];

$conn = new connectDB();
$sql = "SELECT * FROM customer Where accountNumber ='" . $acc . "'";
$result = mysqli_query($conn->connect(), $sql);
$row = mysqli_fetch_array($result);


$con = new connectDB();

if ($submit == "aon") {
    if ($row['b_name'] == $bank) {
        if($moneyc<$money){
            echo "<script>";
            echo "alert(\"ยอดเงินของท่านไม่เพียงพอ\");";
            echo "window.history.back()";
            echo "</script>";
        }else{
            $con->updateaon_bank($money,$acc);
            $con->updateaon_bank1($money);
        }
    
    
    } else {
      echo "<script>";
      echo "alert(\" เลขบัญชีไม่ถูกต้อง \");";
      echo "window.history.back()";
      echo "</script>";
    }
    
} 

?>
