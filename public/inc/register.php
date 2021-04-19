<?php
require_once("../../private/initializer.php");
include_once(SHARED_PATH . "/component/header.php") ?>

<?php
if (is_request("POST")) {
    if (isset($_POST["signin"])) {
        redirect_to("inc/signin.php");
    }
}
?>

<main>
    <div class="modal-cover">
        <div class="modal form">
            <a class="btn__modal-close" href=<?= url_for("/index.php") ?>>x</a>
            <h3 class="form__title modal__title">Register Now</h3>

            <!-- FORM CONTENT -->
            <form class="form__content" method="POST">
                <input class="modal__textfield" type="email" name="email" placeholder="Email" autocomplete="off"
                    spellcheck="false">
                <input class="modal__textfield" type="password" name="password" placeholder="Password"
                    autocomplete="off" spellcheck="false">
                <input class="modal__textfield" type="retype-password" placeholder="Confirm Password" autocomplete="off"
                    spellcheck="false">
                <div class="modal__confirm-control">
                    <input class="btn btn-control" type="submit" name="register" value="Register">
                    <input class="btn btn-control" type="submit" name="signin" value=" Already have account">
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