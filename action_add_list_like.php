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
        // echo $b_name.'<br>';
        // echo $ll_name.'<br>';
        // echo $ll_promtPay.'<br>';
        // echo $ll_acNum.'<br>';
        session_start();
        $id = $_SESSION['userID'];
        if ($id!= $row['c_id']) {
            // echo $id."...".$row['c_id'];
            $conn->insert_ll($id,$b_name,$ll_name,$ll_promtPay,$ll_acNum);
            echo '<script>alert("เพิ่มรายการโปรดเรียบร้อย"); window.location.href = "list_like.php";</script>';
        }else{
            echo '<script>alert("ไม่สามารถเพิ่มบัญชีตัวเองเป็นรายการโปรดได้"); window.location.href = "list_like.php";</script>';
        }
        
    }else{
        echo '<script>alert("ไม่พบหมายเลขบัญชีนี้"); window.location.href = "list_like.php";</script>';
    }
    
?>