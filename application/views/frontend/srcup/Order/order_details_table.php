<!-- BEGIN Box Result -->
        <div id="search-results" class="section-container bg-silver">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN Box-container -->
                <div class="search-container">
                    <!-- BEGIN Box Table-content -->
                    <div class="search-content">
                        <!-- BEGIN Box 1-container -->
                        <div class="search-item-container">
                            <!-- BEGIN checkout-body -->
                            <div class="checkout-body">
                                <div class="table-responsive">
                                    <h4 class="text-center">Order</h4>
                                    <table class="table table-cart">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Order ID</th>
                                                <th class="text-center">Order Status</th>
                                                <th class="text-center">Total With VAT 7%</th>
                                                <th class="text-center">Order Date/Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cart-product text-center"><?=$order_info->order_id; ?></td>
                                                <td class="cart-product text-center"><?=$order_info->order_status; ?></td>
                                                <td class="cart-product text-center">฿ <?=number_format(round($order_info->order_total),2); ?></td>
                                                <td class="cart-product text-center"><?=$order_info->order_date_time; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END checkout-body -->
                        </div>
                        <!-- END Box 1-container -->
                        <!-- BEGIN Box 2-container -->
                        <div class="search-item-container">
                            <!-- BEGIN checkout-body -->
                            <div class="checkout-body">
                                <div class="table-responsive">
                                    <h4 class="text-center">Shipping</h4>
                                    <table class="table table-cart">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Shipping ID</th>
                                                <th class="text-center">Firstname / Lastname</th>
                                                <th class="text-center">Company Name</th>
                                                <th class="text-center">Telephone</th>
                                                <th class="text-center">Mobile Phone</th>
                                                <th class="text-center">Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cart-product text-center"><?=$shipping_info->shipping_id; ?></td>
                                                <td class="cart-product text-center"><?=$shipping_info->shipping_firstname.' '.$shipping_info->shipping_lastname; ?></td>
                                                <td class="cart-product text-center">
                                                    <?php if($shipping_info->shipping_companyname==''){ echo '-'; }else{ echo $shipping_info->shipping_companyname; } ?>
                                                </td>
                                                <td class="cart-product text-center">
                                                    <?php if($shipping_info->shipping_telephone==''){ echo '-'; }else{ echo $shipping_info->shipping_telephone; } ?>
                                                </td>
                                                <td class="cart-product text-center"><?=$shipping_info->shipping_mobilephone; ?></td>
                                                <td class="cart-product text-center"><?=$shipping_info->shipping_address1.' '.$shipping_info->shipping_zipcode; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END checkout-body -->
                        </div>
                        <!-- END Box 2-container -->
                        <!-- BEGIN Box 3-container -->
                        <div class="search-item-container">
                            <!-- BEGIN checkout-body -->
                            <div class="checkout-body">
                                <div class="table-responsive">
                                    <h4 class="text-center">Product</h4>
                                    <table class="table table-cart">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Product ID</th>
                                                <th class="text-center">Product Name</th>
                                                <th class="text-center">Product Price</th>
                                                <th class="text-center">Product Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($product_info as $vproduct_info): ?>
                                            <tr>
                                                <td class="cart-product text-center"><?=$vproduct_info->product_id; ?></td>
                                                <td class="cart-product text-center"><?=$vproduct_info->product_name; ?></td>
                                                <td class="cart-product text-center">฿ <?=number_format(round($vproduct_info->product_price),2); ?></td>
                                                <td class="cart-product text-center"><?=$vproduct_info->product_sales_quantity; ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END checkout-body -->
                        </div>
                        <!-- END Box 3-container -->
                        <!-- BEGIN Box 4-container -->
                        <div class="search-item-container">
                            <!-- BEGIN checkout-body -->
                            <div class="checkout-body">
                                <div class="table-responsive">
                                    <h4 class="text-center">Payment</h4>
                                    <table class="table table-cart">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Payment ID</th>
                                                <th class="text-center">Payment By</th>
                                                <th class="text-center">Payment Status</th>
                                                <th class="text-center">Payment Date/Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cart-product text-center"><?=$payment_info->payment_id; ?></td>
                                                <td class="cart-product text-center">
                                                    <?php
                                                        if($payment_info->payment_method=='payment_by_transfer'){
                                                            echo "ชำระเงินด้วยการโอนเงินผ่านธนาคาร";
                                                        }else{
                                                            echo "ชำระเงินด้วยเงินสด";
                                                        }
                                                    ?>
                                                </td>
                                                <td class="cart-product text-center"><?=$payment_info->payment_status; ?></td>
                                                <td class="cart-product text-center"><?=$payment_info->payment_date_time; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END checkout-body -->
                        </div>
                        <!-- END Box 4-container -->
                    </div>
                    <!-- END Box-content -->
                    <!-- BEGIN Box-sidebar -->
                    <div class="search-sidebar">
                        <h4 class="title m-b-0">My Order</h4>
                        <ul class="search-category-list">
                            <li><a href="<?=base_url('Order/myOrder'); ?>">My Order Details </a></li>
                            <li><a href="#">My Cancellations Order</a></li>
                        </ul>
                    </div>
                    <!-- END Box-sidebar -->
                </div>
                <!-- END Box-container -->
            </div>
            <!-- END container -->
        </div>
        <!-- END Box-results -->