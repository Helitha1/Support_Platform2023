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
            $code =3;
        } else if (empty($req_object->email)) {
            $code = 4;
        } else if (strlen($req_object->email) >= 100) {
            echo ("Email must have less than 100 characters");
        } else if (!filter_var($ereq_object->mail, FILTER_VALIDATE_EMAIL)) {
            echo ("Invalid Email !!!");
        } else if (empty($req_object->password)) {
            echo ("Please enter your Password !!!");
        } else if (empty($req_object->addressLine1)) {
            echo ("Please enter your address !!!");
        } else if (strlen($req_object->password) < 5 || strlen($password) > 20) {
            echo ("Password must be between 5 - 20 charcters");
        } else {
            $rs = Database::search("SELECT * FROM `users` WHERE `email`='" . $email . "'");
            $n = $rs->num_rows;

            if ($n > 0) {
                $code =  ("2");
            } else {

                $d = new DateTime();
                $tz = new DateTimeZone("Asia/Colombo");
                $d->setTimezone($tz);
                $date = $d->format("Y-m-d H:i:s");

                Database::iud("INSERT INTO `users` 
                (`fname`,`lname`,`email`,`mobile`,`line1`,`line2`,`password`,`gender_id`,`register_date`) VALUES 
                ('" . $fname . "','" . $lname . "','" . $email . "','" . $mobile . "','" . $addressLine1 . "','" . $addressLine2 . "','" . $password . "','" . $gender . "','" . $date . "')");

                $code =  100;
            }
        }
    } else {
        $code = 99;
    }
}

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$addressLine1 = $_POST["addressLine1"];
$addressLine2 = $_POST["addressLine2"];
$gender = $_POST["gender"];
$password = $_POST["password"];
$password2 = $_POST["password2"];


echo (json_encode($response_obj));
