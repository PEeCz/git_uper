        <!-- BEGIN #checkout-cart -->
        <div class="section-container" id="checkout-cart">
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
                                    <div class="step active">
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
                        <!-- BEGIN checkout-body -->
                        <div class="checkout-body">
                            <div class="table-responsive">
                                <table class="table table-cart">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-center">Total</th>
                                            <th class="text-center">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php if($cart = $this->cart->contents()): ?>
                                <?php foreach($cart as $items): ?>
                                    <form method="POST" action="<?=base_url('Cart/edit/'.$items['rowid']); ?>">
                                        <tr>
                                            <td class="cart-product">
                                                <div class="product-info">
                                                    <div class="title"><?=$items['name']; ?></div>
                                                </div>
                                            </td>
                                            <td class="cart-price text-center"><?=number_format($items['price'],2); ?></td>
                                            <td class="cart-qty text-center">
                                                <div class="cart-qty-input">
                                                    <a href="#" class="qty-control left disabled" data-click="decrease-qty" data-target="#<?=$items['rowid']; ?>"><i class="fa fa-minus"></i></a>
                                                    <input type="text" name="qty" value="<?=$items['qty']; ?>" class="form-control" id="<?=$items['rowid']; ?>" />
                                                    <a href="#" class="qty-control right disabled" data-click="increase-qty" data-target="#<?=$items['rowid']; ?>"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </td>
                                            <td class="cart-total text-center">
                                                <?=number_format($items['price'],2); ?>
                                            </td>
                                            <td class="text-center">
                                                <input type="submit" class="btn btn-xs btn-warning" name="update" value="Update">
                                                <a href="<?=base_url(); ?>Cart/deleteCart/<?=$items['rowid']; ?>" class="btn btn-xs btn-danger">X</a>
                                            </td>
                                        </tr>
                                    </form>
                                <?php endforeach; ?>
                                        <tr>
                                            <td class="cart-summary" colspan="6">
                                                <div class="summary-container">
                                                    <div class="summary-row">
                                                        <div class="field">Quantity</div>
                                                        <div class="value"><?=$this->cart->total_items(); ?> ชิ้น</div>
                                                    </div>
                                                    <div class="summary-row">
                                                        <div class="field">Cart Subtotal</div>
                                                        <div class="value"><?=number_format($this->cart->total(),2); ?> บาท</div>
                                                    </div>
                                                    <div class="summary-row text-danger">
                                                        <div class="field">VAT 7%</div>
                                                        <div class="value"><?php echo number_format($getvat,2); ?> บาท</div>
                                                    </div>
                                                    <div class="summary-row total">
                                                        <div class="field">Total</div>
                                                        <div class="value"><?=number_format(round($getbalancetotal),2);
                                                        $a = $getbalancetotal;
                                                        $sdata = array();
                                                        $sdata['total'] = $a;
                                                        $this->session->set_userdata($sdata);
                                                        ?> บาท</div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                            <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END checkout-body -->
                        <!-- BEGIN checkout-footer -->
                        <div class="checkout-footer">
                            <a href="<?=base_url('Checkout/shippingDetails'); ?>" class="btn btn-white btn-lg pull-left">Next</a>
                            <button type="submit" class="btn btn-inverse btn-lg p-l-30 p-r-30 m-l-10">Checkout</button>
                        </div>
                        <!-- END checkout-footer -->

                </div>
                <!-- END checkout -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #checkout-cart -->
