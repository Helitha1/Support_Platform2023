<?php

require "connection.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$addressLine1 = $_POST["addressLine1"];
$addressLine2 = $_POST["addressLine2"];
$gender = $_POST["gender"];
$password = $_POST["password"];
$password2 = $_POST["password2"];


if(empty($fname)){
    echo ("Please enter your First Name !!!");
}else if(empty($lname)){
    echo ("Please enter your Last Name !!!");
}else if(strlen($lname) > 50){
    echo ("Last Name must have less than 50 characters");
}else if (empty($email)){
    echo ("Please enter your Email !!!");
}else if(strlen($email) >= 100){
    echo ("Email must have less than 100 characters");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo ("Invalid Email !!!");
}else if (empty($password)){
    echo ("Please enter your Password !!!");
}else if (empty($mobile)){
    echo ("Please enter your mobile !!!");
}else if (empty($addressLine1)){
    echo ("Please enter your address !!!");
}else if(strlen($password) < 5 || strlen($password) > 20){
    echo ("Password must be between 5 - 20 charcters");
}else if($password != $password2){
    echo ("Passwords are not matching!");
}else{
    $rs = Database::search("SELECT * FROM `users` WHERE `email`='".$email."'");
    $n = $rs->num_rows;
    
    if($n > 0){
        echo ("2");
    }else{
    
        $d = new DateTime();
        $tz = new DateTimeZone("Asia/Colombo");
        $d->setTimezone($tz);
        $date = $d->format("Y-m-d H:i:s");
    
        Database::iud("INSERT INTO `users` 
        (`fname`,`lname`,`email`,`mobile`,`line1`,`line2`,`password`,`gender_id`,`register_date`) VALUES 
        ('".$fname."','".$lname."','".$email."','".$mobile."','".$addressLine1."','".$addressLine2."','".$password."','".$gender."','".$date."')");
    
        echo "1";
    
    }
}


