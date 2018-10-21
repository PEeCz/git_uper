<!-- BEGIN #product -->
        <div id="product" class="section-container p-t-20">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN breadcrumb -->
                <ul class="breadcrumb m-b-10 f-s-12">
                    <li><a href="#">Home</a></li>
                    <li>
                        <?php if($getdetailbyid->product_category=='Promotion'){ ?>
                            <a href="<?=base_url('Home/category_promotion')?>">
                        <?php }else if($getdetailbyid->product_category=='Windows'){ ?>
                            <a href="<?=base_url('Home/category_windows')?>">
                        <?php }else if($getdetailbyid->product_category=='Microsoft'){ ?>
                            <a href="<?=base_url('Home/category_microsoft')?>">
                        <?php }else if($getdetailbyid->product_category=='Adobe'){ ?>
                            <a href="<?=base_url('Home/category_adobe')?>">
                        <?php }else if($getdetailbyid->product_category=='Office'){ ?>
                            <a href="<?=base_url('Home/category_office')?>">
                        <?php }else if($getdetailbyid->product_category=='AutoCAD'){ ?>
                            <a href="<?=base_url('Home/category_autocad')?>">
                        <?php } ?>
                            Category <?=$getdetailbyid->product_category; ?>
                        </a>
                    </li>
                    <li class="active"><?=$getdetailbyid->product_name; ?></li>
                </ul>
                <!-- END breadcrumb -->
                <!-- BEGIN product -->
                <div class="product">
                <form action="<?=base_url('Cart/add'); ?>" method="POST" enctype="multipart/form-data">
                    <!-- BEGIN product-detail -->
                    <div class="product-detail">
                        <!-- BEGIN product-image -->
                        <div class="product-image">
                            <!-- BEGIN product-main-image -->
                            <div class="product-main-image" data-id="main-image">
                                <?php if($getdetailbyid->product_img!=''){ ?>
                                <img src="<?php echo base_url().'application/upload/product/'.$getdetailbyid->product_img ?>" alt="" />
                                <?php }else{ ?>
                                <img class="img-responsive" src="<?php echo base_url().'assets/img/no-image.png'; ?>" alt="" />
                                <?php } ?>
                            </div>
                            <!-- END product-main-image -->
                        </div>
                        <!-- END product-image -->
                        <!-- BEGIN product-info -->
                        <div class="product-info">
                            <!-- BEGIN product-info-header -->
                            <div class="product-info-header">
                                <h1 class="product-title">
                                    <span class="label label-success">
                                        <?php
                                            $percent = 100;
                                            if($balance = $getdetailbyid->product_vprice/$getdetailbyid->product_mprice*$percent){
                                                $netamount = $percent-$balance;
                                                echo round($netamount,2).'%'.' OFF';
                                            }
                                        ?>
                                    </span>
                                    <?=$getdetailbyid->product_name; ?>
                                </h1>
                                <ul class="product-category">
                                    <li> <span class="label label-warning">Tags :</span>
                                        <strong>
                                        <?php if($getdetailbyid->product_category=='Promotion'){ ?>
                                            <a class="text-info" href="<?=base_url('Home/category_promotion')?>"><?php echo 'Promotion'; ?></a>
                                        <?php }else if($getdetailbyid->product_category=='Windows'){ ?>
                                            <a class="text-info" href="<?=base_url('Home/category_windows')?>"><?php echo 'Windows'; ?></a>
                                        <?php }else if($getdetailbyid->product_category=='Microsoft'){ ?>
                                            <a class="text-info" href="<?=base_url('Home/category_microsoft')?>"><?php echo 'Microsoft'; ?></a>
                                        <?php }else if($getdetailbyid->product_category=='Adobe'){ ?>
                                            <a class="text-info" href="<?=base_url('Home/category_adobe')?>"><?php echo 'Adobe'; ?></a>
                                        <?php }else if($getdetailbyid->product_category=='Office'){ ?>
                                            <a class="text-info" href="<?=base_url('Home/category_office')?>"><?php echo 'Office'; ?></a>
                                        <?php }else if($getdetailbyid->product_category=='AutoCAD'){ ?>
                                            <a class="text-info" href="<?=base_url('Home/category_autocad')?>"><?php echo 'AutoCAD'; ?></a>
                                        <?php } ?>
                                        </strong>
                                    </li>
                                </ul>
                            </div>
                            <!-- END product-info-header -->
                            <!-- BEGIN product-warranty -->
                            <div class="product-warranty">
                                <div class="pull-right"><strong class="text-primary">Stock : <?php if($getdetailbyid->product_stock=='1'){ echo "IN"; }else{ echo "OUT"; } ?></strong></div>
                                <div><b>1 Year</b> Local Manufacturer Warranty</div>
                            </div>
                            <!-- END product-warranty -->
                            <!-- BEGIN product-warranty -->
                            <div class="product-purchase-container">
                                <?php if($getdetailbyid->product_vprice1 == ''){ ?>
                                <?php }else{ ?>
                                <div class="product-price">
                                    <div class="pull-right">
                                        <span class="label label-danger">
                                            <?= isset($getdetailbyid->product_vprice1) ? $getdetailbyid->product_vprice1 : '' ?>
                                        </span>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if($getdetailbyid->product_vprice2 == ''){ ?>
                                <?php }else{ ?>
                                <div class="product-price">
                                    <div class="pull-right">
                                        <span class="label label-danger">
                                            <?= isset($getdetailbyid->product_vprice2) ? $getdetailbyid->product_vprice2 : '' ?>
                                        </span>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if($getdetailbyid->product_vprice3 == ''){ ?>
                                <?php }else{ ?>
                                <div class="product-price">
                                    <div class="pull-right">
                                        <span class="label label-danger">
                                            <?= isset($getdetailbyid->product_vprice3) ? $getdetailbyid->product_vprice3 : '' ?>
                                        </span>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if($getdetailbyid->product_vprice4 == ''){ ?>
                                <?php }else{ ?>
                                <div class="product-price">
                                    <div class="pull-right">
                                        <span class="label label-danger">
                                            <?= isset($getdetailbyid->product_vprice4) ? $getdetailbyid->product_vprice4 : '' ?>
                                        </span>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <!-- END product-warranty -->
                            <div class="product-warranty">
                                Quantity :
                                <select class="form-control" name="qty">
                                    <option class="text-center" value="0" selected>-- เลือกจำนวนสินค้า --</option>
                                    <?php for($i=1; $i<=20; $i++): ?>
                                    <option class="text-center" value="<?php echo $i; ?>"><?=$i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <!-- BEGIN product-info-list -->
                            <ul class="product-info-list">
                                <li><i class="fa fa-circle"></i> P/N : <?=$getdetailbyid->product_pn; ?></li>
                            </ul>
                            <!-- END product-info-list -->
                            <?php /*<!-- BEGIN product-social -->
                            <div class="product-social">
                                <ul>
                                    <li><a href="javascript:;" class="facebook" data-toggle="tooltip" data-trigger="hover" data-title="Facebook" data-placement="top"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:;" class="twitter" data-toggle="tooltip" data-trigger="hover" data-title="Twitter" data-placement="top"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:;" class="google-plus" data-toggle="tooltip" data-trigger="hover" data-title="Google Plus" data-placement="top"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="javascript:;" class="whatsapp" data-toggle="tooltip" data-trigger="hover" data-title="Whatsapp" data-placement="top"><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a href="javascript:;" class="tumblr" data-toggle="tooltip" data-trigger="hover" data-title="Tumblr" data-placement="top"><i class="fa fa-tumblr"></i></a></li>
                                </ul>
                            </div>*/ ?>
                            <!-- END product-social -->
                            <!-- BEGIN product-purchase-container -->
                            <div class="product-purchase-container">
                                <div class="product-discount">
                                    <span class="discount">฿<?=number_format($getdetailbyid->product_mprice,2); ?></span>
                                </div>
                                <div class="product-price">
                                    <div class="price">฿<?=number_format($getdetailbyid->product_vprice,2); ?></div>
                                </div>
                                <button class="btn btn-inverse btn-lg" type="submit">ADD TO CART</button>
                                <input type="hidden" name="productid" value="<?=$getdetailbyid->product_id; ?>">
                            </div>
                            <!-- END product-purchase-container -->
                        </div>
                        <!-- END product-info -->
                    </div>
                    <!-- END product-detail -->
                </form>
                    <!-- BEGIN product-tab -->
                    <div class="product-tab">
                        <!-- BEGIN #product-tab -->
                        <ul id="product-tab" class="nav nav-tabs">
                            <li class="active"><a href="#product-desc" data-toggle="tab">Product Description</a></li>
                            <li class=""><a href="#product-reviews" data-toggle="tab">Rating & Reviews (5)</a></li>
                        </ul>
                        <!-- END #product-tab -->
                        <!-- BEGIN #product-tab-content -->
                        <div id="product-tab-content" class="tab-content">
                            <!-- BEGIN #product-desc -->
                            <div class="tab-pane fade active in" id="product-desc">
                                <!-- BEGIN product-desc -->
                                <div class="product-desc">
                                    <div class="image">
                                        <img src="../assets/img/product/product-main.jpg" alt="" />
                                    </div>
                                    <div class="product-desc right">
                                        <h4><?=$getdetailbyid->product_name; ?></h4>
                                        <p>
                                            <?=$getdetailbyid->product_detail; ?>
                                        </p>
                                    </div>
                                </div>
                                <!-- END product-desc -->
                            </div>
                            <!-- END #product-desc -->

                            <!-- BEGIN #product-reviews -->
                            <div class="tab-pane fade" id="product-reviews">
                                <!-- BEGIN row -->
                                <div class="row row-space-30">
                                    <!-- BEGIN col-7 -->
                                    <div class="col-md-7">
                                        <!-- BEGIN review -->
                                        <div class="review">
                                            <div class="review-info">
                                                <div class="review-icon"><img src="../assets/img/user/user-1.jpg" alt="" /></div>
                                                <div class="review-rate">
                                                    <ul class="review-star">
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class=""><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    (4/5)
                                                </div>
                                                <div class="review-name">Terry</div>
                                                <div class="review-date">24/05/2016 7:40am</div>
                                            </div>
                                            <div class="review-title">
                                                What does “SIM-free” mean?
                                            </div>
                                            <div class="review-message">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in imperdiet augue. Integer non aliquam eros. Cras vehicula nec sapien pretium sagittis. Pellentesque feugiat lectus non malesuada aliquam. Etiam id tortor pretium, dictum leo at, malesuada tortor.
                                            </div>
                                        </div>
                                        <!-- END review -->
                                        <!-- BEGIN review -->
                                        <div class="review">
                                            <div class="review-info">
                                                <div class="review-icon"><img src="../assets/img/user/user-2.jpg" alt="" /></div>
                                                <div class="review-rate">
                                                    <ul class="review-star">
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class=""><i class="fa fa-star-o"></i></li>
                                                        <li class=""><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    (3/5)
                                                </div>
                                                <div class="review-name">George</div>
                                                <div class="review-date">24/05/2016 8:40am</div>
                                            </div>
                                            <div class="review-title">
                                                When I buy iPhone from apple.com, is it tied to a carrier or does it come “unlocked”?
                                            </div>
                                            <div class="review-message">
                                                In mauris leo, maximus at pellentesque vel, pharetra vel risus. Aenean in semper velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi volutpat mattis neque, at molestie tellus ultricies quis. Ut lobortis odio nec nunc ullamcorper, vitae faucibus augue semper. Sed luctus lobortis nulla ac volutpat. Mauris blandit scelerisque sem.
                                            </div>
                                        </div>
                                        <!-- END review -->
                                        <!-- BEGIN review -->
                                        <div class="review">
                                            <div class="review-info">
                                                <div class="review-icon"><img src="../assets/img/user/user-3.jpg" alt="" /></div>
                                                <div class="review-rate">
                                                    <ul class="review-star">
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    (5/5)
                                                </div>
                                                <div class="review-name">Steve</div>
                                                <div class="review-date">23/05/2016 8:40am</div>
                                            </div>
                                            <div class="review-title">
                                                Where is the iPhone Upgrade Program available?
                                            </div>
                                            <div class="review-message">
                                                Duis ut nunc sem. Integer efficitur, justo sit amet feugiat hendrerit, arcu nisl elementum dui, in ultricies erat quam at mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec nec ultrices tellus. Mauris elementum venenatis volutpat.
                                            </div>
                                        </div>
                                        <!-- END review -->
                                        <!-- BEGIN review -->
                                        <div class="review">
                                            <div class="review-info">
                                                <div class="review-icon"><img src="../assets/img/user/user-4.jpg" alt="" /></div>
                                                <div class="review-rate">
                                                    <ul class="review-star">
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class=""><i class="fa fa-star-o"></i></li>
                                                        <li class=""><i class="fa fa-star-o"></i></li>
                                                        <li class=""><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    (2/5)
                                                </div>
                                                <div class="review-name">Alfred</div>
                                                <div class="review-date">23/05/2016 10.02am</div>
                                            </div>
                                            <div class="review-title">
                                                Can I keep my current service plan if I choose the iPhone Upgrade Program?
                                            </div>
                                            <div class="review-message">
                                                Donec vel fermentum quam. Vivamus scelerisque enim eget tristique auctor. Vivamus tempus, turpis iaculis tempus egestas, leo augue hendrerit tellus, et efficitur neque massa at neque. Aenean efficitur eleifend orci at ornare.
                                            </div>
                                        </div>
                                        <!-- END review -->
                                        <!-- BEGIN review -->
                                        <div class="review">
                                            <div class="review-info">
                                                <div class="review-icon"><img src="../assets/img/user/user-5.jpg" alt="" /></div>
                                                <div class="review-rate">
                                                    <ul class="review-star">
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    (5/5)
                                                </div>
                                                <div class="review-name">Edward</div>
                                                <div class="review-date">22/05/2016 9.30pm</div>
                                            </div>
                                            <div class="review-title">
                                                I have an existing carrier contract or installment plan. Can I purchase with the iPhone Upgrade Program
                                            </div>
                                            <div class="review-message">
                                                Aliquam consequat ut turpis non interdum. Integer blandit erat nec sapien sollicitudin, a fermentum dui venenatis. Nullam consequat at enim et aliquet. Cras mattis turpis quis eros volutpat tristique vel a ligula. Proin aliquet leo mi, et euismod metus placerat sit amet.
                                            </div>
                                        </div>
                                        <!-- END review -->
                                    </div>
                                    <!-- END col-7 -->
                                    <!-- BEGIN col-5 -->
                                    <div class="col-md-5">
                                        <!-- BEGIN review-form -->
                                        <div class="review-form">
                                            <form action="product_detail.html" name="review_form" method="POST">
                                                <h2>Write a review</h2>
                                                <div class="form-group">
                                                    <label for="name">Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="name" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Title <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="email" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="review">Review <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" rows="8" id="review"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Rating  <span class="text-danger">*</span></label>
                                                    <div class="rating rating-selection" data-rating="true" data-target="rating">
                                                        <i class="fa fa-star-o" data-value="2"></i>
                                                        <i class="fa fa-star-o" data-value="4"></i>
                                                        <i class="fa fa-star-o" data-value="6"></i>
                                                        <i class="fa fa-star-o" data-value="8"></i>
                                                        <i class="fa fa-star-o" data-value="10"></i>
                                                        <span class="rating-comment">
                                                            <span class="rating-comment-tooltip">Click to rate</span>
                                                        </span>
                                                    </div>
                                                    <select name="rating" class="hide">
                                                        <option value="2">2</option>
                                                        <option value="4">4</option>
                                                        <option value="6">6</option>
                                                        <option value="8">8</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-inverse btn-lg">Submit Review</button>
                                            </form>
                                        </div>
                                        <!-- END review-form -->
                                    </div>
                                    <!-- END col-5 -->
                                </div>
                                <!-- END row -->
                            </div>
                            <!-- END #product-reviews -->
                        </div>
                        <!-- END #product-tab-content -->
                    </div>
                    <!-- END product-tab -->
                </div>
                <!-- END product -->

                <!-- BEGIN similar-product -->
                <h4 class="m-b-15 m-t-30">สินค้าอื่นในหมวดหมู่ <?=$getdetailbyid->product_category; ?></h4>
                <div class="row row-space-10">
                    <?php foreach($getallproduct as $result): ?>
                    <div class="col-md-2 col-sm-4">
                        <!-- BEGIN item -->
                        <div class="item item-thumbnail">
                            <a href="<?=base_url('Home/product_detail'.'/'.$result['product_id']); ?>" class="item-image">
                                <?php if($result->product_img!=''){ ?>
                                <img src="<?php echo base_url().'application/upload/product/'.$result['product_img'] ?>" alt="">
                                <?php }else{ ?>
                                <img src="<?php echo base_url().'assets/img/no-image.png'; ?>" alt="" />
                                <?php } ?>
                            </a>
                            <div class="item-info">
                                <h4 class="item-title">
                                    <a href=<?=base_url('Home/product_detail'.'/'.$result['product_id']); ?>><br><?=$result['product_name'];?></a>
                                </h4>
                                <p class="item-desc"><?=substr(wordwrap($result['product_detail'],12,"<br>"),0,35);?></p>
                                <div class="item-price">฿ <?=number_format($result['product_vprice'],2); ?></div>
                                <div class="item-discount-price">฿ <?=number_format($result['product_mprice'],2); ?></div>
                            </div>
                        </div>
                        <!-- END item -->
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- END similar-product -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #product -->