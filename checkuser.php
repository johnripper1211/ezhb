<?php
include 'connectDB.php';
session_start();

if (isset($_POST['user'])) {

  $conn = new connectDB();
  //รับค่า user & password
  $Username = $_POST['user'];
  $Password = $_POST['pass'];
  //query 
  $sql = "SELECT * FROM customer Where user='" . $Username . "' and pass='" . $Password . "' ";

  $result = mysqli_query($conn->connect(), $sql);

  if (mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_array($result);

    $_SESSION["userID"] = $row["c_id"];
    $_SESSION["user"] = $row["user"];
    $_SESSION["pass"] = $row["pass"];
    $_SESSION["fname"] = $row["fname"];
    $_SESSION["lname"] = $row["lname"];
    $_SESSION["status"] = $row["status"];
    $_SESSION["state"] = 1;
    
    Header("Location: dashboard.php");

  } else {
    echo "<script>";
    echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
    echo "window.history.back()";
    echo "</script>";
  }
} else {
  Header("Location: http://localhost:81/ezhb/"); //user & password incorrect back to login again

}
