<?php
ob_start();
session_start();
//  ===============================================/ 
//  Assign file paths to PHP constants
//  __FILE__ returns the current path to this file
//! Can not import the PRIVATE_PATH . initializer.php to other file because this is the initial file
//  ===============================================/ 

define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));

define("SHARED_PATH", PRIVATE_PATH . "/shared");
define("DATABASE_PATH", PRIVATE_PATH . "/database");
define("PUBLIC_PATH", PROJECT_PATH . "/public_html");


//  ===============================================/ 
//  Assign the root URL to a PHP constant
//  * Do not need to include the domain
//  * Use same document root as webserver
//  * Can set a hardcoded value:
//  define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
//  define("WWW_ROOT", '');
//  * Can dynamically find everything in URL up to "/public"
//  ===============================================/ 
$public_end = strpos($_SERVER['SCRIPT_NAME'], "/public_html") + 12; // Return the last position after the word "public"
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end); // Start from ...../public
define("WWW_ROOT", $doc_root);


//  ===============================================/ 
//  Include other partial files
//  ===============================================/ 
require(SHARED_PATH . "/utility/functions.php");
require(SHARED_PATH . "/utility/validations.php");
require(SHARED_PATH . "/utility/constants.php");
require(DATABASE_PATH . "/db_connection.php");
require(DATABASE_PATH . "/db_query.php");
$dbConnection = db_connect();

//  ===============================================/ 
//  Define Constants
//  ===============================================/ 
