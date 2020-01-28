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
            <?php $CL->load('admin_option'); ?>
            <?php $CL->load('menu'); ?>
            <div id="page-content-wrapper">
                <div id="page-content">
                    <div class="container">
                        <div class="panel">
                            <div class="panel-body">
                                <h3 class="title-hero">
                                    เพิ่มรายการโปรด
                                </h3>
                                <div class="example-box-wrapper">
                                    <form class="form-horizontal bordered-row" action="action_add_list_like.php" method="POST">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">หมายเลขบัญชี</label>
                                            <div class="col-sm-6">
                                                <input name="acNum" type="text" class="input-mask form-control" placeholder="999-99-9999-99-9" data-inputmask="&apos;mask&apos;:&apos;999-99-9999-99-9&apos;">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-4">
                                                    <input type="submit" class="btn btn-primary" id="" name="aon" placeholder="2000" value="เพิ่มรายการโปรด">
                                                </div>
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