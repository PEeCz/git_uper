    <!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active">แก้ไขเมนู</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header text-center">แก้ไขเมนู <small>เช่น Windows </small></h1>
			<!-- end page-header -->
			
            <!-- begin row -->
            <div class="row">
                <div class="col-lg-3"></div>
			    <!-- begin col-6 -->
			    <div class="col-lg-6">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">แก้ไขเมนู 
                                <small class="text-danger"> ID : <?= isset($getmenubyid->id) ? $getmenubyid->id : '' ?></small>
                            </h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <label for="name">ชื่อเมนู <span class="text-danger">*</span></label>
                                    <?php echo form_error('name','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="name" name="name" value="<?= isset($getmenubyid->name) ? $getmenubyid->name : '' ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="rank">ลำดับเมนู <span class="text-danger">*</span></label>
                                    <?php echo form_error('rank','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="rank" name="rank" value="<?= isset($getmenubyid->rank) ? $getmenubyid->rank : '' ?>" />
                                </div>
                                <input type="hidden" name="id" value="<?= isset($getmenubyid->id) ? $getmenubyid->id : '' ?>">
                                <button type="submit" class="btn btn-sm btn-primary m-r-5">แก้ไขเมนู</button>
                                <a href="<?= base_url('Backend/addMenu'); ?>" class="btn btn-sm btn-warning m-r-5">ยกเลิก</a>
                            </form>
                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
                <div class="col-lg-3"></div>
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->