<?php
if (!isset($page_title)) {
    $page_title = "Sport Hub";
};

$headerTitles = [
    "navigation_up" => [
        "contact_us" => "contact us",
        "login" => "login",
        "cart"  => "cart"
    ],
    "navigation_bottom" => [
        "home" => "home",
        "all_products" => "all products",
    ]
];

$categories = query_all_records("category");
?>


<!-- Main -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/0376e78535.js" crossorigin="anonymous"></script>

        <!-- CSS -->
        <link rel="stylesheet" href=<?php echo url_for("/css/style.css") ?>>

        <!-- Java Script-->
        <script src=<?= url_for("/js/index.js") ?>></script>

        <title>
            <?= $page_title ?>
        </title>
    </head>

    <body>
        <!-- Reusable Header -->
        <header class="header">
            <div class="container">
                <section class="header__content">
                    <h1>
                        <a href="#" class="logo">
                            <img src=<?= url_for("/asset/logo/Logo-3.png") ?>>
                        </a>
                    </h1>

                    <ul class="navigation">
                        <li><a class="navigation__item" href=<?php echo url_for("/inc/contactus.php") ?>><i
                                    class="fas fa-comment"></i><span><?= $headerTitles["navigation_up"]["contact_us"]; ?></span></a>
                        </li>
                        <li><a class="navigation__item" href=<?php echo url_for("/inc/signin.php") ?>><i
                                    class="fas fa-user-alt"></i><span>
                                    <?= $headerTitles["navigation_up"]["login"]; ?></span></a></li>
                        <li><a class="navigation__item" href="#"><i class="fas fa-shopping-cart"></i><span>
                                    <?= $headerTitles["navigation_up"]["cart"]; ?></span></a></li>
                    </ul>
                </section>

                <section class="header__content">
                    <!-- Content will be populated later on-->
                    <ul class="navigation">
                        <li><a class="navigation__item" href=<?php echo url_for("/index.php"); ?>>
                                <?= $headerTitles["navigation_bottom"]["home"] ?>
                            </a>
                        </li>

                        <!-- Populate data into header -->
                        <?php while ($category = mysqli_fetch_assoc($categories)) {
                        // Remove "all products" from header
                        if ($category[CATEGORY_ID] == 6) {
                            continue;
                        } ?>

                        <li class="navigation__item--hover">
                            <a href="#" class="navigation__item"><?= $category[CATEGORY_NAME] ?></a>
                            <ul class="navigation__sub-list">
                                <?php
                                $collections = query_all_records_where_condition("collection", [CATEGORY_ID => $category[CATEGORY_ID]]);
                                while ($collection = mysqli_fetch_assoc($collections)) {
                                ?>
                                <li><a href=<?php echo url_for("/inc/collection.php?collection_id=" . secure_http($collection[COLLECTION_ID])) ?>
                                        class="navigation__item"><?= $collection[COLLECTION_NAME]; ?></a>
                                </li>
                                <?php }; ?>
                                <?php mysqli_free_result($collections); ?>
                            </ul>
                        </li>
                        <?php }; ?>
                        <?php mysqli_free_result($categories); ?>
                    </ul>



                    <form class="header__search-bar search-bar" method="GET"
                        action=<?= url_for("/inc/collection.php") ?>>
                        <input type="search" class="search-bar__input" name="search" placeholder="Search products..."
                            autocomplete="off" spellcheck="false">
                        <button type="submit" class="search-bar__button" value="Search">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>




                </section>
            </div>
        </header>

        <!--End File -->