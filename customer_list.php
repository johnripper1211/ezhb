<?php
include 'controller.php';
$CL->load('header');
?>

<body>
    <?php
           
            require_once 'connectDB.php';
            error_reporting(E_ALL^E_NOTICE);
            $con = new connectDB();
            $con -> connect();
            $sql  = "SELECT * FROM `customer`";
            $result= mysqli_query($con -> connect(), $sql);
            
    ?>

    <div id="page-wrapper">
        <div id="sb-site">
            <!-- <?php $CL->load('admin_option'); ?> -->
            <?php $CL->load('menu'); ?>
            <div id="page-content-wrapper">
                <div id="page-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="ค้นหารายการโปรด">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">ค้นหา</button>
                                    </span>
                                </div>

                            </div>
                            <div class="col-md-4">

                            </div>

                        </div>
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
                                                    <th class="text-center " width="20%">เลขบัญชีธนาคาร</th>
                                                    <th class="text-center">ชื่อ</th>
                                                    <th class="text-center">นามสกุล</th>
                                                    <th class="text-center">แก้ไข</th>
                                                    <th class="text-center">ลบ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                <?php
                                                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                    if($row['status']=="user"){
                                                        echo "<tr>";
                                                        echo "<td data-title='เลขบัญชี' class='text-center'>".$row['accountNumber']."</td>";
                                                        echo "<td data-title='ชื่อ' class='text-center'>".$row['fname']."</td>";
                                                        echo "<td data-title='นามสกุล' class='text-center'>".$row['lname']."</td>";
                                                        ?>
                                                        <td data-title="แก้ไข" class="text-center"><a href=show_edit_customer.php?id=<?php echo $row["c_id"]; ?> ><i class="fas fa-credit-card" style="color: #18e60b;"></i></a></td>
                                                        <td data-title="ลบ" class="text-center"><a href=checkDelete.php?id=<?php echo $row["c_id"]; ?> ><i class="far fa-trash-alt" style="color: red;"></i></a></td>
                                                        <?php
                                                    }?>
                                                
                                                        
                                            <?php   
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

    </div>
</body>

<?php $CL->load('footer'); ?>