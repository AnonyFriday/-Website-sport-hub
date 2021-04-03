<?php
require_once("db_credential.php");
// ======================================
// Open Database Connection
// ======================================
function db_connect()
{
    $connectionLink = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    db_confirm_connection();
    return $connectionLink;
}


// ======================================
// Close Database Connection
// ======================================
function db_disconnect($link)
{
    if (isset($link)) {
        mysqli_close($link);
    }
}


// ======================================
// Detech Database Connection if fail
// ======================================
function db_confirm_connection()
{
    if (mysqli_connect_errno()) {
        $msg = "Cannot connect to the database. \n";
        $msg = "Error Code: " . mysqli_connect_errno() . "\n";
        $msg = "Error: " . mysqli_connect_error() . "\n";
        exit($msg);
    }
}