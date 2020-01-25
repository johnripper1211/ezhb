<?php
// โครงสร้างพื้นฐานรูปแบบนี้เวลาสร้างหลายๆหน้า
include 'controller.php';
$CL->load('header');
?>

<body>
    <div id="page-wrapper">
        <div id="sb-site">
            <!-- <?php $CL->load('admin_option'); ?> -->
            <?php $CL->load('menu'); ?>
            <div id="page-content-wrapper">
                <div id="page-content">
                    <div class="container">
                        <div class="panel" style="margin-top: 10px;">
                            <div class="panel-body">
                                <h3 class="title-hero">
                                    รายการโปรด
                                </h3>

                                <div class="example-box-wrapper">
                                    <div class="remove-columns">
                                        <table class="table table-bordered table-striped table-condensed cf">
                                            <thead class="cf">
                                                <tr>
                                                    <th class="text-center">ลำดับ</th>
                                                    <th class="text-center">ชื่อธนาคาร</th>
                                                    <th class="text-center">ชื่อบัญชี</th>
                                                    <th class="text-center">พร้อมเพย์</th>
                                                    <th class="text-center">เลขบัญชีธนาคาร</th>
                                                    <th class="text-center">ฟังก์ชัน</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-title="ลำดับ" class="text-center">1</td>
                                                    <td data-title="ชื่อธนาคาร" class="text-center">ธนาคารกรุงไทย</td>
                                                    <td data-title="ชื่อบัญชี" class="text-center">นายคุณัฐญ์ คำพรมมาภิรักษ์</td>
                                                    <td data-title="พร้อมเพย์" class="text-center">0968105815</td>
                                                    <td data-title="เลขบัญชีธนาคาร" class="text-center">485254156</td>
                                                    <td data-title="ฟังก์ชัน" class="text-center"><a href="#tabs-example-3"><i class="far fa-trash-alt" style="color: red;"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td data-title="ลำดับ" class="text-center">2</td>
                                                    <td data-title="ชื่อธนาคาร" class="text-center">ธนาคารกรุงไทย</td>
                                                    <td data-title="ชื่อบัญชี" class="text-center">นายสารัช ธนภัทรภักดี</td>
                                                    <td data-title="พร้อมเพย์" class="text-center">0813654523</td>
                                                    <td data-title="เลขบัญชีธนาคาร" class="text-center">487856556</td>
                                                    <td data-title="ฟังก์ชัน" class="text-center"><a href="#tabs-example-3"><i class="far fa-trash-alt" style="color: red;"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <a class="btn btn-primary" href="<?php $CL->base_url('add_list_like'); ?>">เพิ่มรายการโปรด</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<?php $CL->load('footer'); ?>