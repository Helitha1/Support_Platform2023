<?php
$response_obj = new stdClass();
$code = 0;

require "connection.php";

if (isset($_POST["json"])) {
    $request_obj = json_decode($_POST["json"]);
    if (isset($request_obj->email) && isset($request_obj->fname) && isset($request_obj->lname) && isset($request_obj->password) && isset($request_obj->gender) && isset($request_obj->profession)) {


        if (empty($req_object->fname)) {
            $code = 1;
        } else if (empty($req_object->lname)) {
            $code = 2;
        } else if (strlen($req_object->lname) > 50) {
            $code = 3;
        } else if (empty($req_object->email)) {
            $code = 4;
        } else if (strlen($req_object->email) >= 100) {
            $code = 5;
        } else if (!filter_var($ereq_object->mail, FILTER_VALIDATE_EMAIL)) {
            $code = 6;
        } else if (empty($req_object->password)) {
            $code = 7;
        } else if (empty($req_object->addressLine1)) {
            $code = 8;
        } else if (strlen($req_object->password) < 5 || strlen($password) > 20) {
            $code = 9;
        } else {
            $rs = Database::search("SELECT * FROM `users` WHERE `email`='" . $email . "'");

            if ($$rs->num_rows > 0) {
                $code =  10;
            } else {

                $d = new DateTime();
                $tz = new DateTimeZone("Asia/Colombo");
                $d->setTimezone($tz);
                $date = $d->format("Y-m-d H:i:s");

                $password_hash = password_hash($req_object->password, 0);


                Database::iud("INSERT INTO `users` 
                (`fname`,`lname`,`email`,`password`,`gender_id`,`date_register`,`profession_id`) VALUES 
                ('" . $req_object->fname . "','" . $req_object->lname . "','" . $req_object->email . "','" . $password_hash . "','" . $req_object->gender . "','" . $req_object->date . "','" . $req_object->profession_id . "')");

                $code =  100;
            }
        }
    } else {
        $code = 99;
    }
}




echo (json_encode($response_obj));
