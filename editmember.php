<?php
// โครงสร้างพื้นฐานรูปแบบนี้เวลาสร้างหลายๆหน้า
include 'controller.php';
$CL->load('header');
?>
<!-- Uniform -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/uniform/uniform.css">-->
<script type="text/javascript" src="assets/widgets/uniform/uniform.js"></script>
<script type="text/javascript" src="assets/widgets/uniform/uniform-demo.js"></script>

<!-- Boostrap Tabs -->

<script type="text/javascript" src="assets/widgets/tabs/tabs.js"></script>

<!-- Chosen -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/chosen/chosen.css">-->
<script type="text/javascript" src="assets/widgets/chosen/chosen.js"></script>
<script type="text/javascript" src="assets/widgets/chosen/chosen-demo.js"></script>

<!-- Input switch -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/input-switch/inputswitch.css">-->
<script type="text/javascript" src="assets/widgets/input-switch/inputswitch.js"></script>
<script type="text/javascript">
    /* Input switch */

    $(function() {
        "use strict";
        $('.input-switch').bootstrapSwitch();
    });
</script>

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

<script type="text/javascript" src="assets/widgets/parsley/parsley.js"></script>

<?php
include 'connectDB.php';
error_reporting(E_ALL ^ E_NOTICE);
$user = $_SESSION["user"];
$conn = new connectDB();
$result = mysqli_query($conn->connect(), $conn->select_member($user));
$row = mysqli_fetch_array($result);
?>

<body>
    <div id="page-wrapper">
        <div id="sb-site">
            <!-- <?php $CL->load('admin_option'); ?> -->
            <?php $CL->load('menu'); ?>
            <div id="page-content-wrapper">
                <div id="page-content">
                    <div class="container">
                        <div class="content-box">
                            <form class="form-horizontal pad15L pad15R bordered-row" id="form" required data-parsley-validate="">
                                <div class="form-group remove-border">
                                    <label class="col-sm-3 control-label">ชื่อ:</label>
                                    <div class="col-sm-6">
                                        <input type="text" data-parsley-maxlength="50" value="<?php echo $row['fname']; ?>" required class="form-control" placeholder="First name...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">นามสกุล:</label>
                                    <div class="col-sm-6">
                                        <input type="text" data-parsley-maxlength="50" value="<?php echo $row['lname']; ?>" required class="form-control" placeholder="Last name...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Email:</label>
                                    <div class="col-sm-6">
                                        <input type="text" data-parsley-type="email" value="<?php echo $row['email']; ?>" required class="form-control" placeholder="Email address...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">เลขบัตรประจำตัวประชาชน:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="input-mask form-control" value="<?php echo $row['idCard']; ?>" required placeholder="card id" data-inputmask="&apos;mask&apos;:&apos;9-9999-99999-99-9&apos;" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">username:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="<?php echo $row['user']; ?>" required placeholder="username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Password:</label>
                                    <div class="col-sm-6">
                                        <div class="input-group" id="show_hide_password">
                                            <input class="form-control" type="password" value="<?php echo $row['pass']; ?>" required placeholder="password">
                                            <div class="input-group-addon">
                                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true" placeholder="password"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Phone:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="input-mask form-control" value="<?php echo $row['phone']; ?>" required data-inputmask="'mask':'099-999-9999'" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Promptpay:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="input-mask form-control" value="<?php echo $row['promptPay']; ?>" required data-inputmask="'mask':'099-999-9999'" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">วันเกิด:</label>
                                    <div class="col-sm-2">
                                        <div class="input-prepend input-group" id="state">
                                            <span class="add-on input-group-addon">
                                                <i class="glyph-icon icon-calendar"></i>
                                            </span>
                                            <input type="text" id="dateRangePicker" value="<?php echo $row['birthDate']; ?>" class="bootstrap-datepicker form-control" name="birthDate" data-date-format="dd/mm/yy">
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
                                <!-- <div class="form-group">
                                        <label class="col-sm-3 control-label">Profile Picture:</label>
                                        <div class="col-sm-6">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                                <div>
                                                    <span class="btn btn-default btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="...">
                                                    </span>
                                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                <div class="button-pane mrg20T">
                                    <button type="submit" class="btn btn-info">Save</button>
                                    <a href="<?php $CL->base_url('dashboard'); ?>" class="btn btn-link font-gray-dark">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<script>
    $('#form').parsley();
</script>

<?php $CL->load('footer'); ?>