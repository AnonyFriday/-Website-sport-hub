<!-- HEADER -->

<?php
require_once("../../private/initializer.php");
include_once(SHARED_PATH . "/component/header.php");

if (!isset($_SESSION[SESSION_CARTS])) {
    $_SESSION[SESSION_CARTS] = [];
} else {
    $cartItems = $_SESSION[SESSION_CARTS];
}

?>


<!-- MAIN -->
<main>
    <div class="container">
        <section class="checkout">
            <h2 class="checkout__header">checkout</h2>

            <div class="cart">
                <p class="cart__header">shopping cart</p>
                <div id="id_cart-holder" class="cart__content">
                    <!-- Render Products from Session -->
                    <?php foreach ($cartItems as $product_id) { ?>
                        <?php
                        $product_result_set = query_all_records_where_condition(PRODUCT_TABLE, [PRODUCT_ID => $product_id]);
                        while ($product = mysqli_fetch_assoc($product_result_set)) { ?>
                            <div class="cart__item">
                                <div class="cart__image"><img src=<?= $product[PRODUCT_IMAGE_URL]; ?> alt="Product Image"></div>
                                <div class="cart__product-info info">
                                    <p class="info__name"><?= $product[PRODUCT_NAME]; ?></p>
                                    <p class="info__desc"><?= $product[PRODUCT_INFORMATION]; ?></p>
                                </div>
                                <button id="id_btn__remove-cart" class="btn-delete" type=" button">remove</button>
                                <p class="cart__product-price"><?= $product[PRODUCT_PRICE]; ?></p>
                            </div>
                        <?php }; ?>
                    <?php }; ?>
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