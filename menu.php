<?php
$CL = new CONTROLLER;
?>
<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<div id="page-header" class="bg-gradient-9">
    <div id="mobile-navigation">
        <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
        <a href="<?php $CL->base_url('dashboard'); ?>" class="logo-content-small" title="MonarchUI"></a>
    </div>


    <div id="header-logo" class="logo-bg">
        <a href="<?php $CL->base_url('dashboard'); ?>" class="logo-content-big" title="MonarchUI">
            EZHB <i>Bank</i>
            <span>easy hack banking</span>
        </a>
        <a href="<?php $CL->base_url('dashboard'); ?>" class="logo-content-small" title="MonarchUI">
            EZHB <i>Bank</i>
            <span>easy hack banking</span>
        </a>
        <a id="close-sidebar" href="#" title="Close sidebar">
            <i class="glyph-icon icon-angle-left"></i>
        </a>
    </div>


    <div id="header-nav-left">
        <div class="user-account-btn dropdown">
            <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                <img width="28" src="assets/image-resources/gravatar.jpg" alt="Profile image">
                <span><?php
                        echo $_SESSION["user"];
                        ?></span>
                <i class="glyph-icon icon-angle-down"></i>
            </a>
            <div class="dropdown-menu float-left">
                <div class="box-sm">
                    <div class="pad5A button-pane button-pane-alt text-center">
                        <a href="<?php $CL->base_url('c_logout'); ?>" class="btn display-block font-normal btn-danger">
                            <i class="glyph-icon icon-power-off"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #header-nav-left -->

    <div id="header-nav-right">

        <!-- <a href="#" class="hdr-btn popover-button" title="Search" data-placement="bottom" data-id="#popover-search">
            <i class="glyph-icon icon-search"></i>
        </a>
        <div class="hide" id="popover-search">
            <div class="pad5A box-md">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search terms here ...">
                    <span class="input-group-btn">
                        <a class="btn btn-primary" href="#">Search</a>
                    </span>
                </div>
            </div>
        </div> -->

        <a href="#" class="hdr-btn" id="fullscreen-btn" title="Fullscreen">
            <i class="glyph-icon icon-arrows-alt"></i>
        </a>
        <!-- <a href="#" class="hdr-btn sb-toggle-left" id="chatbox-btn" title="Chat sidebar">
            <i class="glyph-icon icon-linecons-paper-plane"></i>
        </a> -->
        <div class="dropdown" id="notifications-btn">
            <a data-toggle="dropdown" href="#" title="">
                <span class="small-badge bg-yellow"></span>
                <i class="glyph-icon icon-linecons-megaphone"></i>
            </a>
            <div class="dropdown-menu box-md float-right">

                <div class="popover-title display-block clearfix pad10A">
                    Notifications
                    <a class="text-transform-cap font-primary font-normal btn-link float-right" href="#" title="View more options">
                        More options...
                    </a>
                </div>
                <div class="scrollable-content scrollable-slim-box">
                    <ul class="no-border notifications-box">
                        <li>
                            <span class="bg-danger icon-notification glyph-icon icon-bullhorn"></span>
                            <span class="notification-text">This is an error notification</span>
                            <div class="notification-time">
                                a few seconds ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-warning icon-notification glyph-icon icon-users"></span>
                            <span class="notification-text font-blue">This is a warning notification</span>
                            <div class="notification-time">
                                <b>15</b> minutes ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-green icon-notification glyph-icon icon-sitemap"></span>
                            <span class="notification-text font-green">A success message example.</span>
                            <div class="notification-time">
                                <b>2 hours</b> ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-azure icon-notification glyph-icon icon-random"></span>
                            <span class="notification-text">This is an error notification</span>
                            <div class="notification-time">
                                a few seconds ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
                            <span class="notification-text">This is a warning notification</span>
                            <div class="notification-time">
                                <b>15</b> minutes ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-blue icon-notification glyph-icon icon-user"></span>
                            <span class="notification-text font-blue">Alternate notification styling.</span>
                            <div class="notification-time">
                                <b>2 hours</b> ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-purple icon-notification glyph-icon icon-user"></span>
                            <span class="notification-text">This is an error notification</span>
                            <div class="notification-time">
                                a few seconds ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-warning icon-notification glyph-icon icon-user"></span>
                            <span class="notification-text">This is a warning notification</span>
                            <div class="notification-time">
                                <b>15</b> minutes ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-green icon-notification glyph-icon icon-user"></span>
                            <span class="notification-text font-green">A success message example.</span>
                            <div class="notification-time">
                                <b>2 hours</b> ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-purple icon-notification glyph-icon icon-user"></span>
                            <span class="notification-text">This is an error notification</span>
                            <div class="notification-time">
                                a few seconds ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-warning icon-notification glyph-icon icon-user"></span>
                            <span class="notification-text">This is a warning notification</span>
                            <div class="notification-time">
                                <b>15</b> minutes ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="pad10A button-pane button-pane-alt text-center">
                    <a href="#" class="btn btn-primary" title="View all notifications">
                        View all notifications
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="dropdown" id="progress-btn">
            <a data-toggle="dropdown" href="#" title="">
                <span class="small-badge bg-azure"></span>
                <i class="glyph-icon icon-linecons-params"></i>
            </a>
            <div class="dropdown-menu pad0A box-sm float-right" id="progress-dropdown">
                <div class="scrollable-content scrollable-slim-box">
                    <ul class="no-border progress-box progress-box-links">
                        <li>
                            <a href="#" title="">
                                <b class="pull-right">23%</b>
                                <div class="progress-title">
                                    Finishing uploading files

                                </div>
                                <div class="progressbar-smaller progressbar" data-value="23">
                                    <div class="progressbar-value bg-blue-alt">
                                        <div class="progressbar-overlay"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <b class="pull-right">91%</b>
                                <div class="progress-title">
                                    Roadmap progress
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="91">
                                    <div class="progressbar-value bg-red">
                                        <div class="progressbar-overlay"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <b class="pull-right">58%</b>
                                <div class="progress-title">
                                    Images upload
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="58">
                                    <div class="progressbar-value bg-green"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <b class="pull-right">74%</b>
                                <div class="progress-title">
                                    WordPress migration
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="74">
                                    <div class="progressbar-value bg-purple"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <b class="pull-right">91%</b>
                                <div class="progress-title">
                                    Agile development procedures
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="91">
                                    <div class="progressbar-value bg-black">
                                        <div class="progressbar-overlay"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <b class="pull-right">58%</b>
                                <div class="progress-title">
                                    Systems integration
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="58">
                                    <div class="progressbar-value bg-azure"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <b class="pull-right">97%</b>
                                <div class="progress-title">
                                    Code optimizations
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="97">
                                    <div class="progressbar-value bg-yellow"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="pad5A button-pane button-pane-alt text-center">
                    <a href="#" class="btn display-block font-normal hover-green" title="View all notifications">
                        View all notifications
                    </a>
                </div>
            </div>
        </div> -->

        <!-- <div class="dropdown" id="cloud-btn">
            <a href="#" data-placement="bottom" class="tooltip-button sb-toggle-right" title="Statistics Sidebar">
                <i class="glyph-icon icon-linecons-cloud"></i>
            </a>
        </div> -->

        <!-- <div class="dropdown" id="dashnav-btn">
            <a href="#" data-toggle="dropdown" data-placement="bottom" class="popover-button-header tooltip-button" title="Dashboard Quick Menu">
                <i class="glyph-icon icon-linecons-cog"></i>
            </a>
            <div class="dropdown-menu float-right">
                <div class="box-sm">
                    <div class="pad5T pad5B pad10L pad10R dashboard-buttons clearfix">
                        <a href="#" class="btn vertical-button hover-blue-alt" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                            </span>
                            Dashboard
                        </a>
                        <a href="#" class="btn vertical-button hover-green" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                            </span>
                            Widgets
                        </a>
                        <a href="#" class="btn vertical-button hover-orange" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-fire opacity-80 font-size-20"></i>
                            </span>
                            Tables
                        </a>
                        <a href="#" class="btn vertical-button hover-orange" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>
                            </span>
                            Charts
                        </a>
                        <a href="#" class="btn vertical-button hover-purple" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                            </span>
                            Buttons
                        </a>
                        <a href="#" class="btn vertical-button hover-azure" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                            </span>
                            Panels
                        </a>
                    </div>
                    <div class="divider"></div>
                    <div class="pad5T pad5B pad10L pad10R dashboard-buttons clearfix">
                        <a href="#" class="btn vertical-button remove-border btn-info" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                            </span>
                            Dashboard
                        </a>
                        <a href="#" class="btn vertical-button remove-border btn-danger" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                            </span>
                            Widgets
                        </a>
                        <a href="#" class="btn vertical-button remove-border btn-purple" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-fire opacity-80 font-size-20"></i>
                            </span>
                            Tables
                        </a>
                        <a href="#" class="btn vertical-button remove-border btn-azure" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>
                            </span>
                            Charts
                        </a>
                        <a href="#" class="btn vertical-button remove-border btn-yellow" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                            </span>
                            Buttons
                        </a>
                        <a href="#" class="btn vertical-button remove-border btn-warning" title="">
                            <span class="glyph-icon icon-separator-vertical pad0A medium">
                                <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                            </span>
                            Panels
                        </a>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <a class="header-btn" id="logout-btn" href="#" title="Lockscreen page example">
            <i class="glyph-icon icon-linecons-lock"></i>
        </a> -->

    </div><!-- #header-nav-right -->
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $conn = new connectDB();
    $result = mysqli_query($conn->connect(), $conn->select_member($_SESSION["user"]));
    $row = mysqli_fetch_array($result);
    ?>
