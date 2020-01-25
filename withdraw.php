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
                        <div class="panel pad20A">
                            <div class="panal-body">
                                <div class="example-box-wrapper">
                                    <form action="insert_withdraw.php" method="POST" class="form-horizontal bordered-row">
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label">ถอนเงิน</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="exampleInputPassword1">เลขบัญชี : </label>
                                            <div class="col-sm-3">
                                                <input type="text" class="input-mask form-control" name="acc" id="exampleInputPassword1" data-inputmask="&apos;mask&apos;:&apos;999-99-9999-99-9&apos;">
                                                <div class="help-block">ตัวอย่างเช่น : 999-99-9999-99-9</div>
                                            </div>
                                            <label class="col-sm-1 control-label" for="exampleInputPassword1" >จำนวนเงิน:</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" maxlength="12" name="monny" id="exampleInputPassword1">
                                                <div class="help-block">ตัวอย่างเช่น : 1000</div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-offset-3 bg-default text-center pad20A mrg25T">
                                                <button type="submit" name="submit" class="btn btn-primary col-sm-3 mrg10A">ถอนเงิน</button>
                                                <a type="button" href="<?php $CL->base_url('dashboard'); ?>" class="btn btn-danger col-sm-3 mrg10A">ยกเลิก</a>
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