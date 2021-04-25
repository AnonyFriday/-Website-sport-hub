<?php
require("../../../../private/initializer.php");

// Check if it's the ajax request
if (!is_ajax_request()) {
    exit();
} else {

    $user_email    = $_POST[USER_GMAIL] ?? "";
    $user_password = $_POST[USER_PASSWORD] ?? "";
    $result = query_authenticate_login(USER_TABLE, $user_email, $user_password);

    // If verified, return username, else return false
    if ($result) {
        echo $result;
    } else {
        echo false;
    }
}
