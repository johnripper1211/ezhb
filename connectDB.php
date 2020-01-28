<?php
class connectDB
{
    public function connect()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbdatabase = "db_ezhb";
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbdatabase);
        mysqli_set_charset($conn, "utf-8");
        return $conn;
    }

    public function insert($fname, $lname, $idCard, $user, $pass, $email, $phone, $promptPay, $birthDate, $accountNumber, $money, $gender)
    {

        $sql =  "INSERT INTO `customer`(`fname`, `lname`, `idCard`, `user`, `pass`, `email`, `phone`, `promptPay`, `birthDate`, `accountNumber`, `money`,`gender`) 
                VALUES ('" . $fname . "','" . $lname . "','" . $idCard . "','" . $user . "','" . $pass . "','" . $email . "','" . $phone . "','" . $promptPay . "','" . $birthDate . "','" . $accountNumber . "','" . $money . "','" . $gender . "')";

        if (mysqli_query($this->connect(), $sql)) {
            header("Location:register.php");
        } else echo "Cannot Insert";
    }
    public function insert_ll($id,$ll_bname,$ll_name,$ll_promptPay,$ll_accountNumber)
    {
        $sql = "INSERT INTO `list_like`(`cid`, `ll_bname`, `ll_name`, `ll_promptPay`, `ll_accountNumber`) VALUES ('$id','$ll_bname','$ll_name','$ll_promptPay','$ll_accountNumber')";
        if (mysqli_query($this->connect(), $sql)) {
            // header("Location:list_like.php");
        } else echo "Cannot Insert";
    }

    public function update($fname, $lname, $idCard, $user, $pass, $email, $phone, $promptPay, $birthDate, $money, $id, $gender)
    {
        echo $fname, $lname, $idCard, $user, $pass, $email, $phone, $promptPay, $birthDate, $money, $id, $gender;
        $sql = "UPDATE `customer` SET `fname`='" . $fname . "',`lname`='" . $lname . "',`idCard`='" . $idCard . "',`user`='" . $user . "',`pass`='" . $pass . "',`email`='" . $email . "',`phone`='" . $phone . "',`promptPay`='" . $promptPay . "',`birthDate`='" . $birthDate . "',`money`='" . $money . "',`gender`='" . $gender . "' WHERE c_id='" . $id . "'";
        if (mysqli_query($this->connect(), $sql)) {
            header("Location:customer_list.php");
        } else echo "Cannot Insert";
    }

    public function Delete($id)
    {
        $sql = "DELETE FROM `customer` WHERE c_id='" . $id . "'";

        if (mysqli_query($this->connect(), $sql)) {   
            header("Location:customer_list.php");
        } else {
            header("Location:show_edit_customer.php");
        }
    }

    public function update_member($fname, $lname, $idCard, $user, $pass, $email,$id)
    {
        echo $fname, $lname, $idCard, $user, $pass, $email;
        $sql = "UPDATE `customer` SET `fname`='" . $fname . "',`lname`='" . $lname . "',`idCard`='" . $idCard . "',`user`='" . $user . "',`pass`='" . $pass . "',`email`='" . $email . "' WHERE c_id='" . $id . "'";
        if (mysqli_query($this->connect(), $sql)) {
            header("Location:editmember.php");
        } else echo "Cannot Insert";
    }

    public function select_member($name)
    {
        $sql  = "SELECT * FROM `customer` WHERE user='$name'";
        return $sql;
    }
    public function select_ll()
    {
        $sql  = "SELECT * FROM `list_like`";
        return $sql;
    }
    public function select_ll_sin($ll_id)
    {
        $sql  = "SELECT * FROM `list_like` WHERE ll_id='$ll_id'";
        return $sql;
    }
    public function delete_ll($id)
    {
        $sql  = "DELETE FROM `list_like` WHERE ll_id='$id'";
        if (mysqli_query($this->connect(), $sql)) {
            echo '<script>alert("ลบเรียบร้อย"); window.location.href = "list_like.php";</script>';
        } else echo "Cannot Delete";
    }
    public function select_bank($acc)
    {
        $sql  = "SELECT * FROM `customer` WHERE accountNumber='$acc'";
        return $sql;
    }

    public function update_monney_withdraw($accountNumber, $money)
    {
        $sql  = "UPDATE customer SET `money`= money - '" . $money . "'  WHERE accountNumber='$accountNumber'";
        echo $sql;
        if (mysqli_query($this->connect(), $sql)) {
            echo '<script>alert("ถอนเงินสำเร็จ"); window.location.href = "witdraw.php";</script>';
        } else echo "Cannot Insert";
    }

    public function update_monney_deposit($accountNumber, $money)
    {
        echo $accountNumber;
        echo $money;
        $sql  = "UPDATE customer SET `money`= money + '" . $money . "'  WHERE accountNumber='$accountNumber'";
        echo $sql;
        if (mysqli_query($this->connect(), $sql)) {
            echo '<script>alert("ฝากเงินสำเร็จ"); window.location.href = "deposit.php";</script>';
        } else echo "Cannot Insert";
    }

    public function updateaon($money,$phone,$f_name,$f_promptPay)
    {
        
       $sql = "UPDATE `customer` SET `money`= money + '" . $money . "' WHERE phone='" . $phone . "'";
        if (mysqli_query($this->connect(), $sql)) {
            
            header("Location:slip.php?ph=$phone&na=$f_name&pr=$f_promptPay&m=$money");
        } else echo "Cannot aon";
    }
    public function updateaon1($money)
    {
        session_start();
        echo $_SESSION["userID"];
        $sql = "UPDATE `customer` SET `money`= money - '" . $money . "' WHERE c_id='" . $_SESSION["userID"] . "'";

       
        if (mysqli_query($this->connect(), $sql)) {
            
            // header("Location:slip.php?id=1");
        } else echo "Cannot aon";
    }

    public function updateaon_bank($money,$acc,$f_name,$f_promptPay)
    {
        
       $sql = "UPDATE `customer` SET `money`= money + '" . $money . "' WHERE accountNumber ='" . $acc . "'";
        if (mysqli_query($this->connect(), $sql)) {

           header("Location:slip_bank.php?ph=$acc&na=$f_name&pr=$f_promptPay&m=$money");
        } else echo "Cannot aon";
    }
    public function updateaon_bank1($money)
    {
        session_start();
        echo $_SESSION["userID"];
        $sql = "UPDATE `customer` SET `money`= money - '" . $money . "' WHERE c_id='" . $_SESSION["userID"] . "'";

       
        if (mysqli_query($this->connect(), $sql)) {
            
            // header("Location:slip.php");
        } else echo "Cannot aon";
    }

}
