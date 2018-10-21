        <!-- BEGIN #my-account -->
        <div id="about-us-cover" class="section-container">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN breadcrumb -->
                <ul class="breadcrumb m-b-10 f-s-12">
                    <li><a href="#">Home</a></li>
                    <li class="active">หน้าสมาชิก</li>
                </ul>
                <!-- END breadcrumb -->    
                <!-- BEGIN account-container -->
                <div class="account-container">

                <!-- BEGIN account-sidebar -->
                    <div class="account-sidebar">
                        <div class="row">
                            <div class="account-sidebar-cover">
                                <img src="../assets/img/cover/cover-14.jpg" alt="" />
                            </div>
                            <div class="account-sidebar-content">
                                    <h4>เข้าสู่ระบบ</h4>
                                    <small>ด้วยสมาชิกที่คุณมี</small>
                                    <div class="login-content">
                                        <form action="<?php echo base_url('Home/login'); ?>" method="POST" class="margin-bottom-0">
                                            <div class="form-group m-b-15">
                                                <?php echo form_error('email','<small class="text-danger">','</small>'); ?>
                                                <input type="text" class="form-control form-control-lg" name="email" placeholder="Email Address" />
                                            </div>
                                            <div class="form-group m-b-15">
                                                <?php echo form_error('password','<small class="text-danger">','</small>'); ?>
                                                <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" />
                                            </div>
                                            <div class="login-buttons">
                                                <button type="submit" class="btn btn-success btn-block btn-lg">ล็อคอิน</button>
                                            </div>
                                            <hr />
                                            <p class="text-center text-grey-darker">
                                                &copy; Volume License Ultrasoft All Right Reserved 2018
                                            </p>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- END account-sidebar -->
                    <!-- BEGIN account-body -->
                    <div class="account-body">
                        <!-- BEGIN row -->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN col-6 -->
                                <div class="col-md-6">
                                    <h4><i class="fa fa-cc-visa fa-fw text-muted"></i> สมัครสมาชิก</h4>
                                        <div class="register-buttons">
                                            <a href="<?php echo base_url('Home/register'); ?>" class="btn btn-info btn-block btn-lg">ลงทะเบียน</a>
                                        </div>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>

                                </div>
                                <!-- END col-6 -->
                                <!-- BEGIN col-6 -->
                                <div class="col-md-6">
                                    <h4><i class="fa fa-cc-visa fa-fw text-muted"></i> สมัครสมาชิกด้วยเฟสบุ๊ค</h4>
                                        <div class="register-buttons">
                                            <a href="" class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#myModal">Login With Facebook</a>
                                        </div>

                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" ng-controller="loginController">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel">Login Facebook</h4>
                                                </div>
                                                <div class="modal-body" align="center">
                                                    <div id="msg_error" class="alert alert-warning" style="display: none;">
                                                        <strong>ไม่สามารถเชื่อมต่อกับ Facebook ได้</strong>
                                                    </div>
                                                    <a href="#" class="facebooklogin" ng-click="loginFacebook()" id="login">
                                                        <img src="<?php echo base_url('assets/img/facebook/loginfb.png'); ?>" width="300px;" alt="เข้าสู่ระบบด้วย Facebook">
                                                    </a>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                </div>
                                <!-- END col-6 -->
                            </div>
                        </div>
                        <!-- END row -->
                    </div>
                    <!-- END account-body -->
                </div>

            </div>
        </div>