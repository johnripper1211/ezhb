<?php
// โครงสร้างพื้นฐานรูปแบบนี้เวลาสร้างหลายๆหน้า
include 'controller.php';
$CL->load('header');
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
        var val = Math.floor(100000000000 + Math.random() * 900000000000);
        console.log(val);
        document.getElementById("myText").value = val;
        $('#dateRangePicker').datepicker({
            format: 'dd-mm-yyyy',
            endDate: '0d',
            autoclose: true,
            enableOnReadonly: false
        });
    });
</script>
<script>
    function ck() {
        var fname = document.form1.fname.value;
        var lname = document.form1.lname.value;
        var idCard = document.form1.idCard.value;
        var user = document.form1.user.value;
        var pass = document.form1.pass.value;
        var email = document.form1.email.value;
        var phone = document.form1.phone.value;
        var promtPay = document.form1.promtPay.value;
        var money = document.form1.money.value;
        var birthDate = document.form1.birthDate.value;
        var numberformat = /^[0-9]+$/
        var letters = /^[A-Za-zก-ฮ]+$/;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (fname == "") {
            alert("กรุณากรอกชื่อ");
            return false;
        } else if (lname == "") {
            alert("กรุณากรอกนามสกุล");
            return false;
        } else if (idCard == "") {
            alert("กรุณากรอกเลขบัตรประจำตัวประชาชน");
            return false;
        } else if (user == "") {
            alert("กรุณากรอก Username");
            return false;
        } else if (pass == "") {
            alert("กรุณากรอก Password");
            return false;
        } else if (email == "") {
            alert("กรุณากรอก Email");
            return false;
        } else if (phone == "") {
            alert("กรุณากรอกเบอร์โทรศัพท์");
            return false;
        } else if (promtPay == "") {
            alert("กรุณากรอกเบอร์พร้อมเพย์");
            return false;
        } else if (money == "") {
            alert("กรุณากรอกจำนวนเงิน");
            return false;
        } else if (birthDate == "") {
            alert("กรุณาเลือกวันเกิด");
            return false;
        } else {
            if (fname.match(letters)) {
                if (lname.match(letters)) {
                    if (idCard.length == 17) {
                        if (idCard.match(numberformat)) {
                            if (pass >= 32 && pass <= 8) {
                                if (pass >= 32 && pass <= 8) {
                                    if (email.match(mailformat)) {
                                        if (phone.length == 10) {
                                            if (phone.match(numberformat)) {
                                                if (promtPay.length == 10) {
                                                    if (promtPay.match(numberformat)) {
                                                        return true;
                                                    } else {
                                                        alert("เบอร์พร้อมเพย์ต้องเป็นตัวเลขเท่านั้น");
                                                        return false;
                                                    }
                                                } else {
                                                    alert("ขนาดเบอร์ต้องมีขาด 10ตัวเท่านั้น");
                                                    return false;
                                                }
                                            } else {
                                                alert("เบอร์โทรต้องเป็นตัวเลขเท่านั้น");
                                                return false;
                                            }
                                        } else {
                                            alert("ขนาดเบอรโทรศัพท์ต้องมีขาด 10ตัวเท่านั้น");
                                            return false;
                                        }
                                    } else {
                                        alert("กรุณากรอก Email ให้ถูกต้อง");
                                        return false;
                                    }
                                } else {
                                    alert("ขนาด Username ต้องมีขนาด 8 - 32 ตัว");
                                    return false;
                                }
                            } else {
                                alert("ขนาด Username ต้องมีขนาด 8 - 32 ตัว");
                                return false;
                            }

                        } else {
                            alert("กรอกเลขบัตรประจำตัวประชาชนได้แค่เพียงตัวเลขเท่านั้น");
                            return false;
                        }
                    } else {
                        alert("กรุณากรอกเลขบัตรประจำตัวประชาชนให้ครบ");
                        return false;
                    }
                } else {
                    alert("นามสกุลต้องเป็นตัวหนังสือเท่านั้น");
                    return false;
                }
            } else {
                alert("ชื่อต้องเป็นตัวหนังสือเท่านั้น");
                return false;
            }
        }

    }
</script>
<script type="text/javascript" src="assets/widgets/parsley/parsley.js"></script>

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
                                    <form name="form1" action="checkEvent.php" method="POST" class="form-horizontal pad15L pad15R mrg15A" onsubmit="return ck()">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">ชื่อ:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="fname" placeholder="กรุณากรอกชื่อ" id="fname" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">นามสกุล:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="lname" placeholder="กรุณากรอกนามสกุล" id="lname" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">เลขบัตรประจำตัวประชาชน:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="input-mask form-control" name="idCard" placeholder="กรุณากรอกเลขบัตรประจำตัวประชาชน" data-inputmask="&apos;mask&apos;:&apos;9-9999-99999-99-9&apos; " required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">User Name:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="user" placeholder="กรุณากรอก User Name" id="user" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Password:</label>
                                            <div class="col-sm-6">
                                                <div class="input-group" id="show_hide_password">
                                                    <input class="form-control" name="pass" type="password" placeholder="กรุณากรอก password" required>
                                                    <div class="input-group-addon">
                                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">E-mail:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="email" placeholder="กรุณากรอก E-mail" id="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Phone:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="input-mask form-control"  required data-inputmask="'mask':'099-999-9999'">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Promptpay:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="input-mask form-control"  required data-inputmask="'mask':'099-999-9999'">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">จำนวนเงิน:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="money" placeholder="กรุณาใส่จำนวนเงิน" id="fname" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Accout:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="acc" placeholder="กรุณากรอก User Name" id="myText" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">วันเกิด:</label>
                                            <div class="col-sm-2">
                                                <div class="input-prepend input-group" id="state">
                                                    <span class="add-on input-group-addon">
                                                        <i class="glyph-icon icon-calendar"></i>
                                                    </span>
                                                    <input type="text" id="dateRangePicker" class="bootstrap-datepicker form-control" name="birthDate" data-date-format="dd/mm/yy">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">เพศ:</label>
                                            <div class="col-sm-6">
                                                <label class="radio-inline">
                                                    <input type="radio" id="" name="example-radio1" value="M">
                                                    ชาย
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" id="" name="example-radio1" value="F">
                                                    หญิง
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-offset-3 bg-default text-center pad20A mrg25T">
                                                <button type="submit" class="btn btn-primary col-sm-3 mrg10A" name="submit" value="register"> ยืนยันสมัคร </button>
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