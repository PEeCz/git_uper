<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb hidden-print pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item active">Invoice</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header hidden-print">Ultrasoft Co.,Ltd. Invoice </h1>
			<!-- end page-header -->

			<!-- begin invoice -->
			<div class="invoice">
                <!-- begin invoice-company -->
                <div class="invoice-company text-inverse f-w-600">
                    <span class="pull-right hidden-print">
                    <a href="javascript:;" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Export as PDF</a>
                    <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
                    </span>
                    Ultrasoft Co.,Ltd.
                </div>
                <!-- end invoice-company -->
                <!-- begin invoice-header -->
                <div class="invoice-header">
                    <div class="invoice-from">
                        <small>FROM</small>
                        <address class="m-t-5 m-b-5">
                            <strong class="text-inverse">Ultrasoft Co.,Ltd.</strong><br />
                            9/323 หมู่ 4<br />
                            ตำบลบางแก้ว อำเภอบางพลี<br />
                            จังหวัดสมุทรปราการ 10540<br />
                            Phone: (+66) 2-710-2050
                        </address>
                    </div>
                    <div class="invoice-to">
                        <small>TO</small>
                        <address class="m-t-5 m-b-5">
                            <strong class="text-inverse"><?=$shipping_info->shipping_firstname.' '.$shipping_info->shipping_lastname; ?></strong><br />
                            <?=$shipping_info->shipping_address1; ?><br />
                            Phone: (+66) <?=$shipping_info->shipping_mobilephone; ?><br />
                            Fax: (+66) <?=$shipping_info->shipping_fax; ?>
                        </address>
                    </div>
                    <div class="invoice-date">
                        <small>Invoice / <?=$viewslip_invoicetext->month_created; ?></small>
                        <div class="date text-inverse m-t-5">August 3,2012</div>
                        <div class="invoice-detail">
                            Ref. #<?=$viewslip_invoicetext->reference_number; ?><br />
                            Services Product
                        </div>
                    </div>
                </div>
                <!-- end invoice-header -->
                <!-- begin invoice-content -->
                <div class="invoice-content">
                	<!-- begin table-responsive -->
                    <div class="table-responsive">
                        <table class="table table-invoice">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th class="text-center" width="10%">Price</th>
                                    <th class="text-center" width="10%">Quantity</th>
                                    <th class="text-right" width="20%">Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($order_details as $v_order): ?>
                                <tr>
                                    <td>
                                        <span class="text-inverse"><?=$v_order->product_name; ?></span>
                                    </td>
                                    <td class="text-center"><?=$v_order->product_price; ?></td>
                                    <td class="text-center"><?=$v_order->product_sales_quantity; ?></td>
                                    <td class="text-right"><?=number_format(round($v_order->product_price*$v_order->product_sales_quantity),2); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                	<!-- end table-responsive -->
                	<!-- begin invoice-price -->
                    <div class="invoice-price">
                        <div class="invoice-price-left">
                            <div class="invoice-price-row">
                                TOTAL WITH VAT 7%
                            </div>
                        </div>
                        <div class="invoice-price-right">
                            <small>TOTAL</small> <span class="f-w-600"><?=number_format(round($order_information->order_total),2); ?> บาท</span>
                        </div>
                    </div>
                	<!-- end invoice-price -->
                </div>
                <!-- end invoice-content -->
                <!-- begin invoice-note -->
                <div class="invoice-note">
                    * Make all cheques payable to Ultrasoft Co.,Ltd.<br />
                    * Payment is due within 30 days<br />
                    * If you have any questions concerning this invoice, contact  [Name, Phone Number, Email]
                </div>
                <!-- end invoice-note -->
                <!-- begin invoice-footer -->
                <div class="invoice-footer">
                    <p class="text-center m-b-5 f-w-600">
                        <?=$viewslip_invoicetext->txt_thankyou; ?>
                    </p>
                    <p class="text-center">
                        <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> <a href="<?=$viewslip_invoicetext->txt_linkwebsite; ?>" target="_blank"><?=$viewslip_invoicetext->txt_linkwebsite; ?></a></span>
                        <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> (+66)2-<?=$viewslip_invoicetext->txt_phone; ?></span>
                        <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> <a href="mailto:<?=$viewslip_invoicetext->txt_emailcontact; ?>"><?=$viewslip_invoicetext->txt_emailcontact; ?></a></span>
                    </p>
                </div>
                <!-- end invoice-footer -->
            </div>
			<!-- end invoice -->
		</div>
		<!-- end #content -->