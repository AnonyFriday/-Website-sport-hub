<!-- HEADER -->
<?php
require_once("../../private/initializer.php");
include_once(SHARED_PATH . "/component/header.php");

$collection_id = $_GET[COLLECTION_ID] ?? null;
if (isset($collection_id)) {
    $products = query_all_records_where_condition(PRODUCT_TABLE, [COLLECTION_ID => $collection_id]);
} else {
    redirect_to("/index.php");
}

?>

<!-- MAIN -->
<main>
    <!-- SEARCH CRITERIA -->
    <section class="collection container">
        <div class="collection__sidebar">
            <details class="details__item">
                <summary class="details__summary">
                    <span>Gender</span>
                </summary>
                <form class="details__content">
                    <div class="checkbox-wrapper">
                        <input type="checkbox" name="gender" value="man">
                        <span>Man</span>
                    </div>

                    <div class="checkbox-wrapper">
                        <input type="checkbox" name="gender" value="woman">
                        <span>Woman</span>
                    </div>
                </form>
            </details>

            <details class="details__item">
                <summary class="details__summary">
                    <span>Size</span>
                </summary>
                <form class="details__content">
                    <div class="checkbox-wrapper">
                        <input type="checkbox" name="gender" value="man">
                        <span>Man</span>
                    </div>

                    <div class="checkbox-wrapper">
                        <input type="checkbox" name="gender" value="woman">
                        <span>Woman</span>
                    </div>
                </form>
            </details>
            <details class="details__item">
                <summary class="details__summary">
                    <span>Gender</span>
                </summary>
                <form class="details__content">
                    <div class="checkbox-wrapper">
                        <input type="checkbox" name="gender" value="man">
                        <span>Man</span>
                    </div>

                    <div class="checkbox-wrapper">
                        <input type="checkbox" name="gender" value="woman">
                        <span>Woman</span>
                    </div>
                </form>
            </details>
        </div>

        <!-- LIST OF PRODUCTS-->
        <div class="collection__content">
            <h2 class="collection__title">Soccer</h2>
            <ul class="collection__list__thumbnail-thumbnail-product">
                <?php while ($product = mysqli_fetch_assoc($products)) { ?>
                <li class="thumbnail-product">
                    <div class="thumbnail-product__image overlay--relative">
                        <img src=<?= $product[PRODUCT_IMAGE_URL]; ?> alt="thumbnail-product Image">
                        <div class="overlay">
                            <div class="overlay__link">
                                <a href=<?= url_for("/inc/product.php?id=" . $product[PRODUCT_ID]) ?>>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail-product__info">
                        <div class="thumbnail-product__title">
                            <h3><?= $product[PRODUCT_NAME]; ?></h3>
                        </div>
                        <div class="thumbnail-product__price">
                            <p><?= $product[PRODUCT_PRICE]; ?></p>
                        </div>
                    </div>
                </li>
                <?php }; ?>
            </ul>
        </div>
    </section>
</main>

<!-- FOOTER -->
<?php include_once(SHARED_PATH . "/component/footer.php") ?>