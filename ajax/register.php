<?php
    // Allow the config file
    define("__CONFIG__", true);
    // Require the config file
    require_once "../inc/config.php";


    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //Always return JSON format
        // header("Location: https://google.com/");
        header("Content-Type: application/json");
        
        $return = [];

        // Make sure user doesn't exist.

        //Make sure user CAN be added and is added.

        // Return the proper information back to JAvaScript to redirect us. 

        // Change /Main%20Pr.... into the loged in dashboard link
        $return["redirect"] = "/Main%20Project/index.php?this-was-a-redirect";
        $return["name"] = "Artur Jaklewicz";

        echo json_encode($return, JSON_PRETTY_PRINT); exit;
        
    
    }else {
        // Show test message.
        exit("test");
    }
?>