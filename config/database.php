<?php

ob_start();
session_start();

// db properties
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'product');

// make a connection to mysql here
$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die(include("../includes/mysql_error.php"));
/*
$con = mysqli_select_db (DB_DATABASE);
if(!$conn){
    die( "Sorry! There seems to be a problem connecting to our database.");
}
*/

// define site path
define('dir','http://www.gellish.com/');

// define admin site path
define('dir_admin','http://www.domain.com/admin/');

// define site title for top of the browser
define('site_title','gellish');

//define charset encoding
define('encoding','utf-8');

//define language
define('lang','en');

//define include checker
define('included', 1);

//include("../includes/functions.php");

?>

