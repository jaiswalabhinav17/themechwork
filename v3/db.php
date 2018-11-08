<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);
define('DB_HOST','148.66.136.61:3306');


define('DB_USER','mechwork_dba');
define('DB_PASS','Admin@!2#');
define('DB_DATABASE','MECHWORKDB');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 