<?php
    require "connection.php";

    session_start();

    if(isset($_SESSION["user"]["email"])){
        if (isset($_POST["json"])) {
            $json = json_decode($_POST["json"]);
        
            if($json->projectName == ""){
                echo("please type your project name!");
            }else if($json->description == ""){
                echo("please type your project description!");
            }else if($json->start_date == ""){
                echo("please type your project start date!");
            }else if($json->end_date == ""){
                echo("please type your project ending date!");
            }else if(strlen($json->mainTasks) < 0){
                echo("please add your project main tasks!");
            }else{
                Database::iud("INSERT INTO `projects` 
                (`title`,`description`,`start_date`,`end_date`,`project_status_id`,`owner_email`) VALUES 
                ('" . $json->title . "','" . $json->desccription . "','" . $json->startDate . "','" . $json->endDate . "','" . $json->status . "','" . $_SESSION["user"]["email"] . "',)");
                
                // Database::iud("INSERT INTO `maintasks` 
                // (`title`,`description`,`projects_id`) VALUES 
                // ('" . $json->title . "','" . $json->desccription . "','" . $json->startDate . "'");
            }
        
        }else{
            echo("somthing wrong!");
        }
    }else{
        echo("please login first");
    }


?>