<?php
    // If there's no defined constant called __CONFIG__, don't load this file
    if(!defined("__CONFIG__")) {
        exit("You don't have a config file");
    }

    // The config is below
    
    // Include the DB.php file
    include_once "classes/DB.php";
    include_once "classes/Filter.php";

    $con = DB::getConnection();
?>