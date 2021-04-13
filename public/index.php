<!-- HEADER -->
<?php
$page_title = "Sporthub - Sport Mall";

?>

<?php
require_once("../private/initializer.php");
include_once(SHARED_PATH . "/component/header.php")
?>

<?php
// | Get list of category from database
$categories = query_all_records("category");
$hotPicks   = query_random_records("product", 4);
$topFeatures   = query_random_records("product", 4);

?>

<!-- MAIN -->
<main>
    <div class="container--center">
        <section class="container__categories">
            <ul class="categories">
                <?php while ($category = mysqli_fetch_assoc($categories)) { ?>

                <li class="category">
                    <div class="category__content">
                        <div class="category__thumbnail-cover">
                            <img class="category__img" src=<?= $category[CATEGORY_IMAGE_URL] ?>
                                alt=" Category thumbnail">
                        </div>
                        <div class="category__info">
                            <div class="category__desc">
                                <p> <?= $category[CATEGORY_NAME] ?></p>
                            </div>
                            <div class="category__links"><a
                                    href=<?php echo url_for("/inc/collection.php?category_id=" . $category[CATEGORY_ID]) ?>>Buy
                                    Now</a></div>
                        </div>
                    </div>
                </li>

                <?php };
                mysqli_free_result($categories);
                ?>
            </ul>
        </section>

        <section class="container__top-pick">
            <h2 class="section-header top-pick__header">top picks</h2>
            <ul class="list__thumbnail-product">
                <!-- Loop random product inside the product table-->

                <?php while ($product = mysqli_fetch_assoc($hotPicks)) { ?>
                <li class="thumbnail-product">
                    <div class="thumbnail-product__image overlay--relative">
                        <img src=<?= $product[PRODUCT_IMAGE_URL] ?> alt="thumbnail-product Image" />
                        <div class="overlay">
                            <div class="overlay__link">
                                <a href=<?= url_for("/inc/product.php?id=" . $product[PRODUCT_ID]) ?>>Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail-product__info">
                        <div class="thumbnail-product__title">
                            <h3>
                                <?= $product[PRODUCT_NAME] ?> </h3>
                        </div>
                        <div class="thumbnail-product__price">
                            <p><?= $product[PRODUCT_PRICE] ?> $</p>
                        </div>
                    </div>
                </li>
                <?php };
                mysqli_free_result($hotPicks);
                ?>
            </ul>
        </section>

        <section class="container__featured-collection">
            <h2 class="section-header featured-collection__header">featured collection</h2>
            <ul class="list_thumbnail-product">
                <?php while ($product = mysqli_fetch_assoc($topFeatures)) { ?>
                <li class="thumbnail-product">
                    <div class="thumbnail-product__image overlay--relative">
                        <img src=<?= $product[PRODUCT_IMAGE_URL] ?> alt="Images">
                        <div class="overlay">
                            <div class="overlay__link">
                                <a href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail-product__info">
                        <div class="thumbnail-product__title">
                            <h3><?= $product[PRODUCT_NAME] ?></h3>
                        </div>
                        <div class="thumbnail-product__price">
                            <p><?= $product[PRODUCT_PRICE] ?> $</p>
                        </div>
                    </div>
                </li>
                <?php };
                mysqli_free_result($topFeatures);
                ?>
            </ul>
        </section>
    </div>
</main>


<!-- FOOTER -->
<?php include_once(SHARED_PATH . "/component/footer.php") ?>