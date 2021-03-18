<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/0376e78535.js" crossorigin="anonymous"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="/css/styles.css">

        <title>Sport</title>
    </head>

    <body>
        <!-- Header will be reusable by using Promise later -->
        <header class="header">
            <section class="header__content">
                <h1 class="header__logo logo">
                    <a ref="/index.html">🅂🄿🄾🅁🅃 🄷🅄🄱</a>
                </h1>

                <ul class="header__list navigation-base">
                    <li><a href="#"><i class="fas fa-comment"></i><span>Contact Us</span></a></li>
                    <li><a href="#"><i class="fas fa-user-alt"></i><span>Login</span></a></li>
                    <li><a href="#"><i class="fas fa-shopping-cart"></i><span>Cart</span></a></li>
                </ul>
            </section>

            <section class="header__content">
                <!-- Content will be populated later on-->
                <ul class="header__list navigation-base">
                    <li><a href="#">Home</a></li>

                    <li class="navigation-multilevel">
                        <a href="#">Soccer</a>
                        <ul>
                            <li><a href=" #">Sub-Category</a></li>
                            <li class="navigation-lv2">
                                <a href="#">Sub-Category</a>
                                <ul>
                                    <li><a href="#">Sub-Category</a></li>
                                    <li><a href="#">Sub-Category</a></li>
                                    <li><a href="#">Sub-Category</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Sub-Category</a></li>
                            <li><a href="#">Sub-Category</a></li>
                        </ul>
                    </li>

                    <li class="navigation-multilevel">
                        <a href="#">Soccer</a>
                        <ul>
                            <li><a href=" #">Sub-Category</a></li>
                            <li class="navigation-lv2">
                                <a href="#">Sub-Category</a>
                                <ul>
                                    <li><a href="#">Sub-Category</a></li>
                                    <li><a href="#">Sub-Category</a></li>
                                    <li><a href="#">Sub-Category</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Sub-Category</a></li>
                            <li><a href="#">Sub-Category</a></li>
                        </ul>
                    </li>

                    <li class="navigation-multilevel">
                        <a href="#">Soccer</a>
                        <ul>
                            <li><a href=" #">Sub-Category</a></li>
                            <li class="navigation-lv2">
                                <a href="#">Sub-Category</a>
                                <ul>
                                    <li><a href="#">Sub-Category</a></li>
                                    <li><a href="#">Sub-Category</a></li>
                                    <li><a href="#">Sub-Category</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Sub-Category</a></li>
                            <li><a href="#">Sub-Category</a></li>
                        </ul>
                    </li>

                    <li class="navigation-multilevel">
                        <a href="#">Soccer</a>
                        <ul>
                            <li><a href=" #">Sub-Category</a></li>
                            <li class="navigation-lv2">
                                <a href="#">Sub-Category</a>
                                <ul>
                                    <li><a href="#">Sub-Category</a></li>
                                    <li><a href="#">Sub-Category</a></li>
                                    <li><a href="#">Sub-Category</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Sub-Category</a></li>
                            <li><a href="#">Sub-Category</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="header__search-bar search-bar">
                    <input type="search" class="search-bar__input" name="query" placeholder="Search products..."
                        autocomplete="off" spellcheck="false">
                    <button type="submit" class="search-bar__button" name="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>

            </section>
        </header>

        <!--End File -->