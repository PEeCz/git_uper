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
                                <h4>ข้อมูลส่วนตัว</h4>
                                <small>อีเมลสมาชิกของท่านคือ : <?=$_SESSION['ses_user_email']; ?></small>
                                <p>ชื่อ-นามสกุล : <?php echo $rowuser->firstname.' '.$rowuser->lastname; ?></p>
                                <p>เพศ :</p>
                                <p>อายุ :</p>
                                <p>ที่อยู่ :</p>
                                <p>ระดับสมาชิก :</p>
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
                                <br/>
                                <br/>
                                <h4><i class="fas fa-lg fa-fw m-r-10 fa-lock text-muted"></i> เปลี่ยนพาสเวิร์ด</h4>
                                <p class="text-primary">
                                    ขั้นตอนที่ 1 - ใส่ รหัสผ่านเก่า
                                </p>
                                <p class="text-primary">
                                    ขั้นตอนที่ 2 - ใส่รหัสผ่านใหม่ครั้งที่ 1
                                </p>
                                <p class="text-primary">
                                    ขั้นตอนที่ 3 - ใส่รหัสผ่านใหม่ครั้งที่ 2 <u class="text-danger">ให้ตรงกันกับขั้นตอนที่ 2</u>
                                </p>
                            </div>
                            <!-- END col-6 -->
                            <!-- BEGIN col-6 -->
                            <div class="col-md-6">
                                <form action="<?php echo base_url('Home/UpdateSecure'); ?>" method="POST" class="margin-bottom-0">
                                    <div class="form-group m-b-15">
                                        <input type="text" class="form-control form-control-lg" name="email" value="<?=$rowuser->email?>" readonly="readonly" />
                                    </div>
                                    <div class="form-group m-b-15">
                                        <?php echo form_error('old_password','<small class="text-danger">','</small>'); ?>
                                        <input type="password" class="form-control form-control-lg" name="old_password" placeholder="ใส่หรัสผ่านเก่า" />
                                    </div>
                                    <div class="form-group m-b-15">
                                        <?php echo form_error('new_password','<small class="text-danger">','</small>'); ?>
                                        <input type="password" class="form-control form-control-lg" name="new_password" placeholder="ใส่รหัสผ่านใหม่" />
                                    </div>
                                    <div class="form-group m-b-15">
                                        <?php echo form_error('repeat_new_password','<small class="text-danger">','</small>'); ?>
                                        <input type="password" class="form-control form-control-lg" name="repeat_new_password" placeholder="ใส่รหัสผ่านใหม่อีกครั้ง" />
                                    </div>
                                    <div class="login-buttons">
                                        <input type="hidden" name="id" value="<?= $rowuser->id; ?>">
                                        <button type="submit" class="btn btn-success btn-block btn-lg">ยืนยันการเปลี่ยนรหัสผ่านใหม่</button>
                                    </div>
                                </form>
                            </div>
                            <!-- END col-6 -->
                        </div>
                        <!-- END row -->
                    </div>
                    <!-- END account-body -->
                </div>

            </div>
        </div>