</div>
<div id="page-sidebar">
    <div class="scroll-sidebar">
        <div>
            <div class="p-1">
                <label for="name" class="form-control"> ชื่อบัญชี : <?php echo $row["fname"] . ' ' . $row["lname"] ?></label>
                <label for="acc" class="form-control"> เลขบัญชี : <?php echo $_SESSION["acc"] ?></label>
                <label for="money" class="form-control">เงินในบัญชี : <?php echo $row["money"] ?></label>
            </div>
        </div>
        <ul id="sidebar-menu">
            <?php if ($_SESSION["status"] == "admin") { //ถ้าเป็น admin 
            ?>
                <li><a href="<?php $CL->base_url('editmember'); ?>" title="setting" class="sfActive"><i class="glyph-icon icon-gear"></i><span>ตั้งค่าผู้ใช้</span></a></li>
                <li><a href="<?php $CL->base_url('register'); ?>" title="เปิดบัญชี" class="sfActive"><i class="glyph-icon icon-linecons-tv"></i><span>เปิดบัญชี</span></a></li>
                <li><a href="<?php $CL->base_url('withdraw'); ?>" title="withdraw" class="sfActive"><i class="glyph-icon icon-send"></i><span>ถอนเงิน</span></a></li>
                <li><a href="<?php $CL->base_url('deposit'); ?>" title="deposit" class="sfActive"><i class="glyph-icon icon-linecons-wallet"></i><span>ฝากเงิน</span></a></li>
                <li><a href="<?php $CL->base_url('customer_list'); ?>" title="customer_list" class="sfActive"><i class="glyph-icon icon-linecons-wallet"></i><span>จัดการผู้ใช้งาน</span></a></li>

            <?php } ?>

            <?php
            if ($_SESSION["status"] == "user") { //ถ้าเป็น member 
            ?>
                <li class="header"><span>รายการเมนู</span></li>
                <li><a href="<?php $CL->base_url('dashboard'); ?>" title="Admin Dashboard" class="sfActive"><i class="glyph-icon icon-linecons-tv"></i><span>dashboard</span></a></li>
                <li class="divider"></li>
                <li class="sfHover">
                    <a href="#" title="Elements" class="sf-with-ul">
                        <i class="glyph-icon icon-linecons-diamond"></i>
                        <span>โอนเงิน</span>
                    </a>
                    <div class="sidebar-submenu" style="display: block;">
                        <ul>
                            <li><a href="<?php $CL->base_url('aon_money_like'); ?>" title="Buttons"><span>รายการโปรด</span></a></li>
                            <li><a href="<?php $CL->base_url('aon_money_promtpay'); ?>" title="Labels &amp; Badges"><span>พร้อมเพย์</span></a></li>
                            <li><a href="<?php $CL->base_url('aon_money_bank'); ?>" title="Content boxes"><span>บัญชีอื่นๆ</span></a></li>
                        </ul>

                    </div><!-- .sidebar-submenu -->
                </li>
                <li><a href="<?php $CL->base_url('list_like'); ?>" title="เพิ่มรายการโปรด" class="sfActive"><i class="glyph-icon icon-linecons-tv"></i><span>เพิ่มรายการโปรด</span></a></li>
                <li><a href="<?php $CL->base_url('term_money'); ?>" title="เพิ่มรายการโปรด" class="sfActive"><i class="glyph-icon icon-linecons-tv"></i><span>เติมเงินมือถือ</span></a></li>
                <li><a href="<?php $CL->base_url('history'); ?>" title="history" class="sfActive"><i class="glyph-icon icon-line-chart"></i><span>รายการย้อนหลัง</span></a></li>
                <li><a href="<?php $CL->base_url('editmember'); ?>" title="setting" class="sfActive"><i class="glyph-icon icon-gear"></i><span>ตั้งค่าผู้ใช้</span></a></li>
                <li><a href="<?php $CL->base_url('ratestable'); ?>" title="rates" class="sfActive"><i class="glyph-icon icon-linecons-wallet"></i><span>อัตราแลกเปลี่ยน</span></a></li>

            <?php
            }
            ?>
        </ul><!-- #sidebar-menu -->
    </div>
</div>