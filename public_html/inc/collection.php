<!-- HEADER -->
<?php
require_once("../../private/initializer.php");
include_once(SHARED_PATH . "/component/header.php");

$collection_id = $_GET[COLLECTION_ID] ?? null;
$category_id   = $_GET[CATEGORY_ID] ?? null;
$search_product_name  = $_GET["search"] ?? null;

if (isset($collection_id)) {
    $products = query_all_records_where_condition(PRODUCT_TABLE, [COLLECTION_ID => $collection_id]);
} else if (isset($category_id)) {
    $products = query_all_records_where_condition(PRODUCT_TABLE, [CATEGORY_ID => $category_id]);
} else if (is_request("get") && isset($search_product_name)) {
    $products = query_products_where_search_condition_in_product_name(PRODUCT_TABLE, $search_product_name);
} else {
    $products = query_all_records(PRODUCT_TABLE);
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
            <h2 class="collection__title">PRODUCTS</h2>
            <ul class="collection__list__thumbnail-thumbnail-product">
                <?php while ($product = mysqli_fetch_array($products, MYSQLI_ASSOC)) { ?>
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
                <?php mysqli_free_result($products); ?>
            </ul>
        </div>
    </section>
</main>

<!-- FOOTER -->
<?php include_once(SHARED_PATH . "/component/footer.php") ?>