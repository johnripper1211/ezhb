<?php
// โครงสร้างพื้นฐานรูปแบบนี้เวลาสร้างหลายๆหน้า
include 'controller.php';
$CL->load('header');

// include 'connectDB.php';

$user = $_SESSION["user"];
$conn = new connectDB();
$result = mysqli_query($conn->connect(), $conn->select_member($user));
$row = mysqli_fetch_array($result);
$moneyc = (int) $row["money"];
?>
<?php
$ph = $_REQUEST['ph'];
$na = $_REQUEST['na'];
$m = $_REQUEST['m'];


// ph=$phone&na=$f_name&pr=$f_promptPay&m=$money
// $id = $_REQUEST['id'];
// echo $id;
?>
<script type="text/javascript" src="assets/widgets/input-mask/inputmask.js"></script>

<script type="text/javascript">
    /* Input masks */

    $(function() {
        "use strict";
        $(".input-mask").inputmask();
    });
</script>
<style>
    .slip {
        border: 3px solid lightgray;
        /* background-color:lightgray; */
    }

    .img {
        width: 200px;
        height: 150px;
    }
</style>
<script>
    setTimeout(function() {
        setInterval(function() {
            $('#img1').attr('src', $('#img1').attr('src'))
        }, 1)
    }, 2000)
</script>

<body>
    <div id="page-wrapper">
        <div id="sb-site">
            <!-- <?php $CL->load('admin_option'); ?> -->
            <?php $CL->load('menu'); ?>
            <div id="page-content-wrapper">
                <div id="page-content">
                    <div class="container">
                        <div class="slip panel box-sm center-block">
                            <div class="panel-body">
                                <div class="text-center">
                                    <h3 class="title-hero">
                                        <img class="img" id="img1" src="assets/images/1230.gif">
                                        <h2 style="color: green;">
                                            โอนเงินสำเร็จ
                                        </h2>
                                    </h3>
                                </div>
                                <div class="example-box-wrapper">
                                    <form class="form-horizontal bordered-row">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">จาก</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="input-mask form-control" value="<?php echo $row['fname']; ?>" readonly>
                                                <input type="text" class="input-mask form-control" value="<?php echo $row['accountNumber']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">ไปยัง</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="input-mask form-control" value="<?php echo $ph; ?>" readonly>
                                                <input type="text" class="input-mask form-control" value="<?php echo $na; ?>" readonly>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">จำนวนเงิน</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="input-mask form-control" value="<?php echo $m; ?>" readonly>
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