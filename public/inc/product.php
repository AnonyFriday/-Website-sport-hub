<!-- HEADER -->

<?php
require_once("../../private/initializer.php");
include_once(SHARED_PATH . "/component/header.php") ?>


<main>
    <div class="container--center">
        <section class="product">
            <div class="product__image">
                <img src="https://res.cloudinary.com/dyio102qf/image/upload/v1617528004/category/category_baseball_xkwktp.jpg"
                    alt="Product Image">
            </div>
            <div class="product__info">
                <div class="bottom-info">
                    <h2 class="product__title section-header">Net Ball</h2>
                    <p class="product__price">$ 3000.0</p>

                    <div class="info-container">
                        <div class="info-container__item">
                            <h3 class="section-header">Size</h3>
                            <p>Infor</p>
                        </div>
                        <div class="info-container__item">
                            <h3 class="section-header">Product Information</h3>
                            <p>Infor</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-controls">

                    <select class="bottom-controls__quantity-select" name="quantity">
                        <option value="1">Audi</option>
                        <option value="2">BMW</option>
                        <option value="3">Citroen</option>
                        <option value="4">Ford</option>
                    </select>

                    <div class="bottom-controls__addToCart-button">
                        <a>add to cart</a>
                    </div>
                </div>

                <div class="bottom-texts">
                    <div>
                        <p>Free Shipping</p>
                    </div>
                    <div>
                        <p>Free Shipping</p>
                    </div>
                </div>
        </section>

        <section class=" container__top-pick">
            <h2 class="section-header top-pick__header">top picks</h2>
            <ul class="list_thumbnail-product">
                <li class="thumbnail-product">
                    <div class="thumbnail-product__image"><img
                            src="https://cdn.shopify.com/s/files/1/0066/6563/3903/products/pic_382e8468-e23d-4f96-a313-943668371165_812x.progressive.jpg?v=1613425103"
                            alt="thumbnail-product Image"></div>
                    <div class="thumbnail-product__info">
                        <div class="thumbnail-product__title">
                            <h3>Shin Guard</h3>
                        </div>
                        <div class="thumbnail-product__price">
                            <p>23.33$</p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </div>
</main>


<!-- FOOTER -->
<?php include_once(SHARED_PATH . "/component/footer.php") ?>