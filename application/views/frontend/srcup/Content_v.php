        <div id="slider" class="section-container p-0 bg-black-darker">
            <!-- BEGIN carousel -->
            <div id="main-carousel" class="carousel slide" data-ride="carousel">
                <!-- BEGIN carousel-inner -->
                <div class="carousel-inner">
                    <!-- BEGIN item -->
                    <div class="item active">
                        <img src="<?php echo base_url('assets/img/slider/slider-1-cover.jpg'); ?>" class="bg-cover-img" alt="" />
                        <?php foreach($slidewindows as $row): ?>
                        <div class="container">
                            <img src="<?php echo base_url().'application/upload/productslide/'.$row['slide_image']; ?>" class="product-img right bottom fadeInRight animated" alt="" />
                        </div>
                        <div class="carousel-caption carousel-caption-left">
                            <div class="container">
                                <h3 class="m-b-5 fadeInLeftBig animated"><?php echo $row['slide_title']; ?></h3>
                                <h5 class="m-b-15 fadeInLeftBig animated"><?php echo $row['slide_subdescription']; ?></h5>
                                <div class="price m-b-30 fadeInLeftBig animated"><small>from</small> <span style="text-decoration-line: line-through;"><?php echo $row['slide_main_price']; ?></span></div>
                                <div class="price m-b-30 fadeInLeftBig animated"><small>to</small> <span><?php echo $row['slide_volume_price']; ?></span></div>
                                <a href="product_detail.html" class="btn btn-outline btn-lg fadeInLeftBig animated">สั่งสินค้า</a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- END item -->
                    <!-- BEGIN item -->
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/slider/slider-2-cover.jpg'); ?>" class="bg-cover-img" alt="" />
                        <?php foreach($slidemicrosoft as $row): ?>
                        <div class="container">
                            <img src="<?php echo base_url().'application/upload/productslide/'.$row['slide_image']; ?>" class="product-img left bottom fadeInLeft animated" alt="" />
                        </div>
                        <div class="carousel-caption carousel-caption-right">
                            <div class="container">
                                <h3 class="m-b-5 fadeInLeftBig animated"><?php echo $row['slide_title']; ?></h3>
                                <h5 class="m-b-15 fadeInLeftBig animated"><?php echo $row['slide_subdescription']; ?></h5>
                                <div class="price m-b-30 fadeInRightBig animated"><small>from</small> <span style="text-decoration-line: line-through;"><?php echo $row['slide_main_price']; ?></span></div>
                                <div class="price m-b-30 fadeInLeftBig animated"><small>to</small> <span><?php echo $row['slide_volume_price']; ?></span></div>
                                <a href="product_detail.html" class="btn btn-outline btn-lg fadeInRightBig animated">สั่งสินค้า</a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- END item -->
                    <!-- BEGIN item -->
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/slider/slider-1-cover.jpg'); ?>" class="bg-cover-img" alt="" />
                        <?php foreach($slideadobe as $row): ?>
                        <div class="container">
                            <img src="<?php echo base_url().'application/upload/productslide/'.$row['slide_image']; ?>" class="product-img left bottom fadeInLeft animated" alt="" />
                        </div>
                        <div class="carousel-caption carousel-caption-left">
                            <div class="container">
                                <h3 class="m-b-5 fadeInLeftBig animated"><?php echo $row['slide_title']; ?></h3>
                                <h5 class="m-b-15 fadeInLeftBig animated"><?php echo $row['slide_subdescription']; ?></h5>
                                <div class="price m-b-30 fadeInRightBig animated"><small>from</small> <span style="text-decoration-line: line-through;"><?php echo $row['slide_main_price']; ?></span></div>
                                <div class="price m-b-30 fadeInLeftBig animated"><small>to</small> <span><?php echo $row['slide_volume_price']; ?></span></div>
                                <a href="product_detail.html" class="btn btn-outline btn-lg fadeInRightBig animated">สั่งสินค้า</a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- END item -->
                    <!-- BEGIN item -->
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/slider/slider-2-cover.jpg'); ?>" class="bg-cover-img" alt="" />
                        <?php foreach($slideoffice as $row): ?>
                        <div class="container">
                            <img src="<?php echo base_url().'application/upload/productslide/'.$row['slide_image']; ?>" class="product-img left bottom fadeInLeft animated" alt="" />
                        </div>
                        <div class="carousel-caption carousel-caption-right">
                            <div class="container">
                                <h3 class="m-b-5 fadeInLeftBig animated"><?php echo $row['slide_title']; ?></h3>
                                <h5 class="m-b-15 fadeInLeftBig animated"><?php echo $row['slide_subdescription']; ?></h5>
                                <div class="price m-b-30 fadeInRightBig animated"><small>from</small> <span style="text-decoration-line: line-through;"><?php echo $row['slide_main_price']; ?></span></div>
                                <div class="price m-b-30 fadeInLeftBig animated"><small>to</small> <span><?php echo $row['slide_volume_price']; ?></span></div>
                                <a href="product_detail.html" class="btn btn-outline btn-lg fadeInRightBig animated">สั่งสินค้า</a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- END item -->
                    <!-- BEGIN item -->
                    <div class="item">
                        <img src="<?php echo base_url('assets/img/slider/slider-1-cover.jpg'); ?>" class="bg-cover-img" alt="" />
                        <?php foreach($slideautocad as $row): ?>
                        <div class="container">
                            <img src="<?php echo base_url().'application/upload/productslide/'.$row['slide_image']; ?>" class="product-img left bottom fadeInLeft animated" alt="" />
                        </div>
                        <div class="carousel-caption carousel-caption-left">
                            <div class="container">
                                <h3 class="m-b-5 fadeInLeftBig animated"><?php echo $row['slide_title']; ?></h3>
                                <h5 class="m-b-15 fadeInLeftBig animated"><?php echo $row['slide_subdescription']; ?></h5>
                                <div class="price m-b-30 fadeInRightBig animated"><small>from</small> <span style="text-decoration-line: line-through;"><?php echo $row['slide_main_price']; ?></span></div>
                                <div class="price m-b-30 fadeInLeftBig animated"><small>to</small> <span><?php echo $row['slide_volume_price']; ?></span></div>
                                <a href="product_detail.html" class="btn btn-outline btn-lg fadeInRightBig animated">สั่งสินค้า</a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- END item -->
                </div>
                <!-- END carousel-inner -->
                <a class="left carousel-control" href="#main-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right carousel-control" href="#main-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
            <!-- END carousel -->
        </div>

        <div id="promotions" class="section-container bg-white">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN section-title -->
                <h4 class="section-title clearfix">
                    <a href="<?=base_url('Home/category_promotion') ?>" class="pull-right">ดูโปรโมชั่นทั้งหมด</a>
                    โปรโมชั่น !
                    <small>สินค้าในช่วงโปรโมชั่นสุดฮ๊อต</small>
                </h4>
                <!-- END section-title -->
                <!-- BEGIN row -->
                <div class="row row-space-10">
                <?php foreach($promotionproduct1 as $row1): ?>
                    <!-- BEGIN col-6 -->
                    <div class="col-md-6">
                        <!-- BEGIN promotion -->
                        <div class="promotion promotion-lg bg-orange-lighter">
                            <div class="promotion-image text-right promotion-image-overflow-bottom">
                                <?php if($row1['product_img']!=''){ ?>
                                <img width="350px" height="200px" src="<?php echo base_url().'application/upload/product/'.$row1['product_img']; ?>" alt="" />
                                <?php }else{ ?>
                                <img width="350px" height="200px" src="<?php echo base_url().'assets/img/no-image.png'; ?>" alt="" />
                                <?php } ?>
                            </div>
                            <div class="promotion-caption promotion-caption-inverse">
                                <h4 class="promotion-title"><?php echo $row1['product_name']; ?></h4>
                                <div class="promotion-price-unused"><small>from</small> <?php echo number_format($row1['product_mprice']); ?> บาท</div>
                                <div class="promotion-price"><small>to</small> <?php echo number_format($row1['product_vprice']); ?> บาท</div>
                                <a href="<?=base_url('Home/product_detail'.'/'.$row1['product_id']) ?>" class="promotion-btn">ดูรายละเอียด</a>
                            </div>
                        </div>
                        <!-- END promotion -->
                    </div>
                <?php endforeach; ?>
                    <!-- END col-6 -->
                    <!-- BEGIN col-3 -->
                    <div class="col-md-3 col-sm-6">
                    <?php foreach($promotionproduct2 as $row2): ?>
                        <!-- BEGIN promotion -->
                        <div class="promotion bg-silver">
                            <div class="promotion-image promotion-image-overflow-right promotion-image-overflow-top text-right">
                                <?php if($row2['product_img']!=''){ ?>
                                <img src="<?php echo base_url().'application/upload/product/'.$row2['product_img']; ?>" alt="" style="opacity:0.4;filter:alpha(opacity=40)"
onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=40"/>
                                <?php }else{ ?>
                                <img width="350px" height="200px" src="<?php echo base_url().'assets/img/no-image.png'; ?>" alt="" />
                                <?php } ?>
                            </div>
                            <div class="promotion-caption text-center">
                                <h4 class="promotion-title"><?php echo $row2['product_name']; ?></h4>
                                <div class="promotion-price promotion-price-unused"><small>from</small> <?php echo number_format($row2['product_mprice']); ?> บาท</div>
                                <div class="promotion-price"><small>to</small> <?php echo number_format($row2['product_vprice']); ?> บาท</div>
                                <a href="<?=base_url('Home/product_detail'.'/'.$row2['product_id']) ?>" class="promotion-btn">ดูรายละเอียด</a>
                            </div>
                        </div>
                        <!-- END promotion -->
                    <?php endforeach; ?>
                    <?php foreach($promotionproduct3 as $row3): ?>
                        <!-- BEGIN promotion -->
                        <div class="promotion bg-silver">
                            <div class="promotion-image text-center promotion-image-overflow-bottom">
                                <?php if($row3['product_img']!=''){ ?>
                                <img src="<?php echo base_url().'application/upload/product/'.$row3['product_img']; ?>" alt="" />
                                <?php }else{ ?>
                                <img width="350px" height="200px" src="<?php echo base_url().'assets/img/no-image.png'; ?>" alt="" />
                                <?php } ?>
                            </div>
                            <div class="promotion-caption text-center">
                                <h4 class="promotion-title"><?php echo $row3['product_name']; ?></h4>
                                <div class="promotion-price promotion-price-unused"><small>from</small> <?php echo number_format($row3['product_mprice']); ?> บาท</div>
                                <div class="promotion-price"><small>to</small> <?php echo number_format($row3['product_vprice']); ?> บาท</div>
                                <a href="<?=base_url('Home/product_detail'.'/'.$row3['product_id']) ?>" class="promotion-btn">ดูรายละเอียด</a>
                            </div>
                        </div>
                        <!-- END promotion -->
                    <?php endforeach; ?>
                    </div>
                    <!-- END col-3 -->
                    <!-- BEGIN col-3 -->
                    <div class="col-md-3 col-sm-6">
                    <?php foreach($promotionproduct4 as $row4): ?>
                        <!-- BEGIN promotion -->
                        <div class="promotion bg-silver">
                            <div class="promotion-image promotion-image-overflow-right promotion-image-overflow-bottom text-right">
                                <?php if($row4['product_img']!=''){ ?>
                                <img src="<?php echo base_url().'application/upload/product/'.$row4['product_img']; ?>" alt="" style="opacity:0.4;filter:alpha(opacity=40)"
onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=40"/>
                                <?php }else{ ?>
                                <img width="350px" height="200px" src="<?php echo base_url().'assets/img/no-image.png'; ?>" alt="" />
                                <?php } ?>
                            </div>
                            <div class="promotion-caption text-center">
                                <h4 class="promotion-title"><?php echo $row4['product_name']; ?></h4>
                                <div class="promotion-price promotion-price-unused"><small>from</small> <?php echo number_format($row4['product_mprice']); ?> บาท</div>
                                <div class="promotion-price"><small>to</small> <?php echo number_format($row4['product_vprice']); ?> บาท</div>
                                <a href="<?=base_url('Home/product_detail'.'/'.$row4['product_id']) ?>" class="promotion-btn">ดูรายละเอียด</a>
                            </div>
                        </div>
                        <!-- END promotion -->
                    <?php endforeach; ?>
                    <?php foreach($promotionproduct5 as $row5): ?>
                        <!-- BEGIN promotion -->
                        <div class="promotion bg-black">
                            <div class="promotion-image text-right">
                                <?php if($row5['product_img']!=''){ ?>
                                <img src="<?php echo base_url().'application/upload/product/'.$row5['product_img']; ?>" alt="" />
                                <?php }else{ ?>
                                <img width="350px" height="200px" src="<?php echo base_url().'assets/img/no-image.png'; ?>" alt="" />
                                <?php } ?>
                            </div>
                            <div class="promotion-caption promotion-caption-inverse">
                                <h4 class="promotion-title"><?php echo $row5['product_name']; ?></h4>
                                <div class="promotion-price promotion-price-unused"><small>from</small> <?php echo number_format($row5['product_mprice']); ?> บาท</div>
                                <div class="promotion-price"><small>to</small> <?php echo number_format($row5['product_vprice']); ?> บาท</div>
                                <a href="<?=base_url('Home/product_detail'.'/'.$row5['product_id']) ?>" class="promotion-btn">ดูรายละเอียด</a>
                            </div>
                        </div>
                        <!-- END promotion -->
                    <?php endforeach; ?>
                    </div>
                    <!-- END col-3 -->
                </div>
                <!-- END row -->
            </div>
            <!-- END container -->
        </div>

    <!-- BEGIN #trending-items -->
        <div id="trending-items" class="section-container bg-silver">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN section-title -->
                <h4 class="section-title clearfix">
                    สินค้ายอดฮิตจากทางเรา
                    <small>สินค้าที่ได้รับความนิยมมากที่สุด ณ ตอนนี้ HOT!</small>
                </h4>
                <!-- END section-title -->

                <!-- BEGIN row -->
                <div class="row row-space-10">
                    <!-- BEGIN col-2 -->
                    <div class="col-md-2 col-sm-4">
                        <!-- BEGIN item -->
                        <!--<div class="item item-thumbnail">
                            <a href="product_detail.html" class="item-image">
                                <img src="<?=base_url(''); ?>assets/img/no-image.png" alt="" />
                                <div class="discount">15% OFF</div>
                            </a>
                            <div class="item-info">
                                <h4 class="item-title">
                                    <a href="product_detail.html"><br />16GB</a>
                                </h4>
                                <p class="item-desc"></p>
                                <div class="item-price">฿</div>
                                <div class="item-discount-price">฿</div>
                            </div>
                        </div>-->
                        <!-- END item -->
                    </div>
                    <!-- END col-2 -->
                </div>
                <!-- END row -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #trending-items -->

        <!-- BEGIN #mobile-list -->
        <div id="mobile-list" class="section-container bg-silver p-t-0">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN section-title -->
                <h4 class="section-title clearfix">
                    <a href="<?=base_url('Home/category') ?>" class="pull-right">ดูสินค้าทั้งหมด</a>
                    Volume License ทุกชนิด
                    <small>สินค้าจากทาง Volume License Ultrasoft</small>
                </h4>
                <!-- END section-title -->
                <!-- BEGIN category-container -->
                <div class="category-container">
                    <!-- BEGIN category-sidebar -->
                    <div class="category-sidebar">
                        <ul class="category-list">
                            <li class="list-header">หมวดหมู่สินค้า</li>
                            <li><a href="<?=base_url('Home/category_promotion')?>"><?php echo $category->row('0')->cat_name; ?> </a></li>
                            <li><a href="<?=base_url('Home/category_windows')?>"><?php echo $category->row('1')->cat_name; ?> </a></li>
                            <li><a href="<?=base_url('Home/category_microsoft')?>"><?php echo $category->row('2')->cat_name; ?> </a></li>
                            <li><a href="<?=base_url('Home/category_adobe')?>"><?php echo $category->row('3')->cat_name; ?> </a></li>
                            <li><a href="<?=base_url('Home/category_office')?>"><?php echo $category->row('4')->cat_name; ?> </a></li>
                            <li><a href="<?=base_url('Home/category_autocad')?>"><?php echo $category->row('5')->cat_name; ?> </a></li>
                        </ul>
                    </div>
                    <!-- END category-sidebar -->
                    <!-- BEGIN category-detail -->
                    <?php foreach($getfirstproduct as $getpro1): ?>
                    <div class="category-detail">
                        <!-- BEGIN category-item -->
                        <div class="category-item list">
                            <!-- BEGIN item-row -->
                            <div class="item-row">
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="product_detail.html" class="item-image">
                                        <?php if($getpro1['product_img']!=''){ ?>
                                        <img src="<?php echo base_url().'application/upload/product/'.$getpro1['product_img']; ?>" alt="" />
                                        <div class="discount"><?=$getpro1['product_category']; ?></div>
                                        <?php }else{ ?>
                                        <img width="350px" height="200px" src="<?php echo base_url().'assets/img/no-image.png'; ?>" alt="" />
                                        <div class="discount"><?=$getpro1['product_category']; ?></div>
                                        <?php } ?>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="<?=base_url('Home/product_detail'.'/'.$getpro1['product_id']); ?>"><?=$getpro1['product_name']; ?></a>
                                        </h4>
                                        <div class="item-price">฿ <?=number_format($getpro1['product_vprice'],2); ?></div>
                                        <div class="item-discount-price">฿ <?=number_format($getpro1['product_mprice'],2); ?></div>
                                    </div>
                                </div>
                                <!-- END item -->
                            </div>
                            <!-- END item-row -->
                        </div>
                        <!-- END category-item -->
                    <?php endforeach; ?>
                    <?php foreach($getsecondproduct as $getpro2): ?>
                        <div class="category-item list">
                            <!-- BEGIN item-row -->
                            <div class="item-row">
                                <!-- BEGIN item -->
                                <div class="item item-thumbnail">
                                    <a href="product_detail.html" class="item-image">
                                        <?php if($getpro2['product_img']!=''){ ?>
                                        <img src="<?php echo base_url().'application/upload/product/'.$getpro2['product_img']; ?>" alt="" />
                                        <div class="discount"><?=$getpro2['product_category']; ?></div>
                                        <?php }else{ ?>
                                        <img width="350px" height="200px" src="<?php echo base_url().'assets/img/no-image.png'; ?>" alt="" />
                                        <div class="discount"><?=$getpro2['product_category']; ?></div>
                                        <?php } ?>
                                    </a>
                                    <div class="item-info">
                                        <h4 class="item-title">
                                            <a href="<?=base_url('Home/product_detail'.'/'.$getpro2['product_id']); ?>"><?=$getpro2['product_name']; ?></a>
                                        </h4>
                                        <div class="item-price">฿ <?=number_format($getpro2['product_vprice'],2); ?></div>
                                        <div class="item-discount-price">฿ <?=number_format($getpro2['product_mprice'],2); ?></div>
                                    </div>
                                </div>
                                <!-- END item -->
                            </div>
                            <!-- END item-row -->
                        </div>
                        <!-- END category-item -->
                    </div>
                    <?php endforeach; ?>
                    <!-- END category-detail -->
                </div>
                <!-- END category-container -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #mobile-list -->

        <!-- BEGIN #subscribe -->
        <div id="subscribe" class="section-container bg-silver p-t-30 p-b-30">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-6 -->
                    <div class="col-md-6 col-sm-6">
                        <!-- BEGIN subscription -->
                        <div class="subscription">
                            <div class="subscription-intro">
                                <h4> LET'S STAY IN TOUCH</h4>
                                <p>Get updates on sales specials and more</p>
                            </div>
                            <div class="subscription-form">
                                <form name="subscription_form" action="index.html" method="POST">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="email" placeholder="Enter Email Address" />
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-inverse"><i class="fa fa-angle-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END subscription -->
                    </div>
                    <!-- END col-6 -->
                    <!-- BEGIN col-6 -->
                    <div class="col-md-6 col-sm-6">
                        <!-- BEGIN social -->
                        <div class="social">
                            <div class="social-intro">
                                <h4 class="text-right text-primary">Social List &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="far fa-hand-point-right"></i></h4>
                            </div>
                            <div class="social-list">
                                <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="google"><i class="fab fa-google-plus"></i></a>
                            </div>
                        </div>
                        <!-- END social -->
                    </div>
                    <!-- END col-6 -->
                </div>
                <!-- END row -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #subscribe -->