		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="<?php echo base_url(); ?>assets/img/user/user-13.jpg" alt="" />
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								Sean Ngu
								<small>Front end developer</small>
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
                            <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                            <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
                        </ul>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="active"><a href="<?= base_url('Backend/index'); ?>"><i class="fa fa-home"></i>Dashboard</a></li>
					<li class="has-sub">
						<a href="javascript:;">
							<span class="badge pull-right">10</span>
							<i class="far fa-envelope"></i> 
							<span>อีเมล</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="#">Inbox</a></li>
						    <li><a href="#">Compose</a></li>
						    <li><a href="#">Detail</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="<?= base_url('Backend/addProductSlide'); ?>">
						    <i class="fas fa-images"></i>
						    <span>โพสต์สไลด์หลัก </span> 
						</a>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
							<i class="fab fa-medium-m"></i> 
						    <span>Menu <span class="label label-theme m-l-5">เมนู</span></span> 
						</a>
						<ul class="sub-menu">
							<li><a href="<?php echo base_url('Backend/addMenu'); ?>">เมนูหลัก</a></li>
							<li><a href="<?php echo base_url('Backend/addMenuSub'); ?>">เมนูย่อย</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="<?= base_url('Backend/addCategory'); ?>">
						    <i class="fas fa-archive"></i>
						    <span>หมวดหมู่สินค้า </span> 
						</a>
					</li>
					<li>
						<a href="<?= base_url('Backend/addProduct'); ?>">
							<i class="fas fa-shopping-cart"></i>
						    <span>โพสต์สินค้า </span> 
						</a>
					</li>
					<li>
						<a href="<?= base_url('Invoice/manageInvoice'); ?>">
							<i class="fas fa-shopping-cart"></i>
						    <span>จัดการใบ Invoice </span> 
						</a>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <i class="fas fa-calendar-alt"></i>
						    <span>ปฏิทินงาน</span> 
						</a>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fa fa-table"></i>
						    <span>ตารางสมาชิก</span>
						</a>
						<ul class="sub-menu">
							<li><a href="javascript:;"><b class="caret pull-right"></b> รายชื่อ Admin</a></li>
							<li><a href="javascript:;"><b class="caret pull-right"></b> รายชื่อ User</a></li>
						</ul>
					</li>
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>