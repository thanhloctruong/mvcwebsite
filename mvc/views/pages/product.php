
<!-- first section -->
<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
    <div class="row">

     <!-- detail -->
        while($dt = mysqli_fetch_array($result)) 
        <div class="col-md-4 product-men mt-md-0 mt-5">
            <div class="men-pro-item simpleCart_shelfItem">
                <div class="men-thumb-item text-center">
                    <img src="../public/images/m2.jpg" alt="">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                        </div>
                    </div>
                    <span class="product-new-top">New</span>

                </div>
                <div class="item-info-product text-center border-top mt-4">
                    <h4 class="pt-1">
                        <a href="single.html">OPPO A37f</a>
                    </h4>
                    <div class="info-product-price my-2">
                        <span class="item_price">$230.00</span>
                        <del>$250.00</del>
                    </div>
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value=" " />
                                <input type="hidden" name="item_name" value="OPPO A37f" />
                                <input type="hidden" name="amount" value="230.00" />
                                <input type="hidden" name="discount_amount" value="1.00" />
                                <input type="hidden" name="currency_code" value="USD" />
                                <input type="hidden" name="return" value=" " />
                                <input type="hidden" name="cancel_return" value=" " />
                                <input type="submit" name="submit" value="Add to cart" class="button btn" />
                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
