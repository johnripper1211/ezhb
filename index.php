<?php
// โครงสร้างพื้นฐานรูปแบบนี้เวลาสร้างหลายๆหน้า
include 'controller.php';
$CL->load('header');
?>

<body>
    <div id="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <style type="text/css">
        html,
        body {
            height: 100%;
            background: #142d4c;
        }
    </style>
    <div class="center-vertical">
        <div class="center-content row">

            <form action="checkuser.php" id="login-validation" class="col-md-4 col-sm-5 col-xs-11 col-lg-3 center-margin" method="POST">
                <h3 class="text-center pad25B font-gray text-transform-upr font-size-23">Eazy hack banking <span class="opacity-80">v1.0</span></h3>
                <div id="login-form" class="content-box bg-default">
                    <div class="content-box-wrapper pad20A">
                        <img class="mrg25B center-margin radius-all-100 display-block" src="assets/image-resources/gravatar.jpg" alt="">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon addon-inside bg-gray">
                                    <i class="glyph-icon icon-user"></i>
                                </span>
                                <input type="text" name="user" class="form-control" id="exampleInputEmail1" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon addon-inside bg-gray">
                                    <i class="glyph-icon icon-unlock-alt"></i>
                                </span>
                                <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Login</button>
                        </div>
                        <!-- <div class="row">
                            <div class="checkbox-primary col-md-6" style="height: 20px;">
                                <label>
                                    <input type="checkbox" id="loginCheckbox1" class="custom-checkbox">
                                    Remember me
                                </label>
                            </div>
                            <div class="text-right col-md-6">
                                <a href="#" class="switch-button" switch-target="#login-forgot" switch-parent="#login-form" title="Recover password">Forgot your password?</a>
                            </div>
                        </div> -->
                    </div>
                </div>

                <!-- <div id="login-forgot" class="content-box bg-default hide">
                    <div class="content-box-wrapper pad20A">

                        <div class="form-group">
                            <label for="exampleInputEmail2">Email address:</label>
                            <div class="input-group">
                                <span class="input-group-addon addon-inside bg-gray">
                                    <i class="glyph-icon icon-envelope-o"></i>
                                </span>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                            </div>
                        </div>
                    </div>
                    <div class="button-pane text-center">
                        <button type="submit" class="btn btn-md btn-primary">Recover Password</button>
                        <a href="#" class="btn btn-md btn-link switch-button" switch-target="#login-form" switch-parent="#login-forgot" title="Cancel">Cancel</a>
                    </div>
                </div> -->

            </form>

        </div>
    </div>
</body>

<?php $CL->load('footer'); ?>