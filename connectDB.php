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

    public function update_member($fname, $lname, $idCard, $user, $pass, $email, $phone, $promptPay, $birthDate, $money, $id, $gender)
    {
        echo $fname, $lname, $idCard, $user, $pass, $email, $phone, $promptPay, $birthDate, $money, $id, $gender;
        $sql = "UPDATE `customer` SET `fname`='" . $fname . "',`lname`='" . $lname . "',`idCard`='" . $idCard . "',`user`='" . $user . "',`pass`='" . $pass . "',`email`='" . $email . "',`phone`='" . $phone . "',`promptPay`='" . $promptPay . "',`birthDate`='" . $birthDate . "',`money`='" . $money . "',`gender`='" . $gender . "' WHERE c_id='" . $id . "'";
        if (mysqli_query($this->connect(), $sql)) {
            header("Location:editmember.php");
        } else echo "Cannot Insert";
    }

    public function select_member($name)
    {
        $sql  = "SELECT * FROM `customer` WHERE user='$name'";
        return $sql;
    }

}
