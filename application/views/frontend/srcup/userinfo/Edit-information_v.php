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
                            <div class="col-md-3">
                                <br/>
                                <br/>
                                <h4><i class="far fa-lg fa-fw m-r-10 fa-id-card text-muted"></i> ข้อมูลส่วนตัว</h4>
                            </div>
                            <!-- END col-6 -->
                            <!-- BEGIN col-6 -->
                            <div class="col-md-9">
                                <form action="<?php echo base_url('Home/updateInformation'); ?>" method="POST" class="margin-bottom-0">
                                    <div class="form-group m-b-15">
                                        <?php echo form_error('firstname','<small class="text-danger">','</small>'); ?>
                                        <label class='col-form-label col-md-4' for="firstname">ชื่อ <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control form-control-lg m-b-5" name="firstname" placeholder="ชื่อ" />
                                        </div>
                                    </div>
                                    <div class="form-group m-b-15">
                                        <?php echo form_error('lastname','<small class="text-danger">','</small>'); ?>
                                        <label class='col-form-label col-md-4' for="firstname">นามสกุล <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control form-control-lg m-b-5" name="lastname" placeholder="นามสกุล" />
                                        </div>
                                    </div>
                                    <div class="form-group m-b-15">
                                        <label class='col-form-label col-md-4' for="firstname">รายละเอียดส่วนตัว </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control form-control-lg m-b-5" name="detail" placeholder="รายละเอียดส่วนตัว" />
                                        </div>
                                    </div>
                                    <div class="form-group m-b-15">
                                        <?php echo form_error('address','<small class="text-danger">','</small>'); ?>
                                        <label class='col-form-label col-md-4' for="firstname">ที่อยู่ <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <textarea type="text" class="form-control form-control-lg m-b-5" name="address" placeholder="ที่อยู่" /></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group m-b-15">
                                        <label class='col-form-label col-md-4' for="firstname">โทรศัพท์บ้าน </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control form-control-lg m-b-5" name="home_tel" placeholder="Ex. 02-xxx-xxxx" />
                                        </div>
                                    </div>
                                    <div class="form-group m-b-15">
                                        <?php echo form_error('mobile_tel','<small class="text-danger">','</small>'); ?>
                                        <label class='col-form-label col-md-4' for="firstname">โทรศัพท์มือถือ <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control form-control-lg m-b-5" name="mobile_tel" id="masked-input-phone" placeholder="Ex. 09x-xxx-xxxx" />
                                        </div>
                                    </div>
                                    <div class="form-group m-b-15">
                                        <label class='col-form-label col-md-4' for="firstname">อายุ </label>
                                        <div class="col-md-8">
                                            <select name="age" class='form-control m-b-5'>
                                                <option>-- กรุณาเลือกอายุ --</option>
                                                <?php for($i=1; $i<=99; $i++){ ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group m-b-15">
                                        <label class='col-form-label col-md-4'>เพศ </label>
                                        <div class="col-md-4">
                                                <input type="checkbox" class=" id="male" name="male"/>
                                                <label class="col-form-label" for="male">ชาย</label>
                                        </div>
                                        <div class="col-md-4">
                                                <input type="checkbox" id="female" name="female" />
                                                <label for="female" class="col-form-label">หญิง</label>
                                        </div>
                                    </div>
                                    <div class="form-group m-b-15">
                                        <label class='col-form-label col-md-12 text-primary' style="padding-top: 10px;">คำเตือน 
                                            <span class="text-danger">*</span><i class="fas fa-lg fa-fw m-r-10 fa-angle-down"></i>
                                            <h5 class="text-danger">กรอกข้อมูลที่เป็น * เพื่อประโยชน์สำหรับการสั่งซื้อ</h5>
                                        </label>
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