<?php
// RESPONSE CODE
// $response_object = new stdClass();
// STARTING SESSION
session_start();
// CLEAR USER DATA FRMO SESSION
$_SESSION["user"] = NULL;
// DESTROY SESSION
session_destroy();
// REDIRECT TO INDEX.PHP
header(("Location:index.php"));

// $response_object->code = 100;
// echo (json_encode($response_object));
