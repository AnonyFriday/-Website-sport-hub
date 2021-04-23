<!-- HEADER -->

<?php
require_once("../../private/initializer.php");
include_once(SHARED_PATH . "/component/header.php") ?>

<?php

if (isset($_POST["signin"])) {
    $user_email    = $_POST[USER_GMAIL] ?? "";
    $user_password = $_POST[USER_PASSWORD] ?? "";

    $result = query_authenticate_login(USER_TABLE, $user_email, $user_password);
    if ($result) {
        // Save user_id inside session 
        // Redirect home page if result is successfull
        redirect_to("/index.php");
    } else {
        redirect_to("/inc/signin.php");
    }
}
?>


<main>
    <div class="modal-cover">
        <div class="modal form">
            <a class="btn__modal-close" href=<?= url_for("/index.php") ?>>x</a>
            <h3 class="form__title modal__title ">Sign in with us</h3>

            <!-- FORM CONTENT -->
            <form class="form__content" action=<?= url_for("/inc/signin.php") ?> method="POST">
                <input class="modal__textfield" type="email" name=<?= USER_GMAIL ?> placeholder="Email" autocomplete="off" spellcheck="false" required>
                <input class="modal__textfield" type="password" name=<?= USER_PASSWORD ?> placeholder="Password" autocomplete="off" spellcheck="false" required>
                <div class="modal__confirm-control">
                    <input class="btn btn-control" name="signin" type="submit" value="Sign In">
                    <a class="btn btn-control" href=<?= url_for("/inc/register.php"); ?>>Haven't got an account</a>
                </div>

                <hr class="line--border-black-content-black">

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