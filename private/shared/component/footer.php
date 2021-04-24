<footer class="footer">
    <div class="container">
        <div class="footer__logo">
            <h1>
                <a ref="#" class="logo">
                    <img src=<?= url_for("/asset/logo/Logo-3.png") ?>></a>
            </h1>
        </div>
        <hr class="line--border-yellow-content-yellow">
        <section class="footer-content">
            <!--Left side of the footer-->
            <div class="footer-content__left">
                <h3 class="footer-content__title">find us on</h3>
                <ul class="icon-wrapper">
                    <li class="icon-pagragraph icon-wrapper__item">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <p>Twitter</p>
                    </li>
                    <li class="icon-pagragraph icon-wrapper__item">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <p>Facebook</p>
                    </li>
                    <li class="icon-pagragraph icon-wrapper__item">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <p>Linkedin</p>
                    </li>
                </ul>
            </div>

            <!--Right side of the footer-->
            <div class="footer-content__right">
                <h3 class="footer-content__title">contact us on </h3>
                <ul class="icon-wrapper">
                    <li class="icon-pagragraph icon-wrapper__item">
                        <a href="#"><i class="fas fa-phone-square-alt"></i></a>
                        <p>0232-232-323</p>
                    </li>
                    <li class="icon-pagragraph icon-wrapper__item">
                        <a href="#"><i class="fas fa-envelope"></i></a>
                        <p>gearup@ait.nsw.edu.au</p>
                    </li>
                    <li class="icon-pagragraph icon-wrapper__item">
                        <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                        <p>7 Kelly Street, Ultimo, NSW</p>
                    </li>
                </ul>
            </div>
        </section>
    </div>

</footer>
</body>



</html>

<!-- Disconnect the database -->
<?php
db_disconnect($dbConnection);
?>