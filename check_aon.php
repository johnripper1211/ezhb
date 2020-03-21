
<?php
include 'connectDB.php';
require_once 'connectDB.php';
error_reporting(E_ALL ^ E_NOTICE);
$money = (int) $_POST['money'];
$phone = $_POST['phone'];
$submit = $_POST['submit'];
$moneyc = (int) $_POST["moneyc"];
$conn = new connectDB();

$sql = "SELECT * FROM customer Where promptPay='" . $phone . "'";
$result = mysqli_query($conn->connect(), $sql);
$row = mysqli_fetch_array($result);
$f_name = $row['fname'];
$f_promptPay = $row['promptPay'];


$con = new connectDB();

function startsWith($string, $startString)
{
    $len = strlen($startString);
    return (substr($string, 0, $len) == $startString);
}

if ($submit == "aon") {
    if (mysqli_num_rows($result) == 1) {
        if ($money > 0) {
            if ($moneyc < $money) {
                echo "<script>";
                echo "alert(\"ยอดเงินของท่านไม่เพียงพอ\");";
                echo "window.history.back()";
                echo "</script>";
            } else {

                session_start();
                // echo $phone."<br>s";
                // echo $_SESSION["prom"];
                if ($phone == $_SESSION["prom"]) {
                    echo "<script>";
                    echo "alert(\"ไม่สามารถโอนเงินไปยังหมายพร้อมเพย์ตัวเองได้\");";
                    echo "window.history.back()";
                    echo "</script>";
                } else {
                    $result1 = mysqli_query($conn->connect(), $conn->select_promt($phone));
                    $row1 = mysqli_fetch_array($result1);
                    $cid = $row1['c_id'];
                    $name = "โอนเงินไปยัง " . $phone;
                    $conn->insert_history($_SESSION["userID"], $name, "- " . $money);
                    $name = "โอนเงินเข้าจาก " . $_SESSION["prom"];
                    $conn->insert_history($cid, $name, "+ " . $money);
                    $con->updateaon($money, $phone, $f_name, $f_promptPay);
                    $con->updateaon1($money);
                }
            }
        } else {
            echo "<script>";
            echo "alert(\"กรุณากรอกจำนวนเงิน\");";
            echo "window.history.back()";
            echo "</script>";
        }
    } else {
        echo "<script>";
        echo "alert(\"พร้อมเพย์ไม่ถูกต้อง\");";
        echo "window.history.back()";
        echo "</script>";
    }
} else {
    $money = (int) $_POST['money'];
    $phone = $_POST['numphone'];
    $user_id = $_SESSION["userID"];
    $sql = "SELECT * FROM customer Where c_id='" . $user_id . "'";
    $result = mysqli_query($conn->connect(), $sql);
    $row = mysqli_fetch_array($result);

    if (startsWith($phone, "08") || startsWith($phone, "09") || startsWith($phone, "06")) {
        if ($money > 0) {
            if ($money <= $row['money']) {
                echo "<script>";
                echo "alert(\"ทำรายการสำเร็จ.\");";
                echo "window.history.back()";
                echo "</script>";
                $name = "เติมเงินไปยัง " . $phone;
                $conn->insert_history($user_id, $name, "- " . $money);
                $con->updateaon1($money);
            }else{
                echo "<script>";
                echo "alert(\"จำนวนเงินในบัญชีไม่เพียงพอ.\");";
                echo "window.history.back()";
                echo "</script>";
            }
        } else {
            echo "<script>";
            echo "alert(\"จำนวนเงินไม่ถูกต้อง.\");";
            echo "window.history.back()";
            echo "</script>";
        }
    } else {
        echo "<script>";
        echo "alert(\"รูปแบบเบอร์โทรไม่ถูกต้อง\");";
        echo "window.history.back()";
        echo "</script>";
    }
}


?>
