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
        // SEARCH USER DATA FROM DATABASE
        $rs = Database::search("SELECT * FROM `users` WHERE `email`='" . $json->email . "'");
        // CHECK USER 
        if ($rs->num_rows == 1) {
            // FETCH USER DATA FROM DATABASE
            $user = $rs->fetch_assoc();
            // VALIDATE PASSWORD
            if (password_verify($json->password, $user["password"])) {
                // ASSIGN USER DATA TO SESSION
                $_SESSION["user"] = $user;
                // REMEMBER ME
                if ($json->rememberme == "true") {
                    // SET COOKIES
                    setcookie("email", $json->email, time() + (60 * 60 * 24 * 365));
                    setcookie("password", $json->password, time() + (60 * 60 * 24 * 365));
                } else {
                    // UNSET COOKIES
                    setcookie("email", "", -1);
                    setcookie("password", "", -1);
                }
                $code =100;
            } else {
                $code = 13;
            }
        } else {
            $code = 12;
        }
    }
}

$response_obj->code = $code;
echo (json_encode($response_obj));
