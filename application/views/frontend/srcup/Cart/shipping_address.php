
		
		<!-- BEGIN #checkout-info -->
		<div class="section-container" id="checkout-info">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN checkout -->
				<div class="checkout">
						<!-- BEGIN checkout-header -->
						<div class="checkout-header">
							<!-- BEGIN row -->
							<div class="row">
								<!-- BEGIN col-3 -->
								<div class="col-md-3 col-sm-3">
									<div class="step">
										<a href="#" id="shippinglist">
                                            <div class="number">1</div>
                                            <div class="info">
                                                <div class="title">สินค้าในตะกร้า</div>
                                                <div class="desc">รายการที่สั่ง</div>
                                            </div>
                                        </a>
									</div>
								</div>
								<!-- END col-3 -->
								<!-- BEGIN col-3 -->
								<div class="col-md-3 col-sm-3">
									<div class="step active">
										<a href="#" id="shippingaddress">
                                            <div class="number">2</div>
                                            <div class="info">
                                                <div class="title">ที่อยู่จัดส่ง</div>
                                                <div class="desc">กรอกที่อยู่ในการจัดส่ง</div>
                                            </div>
                                        </a>
									</div>
								</div>
								<!-- END col-3 -->
								<!-- BEGIN col-3 -->
								<div class="col-md-3 col-sm-3">
									<div class="step">
										<a href="#" id="payment">
                                            <div class="number">3</div>
                                            <div class="info">
                                                <div class="title">วิธีชำระเงิน</div>
                                                <div class="desc">ขั้นตอนการชำระเงิน</div>
                                            </div>
                                        </a>
									</div>
								</div>
								<!-- END col-3 -->
								<!-- BEGIN col-3 -->
								<div class="col-md-3 col-sm-3">
									<div class="step">
										<a href="#" id="concludeshop">
                                            <div class="number">4</div>
                                            <div class="info">
                                                <div class="title">สรุปการสั่งซื้อ</div>
                                                <div class="desc">ดูสรุปรายการสั่งซื้อสินค้า</div>
                                            </div>
                                        </a>
									</div>
								</div>
								<!-- END col-3 -->
							</div>
							<!-- END row -->
						</div>
						<!-- END checkout-header -->
                    <form action="<?=base_url('Checkout/saveShippingDetails'); ?>" method="POST" class="form-horizontal">
						<!-- BEGIN checkout-body -->
						<div class="checkout-body">
                            <div class="form-group">
                                <label class="control-label col-md-4">
                                    First Name <span class="text-danger">*</span>
                                </label>
                                <?php echo form_error('firstname','<small class="text-danger">','</small>'); ?>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="firstname" value="" placeholder="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">
                                    Last Name <span class="text-danger">*</span>
                                </label>
                                <?php echo form_error('lastname','<small class="text-danger">','</small>'); ?>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="lastname" value="" placeholder="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">
                                    Company Name <span class="text-danger">&nbsp;</span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="companyname" value="" placeholder="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">
                                    Telephone
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="telephone" value="" placeholder="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">
                                    Mobile Phone <span class="text-danger">*</span>
                                </label>
                                <?php echo form_error('mobilephone','<small class="text-danger">','</small>'); ?>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="mobilephone" value="" placeholder="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">
                                    Fax
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="fax" value="" placeholder="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">
                                    Street Address <span class="text-danger">*</span>
                                </label>
                                <?php echo form_error('address1','<small class="text-danger">','</small>'); ?>
                                <div class="col-md-4">
                                    <input type="text" class="form-control m-b-10" name="address1" value="" placeholder="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">
                                    Street Address 2
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="address2" value="" placeholder="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">
                                    ZIP Code
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="zipcode" value="" placeholder="" />
                                    <p class="help-block m-b-0">Enter ZIP for City and State ZIP Code</p>
                                </div>
                            </div>
                            <?php /*<div class="form-group">
                                <label class="control-label col-md-4">
                                    &nbsp;
                                </label>
                                <div class="col-md-4">
                                    <label class="f-w-500">
                                        <input type="checkbox" name="businessaddress" value="1" />
                                        This is a business address
                                        <a href="#" class="m-l-5 text-muted" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="This helps us choose the best shipping method for you. Business shipments are normally delivered on weekdays by 5:00 p.m. local time. Residential shipments are normally delivered Monday - Saturday by 8:00 p.m. local time.">
                                            <i class="fa fa-question-circle"></i>
                                        </a>
                                    </label>
                                </div>
                            </div>*/ ?>
                            <hr />
                            <div class="m-b-5"><b>Shipping Policy</b></div>
                            <ul class="checkout-info-list">
                                <li>Delivery by Volume License Ultrasoft</li>
                                <li>Certificated of Volume License Ultrasoft</li>
                            </ul>
                        </div>
						<!-- END checkout-body -->
						<!-- BEGIN checkout-footer -->
						<div class="checkout-footer">
                            <a href="<?=base_url('Cart'); ?>" class="btn btn-white btn-lg pull-left">Back</a>
                            <button type="submit" class="btn btn-inverse btn-lg p-l-30 p-r-30 m-l-10">Next</button>
                        </div>
						<!-- END checkout-footer -->
					</form>
				</div>
				<!-- END checkout -->
			</div>
			<!-- END container -->
		</div>
		<!-- END #checkout-info -->

