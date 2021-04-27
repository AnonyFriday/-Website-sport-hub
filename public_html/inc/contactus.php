<!-- HEADER -->
<?php

require_once("../../private/initializer.php");
include_once(SHARED_PATH . "/component/header.php");


if (is_request("post")) {
    $fname = $_POST[FORM_FIRST_NAME];
    $lname = $_POST[FORM_LAST_NAME];
    $email = $_POST[FORM_EMAIL];
    $message = $_POST[FORM_MESSAGE];

    $result = query_insert_submit_form(FORM_TABLE, $fname, $lname, $email, $message);
    if ($result) {
        redirect_to("/inc/contactus.php");
    }
}

?>

<!-- MAIN -->
<main>
    <section class="contactus container">

        <div class="form contactus__form">
            <h3 class="form__title contactus__title">How can we help you?</h3>
            <form class="form__content contactus__content" method="POST" action=<?= url_for("/inc/contactus.php") ?>>
                <input class="modal__textfield" type="text" name=<?= FORM_FIRST_NAME ?> placeholder="First name" required>
                <input class="modal__textfield" type="text" name=<?= FORM_LAST_NAME ?> placeholder="Last name" required>
                <input class="modal__textfield" type="email" name=<?= FORM_EMAIL ?> placeholder="Email" maxlength="100" required>
                <textarea placeholder="Write your comments..." rows="20" wrap="off" required name=<?= FORM_MESSAGE ?> autocapitalize="none" minlength="50" maxlength="255"></textarea>
                <input class="form__btn btn btn-control" type="submit" name="Submit">
            </form>
        </div>

        <hr class="line--border-black-content-black">

        <div class="details">
            <h2>FAQ</h2>
            <details class="details__item faq-question">
                <summary class="details__summary">
                    <span>How can I get free products</span>
                </summary>
                <div class="details__content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione beatae officiis
                        repellendus?
                        Qui
                        pariatur, in magni eius nobis quis, facere illum nam quidem rerum quam doloribus sed
                        consequatur
                        dolore
                        quos sint tenetur placeat molestiae quo adipisci, quasi illo? Voluptatibus, adipisci
                        nesciunt
                        pariatur
                        harum, earum perspiciatis est laborum, consequatur sapiente ratione non eos ab. Quidem,
                        aperiam
                        qui
                    </p>
                </div>
            </details>
            <details class="details__item faq-question">
                <summary class="details__summary">
                    <span>How can I get free products</span>
                </summary>
                <div class="details__content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione beatae officiis
                        repellendus?
                        Qui
                        pariatur, in magni eius nobis quis, facere illum nam quidem rerum quam doloribus sed
                        consequatur
                        dolore
                        quos sint tenetur placeat molestiae quo adipisci, quasi illo? Voluptatibus, adipisci
                        nesciunt
                        pariatur
                        harum, earum perspiciatis est laborum, consequatur sapiente ratione non eos ab. Quidem,
                        aperiam
                        qui
                    </p>
                </div>
            </details>
            <details class="details__item faq-question">
                <summary class="details__summary">
                    <span>How can I get free products</span>
                </summary>
                <div class="details__content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione beatae officiis
                        repellendus?
                        Qui
                        pariatur, in magni eius nobis quis, facere illum nam quidem rerum quam doloribus sed
                        consequatur
                        dolore
                        quos sint tenetur placeat molestiae quo adipisci, quasi illo? Voluptatibus, adipisci
                        nesciunt
                        pariatur
                        harum, earum perspiciatis est laborum, consequatur sapiente ratione non eos ab. Quidem,
                        aperiam
                        qui
                    </p>
                </div>
            </details>
        </div>
    </section>
</main>

<!-- FOOTER -->
<?php include_once(SHARED_PATH . "/component/footer.php") ?>