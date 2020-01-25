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
                                <h3 class="title-hero">
                                    เติมเงินมือถือ
                                </h3>
                                <div class="example-box-wrapper">
                                    <form class="form-horizontal bordered-row">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control input-mask" id="" name="numphone" placeholder="099-999-9999" data-inputmask="'mask':'099-999-9999'">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">จำนวนเงิน</label>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control input-mask" id="" name="money" placeholder="999999">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-4">
                                                    <input type="button" class="btn btn-primary" id="" name="term" value="เติมเงิน">
                                                </div>

                                            </div>
                                        </div>

                                        <!-- <div class="form-group">
                                                <label class="col-sm-3 control-label">Select</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div> -->
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