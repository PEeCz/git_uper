    <!-- BEGIN #checkout-payment -->
        <div class="section-container" id="checkout-payment">
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
                                    <div class="step">
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
                                    <div class="step active">
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
                        <!-- BEGIN checkout-body -->
                        <div class="checkout-body">
							<h4 class="checkout-title">ขั้นตอนการชำระเงิน</h4>
                            <!-- BEGIN checkout-question-list -->
            <form action="<?=base_url('Checkout/savePaymentInfo'); ?>" method="POST" name="form_payment" class="form-horizontal">
                <div class="row checkout-question-list" id="checkout-faq">
                    <!-- BEGIN col-6 -->
                    <div class="col-md-6">
                        <div class="clearfix">
                            <div class="question">
                                <a href="#checkout-faq-1" class="collapsed" data-toggle="collapse" data-parent="#checkout-faq">
                                    <span class="dash">-</span> การชำระเงิน
                                </a>   
                            </div>
                            <div class="answer collapse in" id="checkout-faq-1">
                                <input type="radio" name="payment_method" value="payment_by_transfer">ชำระด้วยการโอน
                                <input type="radio" name="payment_method" value="payment_by_cash">ชำระด้วยเงินสด
                            </div> 
                        </div>
                        <div class="clearfix m-t-10">
                            <div class="question">
                                <a href="#checkout-faq-2" class="collapsed" data-toggle="collapse" data-parent="#checkout-faq">
                                    <span class="dash">-</span> วิธีการชำระเงินด้วยการโอน
                                </a>   
                            </div>
                            <div class="answer collapse in" id="checkout-faq-2">
                                Curabitur vitae venenatis odio, eget molestie mauris. Nullam vitae turpis at mi consequat rutrum quis quis mi. Vestibulum imperdiet neque non libero condimentum, quis sodales magna molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                            </div> 
                        </div>
                        <div class="clearfix m-t-10">
                            <div class="question">
                                <a href="#checkout-faq-3" class="collapsed" data-toggle="collapse" data-parent="#checkout-faq">
                                    <span class="dash">-</span> วิธีการชำระเงินด้วยเงินสด
                                </a>   
                            </div>
                            <div class="answer collapse in" id="checkout-faq-3">
                                Cras malesuada mi quis purus pharetra egestas. Curabitur auctor sapien est, eu porttitor velit ornare in. Fusce porta suscipit diam at placerat. Donec lobortis iaculis accumsan. Ut semper felis vel nisi aliquam facilisis.
                            </div> 
                        </div>
                    </div>
                    <!-- END col-6 -->
                    <!-- BEGIN col-6 -->
                    <div class="col-md-6">
                        <div class="clearfix">
                            <div class="question">
                                <a href="#checkout-faq-4" class="collapsed" data-toggle="collapse" data-parent="#checkout-faq">
                                    <span class="dash">-</span> Did not receive the Pin Code on my mobile?
                                </a>   
                            </div>
                            <div class="answer collapse in" id="checkout-faq-4">
                                Duis gravida sem eu arcu efficitur, laoreet egestas nibh posuere. Pellentesque suscipit tincidunt porttitor. Aliquam vitae massa vel justo lobortis posuere. Nulla tempor enim at auctor dignissim. Aenean sit amet venenatis odio.
                            </div> 
                        </div>
                        <div class="clearfix m-t-10">
                            <div class="question">
                                <a href="#checkout-faq-5" class="collapsed" data-toggle="collapse" data-parent="#checkout-faq">
                                    <span class="dash">-</span> My credit card has been charged, but my order shows failed?
                                </a>   
                            </div>
                            <div class="answer collapse in" id="checkout-faq-5">
                                Nunc consectetur tellus libero, at tempor dolor scelerisque id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc feugiat ligula vitae tincidunt sagittis. Etiam congue ligula purus, ut fringilla ante interdum eu.
                            </div> 
                        </div>
                    </div>
                    <!-- END col-6 -->
                </div>
                <!-- END checkout-question-list -->
                        </div>
                        <!-- END checkout-body -->
                        <!-- BEGIN checkout-footer -->
                        <div class="checkout-footer">
                            <button type="submit" class="btn btn-inverse btn-lg p-l-30 p-r-30 m-l-10">Proceed</button>
                        </div>
                        <!-- END checkout-footer -->
            </form>
                </div>
                <!-- END checkout -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #checkout-payment -->