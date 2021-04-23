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
                        <button class="cart__delete-btn" type="button">remove</button>
                        <p class="cart__product-price">12323 </p>
                    </div>
                    <div class="cart__item">
                        <div class="cart__image"><img src=<?= url_for("/asset/TestingImages/testing-product.png"); ?> alt="Product Image"></div>
                        <div class="cart__product-info info">
                            <p class="info__name">TesTesting NameTesting NameTesting NameTesting NameTesting NameTesting NameTesting NameTesting NameTesting Nameting Name</p>
                            <p class="info__desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, aliquam ad debitis beatae tempora obcaecati, repudiandae quia vel ab nihil reiciendis cupiditate maiores nemo dignissimos omnis expedita accusamus, quibusdam rerum!</p>
                        </div>
                        <button class="cart__delete-btn" type="button">remove</button>
                        <p class="cart__product-price">123232222 </p>
                    </div>
                    <div class="cart__item">
                        <div class="cart__image"><img src=<?= url_for("/asset/TestingImages/testing-product.png"); ?> alt="Product Image"></div>
                        <div class="cart__product-info info">
                            <p class="info__name">TesTesting NameTesting NameTesting NameTesting NameTesting NameTesting NameTesting NameTesting NameTesting Nameting Name</p>
                            <p class="info__desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, aliquam ad debitis beatae tempora obcaecati, repudiandae quia vel ab nihil reiciendis cupiditate maiores nemo dignissimos omnis expedita accusamus, quibusdam rerum!</p>
                        </div>
                        <button class="cart__delete-btn" type="button">remove</button>
                        <p class="cart__product-price">12323222 </p>
                    </div>
                    <div class="cart__item">
                        <div class="cart__image"><img src=<?= url_for("/asset/TestingImages/testing-product.png"); ?> alt="Product Image"></div>
                        <div class="cart__product-info info">
                            <p class="info__name">TesTesting NameTesting NameTesting NameTesting NameTesting NameTesting NameTesting NameTesting NameTesting Nameting Name</p>
                            <p class="info__desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, aliquam ad debitis beatae tempora obcaecati, repudiandae quia vel ab nihil reiciendis cupiditate maiores nemo dignissimos omnis expedita accusamus, quibusdam rerum!</p>
                        </div>
                        <button class="cart__delete-btn" type="button">remove</button>
                        <p class="cart__product-price">123223 </p>
                    </div>

                </div>
            </div>
            <p class="cart__total-price">222.222$</p>
            <div class="payment">
                <p class="cart__header">payment options</p>
                <div class="payment__options"></div>
                <button class="payment__buy-btn" type="button">buy now</button>
            </div>
        </section>
    </div>
</main>

<!-- FOOTER -->
<?php include_once(SHARED_PATH . "/component/footer.php"); ?>