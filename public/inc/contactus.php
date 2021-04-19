<!-- HEADER -->
<?php
require_once("../../private/initializer.php");
include_once(SHARED_PATH . "/component/header.php") ?>

<!-- MAIN -->
<main>
    <section class="contactus container">
        <div class="form contactus__form">
            <h3 class="form__title contactus__title">How can we help you?</h3>
            <form class="form__content contactus__content">

                <input type="text" name="fname" placeholder="First name" required>
                <input type="text" name="lname" placeholder="Last name" required>
                <input type="text" name="email" placeholder="Email" maxlength="100" required>
                <textarea placeholder="Write your comments..." cols="30" rows="5" wrap="off" required></textarea>
                <input class="form__btn btn btn-control" type="submit" value="Submit">

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