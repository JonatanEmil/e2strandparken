<?php
require "classes/classDB.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED & ~E_STRICT);


define("CONFIG_LIVE", "0"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){

    $DB_SERVER = "localhost";
    $DB_NAME = "strandparkscreen";
    $DB_USER = "root";
    $DB_PASS = "root";

/*
    $DB_SERVER = "mysql5.unoeuro.com";
    $DB_NAME = "glaw_dk_db_e2Strandparken";
    $DB_USER = "glaw_dk";
    $DB_PASS = "ramgcyekdt93RfzwDAE6";
*/
}else{
    $DB_SERVER = "";
    $DB_NAME = "";
    $DB_USER = "";
    $DB_PASS = "";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);
