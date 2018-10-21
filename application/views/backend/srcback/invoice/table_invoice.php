        <div id="content" class="content">
            <!-- begin page-header -->
            <h1 class="page-header">ตาราง Invoice</h1>
            <!-- end page-header -->

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
                            <h4 class="panel-title">Invoice</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <table id="data-table-fixed-header" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap">Order ID</th>
                                        <th class="text-nowrap">Customer Name</th>
                                        <th class="text-nowrap">Customer Phone</th>
                                        <th class="text-nowrap">Shipping Name</th>
                                        <th class="text-nowrap">Shipping Phone</th>
                                        <th class="text-nowrap">Order Status</th>
                                        <th class="text-nowrap">View Details</th>
                                        <th class="text-nowrap">Create Invoice</th>
                                        <th class="text-nowrap">Slip Invoice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($all_invoice as $v_invoice): ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $v_invoice->order_id; ?></td>
                                        <td><?php echo $v_invoice->firstname; ?></td>
                                        <td><?php echo $v_invoice->mobilephone; ?></td>
                                        <td><?php echo $v_invoice->shipping_firstname; ?></td>
                                        <td><?php echo $v_invoice->shipping_mobilephone; ?></td>
                                        <td class="text-center">
                                            <?php if($v_invoice->order_status=='Pending'){ ?>
                                            <a class="btn btn-xs btn-danger" href="<?=base_url('Invoice/unpendingOrder/'.$v_invoice->order_id); ?>">
                                            <i class="fas fa-md fa-times-circle"></i>
                                            </a>
                                            <?php }else{ ?>
                                            <a class="btn btn-xs btn-green" href="<?=base_url('Invoice/pendingOrder/'.$v_invoice->order_id); ?>">
                                            <i class="fas fa-md fa-check-circle"></i>
                                            </a>
                                            <?php } ?>
                                        </td>
                                        <td><a href="<?= base_url('Invoice/viewInvoice/'.$v_invoice->order_id); ?>" class="btn btn-info btn-sm btn-block">
                                                View Details
                                            </a></td>
                                        <td>
                                            <a href="<?= base_url('Invoice/createInvoice/'.$v_invoice->order_id); ?>" class="btn btn-success btn-sm btn-block">
                                                Create Invoice
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('Invoice/viewSlipInvoice/'.$v_invoice->order_id); ?>" class="btn btn-danger btn-sm btn-block">
                                                Slip Invoice
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
            <!-- End Table Fixed Header -->
        </div>