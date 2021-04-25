<?php
require_once("../../private/initializer.php");
include_once(SHARED_PATH . "/component/header.php") ?>

<?php

if (isset($_POST["register"])) {
    $user_name = $_POST[USER_NAME];
    $user_password = $_POST[USER_PASSWORD];
    $user_retype_password = $_POST[USER_RETYPE_PASSWORD];
    $user_gmail = $_POST[USER_GMAIL];

    if ($user_password === $user_retype_password) {
        $result = query_register_account(USER_TABLE, $user_name, $user_gmail, $user_password);
        if ($result) {
            redirect_to("/inc/signin.php");
        } else {
            redirect_to("/inc/register.php");
        }
    } else {
        // alert user to retype password when those are not matched
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
                <input class="modal__textfield" type="text" name=<?= USER_NAME ?> placeholder="User Name" autocomplete="off" spellcheck="false" required>
                <input class="modal__textfield" type="email" name=<?= USER_GMAIL ?> placeholder="Email" autocomplete="off" spellcheck="false" required>
                <input class="modal__textfield" type="text" name=<?= USER_PASSWORD ?> placeholder="Password" autocomplete="off" spellcheck="false" required>
                <input class="modal__textfield" type="password" name=<?= USER_RETYPE_PASSWORD ?> placeholder="Confirm Password" autocomplete="off" spellcheck="false" required>

                <div class="modal__confirm-control">
                    <input class="btn btn-control" type="submit" name="register" value="Register">
                    <a class="btn btn-control" href=<?= url_for("/inc/signin.php"); ?>>Already have an account</a>
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