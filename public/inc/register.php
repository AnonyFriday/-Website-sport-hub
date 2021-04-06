<?php
require_once("../../private/initializer.php");
include_once(SHARED_PATH . "/component/header.php") ?>

<main>
    <div class="modal-cover">
        <div class="modal">
            <span class="btn__modal-close">x</span>
            <h3 class="modal__title">Sign in with us</h3>
            <form class="modal__form">
                <input class="modal__textfield" type="email" name="email" placeholder="Email" autocomplete="off"
                    spellcheck="false">
                <input class="modal__textfield" type="password" name="password" placeholder="Password"
                    autocomplete="off" spellcheck="false">
                <input class="modal__textfield" type="retype-password" placeholder="Confirm Password" autocomplete="off"
                    spellcheck="false">
                <div class="modal__confirm-control">
                    <input class="btn btn-control" type="submit" value="Register">
                    <input class="btn btn-control" type="button" value="Already have account">
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