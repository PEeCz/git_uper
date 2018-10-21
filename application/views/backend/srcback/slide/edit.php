    <!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active">แก้ไขสไลด์สินค้า</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header text-center">แก้ไขสไลด์สินค้า</h1>
			<!-- end page-header -->
			
                        <!-- begin row -->
            <div class="row">
			    <!-- begin col-12 -->
			    <div class="col-lg-12">
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
                            <h4 class="panel-title text-danger">แก้ไขสไลด์สินค้า ID : <?= isset($getproductslidebyid->slide_id) ? $getproductslidebyid->slide_id : '' ?></h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="slide_title">ชื่อสินค้า <span class="text-danger">*</span></label>
                                    <?php echo form_error('slide_title','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="slide_title" name="slide_title" value="<?= isset($getproductslidebyid->slide_title) ? $getproductslidebyid->slide_title : '' ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="slide_subdescription">รายละเอียดย่อย <span class="text-danger">*</span></label>
                                    <?php echo form_error('slide_subdescription','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="slide_subdescription" name="slide_subdescription" value="<?= isset($getproductslidebyid->slide_subdescription) ? $getproductslidebyid->slide_subdescription : '' ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="slide_main_price">ราคาทางการ <span class="text-danger">*</span></label>
                                    <?php echo form_error('slide_main_price','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="slide_main_price" name="slide_main_price" value="<?= isset($getproductslidebyid->slide_main_price) ? $getproductslidebyid->slide_main_price : '' ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="slide_volume_price">ราคา Volume <span class="text-danger">*</span></label>
                                    <?php echo form_error('slide_volume_price','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="slide_volume_price" name="slide_volume_price" value="<?= isset($getproductslidebyid->slide_volume_price) ? $getproductslidebyid->slide_volume_price : '' ?>" />
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-1 col-form-label" for="slide_category">หมวดหมู่ : </label>
                                    <div class="col-md-3">
                                        <select class="form-control selectpicker" name="slide_category" data-size="10" data-live-search="true" data-style="btn-success">
                                            ?>
                                            <option class="text-center" <?=($getproductslidebyid->slide_category==$showproductslide->slide_category ? 'selected="selected"':''); ?> value="<?=$showproductslide->slide_category; ?>">
                                                <?=$getproductslidebyid->slide_category; ?>
                                            </option>
                                            <?php foreach($getcategory AS $getcat) : ?>
                                            <option class="text-center" value="<?=$getcat->cat_name; ?>">
                                                <?=$getcat->cat_name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slide_description">รายละเอียดสินค้า <span class="text-danger">*</span></label>
                                    <?php echo form_error('slide_description','<small class="text-danger">','</small>'); ?>
                                    <textarea class="ckeditor" id="editor1" name="slide_description" rows="20"><?= isset($getproductslidebyid->slide_description) ? $getproductslidebyid->slide_description : '' ?></textarea>>
                                </div>

                                <?php /*<div class="form-group">
                                    <label class="btn btn-primary fileinput-button m-r-3" for="files">เพิ่มรูปภาพสินค้า 
                                        <span class="text-danger">*</span>
                                    </label>
                                            <span>รูปภาพ</span>
                                            <input type="file" name="files" onchange="show_file.innerText = this.value">
                                            <span id="show_file"></span>
                                </div>*/ ?>

                                <div class="row fileupload-buttonbar">
                                    <div class="col-md-7">
                                        <span class="btn btn-primary fileinput-button m-r-3">
                                            <i class="fa fa-plus"></i>
                                            <span>Add Picture</span>
                                            <input type="file" id="slide_image" name="slide_image" onchange="show_file.innerText = this.value">
                                            <?php foreach($showproductslide AS $getproductslide) : ?>
                                            <input type="hidden" name="h_slide_image" value="<?=$getproductslide->slide_image; ?>">
                                            <?php endforeach; ?>
                                        </span>
                                        <span id="show_file"></span>
                                    </div>
                                </div>
                                <input type="hidden" name="slide_id" value="<?= isset($getproductslidebyid->slide_id) ? $getproductslidebyid->slide_id : '' ?>">
                                <button type="submit" class="btn btn-sm btn-primary m-r-5">แก้ไขสินค้า</button>
                            </form>

                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->