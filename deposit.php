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
                            <div class="panel-body">
                                <form class="form-horizontal" name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" required data-parsley-validate="">
                                    <div class="form-group">
                                        <h2 class="col-sm-6 control-label">ฝากเงิน</h2>
                                    </div>

                                    <div class="form-group ">
                                        <label class="col-sm-3 control-label" for="exampleInputPassword1">เลขบัญชี : </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="input-mask form-control" name="txtKeyword" id="exampleInputPassword1" required data-inputmask="&apos;mask&apos;:&apos;999-99-9999-99-9&apos;">
                                            <div class="help-block">ตัวอย่างเช่น : 999-99-9999-99-9</div>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-primary btn-md btn-block">ตรวจสอบเลขบัญชี</button>
                                        </div>
                                    </div>

                                </form>
                                <?php
                                error_reporting(E_ALL ^ E_NOTICE);
                                $conn = new connectDB();
                                $result = mysqli_query($conn->connect(), $conn->select_bank($_GET["txtKeyword"]));

                                ?>
                                <form class="form-horizontal" action="update_deposit.php" method="POST">
                                    <?php
                                    if ($_GET["txtKeyword"] != "") {
                                        if (mysqli_num_rows($result) == 1) {
                                            $row = mysqli_fetch_array($result);
                                            if($row['b_name']=="ธนาคาร Easy Hack"){

                                            
                                    ?>
                                            <div class="form-group">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-6">
                                                    <div class="content-box">
                                                        <h3 class="content-box-header bg-black">
                                                            รายชื่อบัญชี
                                                        </h3>
                                                        <div class="content-box-wrapper">
                                                            <label for="exampleInputPassword1">ชื่อบัญชี : <?php echo $row['fname'] . ' ' . $row['lname'] ?></label>
                                                            <br>
                                                            <label for="exampleInputPassword1">เลขบัญชี : </label>
                                                            <input type="text" style="border-width:0px;border:none;background:#ffffff;" class="w-50" name="acc" value="<?php echo $row['accountNumber'] ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }else{
                                        ?>
                                            <div class="form-group">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-6">
                                                    <div class="content-box">
                                                        <h3 class="content-box-header bg-black">
                                                            รายชื่อบัญชี
                                                        </h3>
                                                        <div class="content-box-wrapper">
                                                            <label for="exampleInputPassword1">** บัญชี้นี้ไม่ใช่ของธนาคาร Easy Hack ไม่สามรถฝากได้ **</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }} else {
                                        ?>
                                            <div class="form-group">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-6">
                                                    <div class="content-box">
                                                        <h3 class="content-box-header bg-black">
                                                            รายชื่อบัญชี
                                                        </h3>
                                                        <div class="content-box-wrapper">
                                                            <label for="exampleInputPassword1">** ไม่มีบัญชีนี้ในระบบ **</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    <?php
                                        }
                                    }
                                    ?>
                                    <!-- <div class="form-group">
                                        <label class="col-sm-3 control-label" for="exampleInputPassword1">ชื่อคนฝาก: </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="exampleInputPassword1">จำนวนเงิน : </label>
                                        <div class="col-sm-2">
                                            <input type="text" placeholder="บาท" class="form-control" id="exampleInputPassword1" name="money" maxlength="12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-offset-3 bg-default text-center pad20A mrg25T">
                                            <button type="submit" name="submit" class="btn btn-primary col-sm-3 mrg10A">ฝากเงิน</button>
                                            <button type="button" class="btn btn-danger col-sm-3 mrg10A" onclick="history.back();">ยกเลิก</button>
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
</body>

<?php $CL->load('footer'); ?>