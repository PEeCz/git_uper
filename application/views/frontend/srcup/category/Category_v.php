
        <!-- BEGIN search-results -->
        <div id="search-results" class="section-container bg-silver">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN search-container -->
                <div class="search-container">
                    <!-- BEGIN search-content -->
                    <div class="search-content">
                        <!-- BEGIN search-toolbar -->
                        <div class="search-toolbar">
                            <!-- BEGIN row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>พบโปรโมชั่นทั้งหมด <?php echo $getcountpro; ?>  รายการ</h4>
                                </div>
                                <!-- END col-6 -->
                                <!-- BEGIN col-6 -->
                                <div class="col-md-6 text-right">
                                    <ul class="sort-list">
                                        <li class="text"><i class="fa fa-filter"></i> Sort by:</li>
                                        <li class="active"><a href="#">Popular</a></li>
                                        <li><a href="#">New Arrival</a></li>
                                        <li><a href="#">Discount</a></li>
                                        <li><a href="#">Price</a></li>
                                    </ul>
                                </div>
                                <!-- END col-6 -->
                            </div>
                            <!-- END row -->
                        </div>
                        <!-- END search-toolbar -->
                        <?php foreach($getallpromotion as $getpromotion): ?>
                        <!-- BEGIN Container -->
                        <div class="search-item-container">
                            <!-- BEGIN item-row -->
                            <div class="item-row">
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href=<?=base_url('Home/product_detail'.'/'.$getpromotion['product_id']); ?> class="item-image">
                                        <?php if($getpromotion['product_img']!=''){ ?>
                                        <img src="<?php echo base_url().'application/upload/product/'.$getpromotion['product_img']; ?>" alt="" />
                                        <div class="discount">15% OFF</div>
                                        <?php }else{ ?>
                                        <img class="img-responsive" src="<?php echo base_url().'assets/img/no-image.png'; ?>" alt="" />
                                        <div class="discount">15% OFF</div>
                                        <?php } ?>
                                    </a>
                                </div>
                                <div class="item item-thumbnail">
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href=<?=base_url('Home/product_detail'.'/'.$getpromotion['product_id']); ?>><?php echo $getpromotion['product_name']; ?><br /></a>
                                        </h4>
                                        <p class="item-desc"><?php echo substr(wordwrap($getpromotion['product_detail'],35,"<br>"),0,50); ?></p>
                                        <div class="item-price"><?php echo number_format($getpromotion['product_mprice']); ?> บาท</div>
                                        <div class="item-discount-price"><?php echo number_format($getpromotion['product_vprice']); ?> บาท</div>
                                    </div>
                                </div>
                                <div class="item item-thumbnail">
                                       	<a href="#" class="item-image btn btn-warning btn-md">ดูรายละเอียด</a>
                                </div>
                                <!-- END item -->
                            </div>
                            <!-- END item-row -->
                        </div>
                        <!-- END Container -->
                    	<?php endforeach; ?>
                        <!-- BEGIN pagination -->
                        <div class="text-center">
                            <ul class="pagination m-t-0">
                                <li class="disabled"><a href="javascript:;">Previous</a></li>
                                <li class="active"><a href="javascript:;">1</a></li>
                                <li><a href="javascript:;">2</a></li>
                                <li><a href="javascript:;">3</a></li>
                                <li><a href="javascript:;">4</a></li>
                                <li><a href="javascript:;">5</a></li>
                                <li><a href="javascript:;">Next</a></li>
                            </ul>
                        </div>
                        <!-- END pagination -->
                    </div>
                    <!-- END search-content -->
                    <!-- BEGIN search-sidebar -->
                    <div class="search-sidebar">
                        <h4 class="title m-b-0">Categories</h4>
                        <ul class="search-category-list">
                            <li><a href="<?=base_url('Home/category_promotion')?>">Promotion <span class="pull-right"><?php echo $getcountpro; ?></span></a></li>
                            <li><a href="<?=base_url('Home/category_windows')?>">Windows <span class="pull-right"><?php echo $getcountwin; ?></span></a></li>
                            <li><a href="<?=base_url('Home/category_microsoft')?>">Microsoft <span class="pull-right"><?php echo $getcountmicro; ?></span></a></li>
                            <li><a href="<?=base_url('Home/category_adobe')?>">Adobe <span class="pull-right"><?php echo $getcountadobe; ?></span></a></li>
                            <li><a href="<?=base_url('Home/category_office')?>">Office <span class="pull-right"><?php echo $getcountoffice; ?></span></a></li>
                            <li><a href="<?=base_url('Home/category_autocad')?>">AutoCAD <span class="pull-right"><?php echo $getcountautocad; ?></span></a></li>
                        </ul>
                    </div>
                    <!-- END search-sidebar -->
                </div>
                <!-- END search-container -->
            </div>
            <!-- END container -->
        </div>
        <!-- END search-results -->