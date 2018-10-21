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
                            <h4 class="panel-title">Payment Table</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <!-- begin table-responsive -->
                            <div class="table-responsive">
                                <table class="table m-b-0">
                                    <thead>
                                        <tr>
                                            <th>Payment By</th>
                                            <th>Status</th>
                                            <th>Payment Date/Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?=$payment_details->payment_method; ?></td>
                                            <td>
                                                <?php
                                                if($payment_details->payment_status=='Pending'){ ?>
                                                    <a class="btn btn-xs btn-danger" href="<?=base_url('Invoice/unpendingPayment/'.$payment_details->payment_id); ?>">
                                                    <i class="fas fa-md fa-times-circle"></i>
                                                    </a>
                                                <?php echo "กำลังรอดำเนินการชำระเงิน";
                                                }else{ ?>
                                                    <a class="btn btn-xs btn-green" href="<?=base_url('Invoice/pendingPayment/'.$payment_details->payment_id); ?>">
                                                    <i class="fas fa-md fa-check-circle"></i>
                                                    </a>
                                                <?php echo "ชำระเงินเรียบร้อย";
                                                } ?>
                                            </td>
                                            <td><?=$payment_details->payment_date_time; ?></td>
                                        </tr>
                                    </tbody>
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