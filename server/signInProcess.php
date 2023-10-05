<?php
// RESPONSE OBJECT
$response_obj = new stdClass();
$code = 0;
// STATRING SESSION
session_start();
// DATABASE CONNECTION
require_once "connection.php";
// CHECKING REQUEST 
if (isset($_POST["json"])) {
    // GET REQUEST JSON FILE
    $json = json_decode($_POST["json"]);
    // VALIDATION
    if (empty($json->email)) {
        $code = 5;
    } else if (empty($json->password)) {
        $code = 8;
    } else {

        $rs = Database::search("SELECT * FROM `users` WHERE `email`='" . $email . "'");

        if ($rs->num_rows == 1) {
            // FETCH USER DATA FROM DATABASE
            $user = $rs->fetch_assoc();
            // VALIDATE PASSWORD
            if (password_verify($json->password, $user["password"])) {
                // ASSIGN USER DATA TO SESSION
                $_SESSION["user"] = $user;

                if ($rememberme == "true") {
                    setcookie("email", $email, time() + (60 * 60 * 24 * 365));
                    setcookie("password", $password, time() + (60 * 60 * 24 * 365));
                } else {
                    setcookie("email", "", -1);
                    setcookie("password", "", -1);
                }
            } else {
            }
        } else {
            $code = 12;
        }
    }
}

$response_obj->code = $code;
echo (json_encode($response_obj));
