<?php
session_start();
require("../../../../private/initializer.php");

// Check if user session exists or not 
if (!isset($_SESSION[SESSION_USER_LOGIN])) {
    $_SESSION[SESSION_USER_LOGIN] = NULL;
}


// Check if it's the ajax request
if (!is_ajax_request()) {
    exit();
} else {
    $user_email    = $_POST[USER_GMAIL] ?? "";
    $user_password = $_POST[USER_PASSWORD] ?? "";
    $result = query_authenticate_login(USER_TABLE, $user_email, $user_password);


    if (!isset($_SESSION[SESSION_USER_LOGIN]) && $result) {
        // If current user's session is null, add new user
        $_SESSION[SESSION_USER_LOGIN] = $result[USER_ID];
        echo json_encode($result);
    } else {
        echo false;
        exit();
    }
}
