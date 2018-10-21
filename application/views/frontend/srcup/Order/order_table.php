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
                                    <h4>My Orders Table</h4>
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
                        <!-- BEGIN search-item-container -->
                        <div class="search-item-container">
                            <!-- BEGIN checkout-body -->
                        <div class="checkout-body">
                            <div class="table-responsive">
                                <table class="table table-cart">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Order ID</th>
                                            <th class="text-center">Order Status</th>
                                            <th class="text-center">Payment Status</th>
                                            <th class="text-center">Total</th>
                                            <th class="text-center">Order Date/Time</th>
                                            <th class="text-center">View Order</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($allOrder as $v_order): ?>
                                        <tr>
                                            <td class="cart-product text-center"><?=$v_order->order_id; ?></td>
                                            <td class="cart-product text-center"><?=$v_order->order_status; ?></td>
                                            <td class="cart-product text-center"><?=$v_order->payment_status; ?></td>
                                            <td class="cart-product text-center"><?=number_format(round($v_order->order_total),2); ?></td>
                                            <td class="cart-product text-center"><?=$v_order->order_date_time; ?></td>
                                            <td class="cart-product text-center"><a class="btn btn-xs btn-info" href="<?=base_url(); ?>Order/viewOrderDetails/<?=$v_order->order_id; ?>">View</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END checkout-body -->
                        </div>
                        <!-- END search-item-container -->
                    </div>
                    <!-- END search-content -->
                    <!-- BEGIN search-sidebar -->
                    <div class="search-sidebar">
                        <h4 class="title m-b-0">My Order</h4>
                        <ul class="search-category-list">
                            <li><a href="<?=base_url('Order/myOrder'); ?>">My Order Details </a></li>
                            <li><a href="#">My Cancellations Order</a></li>
                        </ul>
                    </div>
                    <!-- END search-sidebar -->
                </div>
                <!-- END search-container -->
            </div>
            <!-- END container -->
        </div>
        <!-- END search-results -->