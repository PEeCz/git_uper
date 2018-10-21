    <!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active">เพิ่มสินค้า</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header text-center">เพิ่มสินค้า</h1>
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
                            <h4 class="panel-title">เพิ่มสินค้า</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="product_title">ชื่อสินค้า (Title) <span class="text-danger">*</span></label>
                                    <?php echo form_error('product_title','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="product_title" name="product_title" placeholder="Ex. Adobe Illustrator CC" />
                                </div>
                                <div class="form-group">
                                    <label for="name_product">ชื่อสินค้า <span class="text-danger">*</span></label>
                                    <?php echo form_error('name_product','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="name_product" name="name_product" placeholder="Ex. Adobe Illustrator CC Multiple Platforms Multi Asian Languages Licensing" />
                                </div>
                                <div class="form-group">
                                    <label for="part_number">Part Number <small>(P/N)</small> <span class="text-danger">*</span></label>
                                    <?php echo form_error('part_number','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="part_number" name="part_number" placeholder="Ex. 14002303" />
                                </div>
                                <div class="form-group">
                                    <label for="main_price">ราคาทางการ <span class="text-danger">*</span></label>
                                    <?php echo form_error('main_price','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="main_price" name="main_price" placeholder="Ex. 12,000" />
                                </div>
                                <div class="form-group">
                                    <label for="volume_price">ราคา Volume <span class="text-danger">*</span></label>
                                    <?php echo form_error('volume_price','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="volume_price" name="volume_price" placeholder="Ex. 12,000" />
                                </div>
                                <div class="panel-body p-t-10">
                                    <div class="row row-space-10">
                                        <div class="col-md-2">
                                            <div class="form-group m-b-10 p-t-5">
                                                <label>ราคาลำดับ Volume : </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group m-b-10">
                                                <input class="form-control form-control-sm" type="text" name="volume_price1" placeholder="Volume 1" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group m-b-10">
                                                <input class="form-control form-control-sm" type="text" name="volume_price2" placeholder="Volume 2" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group m-b-10">
                                                <input class="form-control form-control-sm" type="text" name="volume_price3" placeholder="Volume 3" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group m-b-10">
                                                <input class="form-control form-control-sm" type="text" name="volume_price4" placeholder="Volume 4" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:;" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your Firstname"></a>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-center" for="inout_stock">IN/OUT Stock : </label>
                                    <div class="col-md-2">
                                        <select class="form-control" name="inout_stock">
                                            <option class="text-center" value="0" selected>-- เลือกสต๊อก --</option>
                                            <option class="text-center" value="1">IN Stock</option>
                                            <option class="text-center" value="2">OUT Stock</option>
                                        </select>
                                    </div>
                                    <label class="col-md-1 col-form-label" for="product_category">หมวดหมู่ 1 : </label>
                                    <div class="col-md-2">
                                        <select class="form-control" name="product_category">
                                            <option class="text-center" value="" selected>-- เลือกหมวดหมู่สินค้า --</option>
                                            <?php foreach($getcategory AS $getcat): ?>
                                            <option class='text-center' value="<?= $getcat->cat_name; ?>"><?= $getcat->cat_name; ?></option>
                                            <?php endforeach ; ?>
                                        </select>
                                    </div>
                                    <label class="col-md-2 col-form-label text-right" for="product_subcategory">หมวดหมู่ย่อย 1 : </label>
                                    <div class="col-md-3">
                                        <select class="form-control" name="product_subcategory">
                                            <option class="text-center" value="" selected>-- เลือกหัวข้อเมนูย่อย --</option>
                                            <optgroup label="Windows">
                                            <?php foreach($getsubcategorywindows AS $getwindows): ?>
                                                <option class="text-center" value="<?=$getwindows->subcat_name; ?>">- <?=$getwindows->subcat_name; ?></option>
                                            <?php endforeach; ?>
                                            </optgroup>
                                            <optgroup label="Office">
                                                <?php foreach($getsubcategoryoffice AS $getoffice): ?>
                                                <option class="text-center" value="<?=$getoffice->subcat_name; ?>">- <?=$getoffice->subcat_name; ?></option>
                                            <?php endforeach; ?>
                                            </optgroup>
                                            <optgroup label="Microsoft">
                                                <?php foreach($getsubcategorymicrosoft AS $getmicrosoft): ?>
                                                <option class="text-center" value="<?=$getmicrosoft->subcat_name; ?>">- <?=$getmicrosoft->subcat_name; ?></option>
                                            <?php endforeach; ?>
                                            </optgroup>
                                            <optgroup label="Adobe">
                                                <?php foreach($getsubcategoryadobe AS $getadobe): ?>
                                                <option class="text-center" value="<?=$getadobe->subcat_name; ?>">- <?=$getadobe->subcat_name; ?></option>
                                            <?php endforeach; ?>
                                            </optgroup>
                                            <optgroup label="AutoCAD">
                                                <?php foreach($getsubcategoryautocad AS $getautocad): ?>
                                                <option class="text-center" value="<?=$getautocad->subcat_name; ?>">- <?=$getautocad->subcat_name; ?></option>
                                            <?php endforeach; ?>
                                            </optgroup>
                                    </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                    </div>
                                    <label class="col-md-1 col-form-label" for="product_category2">หมวดหมู่ 2 : </label>
                                    <div class="col-md-2">
                                        <select class="form-control" name="product_category2">
                                            <option class="text-center" value="" selected>-- เลือกหมวดหมู่สินค้า --</option>
                                            <?php foreach($getcategory AS $getcat): ?>
                                            <option class='text-center' value="<?= $getcat->cat_name; ?>"><?= $getcat->cat_name; ?></option>
                                            <?php endforeach ; ?>
                                        </select>
                                    </div>
                                    <label class="col-md-2 col-form-label text-right" for="product_subcategory2">หมวดหมู่ย่อย 2 : </label>
                                    <div class="col-md-3">
                                        <select class="form-control" name="product_subcategory2">
                                            <option class="text-center" value="" selected>-- เลือกหัวข้อเมนูย่อย --</option>
                                            <optgroup label="Windows">
                                            <?php foreach($getsubcategorywindows AS $getwindows): ?>
                                                <option class="text-center" value="<?=$getwindows->subcat_name; ?>">- <?=$getwindows->subcat_name; ?></option>
                                            <?php endforeach; ?>
                                            </optgroup>
                                            <optgroup label="Office">
                                                <?php foreach($getsubcategoryoffice AS $getoffice): ?>
                                                <option class="text-center" value="<?=$getoffice->subcat_name; ?>">- <?=$getoffice->subcat_name; ?></option>
                                            <?php endforeach; ?>
                                            </optgroup>
                                            <optgroup label="Microsoft">
                                                <?php foreach($getsubcategorymicrosoft AS $getmicrosoft): ?>
                                                <option class="text-center" value="<?=$getmicrosoft->subcat_name; ?>">- <?=$getmicrosoft->subcat_name; ?></option>
                                            <?php endforeach; ?>
                                            </optgroup>
                                            <optgroup label="Adobe">
                                                <?php foreach($getsubcategoryadobe AS $getadobe): ?>
                                                <option class="text-center" value="<?=$getadobe->subcat_name; ?>">- <?=$getadobe->subcat_name; ?></option>
                                            <?php endforeach; ?>
                                            </optgroup>
                                            <optgroup label="AutoCAD">
                                                <?php foreach($getsubcategoryautocad AS $getautocad): ?>
                                                <option class="text-center" value="<?=$getautocad->subcat_name; ?>">- <?=$getautocad->subcat_name; ?></option>
                                            <?php endforeach; ?>
                                            </optgroup>
                                    </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                    </div>
                                    <label class="col-md-1 col-form-label" for="product_category3">หมวดหมู่ 3 : </label>
                                    <div class="col-md-2">
                                        <select class="form-control" name="product_category3">
                                            <option class="text-center" value="" selected>-- เลือกหมวดหมู่สินค้า --</option>
                                            <?php foreach($getcategory AS $getcat): ?>
                                            <option class='text-center' value="<?= $getcat->cat_name; ?>"><?= $getcat->cat_name; ?></option>
                                            <?php endforeach ; ?>
                                        </select>
                                    </div>
                                    <label class="col-md-2 col-form-label text-right" for="product_subcategory3">หมวดหมู่ย่อย 3 : </label>
                                    <div class="col-md-3">
                                        <select class="form-control" name="product_subcategory3">
                                            <option class="text-center" value="" selected>-- เลือกหัวข้อเมนูย่อย --</option>
                                            <optgroup label="Windows">
                                            <?php foreach($getsubcategorywindows AS $getwindows): ?>
                                                <option class="text-center" value="<?=$getwindows->subcat_name; ?>">- <?=$getwindows->subcat_name; ?></option>
                                            <?php endforeach; ?>
                                            </optgroup>
                                            <optgroup label="Office">
                                                <?php foreach($getsubcategoryoffice AS $getoffice): ?>
                                                <option class="text-center" value="<?=$getoffice->subcat_name; ?>">- <?=$getoffice->subcat_name; ?></option>
                                            <?php endforeach; ?>
                                            </optgroup>
                                            <optgroup label="Microsoft">
                                                <?php foreach($getsubcategorymicrosoft AS $getmicrosoft): ?>
                                                <option class="text-center" value="<?=$getmicrosoft->subcat_name; ?>">- <?=$getmicrosoft->subcat_name; ?></option>
                                            <?php endforeach; ?>
                                            </optgroup>
                                            <optgroup label="Adobe">
                                                <?php foreach($getsubcategoryadobe AS $getadobe): ?>
                                                <option class="text-center" value="<?=$getadobe->subcat_name; ?>">- <?=$getadobe->subcat_name; ?></option>
                                            <?php endforeach; ?>
                                            </optgroup>
                                            <optgroup label="AutoCAD">
                                                <?php foreach($getsubcategoryautocad AS $getautocad): ?>
                                                <option class="text-center" value="<?=$getautocad->subcat_name; ?>">- <?=$getautocad->subcat_name; ?></option>
                                            <?php endforeach; ?>
                                            </optgroup>
                                    </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                    </div>
                                    <label class="col-md-1 col-form-label" for="product_category4">หมวดหมู่ 4 : </label>
                                    <div class="col-md-2">
                                        <select class="form-control" name="product_category4">
                                            <option class="text-center" value="" selected>-- เลือกหมวดหมู่สินค้า --</option>
                                            <?php foreach($getcategory AS $getcat): ?>
                                            <option class='text-center' value="<?= $getcat->cat_name; ?>"><?= $getcat->cat_name; ?></option>
                                            <?php endforeach ; ?>
                                        </select>
                                    </div>
                                    <label class="col-md-2 col-form-label text-right" for="product_subcategory4">หมวดหมู่ย่อย 4 : </label>
                                    <div class="col-md-3">
                                        <select class="form-control" name="product_subcategory4">
                                        <option class="text-center" value="" selected>-- เลือกหัวข้อเมนูย่อย --</option>
                                        <optgroup label="Windows">
                                        <?php foreach($getsubcategorywindows AS $getwindows): ?>
                                            <option class="text-center" value="<?=$getwindows->subcat_name; ?>">- <?=$getwindows->subcat_name; ?></option>
                                        <?php endforeach; ?>
                                        </optgroup>
                                        <optgroup label="Office">
                                            <?php foreach($getsubcategoryoffice AS $getoffice): ?>
                                            <option class="text-center" value="<?=$getoffice->subcat_name; ?>">- <?=$getoffice->subcat_name; ?></option>
                                        <?php endforeach; ?>
                                        </optgroup>
                                        <optgroup label="Microsoft">
                                            <?php foreach($getsubcategorymicrosoft AS $getmicrosoft): ?>
                                            <option class="text-center" value="<?=$getmicrosoft->subcat_name; ?>">- <?=$getmicrosoft->subcat_name; ?></option>
                                        <?php endforeach; ?>
                                        </optgroup>
                                        <optgroup label="Adobe">
                                            <?php foreach($getsubcategoryadobe AS $getadobe): ?>
                                            <option class="text-center" value="<?=$getadobe->subcat_name; ?>">- <?=$getadobe->subcat_name; ?></option>
                                        <?php endforeach; ?>
                                        </optgroup>
                                        <optgroup label="AutoCAD">
                                            <?php foreach($getsubcategoryautocad AS $getautocad): ?>
                                            <option class="text-center" value="<?=$getautocad->subcat_name; ?>">- <?=$getautocad->subcat_name; ?></option>
                                        <?php endforeach; ?>
                                        </optgroup>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description">รายละเอียดสินค้า <span class="text-danger">*</span></label>
                                    <?php echo form_error('description','<small class="text-danger">','</small>'); ?>
                                    <textarea class="ckeditor" id="editor1" name="description" rows="20"></textarea>
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
                                        <span class="btn btn-success fileinput-button m-r-3">
                                            <i class="fa fa-plus"></i>
                                            <span>Add Picture</span>
                                            <input type="file" id="file_img" name="file_img" onchange="show_file.innerText = this.value">
                                        </span>
                                        <span id="show_file"></span>
                                        <?php echo form_error('file_img','<small class="text-danger">','</small>'); ?>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-sm btn-primary m-r-5">เพิ่มสินค้า</button>
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