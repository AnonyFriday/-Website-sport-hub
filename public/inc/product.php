<!-- HEADER -->

<?php
require_once("../../private/initializer.php");
include_once(SHARED_PATH . "/component/header.php");

$topPicks = query_random_records("product", 4);
if (is_request("GET")) {
    $product_id = $_GET["id"];
    $products    = query_all_records_where_condition(PRODUCT_TABLE, [PRODUCT_ID => $product_id]);
} else {
    $product  = [];
}

?>
<main>
    <div class="container">
        <section class="product">
            <?php while ($product = mysqli_fetch_assoc($products)) { ?>
                <div class="product__image">
                    <img src=<?= $product[PRODUCT_IMAGE_URL] ?> alt="Product Image">
                </div>
                <div class="product__info">
                    <div class="bottom-info">
                        <h2 class="product__title section-header"><?= $product[PRODUCT_NAME] ?></h2>
                        <p class="product__price"><?= $product[PRODUCT_PRICE] ?> $</p>

                        <!-- Populate on size -->
                        <div class="info-container">

                            <div class="info-container__item">
                                <h3 class="section-header">size</h3>
                                <?php
                                $sizes = query_all_records_where_condition("size", [SIZE_ID => $product[SIZE_ID]]);
                                while ($size = mysqli_fetch_assoc($sizes)) {
                                ?>
                                    <p><?= $size[SIZE_NAME]; ?></p>
                                <?php }; ?>
                                <?php mysqli_free_result($sizes); ?>
                            </div>

                            <div class="info-container__item">
                                <h3 class="section-header">information</h3>
                                <p> <?= $product[PRODUCT_INFORMATION] ?></p>
                            </div>
                        </div>
                    <?php };
                mysqli_free_result($products); ?>
                    </div>
                    <div class="bottom-controls">

                        <select class="bottom-controls__quantity-select" name="quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
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

        <section class="container__top-pick">
            <h2 class="section-header top-pick__header">top picks</h2>
            <ul class="list__thumbnail-product">
                <?php while ($topPick = mysqli_fetch_assoc($topPicks)) { ?>
                    <li class="thumbnail-product">
                        <div class="thumbnail-product__image overlay--relative">
                            <img src=<?= $topPick[PRODUCT_IMAGE_URL] ?> alt="thumbnail-product Image" />
                            <div class="overlay">
                                <div class="overlay__link">
                                    <a href=<?= url_for("/inc/product.php?id=" . $topPick[PRODUCT_ID]) ?>>Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail-product__info">
                            <div class="thumbnail-product__title">
                                <h3><?= $topPick[PRODUCT_NAME]; ?></h3>
                            </div>
                            <div class="thumbnail-product__price">
                                <p><?= $topPick[PRODUCT_PRICE]; ?></p>
                            </div>
                        </div>
                    </li>

                <?php };
                mysqli_free_result($topPicks);
                ?>

            </ul>
        </section>
    </div>
</main>

<!-- FOOTER -->
<?php include_once(SHARED_PATH . "/component/footer.php") ?>