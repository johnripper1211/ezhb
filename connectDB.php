<?php
class connectDB
{
    public function connect()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "x123456";
        $dbdatabase = "db_ezhb";
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbdatabase);
        mysqli_set_charset($conn, "utf-8");
        return $conn;
    }

    public function insert($fname, $lname, $idCard, $user, $pass, $email, $phone, $promptPay, $birthDate, $accountNumber, $money)
    {

        $sql =  "INSERT INTO `customer`(`fname`, `lname`, `idCard`, `user`, `pass`, `email`, `phone`, `promptPay`, `birthDate`, `accountNumber`, `money`) 
                VALUES ('" . $fname . "','" . $lname . "','" . $idCard . "','" . $user . "','" . $pass . "','" . $email . "','" . $phone . "','" . $promptPay . "','" . $birthDate . "','" . $accountNumber . "','" . $money . "')";

        if (mysqli_query($this->connect(), $sql)) {
            header("Location:register.php");
        } else echo "Cannot Insert";
    }

    public function update($fname, $lname, $idCard, $user, $pass, $email, $phone, $promptPay, $birthDate, $money, $id)
    {
        echo $fname, $lname, $idCard, $user, $pass, $email, $phone, $promptPay, $birthDate, $money, $id;
        $sql = "UPDATE `customer` SET `fname`='" . $fname . "',`lname`='" . $lname . "',`idCard`='" . $idCard . "',`user`='" . $user . "',`pass`='" . $pass . "',`email`='" . $email . "',`phone`='" . $phone . "',`promptPay`='" . $promptPay . "',`birthDate`='" . $birthDate . "',`money`='" . $money . "' WHERE c_id='" . $id . "'";
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

    public function select_member($name)
    {
        $sql  = "SELECT * FROM `customer` WHERE user='$name'";
        return $sql;
    }
}
