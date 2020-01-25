<?php
// โครงสร้างพื้นฐานรูปแบบนี้เวลาสร้างหลายๆหน้า
include 'controller.php';
$CL->load('header');
?>

<?php

require_once 'connectDB.php';
error_reporting(E_ALL ^ E_NOTICE);
$num = $_REQUEST['id'];
$con = new connectDB();
$con->connect();
$sql  = "SELECT * FROM `customer` WHERE c_id=$num";
$result = mysqli_query($con->connect(), $sql);
$row = mysqli_fetch_array($result);
?>

<script type="text/javascript" src="assets/widgets/input-mask/inputmask.js"></script>

<script type="text/javascript">
    /* Input masks */

    $(function() {
        "use strict";
        $(".input-mask").inputmask();
    });
</script>
<script>
    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("fa-eye-slash");
                $('#show_hide_password i').removeClass("fa-eye");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("fa-eye-slash");
                $('#show_hide_password i').addClass("fa-eye");
            }
        });
    });
</script>
<script type="text/javascript" src="assets/widgets/datepicker/datepicker.js"></script>
<script type="text/javascript">
    /* Datepicker bootstrap */
    $(document).ready(function() {

        $('#dateRangePicker').datepicker({
            format: 'dd-mm-yyyy',
            endDate: '0d',
            autoclose: true,
            enableOnReadonly: false
        });
    });
</script>

<body>
    <div id="page-wrapper">
        <div id="sb-site">
            <!-- <?php $CL->load('admin_option'); ?> -->
            <?php $CL->load('menu'); ?>
            <div id="page-content-wrapper">
                <div id="page-content">
                    <div class="container">
                        <div class="panel">
                            <div class="panal-body">
                                <div class="example-box-wrapper">
                                    <form action="checkEvent.php?id=<?php echo $row['c_id']; ?>" method="POST" class="form-horizontal pad15L pad15R mrg15A">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">ชื่อ:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="fname" value=<?php echo $row['fname']; ?> id="fname">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">นามสกุล:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="lname" value=<?php echo $row['lname']; ?> id="lname">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">เลขบัตรประจำตัวประชาชน:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="input-mask form-control" name="idCard" value=<?php echo $row['idCard']; ?> data-inputmask="&apos;mask&apos;:&apos;9-9999-99999-99-9&apos; ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">User Name:</label>
                                            <div class="col-sm-6">
                                                <input readonly type="text" class="form-control" name="user" value=<?php echo $row['user']; ?> id="user">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Password:</label>
                                            <div class="col-sm-6">
                                                <div class="input-group" id="show_hide_password">
                                                    <input class="form-control" name="pass" type="password" value=<?php echo $row['pass']; ?>>
                                                    <div class="input-group-addon">
                                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">E-mail:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="email" value=<?php echo $row['email']; ?> id="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">เบอร์โทร:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="input-mask form-control" name="phone" value="<?php echo $row['phone']; ?>" data-inputmask="'mask':'099-999-9999'">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">พร้อมเพย์:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="input-mask form-control" name="promptPay" value="<?php echo $row['promptPay']; ?>" data-inputmask="'mask':'099-999-9999'">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">จำนวนเงิน:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="money" value=<?php echo $row['money']; ?> id="fname" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Accout:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="acc" value=<?php echo $row['accountNumber']; ?> id="myText" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">วันเกิด:</label>
                                            <div class="col-sm-2">
                                                <div class="input-prepend input-group" id="state">
                                                    <span class="add-on input-group-addon">
                                                        <i class="glyph-icon icon-calendar"></i>
                                                    </span>
                                                    <input type="text" id="dateRangePicker" class="bootstrap-datepicker form-control" name="birthDate" value=<?php echo $row['birthDate']; ?> data-date-format="dd/mm/yy">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">เพศ:</label>
                                            <div class="col-sm-6">
                                                <label class="radio-inline">
                                                    <input type="radio" id="" name="example-radio1" value="M" <?php echo $row['gender'] == 'M' ? 'checked' : '' ?>>
                                                    ชาย
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" id="" name="example-radio1" value="F" <?php echo $row['gender'] == 'F' ? 'checked' : '' ?>>
                                                    หญิง
                                                </label>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="col-md-offset-3 bg-default text-center pad20A mrg25T">
                                                <button type="submit" class="btn btn-primary col-sm-3 mrg10A" name="submit" value="ubdate"> ยืนยัน </button>
                                                <a href="<?php $CL->base_url('dashboard'); ?>" type="button" class="btn btn-danger col-sm-3 mrg10A">ยกเลิก</a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<?php $CL->load('footer'); ?>