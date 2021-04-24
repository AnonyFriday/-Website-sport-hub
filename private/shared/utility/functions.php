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

// =========================================================/
// Checking AJAX request from the client
// =========================================================/
function is_ajax_requrest()
{
    return isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && !empty($_SERVER["HTTP_X_REQUESTED_WITH"]) && (strcmp($_SERVER["HTTP_X_REQUESTED_WITH"], "XMLHttpRequest") == 0);
}
