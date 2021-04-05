<?php
if (!isset($page_title)) {
    $page_title = "Sport Hub";
};

$headerTitles = [
    "logo" => "🅂🄿🄾🅁🅃 🄷🅄🄱",
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
        <link rel="stylesheet" href=<?php echo url_for("/css/styles.css") ?>>

        <title>
            <?= $page_title ?>
        </title>
    </head>

    <body>
        <!-- Reusable Header -->
        <header class="header">
            <div class="container--center">
                <section class="header__content">
                    <h1 class="header__logo logo">
                        <a href=<?php echo url_for("/index.php"); ?>>
                            <?= $headerTitles["logo"]; ?>
                        </a>
                    </h1>

                    <ul class="navigation">
                        <li><a class="navigation__item" href=<?php echo url_for("/inc/contactus.php") ?>><i
                                    class="fas fa-comment"></i><span><?= $headerTitles["navigation_up"]["contact_us"]; ?></span></a>
                        </li>
                        <li><a class="navigation__item" href="#"><i class="fas fa-user-alt"></i><span>
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
                        if ($category["category_id"] == 6) {
                            continue;
                        } ?>
                        <li class="navigation__item--hover">
                            <a href="#" class="navigation__item"><?= $category["category_name"] ?></a>
                            <ul class="navigation__sub-list">
                                <?php
                                $collections = query_all_records_where_condition("collection", ["category_id" => $category["category_id"]]);
                                while ($collection = mysqli_fetch_assoc($collections)) {
                                ?>
                                <li><a href=<?php echo url_for("/inc/collection.php?id=" . $collection["collection_id"]) ?>
                                        class=" navigation__item"><?= $collection["collection_name"]; ?></a>
                                </li>
                                <?php }; ?>
                                <?php mysqli_free_result($collections); ?>
                            </ul>
                        </li>
                        <?php }; ?>
                    </ul>

                    <form class="header__search-bar search-bar">
                        <input type="search" class="search-bar__input" name="query" placeholder="Search products..."
                            autocomplete="off" spellcheck="false">
                        <button type="submit" class="search-bar__button" name="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>

                    <?php mysqli_free_result($categories); ?>
                </section>

            </div>
        </header>

        <!--End File -->