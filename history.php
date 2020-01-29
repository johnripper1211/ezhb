<?php
include 'controller.php';
$CL->load('header');
?>

<body>
    <div id="page-wrapper">
        <div id="sb-site">
            <?php $CL->load('menu'); ?>
            <?php $CL->load('admin_option'); ?>
            <div id="page-content-wrapper">
                <div id="page-content">

                    <div class="container">


                        <!-- Data tables -->

                        <!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/datatable/datatable.css">-->
                        <script type="text/javascript" src="assets/widgets/datatable/datatable.js"></script>
                        <script type="text/javascript" src="assets/widgets/datatable/datatable-bootstrap.js"></script>
                        <script type="text/javascript" src="assets/widgets/datatable/datatable-responsive.js"></script>

                        <script type="text/javascript">
                            /* Datatables responsive */

                            $(document).ready(function() {
                                $('#datatable-responsive').DataTable({
                                    responsive: true,
                                    "searching": false,
                                    "paging": false
                                });
                            });

                            $(document).ready(function() {
                                $('.dataTables_filter input').attr("placeholder", "Search...");
                            });
                        </script>

                        <div id="page-title">
                            <h2>ดูรายการย้อนหลัง</h2>
                        </div>

                        <div class="panel">
                            <div class="panel-body">
                                <div class="example-box-wrapper">
                                    <table id="datatable-responsive" class="table table-striped table-bordered responsive no-wrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>รายการ</th>
                                                <th>จำนวนเงิน</th>
                                                <th>วันเวลา</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            require_once 'connectDB.php';
                                            error_reporting(E_ALL ^ E_NOTICE);
                                            $conn = new connectDB();
                                            $result = mysqli_query($conn->connect(), $conn->select_history());
                                            while ($row = mysqli_fetch_array($result)) {
                                                session_start();
                                                if ($_SESSION['userID'] == $row['c_id']) {



                                            ?>
                                                    <tr>

                                                        <td><?php echo $row["h_name"]; ?></td>
                                                        <td><?php echo $row["money"]; ?></td>
                                                        <td><?php echo $row["date"]; ?></td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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