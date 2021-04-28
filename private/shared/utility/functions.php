<?php


// ===============================================/
// Extract absolute url to the php file
// ===============================================/
function url_for(string $script_path)
{
    // add the leading '/' if not present
    if ($script_path[0] !== "/") {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}


// ===============================================/
// Defend from Javascript Injection
// ===============================================/
function secure_http(string $url)
{
    if (isset($url)) {
        return htmlspecialchars(urlencode($url));
    }
}


// =========================================================/
// Determine the request's type (e.g., GET, POST, PUT, ... )
// =========================================================/
function is_request(string $res)
{
    return $_SERVER["REQUEST_METHOD"] == strtoupper($res);
}


// =========================================================/
// Redirect to other url address by modifying the header
// =========================================================/
function redirect_to(string $destination)
{
    header("Location: " . url_for($destination));
    exit("Redirect successfully");
}

// =======================================================================/
// Remove value from the array
// Reorder array after removing item
// Do not use unset() due to the sustanable order after removing the array
// =======================================================================/
function remove_from_array($value, $array)
{
    $index = array_search($value, $array);
    if ($index !== false) {
        array_splice($array, $index, 1);
        return $array;
    }
}

// =========================================================/
// Checking AJAX request from the client
// =========================================================/
function is_ajax_request()
{
    return isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && !empty($_SERVER["HTTP_X_REQUESTED_WITH"]) && (strcmp($_SERVER["HTTP_X_REQUESTED_WITH"], "XMLHttpRequest") == 0);
}
