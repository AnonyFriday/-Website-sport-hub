<?php
session_start();
require("../../../../private/initializer.php");

// Check if session of the carts exists or not
if (!isset($_SESSION[SESSION_CARTS])) {
    $_SESSION[SESSION_CARTS] = [];
} else {
    $cartItems = $_SESSION[SESSION_CARTS];
    $carts     = [];
}

// Check if it's the ajax request
if (!is_ajax_request()) {
    exit();
} else {

    // foreach ($cartItems as $product_id) {
    //     while ($product = mysqli_fetch_assoc(query_all_records_where_condition(PRODUCT_TABLE, [PRODUCT_ID => $product_id]))) {
    //         f
    //     }
    // }

    // while ($product_id = $_SESSION[SESSION_CARTS]) {
    //     while ($product = query_all_records_where_condition(PRODUCT_TABLE, [PRODUCT_ID => $product_id])) {
    //         echo $product;
    //     }
    // }

    // if (!in_array($product_id, $_SESSION[SESSION_CARTS])) {
    //     // If it's not inside the session
    //     $_SESSION[SESSION_CARTS][] = $product_id;
    //     echo true;
    // } else {
    //     echo false;
    // }
}
