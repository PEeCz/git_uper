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
                                <h4><i class="fas fa-lg fa-fw m-r-10 fa-info text-muted"></i> Information</h4>
                                <ul class="nav nav-list">
                                    <li><a href="<?=base_url('Order/myOrder'); ?>">My Orders</a></li>
                                    <li><a href="#">Billing Agreement</a></li>
                                    <li><a href="#">Recurring Profiles</a></li>
                                    <li><a href="#">Cancel Orders</a></li>
                                    <li><a href="#">Invoice List</a></li>
                                    <li><a href="#">My Product Reviews</a></li>
                                    <li><a href="#">Newsletter Subscriptions</a></li>
                                    <li><a href="#">My Downloadable Products</a></li>
                                </ul>
                                <?php if($_SESSION['ses_user_level']=='1' || $_SESSION['ses_user_level']=='2' || $_SESSION['ses_user_level']=='3'){ ?>
                                <h4><i class="fas fa-user-secret fa-fw m-r-10 fa-info text-muted"></i> Admin Page</h4>
                                <ul class="nav nav-list">
                                    <li><a href="<?= base_url('Backend'); ?>" class="text-success"><strong>Backend</strong></a></li>
                                </ul>
                                <?php } ?>
                            </div>
                            <!-- END col-6 -->
                            <!-- BEGIN col-6 -->
                            <div class="col-md-6">
                                <h4><i class="fas fa-lg fa-fw m-r-10 fa-user-circle text-muted"></i> Account Setting</h4>
                                <ul class="nav nav-list">
                                    <li><a href="<?= base_url('Home/editSecure'); ?>">Edit Your Email & Password</a></li>
                                    <li><a href="<?= base_url('Home/editInformation'); ?>">Update Address Book</a></li>
                                    <li><a href="#">Email Inbox</a></li>
                                    <li><a href="<?= base_url('Home/logout'); ?>" class="text-danger"><strong>Logout</strong></a></li>
                                </ul>
                                <h4><i class="fas fa-lg fa-fw m-r-10 fa-tags text-muted"></i> Wishlist</h4>
                                <ul class="nav nav-list">
                                    <li><a href="#">My Wishlist</a></li>
                                    <li><a href="#">My Tags</a></li>
                                    <li><a href="#">My Comments</a></li>
                                </ul>
                            </div>
                            <!-- END col-6 -->
                        </div>
                        <!-- END row -->
                    </div>
                    <!-- END account-body -->
                </div>

            </div>
        </div>