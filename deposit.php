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
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <h2 class="col-sm-6 control-label">ฝากเงิน</h2>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="exampleInputPassword1">ชื่อคนฝาก: </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label class="col-sm-3 control-label" for="exampleInputPassword1">เลขบัญชี : </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="input-mask form-control" id="exampleInputPassword1" data-inputmask="&apos;mask&apos;:&apos;999-99-9999-99-9&apos;">
                                            <div class="help-block">ตัวอย่างเช่น : 999-99-9999-99-9</div>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-primary btn-md btn-block">ค้นหา</button>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <div class="content-box">
                                                <h3 class="content-box-header bg-black">
                                                    รายชื่อบัญชี
                                                </h3>
                                                <div class="content-box-wrapper">
                                                    <label for="exampleInputPassword1">ชื่อบัญชี xxxxxxx xxxxxxxxx</label>
                                                    <br>
                                                    <label for="exampleInputPassword1">เลขบัญชี xxxxx xx xxxxx xx</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="exampleInputPassword1">จำนวนเงิน : </label>
                                        <div class="col-sm-2">
                                            <input type="number" placeholder="บาท" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-offset-3 bg-default text-center pad20A mrg25T">
                                            <button type="submit" class="btn btn-primary col-sm-3 mrg10A">ฝากเงิน</button>
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