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

        $email = Filter::String( $_POST["email"] );

        // Make sure user doesn't exist.
        $findUser = $con->prepare("SELECT user_id FROM users WHERE email= LOWER(:email) LIMIT 1");
        $findUser->bindParam(":email", $email, PDO::PARAM_STR);
        $findUser->execute();

        if($findUser->rowCount() == 1) {
            //User exists
            //We can also check if they are able to log in.
            $return['error'] = "You already have an account";
            $return['is_logged_in'] = false;
        } else {
            //User doesn't exist. add them now.

            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $addUser = $con->prepare("INSERT INTO users(email, password) VALUES(LOWER(:email), :password)");
			$addUser->bindParam(':email', $email, PDO::PARAM_STR);
			$addUser->bindParam(':password', $password, PDO::PARAM_STR);
			$addUser->execute();

            $user_id = $con->lastInsertId();

            $_SESSION['user_id'] = (int) $user_id;

			$return['redirect'] = '/dashboard.php?message=welcome';
            $return['is_logged_in'] = true;

        }
        //Make sure user CAN be added and is added.

        // Return the proper information back to JAvaScript to redirect us. 

        // Change /Main%20Pr.... into the loged in dashboard link
        // $return["redirect"] = "/Main%20Project/index.php?this-was-a-redirect";
        // $return["name"] = "Artur Jaklewicz";

        echo json_encode($return, JSON_PRETTY_PRINT); exit;
    
    }else {
        // Show Wrong URL message.
        exit("Wrong URL");
    }
?>