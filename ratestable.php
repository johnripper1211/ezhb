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
                        <div class="panel">
                            <div class="panal-body">
                                <div class="row pad45A">
                                    <script type="text/javascript" src="https://th.exchange-rates.org/GetCustomContent.aspx?sid=RT000MBS7&amp;type=RatesTable&amp;stk=-03I89PQ1WK" charset="utf-8">
                                    </script>
                                    <div>แหล่งที่มา: <a href="https://th.exchange-rates.org/" rel="nofollow">th.exchange-rates.org</a></div>
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