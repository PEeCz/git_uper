<div id="header" class="header">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN header-container -->
        <div class="header-container">
            <!-- BEGIN navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="header-logo">
                    <a href="<?php echo base_url('Home'); ?>">
                        <span class="brand"></span>
                        <span>Uper</span>License
                        <small>License Out Source</small>
                    </a>
                </div>
            </div>
            <!-- END navbar-header -->
            <!-- BEGIN header-nav -->
            <div class="header-nav">
                <div class=" collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav">
                        <li class="active">
                            <a href="#"><?php echo $menu1->row()->name; ?></a>
                        </li>
                        <li class="dropdown dropdown-full-width dropdown-hover">
                            <a href="#" data-toggle="dropdown">
                                <?php echo $menu2->row()->name; ?>
                                <i class="fa fa-angle-down"></i>
                                <span class="arrow top"></span>
                            </a>
                            <!-- BEGIN dropdown-menu -->
                            <div class="dropdown-menu p-0">
                                <!-- BEGIN dropdown-menu-container -->
                                <div class="dropdown-menu-container">
                                    <!-- BEGIN dropdown-menu-content -->
                                    <div class="dropdown-menu-content">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4 class="title" style="color: #167d28;">On Premise : Desktop</h4>
                                                <ul class="dropdown-menu-list">
                                                <?php foreach($getmicrosoft_ondesktop as $getondesktop): ?>
                                                    <?php if($getondesktop->product_subcategory!=''): ?>
                                                    <li>
                                                        <a href=<?=base_url('Home/product_detail'.'/'.$getondesktop->product_id); ?>><i class="fa fa-fw fa-angle-right text-muted"></i><?=$getondesktop->product_title; ?> <i class="fa fa-angle-right pull-right"></i></a>
                                                    </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="title" style="color: #167d28;">SQL Server</h4>
                                                <ul class="dropdown-menu-list">
                                                <?php foreach($getmicrosoft_sqlserver as $getsqlserver): ?>
                                                    <?php if($getsqlserver->product_subcategory!=''): ?>
                                                    <li>
                                                        <a href=<?=base_url('Home/product_detail'.'/'.$getsqlserver->product_id); ?>><i class="fa fa-fw fa-angle-right text-muted"></i><?=$getsqlserver->product_title; ?> <i class="fa fa-angle-right pull-right"></i></a>
                                                    </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="title" style="color: #167d28;">Windows Server CAL</h4>
                                                <ul class="dropdown-menu-list">
                                                <?php foreach($getmicrosoft_winservercal as $getservercal): ?>
                                                    <?php if($getservercal->product_subcategory!=''): ?>
                                                    <li>
                                                        <a href=<?=base_url('Home/product_detail'.'/'.$getservercal->product_id); ?>><i class="fa fa-fw fa-angle-right text-muted"></i><?=$getservercal->product_title; ?> <i class="fa fa-angle-right pull-right"></i></a>
                                                    </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4 class="title" style="color: #167d28;">On Premise : Server</h4>
                                                <ul class="dropdown-menu-list">
                                                <?php foreach($getmicrosoft_onserver as $getonserver): ?>
                                                    <?php if($getonserver->product_subcategory!=''): ?>
                                                    <li>
                                                        <a href=<?=base_url('Home/product_detail'.'/'.$getonserver->product_id); ?>><i class="fa fa-fw fa-angle-right text-muted"></i><?=$getonserver->product_title; ?> <i class="fa fa-angle-right pull-right"></i></a>
                                                    </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="title" style="color: #167d28;">Exchange Server</h4>
                                                <ul class="dropdown-menu-list">
                                                <?php foreach($getmicrosoft_exchangeserver as $getexchangeserver): ?>
                                                    <?php if($getexchangeserver->product_subcategory!=''): ?>
                                                    <li>
                                                        <a href=<?=base_url('Home/product_detail'.'/'.$getexchangeserver->product_id); ?>><i class="fa fa-fw fa-angle-right text-muted"></i><?=$getexchangeserver->product_title; ?> <i class="fa fa-angle-right pull-right"></i></a>
                                                    </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="title" style="color: #167d28;">Exchange Standard CAL</h4>
                                                <ul class="dropdown-menu-list">
                                                <?php foreach($getmicrosoft_exchangeserver as $getexchangeserver): ?>
                                                    <?php if($getexchangeserver->product_subcategory!=''): ?>
                                                    <li>
                                                        <a href=<?=base_url('Home/product_detail'.'/'.$getexchangeserver->product_id); ?>><i class="fa fa-fw fa-angle-right text-muted"></i><?=$getexchangeserver->product_title; ?> <i class="fa fa-angle-right pull-right"></i></a>
                                                    </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4 class="title" style="color: #167d28;">Remote Desktop</h4>
                                                <ul class="dropdown-menu-list">
                                                <?php foreach($getmicrosoft_remotedesktop as $getremotedesktop): ?>
                                                    <?php if($getremotedesktop->product_subcategory!=''): ?>
                                                    <li>
                                                        <a href=<?=base_url('Home/product_detail'.'/'.$getremotedesktop->product_id); ?>><i class="fa fa-fw fa-angle-right text-muted"></i><?=$getremotedesktop->product_title; ?> <i class="fa fa-angle-right pull-right"></i></a>
                                                    </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="title" style="color: #167d28;">SQL CAL</h4>
                                                <ul class="dropdown-menu-list">
                                                <?php foreach($getmicrosoft_sqlcal as $getsqlcal): ?>
                                                    <?php if($getsqlcal->product_subcategory!=''): ?>
                                                    <li>
                                                        <a href=<?=base_url('Home/product_detail'.'/'.$getsqlcal->product_id); ?>><i class="fa fa-fw fa-angle-right text-muted"></i><?=$getsqlcal->product_title; ?> <i class="fa fa-angle-right pull-right"></i></a>
                                                    </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="title" style="color: #167d28;">Exchange Enterprise CAL</h4>
                                                <ul class="dropdown-menu-list">
                                                <?php foreach($getmicrosoft_exchangeenterprisecal as $getenterprisecal): ?>
                                                    <?php if($getenterprisecal->product_subcategory!=''): ?>
                                                    <li>
                                                        <a href=<?=base_url('Home/product_detail'.'/'.$getenterprisecal->product_id); ?>><i class="fa fa-fw fa-angle-right text-muted"></i><?=$getenterprisecal->product_title; ?> <i class="fa fa-angle-right pull-right"></i></a>
                                                    </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4 class="title" style="color: #167d28;">On Cloud</h4>
                                                <ul class="dropdown-menu-list">
                                                <?php foreach($getmicrosoft_oncloud as $getoncloud): ?>
                                                    <?php if($getoncloud->product_subcategory!=''): ?>
                                                    <li>
                                                        <a href=<?=base_url('Home/product_detail'.'/'.$getoncloud->product_id); ?>><i class="fa fa-fw fa-angle-right text-muted"></i><?=$getoncloud->product_title; ?> <i class="fa fa-angle-right pull-right"></i></a>
                                                    </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END dropdown-menu-content -->
                                </div>
                                <!-- END dropdown-menu-container -->
                            </div>
                            <!-- END dropdown-menu -->
                        </li>
                        <li class="dropdown dropdown-full-width dropdown-hover">
                            <a href="#" data-toggle="dropdown">
                                <?php echo $menu3->row()->name; ?>
                                <i class="fa fa-angle-down"></i> 
                                <span class="arrow top"></span>
                            </a>
                            <!-- BEGIN dropdown-menu -->
                            <div class="dropdown-menu p-0">
                                <!-- BEGIN dropdown-menu-container -->
                                <div class="dropdown-menu-container">
                                    <!-- BEGIN dropdown-menu-content -->
                                    <div class="dropdown-menu-content">
                                        
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4 class="title" style="color: #167d28;">Windows</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="title" style="color: #167d28;">Windows Server</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <h4 class="title" style="color: #167d28;">Windows CAL</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END dropdown-menu-content -->
                                </div>
                                <!-- END dropdown-menu-container -->
                            </div>
                            <!-- END dropdown-menu -->
                        </li>
                        <li class="dropdown dropdown-full-width dropdown-hover">
                            <a href="#" data-toggle="dropdown">
                                <?php echo $menu4->row()->name; ?>
                                <i class="fa fa-angle-down"></i> 
                                <span class="arrow top"></span>
                            </a>
                            <!-- BEGIN dropdown-menu -->
                            <div class="dropdown-menu p-0">
                                <!-- BEGIN dropdown-menu-container -->
                                <div class="dropdown-menu-container">
                                    <!-- BEGIN dropdown-menu-sidebar -->
                                    <div class="dropdown-menu-sidebar">
                                        <h4 class="title">หมวดหมู่สินค้า</h4>
                                        <ul class="dropdown-menu-list">
                                            <li><a href="product.html"><?php echo $category->row('0')->cat_name; ?> <i class="fa fa-angle-right pull-right"></i></a></li>
                                            <li><a href="product.html"><?php echo $category->row('1')->cat_name; ?> <i class="fa fa-angle-right pull-right"></i></a></li>
                                            <li><a href="product.html"><?php echo $category->row('2')->cat_name; ?> <i class="fa fa-angle-right pull-right"></i></a></li>
                                            <li><a href="product.html"><?php echo $category->row('3')->cat_name; ?> <i class="fa fa-angle-right pull-right"></i></a></li>
                                            <li><a href="product.html"><?php echo $category->row('4')->cat_name; ?> <i class="fa fa-angle-right pull-right"></i></a></li>
                                            <li><a href="product.html"><?php echo $category->row('5')->cat_name; ?> <i class="fa fa-angle-right pull-right"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- END dropdown-menu-sidebar -->
                                    <!-- BEGIN dropdown-menu-content -->
                                    <div class="dropdown-menu-content">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="title" style="color: #167d28;">Office ลิขสิทธิ์ถาวร</h4>
                                                <ul class="dropdown-menu-list">
                                                <?php foreach($getofficesub1 as $getoffice1): ?>
                                                    <?php if($getoffice1->product_subcategory!=''): ?>
                                                    <li>
                                                        <a href=<?=base_url('Home/product_detail'.'/'.$getoffice1->product_id); ?>><i class="fa fa-fw fa-angle-right text-muted"></i><?=$getoffice1->product_title; ?> <i class="fa fa-angle-right pull-right"></i></a>
                                                    </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 class="title" style="color: #167d28;"> Office ลิขสิทธิ์รายปี</h4>
                                                <ul class="dropdown-menu-list">
                                                <?php foreach($getofficesub2 as $getoffice2): ?>
                                                    <?php if($getoffice2->product_subcategory!=''): ?>
                                                    <li>
                                                        <a href=<?=base_url('Home/product_detail'.'/'.$getoffice2->product_id); ?>><i class="fa fa-fw fa-angle-right text-muted"></i><?=$getoffice2->product_title; ?> <i class="fa fa-angle-right pull-right"></i></a>
                                                    </li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END dropdown-menu-content -->
                                </div>
                                <!-- END dropdown-menu-container -->
                            </div>
                            <!-- END dropdown-menu -->
                        </li>
                        <li class="dropdown dropdown-full-width dropdown-hover">
                            <a href="#" data-toggle="dropdown">
                                <?php echo $menu5->row()->name; ?>
                                <i class="fa fa-angle-down"></i> 
                                <span class="arrow top"></span>
                            </a>
                            <!-- BEGIN dropdown-menu -->
                            <div class="dropdown-menu p-0">
                                <!-- BEGIN dropdown-menu-container -->
                                <div class="dropdown-menu-container">
                                    <!-- BEGIN dropdown-menu-content -->
                                    <div class="dropdown-menu-content">
                                        
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h4 class="title" style="color: #167d28;">Acrobat ลิขสิทธิ์ถาวร</h4>
                                                <ul class="dropdown-menu-list">
                                                    <?php foreach($getadobe_acrobat1 as $getacrobat1): ?>
                                                        <?php if($getacrobat1->product_subcategory!=''): ?>
                                                    <li>
                                                        <a href=<?=base_url('Home/product_detail'.'/'.$getacrobat1->product_id); ?>><i class="fa fa-fw fa-angle-right text-muted"></i><?=$getacrobat1->product_title; ?> <i class="fa fa-angle-right pull-right"></i></a>
                                                    </li>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="title" style="color: #167d28;">Acrobat ลิขสิทธิ์ Upgrade รายปี</h4>
                                                <ul class="dropdown-menu-list">
                                                    <?php foreach($getadobe_acrobat2 as $getacrobat2): ?>
                                                        <?php if($getacrobat2->product_subcategory!=''): ?>
                                                    <li>
                                                        <a href=<?=base_url('Home/product_detail'.'/'.$getacrobat2->product_id); ?>><i class="fa fa-fw fa-angle-right text-muted"></i><?=$getacrobat2->product_title; ?> <i class="fa fa-angle-right pull-right"></i></a>
                                                    </li>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="title" style="color: #167d28;">Creative Cloud Team ลิขสิทธิ์ Upgrade รายปี</h4>
                                                <ul class="dropdown-menu-list">
                                                    <?php foreach($getadobe_creativecloud as $getcreativecloud): ?>
                                                        <?php if($getcreativecloud->product_subcategory!=''): ?>
                                                    <li>
                                                        <a href=<?=base_url('Home/product_detail'.'/'.$getcreativecloud->product_id); ?>><i class="fa fa-fw fa-angle-right text-muted"></i><?=$getcreativecloud->product_title; ?> <i class="fa fa-angle-right pull-right"></i></a>
                                                    </li>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="title" style="color: #167d28;">Single Apps ลิขสิทธิ์ Upgrade รายปี</h4>
                                                <ul class="dropdown-menu-list">
                                                    <?php foreach($getadobe_singleapp as $getsingleapp): ?>
                                                        <?php if($getsingleapp->product_subcategory!=''): ?>
                                                    <li>
                                                        <a href=<?=base_url('Home/product_detail'.'/'.$getsingleapp->product_id); ?>><i class="fa fa-fw fa-angle-right text-muted"></i><?=$getsingleapp->product_title; ?> <i class="fa fa-angle-right pull-right"></i></a>
                                                    </li>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END dropdown-menu-content -->
                                </div>
                                <!-- END dropdown-menu-container -->
                            </div>
                            <!-- END dropdown-menu -->
                        </li>
                        <li class="dropdown dropdown-full-width dropdown-hover">
                            <a href="#">
                                <?php echo $menu6->row()->name; ?>
                                <i class="fa fa-angle-down"></i> 
                                <span class="arrow top"></span>
                            </a>
                            <!-- BEGIN dropdown-menu -->
                            <div class="dropdown-menu p-0">
                                <!-- BEGIN dropdown-menu-container -->
                                <div class="dropdown-menu-container">
                                    <!-- BEGIN dropdown-menu-content -->
                                    <div class="dropdown-menu-content">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="title" style="color: #167d28;">AutoCAD</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END dropdown-menu-content -->
                                </div>
                                <!-- END dropdown-menu-container -->
                            </div>
                            <!-- END dropdown-menu -->
                        </li>
                        <li class="dropdown dropdown-hover">
                            <a href="#" data-toggle="dropdown">
                                <i class="fa fa-search search-btn"></i>
                                <span class="arrow top"></span>
                            </a>
                            <div class="dropdown-menu p-15">
                                <form action="search_results.html" method="POST" name="search_form">
                                    <div class="input-group">
                                        <input type="text" placeholder="Search" class="form-control bg-silver-lighter" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-inverse" type="submit"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div> 
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END header-nav -->
            <!-- BEGIN header-nav -->
            <div class="header-nav">
                <ul class="nav pull-right">
                    <li class="dropdown dropdown-hover">
                        <a href="#" class="header-cart" data-toggle="dropdown">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="total"><?=$this->cart->total_items(); ?></span>
                            <span class="arrow top"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-cart p-0">
                            <div class="cart-header">
                                <h4 class="cart-title">Shopping Bag</h4>
                            </div>
                            <?php if($cart = $this->cart->contents()): ?>
                                <div class="cart-body">
                                <?php foreach($cart as $items): ?>
                                    <ul class="cart-item">
                                        <li>
                                            <div class="cart-item-image"><img src="<?php echo base_url().'application/upload/product/'.$items['img']; ?>" alt="" /></div>
                                            <div class="cart-item-info">
                                                <h4><?=$items['name']; ?></h4>
                                                <p class="price">฿ <span class="text-warning"><?=number_format($items['price'],2); ?></span></p>
                                                <p class="price">จำนวน <span class="text-warning"><?=$items['qty']; ?></span></p>
                                            </div>
                                            <div class="cart-item-close">
                                                <a href="<?=base_url(); ?>Cart/deleteCart/<?=$items['rowid']; ?>" data-toggle="tooltip" data-title="Remove">&times;</a>
                                            </div>
                                        </li>
                                    </ul>
                                <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <div class="cart-footer">
                                <div class="row row-space-10">
                                        <a href="<?=base_url('Cart')?>" class="btn btn-default btn-block">View Cart</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <?php if(!isset($_SESSION['ses_user_id'])){ ?>
                        <a href="<?php echo base_url('Home/account'); ?>">
                            <img src="<?php echo base_url('assets/img/user/user-1.jpg'); ?>" class="user-img" alt="" /> 
                            <span class="hidden-md hidden-sm hidden-xs">ล็อคอิน / สมัครสมาชิก</span>
                        </a>
                        <?php }else{ ?>
                        <a href="<?php echo base_url('Home/profile'); ?>">
                            <img src="<?php echo base_url('assets/img/user/user-1.jpg'); ?>" class="user-img" alt="" /> 
                            <span class="hidden-md hidden-sm hidden-xs">สวัสดี : <?= $_SESSION['ses_user_firstname']; ?></span>
                        </a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
            <!-- END header-nav -->
        </div>
        <!-- END header-container -->
    </div>
    <!-- END container -->
</div>