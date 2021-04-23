<!-- HEADER -->

<?php
require_once("../../private/initializer.php");
include_once(SHARED_PATH . "/component/header.php"); ?>

<!-- MAIN -->
<main>
    <div class="container">
        <section class="checkout">
            <h2 class="checkout__header">checkout</h2>
            <div class="cart">
                <p class="cart__header">shopping cart</p>
                <div class="cart__content">
                    <div class="cart__item">
                        <div class="cart__image"><img src=<?= url_for("/asset/TestingImages/testing-product.png"); ?> alt="Product Image"></div>
                        <div class="cart__product-info info">
                            <p class="info__name">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates itaque sed commodi repellendus. Quod voluptate distinctio, dolore obcaecati magnam sunt culpa necessitatibus non maxime repudiandae explicabo vero asperiores, expedita a!</p>
                            <p class="info__desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, aliquam ad debitis beatae tempora obcaecati, repudiandae quia vel ab nihil reiciendis cupiditate maiores nemo dignissimos omnis expedita accusamus, quibusdam rerum!</p>
                        </div>
                        <button id="id_btn__remove-cart" class="btn-delete" type=" button">remove</button>
                        <p class="cart__product-price">12323 </p>
                    </div>
                </div>
            </div>

            <div class="payment">
                <div class="total">
                    <p class="cart__header total__header">total</p>
                    <p class="total__price">2222222.2</p>
                </div>

                <div class="payment__options">
                    <p class="cart__header">payment options</p>
                    <div class="payment__option paypall">
                        <input type="radio" name="payment" value="paypall" checked>
                    </div>
                    <div class="payment__option mastercard">
                        <input type="radio" name="payment" value="mastercard">
                    </div>
                </div>

                <button class="btn-payment" type="button">buy now</button>
            </div>
        </section>


    </div>
</main>

<!-- FOOTER -->
<?php include_once(SHARED_PATH . "/component/footer.php"); ?>