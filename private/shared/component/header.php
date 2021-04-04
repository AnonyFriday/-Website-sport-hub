<?php
if (!isset($page_title)) {
    $page_title = "Sport Hub";
};

$categories  = query_all_records("category");

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

        <title><?= $page_title ?></title>
    </head>

    <body>
        <!-- Reusable Header -->
        <header class="header">
            <div class="container--center">
                <section class="header__content">
                    <h1 class="header__logo logo">
                        <a href=<?php echo url_for("/index.php"); ?>>🅂🄿🄾🅁🅃 🄷🅄🄱</a>
                    </h1>

                    <ul class="header__list navigation-base">
                        <li><a href=<?php echo url_for("/inc/contactus.php") ?>><i
                                    class="fas fa-comment"></i><span>Contact Us</span></a></li>
                        <li><a href="#"><i class="fas fa-user-alt"></i><span>Login</span></a></li>
                        <li><a href="#"><i class="fas fa-shopping-cart"></i><span>Cart</span></a></li>
                    </ul>
                </section>

                <section class="header__content">
                    <!-- Content will be populated later on-->
                    <ul class="header__list navigation-base">
                        <li><a href=<?php echo url_for("/index.php"); ?>>Home</a></li>

                        <!-- Populate data into header -->
                        <?php while ($category = mysqli_fetch_assoc($categories)) { ?>
                        <li class="navigation-multilevel">
                            <a href="#"><?= $category["category_name"] ?></a>
                            <ul>
                                <?php
                                $collections = query_all_records_where_condition("collection", ["category_id" => $category["category_id"]]);
                                while ($collection = mysqli_fetch_assoc($collections)) {
                                ?>
                                <li><a href="#"><?= $collection["collection_name"] ?></li>
                                <?php }; ?>
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

                </section>
            </div>
        </header>

        <!--End File -->