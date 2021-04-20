<?php
// ===============================================/
// Query all records 
// ===============================================/
function query_all_records($table)
{
    global $dbConnection;
    $query = "SELECT * FROM $table";
    //! Security warning: SQL Injection
    $result_set = mysqli_query($dbConnection, $query);
    db_confirm_result_set($result_set, $query);
    return $result_set;
}

// ===============================================/
// Query all records where condition
// ! Currently available for 1 condition
// ===============================================/
function query_all_records_where_condition($table, $condition)
{
    global $dbConnection;
    $query  = "SELECT * FROM $table WHERE ";
    foreach ($condition as $key => $value) {
        $query .= "$key='" . $value . "'";
    }

    //! Security warning: SQL Injection
    $result_set = mysqli_query($dbConnection, $query);
    db_confirm_result_set($result_set, $query);
    return $result_set;
}


// ===============================================/
// Query all records where condition
// ! Currently available for 1 condition
// ===============================================/
function query_random_records($table, $limit)
{
    global $dbConnection;
    $query  = "SELECT * FROM $table ORDER BY RAND() ";
    $query .= "LIMIT $limit";

    //! Security warning: SQL Injection
    $result_set = mysqli_query($dbConnection, $query);
    db_confirm_result_set($result_set, $query);
    return $result_set;
}


// ===============================================/
// Query all records where condition
// ! Currently available for 1 condition
// ===============================================/
function insert_random_records($table, $props)
{
    global $dbConnection;

    $queryKeys   = "INSERT INTO $table (";
    $queryValues = "VALUES (";
    foreach ($props as $key => $value) {
        $queryKeys   .= $key . ",";
        $queryValues .= $value . ",";
    }
}




/* ================================================== PREPARE STATEMENT ================================================ */


// ===============================================/
function insert_submit_form($table, $firstname, $lastname, $email, $message)
{
    global $dbConnection;
    $query  = "INSERT INTO $table (";
    $query .= FORM_FIRST_NAME . ",";
    $query .= FORM_LAST_NAME . ",";
    $query .= FORM_EMAIL . ",";
    $query .= FORM_MESSAGE . ")";
    $query .= "VALUES (?,?,?,?);";

    $stmt   = mysqli_prepare($dbConnection, $query);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $message);
        $status = mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_close($stmt);

        if (!$result) {
            exit("Some thing was wrong. Please check again");
        } else {
            return true;
        }
    } else {
        echo mysqli_error($dbConnection);
        exit();
    }
}