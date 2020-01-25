
<?php

require_once 'connectDB.php';
error_reporting(E_ALL ^ E_NOTICE);
$money = (int)$_POST['money'];
$phone = $_POST['phone'];
$submit = $_POST['submit'];
$moneyc = (int)$_POST["moneyc"];
$conn = new connectDB();

$sql = "SELECT * FROM customer Where promptPay='" . $phone . "'";

$result = mysqli_query($conn->connect(), $sql);




$con = new connectDB();

if ($submit == "aon") {
    if (mysqli_num_rows($result) == 1) {
        if($moneyc<$money){
            echo "<script>";
            echo "alert(\"ยอดเงินของท่านไม่เพียงพอ\");";
            echo "window.history.back()";
            echo "</script>";
        }else{
            $con->updateaon($money,$phone);
            $con->updateaon1($money);
        }
    
    
    } else {
      echo "<script>";
      echo "alert(\"พร้อมเพย์ไม่ถูกต้อง\");";
      echo "window.history.back()";
      echo "</script>";
    }
    
} 

?>
