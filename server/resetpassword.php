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
     if (isset($request_obj->email) && isset($request_obj->password) && isset($request_obj->password2) && isset($request_obj->vcode)) {
          $code = gettype($request_obj->password);

          if ($request_obj->email == "") {
               $code = 12;
          } else if ($request_obj->password == "") {
               $code = 8;
          } else if (strlen($request_obj->password) < 5 || strlen($request_obj->password) > 20) {
               $code = strlen($request_obj->password) ;
          } else if ($request_obj->password2 == "") {
               $code = 14;
          } else if ($request_obj->password != $request_obj->password2) {
               $code = 15;
          } else if ($request_obj->vcode == "") {
               $code = 16;
          } else {
               // SEARCH USER FROM DATABASE
               $rs =  Database::search("SELECT * FROM `users` WHERE `email`='" . $request_obj->email . "' AND
              `verification_code`= '" . $request_obj->vcode . "'");
               // CHECK USER IN DATABASE
               if ($rs->num_rows == 1) {
                    // UPDATE NEW PASSWORD
                    Database::iud("UPDATE `users` SET `password`='" . $request_obj->password . "', `verification_code`='' WHERE `email`='" . $request_obj->email . "'");
                    $code = 100;
               } else {
                    $code = 17;
               }
          }
     }
}
// RESPONSE OBJECT
$response_obj->code = $code;
echo (json_encode($response_obj));
