<?php
// RESPONSE OBJECT
$response_obj = new stdClass();
$code = 0;
// DATABASE CONNECTION
require "connection.php";
// CHECK REQUEST OBJECT
if (isset($_POST["json"])) {
    // GET JSON OBJECT FROM REQUESR
    $request_obj = json_decode($_POST["json"]);
    // CHECK JSON PARAMETERS
    if (isset($request_obj->email) && isset($request_obj->fname) && isset($request_obj->lname) && isset($request_obj->password) && isset($request_obj->gender) && isset($request_obj->profession_id)) {
        // VALIDATION
        if ($request_obj->fname == "") {
            $code = 1;
        } else if ($request_obj->lname=="") {
            $code = 2;
        } else if (strlen($request_obj->fname) > 45) {
            $code = 3;
        } else if (strlen($request_obj->lname) > 45) {
            $code = 4;
        } else if ($request_obj->email=='') {
            $code = 5;
        } else if (strlen($request_obj->email) >= 100) {
            $code = 6;
        } else if (!filter_var($request_obj->email, FILTER_VALIDATE_EMAIL)) {
            $code = 7;
        } else if ($request_obj->password=="") {
            $code = 8;
        } else if (strlen($request_obj->password) < 5 || strlen($request_obj->password) > 20) {
            $code = 9;
        } else if ($request_obj->profession_id == "" | $request_obj->profession_id == 0) {
            $code = 10;
        } else {
            $rs = Database::search("SELECT * FROM `users` WHERE `email`='" . $request_obj->email . "'");

            if ($rs->num_rows > 0) {
                $code =  11;
            } else {

                $d = new DateTime();
                $tz = new DateTimeZone("Asia/Colombo");
                $d->setTimezone($tz);
                $date = $d->format("Y-m-d H:i:s");

                $password_hash = password_hash($request_obj->password, 0);

                Database::iud("INSERT INTO `users` 
                (`fname`,`lname`,`email`,`password`,`gender_id`,`date_register`,`profession_id`,`user_status_id`,`user_type_id`) VALUES 
                ('" . $request_obj->fname . "','" . $request_obj->lname . "','" . $request_obj->email . "','" . $password_hash . "','" . $request_obj->gender . "','" . $date . "','" . $request_obj->profession_id . "','1','1')");

                $code =  100;
            }
        }
    } else {
        $code = 98;
    }
} else {
    $code = 99;
}

$response_obj->code = $code;
echo (json_encode($response_obj));
