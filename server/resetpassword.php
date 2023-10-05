<?php

   require "connection.php";

   $email = $_POST["e"];
   $np = $_POST["p1"];
   $rnp = $_POST["p1"];
   $vcode = $_POST["c"];

   if(empty($email)){
        echo("Missing Email Address");
   }elseif(empty($np)){
        echo("Please Enter Your New Password");
   }elseif(strlen($np) < 5 || strlen($np) > 20){
        echo("Password must be less than 20 and more that 5 charcters");
   }elseif(empty($rnp)){
        echo("Please Retype Your New Password");
   }elseif($np != $rnp){
        echo("Passwords are not matched");
   }elseif(empty($vcode)){
        echo("Please Enter Your Verification Code");
   }else{
     
       $rs =  Database::search("SELECT * FROM `users` WHERE `email`='".$email."' AND
       `verification_code`= '".$vcode."'");

       $n = $rs->num_rows;

       if($n == 1){

            Database::iud("UPDATE `users` SET `password`='".$np."' WHERE `email`='".$email."'");
            echo("Success");

       }else{
        echo("Invalid Email Or Verification Code");
       }

   }

?>