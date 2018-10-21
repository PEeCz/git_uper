    <!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active">แก้ไขเมนูย่อย</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header text-center">แก้ไขเมนูย่อย <small>เช่น Windows </small></h1>
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
                                <small class="text-danger"> ID : <?= isset($getsubmenubyid->id) ? $getsubmenubyid->id : '' ?></small>
                            </h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <label for="name">ชื่อเมนูย่อย <span class="text-danger">*</span></label>
                                    <?php echo form_error('name','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="name" name="name" value="<?= isset($getsubmenubyid->name) ? $getsubmenubyid->name : '' ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="name">ชื่อเมนูย่อย <span class="text-danger">*</span></label>
                                    <select class="form-control" name="mainmenu_category">
                                        <option class='text-center' <?=($getsubmenubyid->mainmenu_category==$showsubmenu->mainmenu_category ? 'selected="selected"':''); ?> value="<?= $showsubmenu->mainmenu_category; ?>"><?= $getsubmenubyid->mainmenu_category; ?></option>
                                        <?php foreach($showmenu AS $getmainmenu): ?>
                                        <option class='text-center' value="<?= $getmainmenu->name; ?>"><?= $getmainmenu->name; ?></option>
                                        <?php endforeach ; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">หัวข้อ <span class="text-danger">*</span></label>
                                    <select class="form-control" name="title_submenu">
                                        <option class="text-center" <?=($getsubmenubyid->title_submenu==$showsubmenu->title_submenu ? 'selected="selected"':''); ?> value="<?= $showsubmenu->title_submenu; ?>"><?= $getsubmenubyid->title_submenu; ?></option>
                                        <optgroup label="Windows">
                                            <option class="text-center" value="Windows">- Windows</option>
                                            <option class="text-center" value="Windows Server">- Windows Server</option>
                                            <option class="text-center" value="Windows CAL">- Windows CAL</option>
                                        </optgroup>
                                        <optgroup label="Office">
                                            <option class="text-center" value="จ่ายครั้งเดียว">- จ่ายครั้งเดียว</option>
                                            <option class="text-center" value="จ่ายรายปี">- จ่ายรายปี</option>
                                            <option class="text-center" value="จ่ายรายเดือน หรือ รายปี (วันหมดอายุ Fix ทุกปี)">- จ่ายรายเดือน หรือ รายปี (วันหมดอายุ Fix ทุกปี)</option>
                                        </optgroup>
                                        <optgroup label="Microsoft">
                                            <option class="text-center" value="On Premise : Desktop">- On Premise : Desktop</option>
                                            <option class="text-center" value="On Premise : Server">- On Premise : Server</option>
                                            <option class="text-center" value="On Cloud">- On Cloud</option>
                                            <option class="text-center" value="Remote Desktop">- Remote Desktop</option>
                                            <option class="text-center" value="Exchange Server">- Exchange Server</option>
                                            <option class="text-center" value="Windows Server CAL">- Windows Server CAL</option>
                                            <option class="text-center" value="Exchange Standard CAL">- Exchange Standard CAL</option>
                                            <option class="text-center" value="Exchange Enterprise CAL">- Exchange Enterprise CAL</option>
                                            <option class="text-center" value="SQL Server">- SQL Server</option>
                                            <option class="text-center" value="SQL CAL">- SQL CAL</option>
                                        </optgroup>
                                        <optgroup label="Adobe">
                                            <option class="text-center" value="Acrobat ลิขสิทธิ์ถาวร">- Acrobat ลิขสิทธิ์ถาวร</option>
                                            <option class="text-center" value="Acrobat ลิขสิทธิ์ Upgrade รายปี">- Acrobat ลิขสิทธิ์ Upgrade รายปี</option>
                                            <option class="text-center" value="Creative Cloud Team ลิขสิทธิ์ Upgrade รายปี">- Creative Cloud Team ลิขสิทธิ์ Upgrade รายปี</option>
                                            <option class="text-center" value="Single Apps ลิขสิทธิ์ Upgrade รายปี">- Single Apps ลิขสิทธิ์ Upgrade รายปี</option>
                                        </optgroup>
                                        <optgroup label="AutoCAD">
                                            <option class="text-center" value="AutoCAD">- AutoCAD</option>
                                            <option class="text-center" value="Maya">- Maya</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="rank">ลำดับเมนูย่อย <span class="text-danger">*</span></label>
                                    <?php echo form_error('rank','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="rank" name="rank" value="<?= isset($getsubmenubyid->rank) ? $getsubmenubyid->rank : '' ?>" />
                                </div>
                                <input type="hidden" name="id" value="<?= isset($getsubmenubyid->id) ? $getsubmenubyid->id : '' ?>">
                                <button type="submit" class="btn btn-sm btn-primary m-r-5">แก้ไขเมนูย่อย</button>
                                <a href="<?= base_url('Backend/editMenuSub'); ?>" class="btn btn-sm btn-warning m-r-5">ยกเลิก</a>
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