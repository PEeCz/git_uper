    <!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active">แก้ไขสินค้า</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header text-center">แก้ไขสินค้า</h1>
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
                            <h4 class="panel-title text-danger">แก้ไขสินค้า ID : <?= isset($getproductbyid->product_id) ? $getproductbyid->product_id : '' ?></h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="product_title">ชื่อสินค้า (Title) <span class="text-danger">*</span></label>
                                    <?php echo form_error('product_title','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="product_title" name="product_title" value="<?= isset($getproductbyid->product_title) ? $getproductbyid->product_title : '' ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="name_product">ชื่อสินค้า <span class="text-danger">*</span></label>
                                    <?php echo form_error('name_product','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="name_product" name="name_product" value="<?= isset($getproductbyid->product_name) ? $getproductbyid->product_name : '' ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="part_number">Part Number <small>(P/N)</small> <span class="text-danger">*</span></label>
                                    <?php echo form_error('part_number','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="part_number" name="part_number" value="<?= isset($getproductbyid->product_pn) ? $getproductbyid->product_pn : '' ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="main_price">ราคาทางการ <span class="text-danger">*</span></label>
                                    <?php echo form_error('main_price','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="main_price" name="main_price" value="<?= isset($getproductbyid->product_mprice) ? $getproductbyid->product_mprice : '' ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="volume_price">ราคา Volume <span class="text-danger">*</span></label>
                                    <?php echo form_error('volume_price','<small class="text-danger">','</small>'); ?>
                                    <input type="text" class="form-control" id="volume_price" name="volume_price" value="<?= isset($getproductbyid->product_vprice) ? $getproductbyid->product_vprice : '' ?>" />
                                </div>
                                <div class="panel-body p-t-10">
                                    <div class="row row-space-10">
                                        <div class="col-md-2">
                                            <div class="form-group m-b-10 p-t-5">
                                                <label>ราคาลำดับ Volume </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group m-b-10">
                                                <input class="form-control form-control-sm" type="text" name="volume_price1" value="<?= isset($getproductbyid->product_vprice1) ? $getproductbyid->product_vprice1 : '' ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group m-b-10">
                                                <input class="form-control form-control-sm" type="text" name="volume_price2" value="<?= isset($getproductbyid->product_vprice2) ? $getproductbyid->product_vprice2 : '' ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group m-b-10">
                                                <input class="form-control form-control-sm" type="text" name="volume_price3" value="<?= isset($getproductbyid->product_vprice3) ? $getproductbyid->product_vprice3 : '' ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group m-b-10">
                                                <input class="form-control form-control-sm" type="text" name="volume_price4" value="<?= isset($getproductbyid->product_vprice4) ? $getproductbyid->product_vprice4 : '' ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="inout_stock">IN/OUT Stock : </label>
                                    <div class="col-md-2">
                                        <select class="form-control selectpicker" name="inout_stock" data-size="10" data-live-search="true" data-style="btn-success">
                                            <option class="text-center" <?=($getproductbyid->product_stock==$showproduct->product_stock ? 'selected=""':''); ?> value="<?=$getproductbyid->product_stock; ?>">
                                                <?php 
                                                    if($getproductbyid->product_stock == '1'){
                                                        echo "IN Stock";
                                                    }else if($getproductbyid->product_stock == '2'){
                                                        echo " OUT Stock";
                                                    }
                                                ?>
                                            </option>
                                            <option class="text-center" value="1">IN Stock</option>
                                            <option class="text-center" value="2">OUT Stock</option>
                                        </select>
                                    </div>
                                    <label class="col-md-1 col-form-label" for="product_category">หมวดหมู่ : </label>
                                    <div class="col-md-2">
                                        <select class="form-control selectpicker" name="product_category" data-size="10" data-live-search="true" data-style="btn-success">
                                            ?>
                                            <option class="text-center" <?=($getproductbyid->product_category==$showproduct->product_category ? 'selected="selected"':''); ?> value="<?=$showproduct->product_category; ?>">
                                                <?=$getproductbyid->product_category; ?>
                                            </option>
                                            <?php foreach($getcategory AS $getcat) : ?>
                                            <option class="text-center" value="<?=$getcat->cat_name; ?>">
                                                <?=$getcat->cat_name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <label class="col-md-2 col-form-label" for="product_subcategory">หมวดหมู่ย่อย : </label>
                                    <div class="col-md-3">
                                        <select class="form-control selectpicker" name="product_subcategory" data-size="10" data-live-search="true" data-style="btn-success">
                                            ?>
                                            <option class="text-center" <?=($getproductbyid->product_subcategory==$showproduct->product_subcategory ? 'selected="selected"':''); ?> value="<?=$showproduct->product_subcategory; ?>">
                                                <?=$getproductbyid->product_subcategory; ?>
                                            </option>
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
                                    <label class="col-md-1 col-form-label" for="product_category2">หมวดหมู่ : </label>
                                    <div class="col-md-2">
                                        <select class="form-control selectpicker" name="product_category2" data-size="10" data-live-search="true" data-style="btn-success">
                                            ?>
                                            <option class="text-center" <?=($getproductbyid->product_category2==$showproduct->product_category2 ? 'selected="selected"':''); ?> value="<?=$showproduct->product_category2; ?>">
                                                <?=$getproductbyid->product_category2; ?>
                                            </option>
                                            <?php foreach($getcategory AS $getcat) : ?>
                                            <option class="text-center" value="<?=$getcat->cat_name; ?>">
                                                <?=$getcat->cat_name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <label class="col-md-2 col-form-label" for="product_subcategory2">หมวดหมู่ย่อย : </label>
                                    <div class="col-md-3">
                                        <select class="form-control selectpicker" name="product_subcategory2" data-size="10" data-live-search="true" data-style="btn-success">
                                            ?>
                                            <option class="text-center" <?=($getproductbyid->product_subcategory2==$showproduct->product_subcategory2 ? 'selected="selected"':''); ?> value="<?=$showproduct->product_subcategory2; ?>">
                                                <?=$getproductbyid->product_subcategory2; ?>
                                            </option>
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
                                    <label class="col-md-1 col-form-label" for="product_category">หมวดหมู่ : </label>
                                    <div class="col-md-2">
                                        <select class="form-control selectpicker" name="product_category3" data-size="10" data-live-search="true" data-style="btn-success">
                                            ?>
                                            <option class="text-center" <?=($getproductbyid->product_category3==$showproduct->product_category3 ? 'selected="selected"':''); ?> value="<?=$showproduct->product_category3; ?>">
                                                <?=$getproductbyid->product_category3; ?>
                                            </option>
                                            <?php foreach($getcategory AS $getcat) : ?>
                                            <option class="text-center" value="<?=$getcat->cat_name; ?>">
                                                <?=$getcat->cat_name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <label class="col-md-2 col-form-label" for="product_subcategory3">หมวดหมู่ย่อย : </label>
                                    <div class="col-md-3">
                                        <select class="form-control selectpicker" name="product_subcategory3" data-size="10" data-live-search="true" data-style="btn-success">
                                            ?>
                                            <option class="text-center" <?=($getproductbyid->product_subcategory3==$showproduct->product_subcategory3 ? 'selected="selected"':''); ?> value="<?=$showproduct->product_subcategory3; ?>">
                                                <?=$getproductbyid->product_subcategory3; ?>
                                            </option>
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
                                    <label class="col-md-1 col-form-label" for="product_category4">หมวดหมู่ : </label>
                                    <div class="col-md-2">
                                        <select class="form-control selectpicker" name="product_category4" data-size="10" data-live-search="true" data-style="btn-success">
                                            ?>
                                            <option class="text-center" <?=($getproductbyid->product_category4==$showproduct->product_category4 ? 'selected="selected"':''); ?> value="<?=$showproduct->product_category4; ?>">
                                                <?=$getproductbyid->product_category4; ?>
                                            </option>
                                            <?php foreach($getcategory AS $getcat) : ?>
                                            <option class="text-center" value="<?=$getcat->cat_name; ?>">
                                                <?=$getcat->cat_name; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <label class="col-md-2 col-form-label" for="product_subcategory4">หมวดหมู่ย่อย : </label>
                                    <div class="col-md-3">
                                        <select class="form-control selectpicker" name="product_subcategory4" data-size="10" data-live-search="true" data-style="btn-success">
                                            ?>
                                            <option class="text-center" <?=($getproductbyid->product_subcategory4==$showproduct->product_subcategory4 ? 'selected="selected"':''); ?> value="<?=$showproduct->product_subcategory4; ?>">
                                                <?=$getproductbyid->product_subcategory4; ?>
                                            </option>
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
                                    <textarea class="ckeditor" id="editor1" name="description" rows="20"><?= isset($getproductbyid->product_detail) ? $getproductbyid->product_detail : '' ?></textarea>
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
                                            <span>Edit Picture</span>
                                            <input type="file" id="file_img" name="file_img" onchange="show_file.innerText = this.value">
                                            <input type="hidden" name="h_file_img" value="<?=$getproductbyid->product_img; ?>">
                                        </span>
                                        <span id="show_file"><?=$getproductbyid->product_img; ?></span>
                                    </div>
                                </div>
                                <input type="hidden" name="pro_id" value="<?= isset($getproductbyid->product_id) ? $getproductbyid->product_id : '' ?>">
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