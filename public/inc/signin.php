<!-- HEADER -->

<?php
require_once("../../private/initializer.php");
include_once(SHARED_PATH . "/component/header.php") ?>

<main>
    <div class="modal-cover">
        <div class="form modal">
            <span class="modal__close-button">x</span>
            <h3 class="form__title modal__title ">Sign in with us</h3>
            <form class="form__content">
                <input class="modal__textfield" type="email" name="email" placeholder="Email" autocomplete="off"
                    spellcheck="false">
                <input class="modal__textfield" type="password" name="password" placeholder="Password"
                    autocomplete="off" spellcheck="false">
                <div class="modal__confirm-control">
                    <button class="btn btn-control" type="submit" value="Sign In"></button>
                    <button class="btn btn-control" type="submit" value="Register"></button>
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