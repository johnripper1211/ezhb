
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

$f_name = $row['fname'];
$f_promptPay= $row['accountNumber'];


$con = new connectDB();

if ($submit == "aon") {
    echo $row['b_name']."<br>";
    echo $bank."<br>";
    if ($row['b_name'] == $bank) {
        if($money > 0){
            if($moneyc<$money ){
                echo "<script>";
                echo "alert(\"ยอดเงินของท่านไม่เพียงพอ\");";
                echo "window.history.back()";
                echo "</script>";
            }else{
                session_start();
                if($_SESSION['userID']==$row['c_id']){
                    echo "<script>";
                    echo "alert(\"ไม่สามารถโอนเงินผ่านหมายเลขธนาคารตัวเองได้\");";
                    echo "window.history.back()";
                    echo "</script>";
                }else{
                    $result1 = mysqli_query($conn->connect(), $conn->select_bank($acc));
                    $row1 = mysqli_fetch_array($result1);
                    $cid = $row1['c_id'];
                    $name = "โอนเงินไปยัง " . $acc;
                    $conn->insert_history($_SESSION["userID"], $name, "- " . $money);
                    $name = "โอนเงินเข้าจาก " . $_SESSION["acc"];
                    $conn->insert_history($cid, $name,"+ ".$money);

                    $con->updateaon_bank($money,$acc,$f_name,$f_promptPay);
                    $con->updateaon_bank1($money);
                }
                
            }
        }
        else{
            echo "<script>";
            echo "alert(\" กรุณารอกจำนวนเงิน \");";
            echo "window.history.back()";
            echo "</script>";
        }
    
    
    } 
    else {
      echo "<script>";
      echo "alert(\" ไม่พบเลขบัญชี้ กรุณาตรวจสอบเลขบัญชีหรือ ธนาคารอีกครั้ง \");";
      echo "window.history.back()";
      echo "</script>";
    }
    
} 

?>
