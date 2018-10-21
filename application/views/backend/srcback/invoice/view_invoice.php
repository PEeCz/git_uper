        <div id="content" class="content">
            <!-- Table Fixed Header -->
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
                            <h4 class="panel-title">Order Details</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <!-- begin table-responsive -->
                            <div class="table-responsive">
                                <table class="table m-b-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Name</th>
                                            <th>Product Price</th>
                                            <th>Product Sales Quantity</th>
                                            <th>Product Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($order_details as $v_order): ?>
                                        <tr>
                                            <td><?=$v_order->order_details_id; ?></td>
                                            <td><?=$v_order->product_name; ?></td>
                                            <td><?=$v_order->product_price; ?></td>
                                            <td><?=$v_order->product_sales_quantity; ?></td>
                                            <td><?=number_format(round($v_order->product_price*$v_order->product_sales_quantity),2); ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="pull-right text-primary"><strong>Total With Vat 7% :</strong></td>
                                            <td class="text-danger">
                                                <strong><?=number_format(round($order_information->order_total),2); ?> บาท</strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
            <!-- End Table Fixed Header -->
        </div>