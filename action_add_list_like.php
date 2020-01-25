<?php
    require_once 'connectDB.php';
    error_reporting(E_ALL ^ E_NOTICE);

    $acNum = $_POST['acNum'];
    // echo $acNum;

    $conn = new connectDB();
    $sql = "SELECT * FROM customer Where accountNumber='".$acNum."'";
    $result = mysqli_query($conn->connect(), $sql);
    if($row = mysqli_fetch_array($result)){
        $ll_name = $row['fname']." ".$row['lname'];
        $ll_acNum = $row['accountNumber'];
        $ll_promtPay = $row['promptPay'];
        $b_name = $row['b_name'];
        echo $b_name.'<br>';
        echo $ll_name.'<br>';
        echo $ll_acNum.'<br>';
        echo $ll_promtPay.'<br>';
    }else{
        echo 'ไม่พบบัญชี';
    }
    
?>