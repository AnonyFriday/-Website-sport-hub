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
                                <img class="category__img" src=<?= $category["image_url"] ?> alt=" Category thumbnail">
                            </div>
                            <div class="category__info">
                                <div class="category__desc">
                                    <p> <?= $category["category_name"] ?></p>
                                </div>
                                <div class="category__links"><a href=<?php echo url_for("/inc/collection.php?category_id=" . $category["category_id"]) ?>>Buy
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
            <ul class="list_thumbnail-product">
                <li class="thumbnail-product">
                    <div class="thumbnail-product__image"><img src="https://cdn.shopify.com/s/files/1/0066/6563/3903/products/pic_382e8468-e23d-4f96-a313-943668371165_812x.progressive.jpg?v=1613425103" alt="thumbnail-product Image"></div>
                    <div class="thumbnail-product__info">
                        <div class="thumbnail-product__title">
                            <h3>Shin Guard</h3>
                        </div>
                        <div class="thumbnail-product__price">
                            <p>23.33$</p>
                        </div>
                    </div>
                </li>
                <li class="thumbnail-product">
                    <div class="thumbnail-product__image"><img src="https://cdn.shopify.com/s/files/1/0066/6563/3903/products/pic_382e8468-e23d-4f96-a313-943668371165_812x.progressive.jpg?v=1613425103" alt="thumbnail-product Image"></div>
                    <div class="thumbnail-product__info">
                        <div class="thumbnail-product__title">
                            <h3>Shin Guard</h3>
                        </div>
                        <div class="thumbnail-product__price">
                            <p>23.33$</p>
                        </div>
                    </div>
                </li>
                <li class="thumbnail-product">
                    <div class="thumbnail-product__image"><img src="https://cdn.shopify.com/s/files/1/0066/6563/3903/products/pic_382e8468-e23d-4f96-a313-943668371165_812x.progressive.jpg?v=1613425103" alt="thumbnail-product Image"></div>
                    <div class="thumbnail-product__info">
                        <div class="thumbnail-product__title">
                            <h3>Shin Guard</h3>
                        </div>
                        <div class="thumbnail-product__price">
                            <p>23.33$</p>
                        </div>
                    </div>
                </li>
                <li class="thumbnail-product">
                    <div class="thumbnail-product__image"><img src="https://cdn.shopify.com/s/files/1/0066/6563/3903/products/pic_382e8468-e23d-4f96-a313-943668371165_812x.progressive.jpg?v=1613425103" alt="thumbnail-product Image"></div>
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


        <section class="container__featured-collection">
            <h2 class="section-header featured-collection__header">featured collection</h2>
            <ul class="list_thumbnail-product">
                <li class="thumbnail-product">
                    <div class="thumbnail-product__image"><img src="https://cdn.shopify.com/s/files/1/0066/6563/3903/products/pic_382e8468-e23d-4f96-a313-943668371165_812x.progressive.jpg?v=1613425103" alt="thumbnail-product Image" width="300px" height="300px"></div>
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
</div>
</div>
</li>
</ul>
</section>
</div>
</main>


<!-- FOOTER -->
<?php include_once(SHARED_PATH . "/component/footer.php") ?>