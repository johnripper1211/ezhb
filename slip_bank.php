<?php
// โครงสร้างพื้นฐานรูปแบบนี้เวลาสร้างหลายๆหน้า
include 'controller.php';
$CL->load('header');

// include 'connectDB.php';

$user = $_SESSION["user"];
$conn = new connectDB();
$result = mysqli_query($conn->connect(), $conn->select_member($user));
$row = mysqli_fetch_array($result);
$moneyc = (int)$row["money"];
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
    .slip{
        position: center;
        border: 3px solid lightgray;
        width:450px;
        height:530px; 
        /* background-color:lightgray; */
    }
    .img{
        width:200px;
        height:150px; 
    }
</style>

<body>
    <div id="page-wrapper">
        <div id="sb-site">
            <!-- <?php $CL->load('admin_option'); ?> -->
            <?php $CL->load('menu'); ?>
            <div id="page-content-wrapper">
                <div id="page-content">
                    <div class="container"> 
                    <center><div class="slip"> 
                            <div class="panel-body">
                                <h3 class="title-hero">
                                <img class="img" src="assets/images/1230.gif" >
                                   <center><h2><font color="green"> โอนเงินสำเร็จ</h2></font> </center> 
                                </h3>
                                <div class="example-box-wrapper">
                                    <form class="form-horizontal bordered-row">
                                        <div class="form-group">
                                                <label class="col-sm-3 control-label">จาก</label>
                                                <div class="col-sm-6">
                                                <input type="text" class="input-mask form-control"  value="<?php echo $row['fname']; ?>"  readonly>
                                                <input type="text" class="input-mask form-control"  value="<?php echo $row['accountNumber']; ?>"  readonly>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">ไปยัง</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="input-mask form-control"  value="<?php echo $na; ?>"  readonly>
                                                <input type="text" class="input-mask form-control"  value="<?php echo $ph; ?>"  readonly>
                                                 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">จำนวนเงิน</label>
                                            <div class="col-sm-6">
                                            <input type="text" class="input-mask form-control"  value="<?php echo $m; ?>"  readonly>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-4">
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<?php $CL->load('footer'); ?>