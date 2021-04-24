<?php
session_start();

require("../../../private/initializer.php");

// Check if session of the carts exists or not
if (!isset($_SESSION[SESSION_CARTS])) {
    $_SESSION[SESSION_CARTS] = [];
}

// Check if it's the ajax request
if (!is_ajax_requrest()) {
    exit();
} else {
    $product_id = isset($_POST[PRODUCT_ID]) ? $_POST[PRODUCT_ID] : 0;
    if (!in_array($product_id, $_SESSION[SESSION_CARTS])) {
        // If it's not inside the session
        $_SESSION[SESSION_CARTS][] = $product_id;
        echo true;
    } else {
        echo false;
    }
}
