<?php
require_once("../../private/initializer.php");

unset($_SESSION[SESSION_CARTS]);
unset($_SESSION[SESSION_USER_LOGIN]);

$result = session_destroy();
if ($result) {
    redirect_to("index.php");
} else {
    exit("Something wrong happen. Please try again");
}
