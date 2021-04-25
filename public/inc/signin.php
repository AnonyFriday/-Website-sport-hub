<!-- HEADER -->

<?php
require_once("../../private/initializer.php");
include_once(SHARED_PATH . "/component/header.php");
?>


<main>
    <div class="modal-cover">
        <div class="modal form">
            <a class="btn__modal-close" href=<?= url_for("/index.php") ?>>x</a>
            <h3 class="form__title modal__title ">Sign in with us</h3>

            <!-- FORM CONTENT -->
            <form id="id_form-login" class="form__content" action=<?= url_for("/inc/modules/authentication/ajax_processLogin.php") ?>>
                <input class="modal__textfield" type="email" name=<?= USER_GMAIL ?> placeholder="Email" autocomplete="off" spellcheck="false" required>
                <input class="modal__textfield" type="password" name=<?= USER_PASSWORD ?> placeholder="Password" autocomplete="off" spellcheck="false" required>
                <div class="modal__confirm-control">
                    <input id="id_login-btn" class="btn btn-control" type="button" value="Sign In" onclick="login();">
                    <a class=" btn btn-control" href=<?= url_for("/inc/register.php"); ?>>Haven't got an account</a>
                </div>

                <hr class=" line--border-black-content-black">

                <ul class="modal__social-media">
                    <li>
                        <a href="#" class="btn btn-text-facebook">
                            <i class="fa fa-facebook"></i>
                            <p>Login with Facebook</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-text-twitter">
                            <i class="fa fa-twitter"></i>
                            <p>Login with Twitter</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-text-google">
                            <i class="fa fa-google"></i>
                            <p>
                                Login with Google+
                            </p>
                        </a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</main>


<!-- FOOTER -->
<?php include_once(SHARED_PATH . "/component/footer.php") ?>