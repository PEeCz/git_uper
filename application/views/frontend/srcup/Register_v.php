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
                    <form action="<?php echo base_url('Home/createacc'); ?>" method="POST" class="margin-bottom-0">
                        <label class="control-label">Email <span class="text-danger">*</span></label>
                        <?php echo form_error('email','<small class="text-danger">','</small>'); ?>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="email" placeholder="Email Address" />
                            </div>
                        </div>
                        <label class="control-label">Password <span class="text-danger">*</span></label>
                        <?php echo form_error('password','<small class="text-danger">','</small>'); ?>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password" placeholder="Password" />
                            </div>
                        </div>
                        <label class="control-label">Repeat Password <span class="text-danger">*</span></label>
                        <?php echo form_error('repeatpassword','<small class="text-danger">','</small>'); ?>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="repeatpassword" placeholder="Repeat Password" />
                            </div>
                        </div>
                        <div class="register-buttons">
                            <button type="submit" class="btn btn-success btn-block btn-lg">ลงทะเบียนสมาชิก</button>
                        </div>

                    </form>
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            หากมีสมาชิกอยู่แล้ว <a href="login_v3.html">ล็อคอิน</a>
                        </div>
                        <hr />
                        <p class="text-center">
                            &copy; Color Admin All Right Reserved 2018
                        </p>
                    </div>

            </div>
        </div>