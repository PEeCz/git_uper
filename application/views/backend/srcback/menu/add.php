    <!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active">เพิ่มเมนูหลัก</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header text-center">เพิ่มเมนูหลัก <small>เช่น Windows </small></h1>
			<!-- end page-header -->
			
                        <!-- begin row -->
            <div class="row">
                <div class="col-lg-3"></div>
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
                            <h4 class="panel-title">เพิ่มเมนูหลัก</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <label for="name">ชื่อเมนู <span class="text-danger">*</span></label>
                                    <?php echo form_error('name','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Ex. Windows" />
                                </div>
                                <div class="form-group">
                                    <label for="rank">ลำดับเมนู <span class="text-danger">*</span></label>
                                    <?php echo form_error('rank','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="rank" name="rank" placeholder="Ex. 1" />
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary m-r-5">เพิ่มเมนูหลัก</button>
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