<div id="content" class="content">
<!-- Table Fixed Header -->
    <div class="col-lg-12">
        <!-- begin row -->
            <div class="row">
                <!-- begin col-12 -->
                <div class="col-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-11">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Invoice Form</h4>
                        </div>
                        <!-- end panel-heading -->
                        <form action="<?=base_url('Invoice/saveCreateInvoice'); ?>" method="POST">
                            <div class="panel-body p-t-10">
                                <div class="row row-space-10">
                                    <div class="col-md-6">
                                        <div class="form-group m-b-10 p-t-5">
                                            <label class="col-form-label">เดือน</label>
                                            <select class="form-control form-control-sm" name="month_created">
                                                <option value="None">---- Please Select Your Month Invoice ----</option>
                                                <option value="January">January</option>
                                                <option value="Febuary">Febuary</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                        <div class="form-group m-b-10">
                                            <label class="col-form-label">Reference Number</label>
                                            <input type="text" class="form-control" name="reference_number" placeholder="Ex. 000000001" />
                                            <input type="hidden" name="order_id" value="<?php echo $order_info->order_id; ?>">
                                        </div>
                                        <div class="form-group m-b-10">
                                            <label class="col-form-label">คำขอบคุณ</label>
                                            <input type="text" class="form-control" name="txt_thankyou" placeholder="Ex. THANK YOU FOR YOUR BUSINESS" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group m-b-10 p-t-5">
                                            <label class="col-form-label">Link Website</label>
                                            <input type="text" class="form-control" name="txt_linkwebsite" placeholder="Ex. https://volumelicense-ultrasoft.com" />
                                        </div>
                                        <div class="form-group m-b-10">
                                            <label class="col-form-label">เบอร์โทรศัพท์</label>
                                            <input type="text" class="form-control" name="txt_phone" placeholder="Ex. (+66) 2-710-2050" />
                                        </div>
                                        <div class="form-group m-b-10">
                                            <label class="col-form-label">Email Address</label>
                                            <input type="email" class="form-control" name="txt_emailcontact" placeholder="Ex. xxx@volumelicenseultrasoft.com" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-5">
                                        <button type="submit" class="btn btn-sm btn-primary m-r-5">Add Invoice</button>
                                        <button type="submit" class="btn btn-sm btn-default">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
    </div>
</div>