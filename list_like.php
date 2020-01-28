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
                                                <?php
                                                require_once 'connectDB.php';
                                                error_reporting(E_ALL ^ E_NOTICE);
                                                $conn = new connectDB();
                                                $result = mysqli_query($conn->connect(), $conn->select_ll());
                                                $i = 0;
                                                while ($row = mysqli_fetch_array($result)) {
                                                    session_start();
                                                    $i = $i+1;
                                                    if ($_SESSION['userID'] == $row['cid']) {
                                                        // echo $row['ll_bname'] . "<br>";
                                                        // echo $row['ll_name'] . " " . $row['lname'] . "<br>";
                                                        // echo $row['ll_promptPay'] . "<br>";
                                                        // echo $row['ll_accountNumber'] . "<br>";
                                                        // echo "<br>";
                                                   

                                                ?>
                                                <tr>
                                                    <td data-title="ลำดับ" class="text-center"><?php echo $i; ?></td>
                                                    <td data-title="ชื่อธนาคาร" class="text-center"><?php echo $row['ll_bname']; ?></td>
                                                    <td data-title="ชื่อบัญชี" class="text-center"><?php echo $row['ll_name']; ?></td>
                                                    <td data-title="พร้อมเพย์" class="text-center"><?php echo $row['ll_promptPay']; ?></td>
                                                    <td data-title="เลขบัญชีธนาคาร" class="text-center"><?php echo $row['ll_accountNumber']; ?></td>
                                                    <td data-title="ฟังก์ชัน" class="text-center"><a href="delete_ll.php?ll_id=<?php echo $row['ll_id']; ?>"><i class="far fa-trash-alt" style="color: red;"></i></a></td>
                                                </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
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