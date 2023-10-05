<?php
    require "connection.php";

    session_start();

    if(isset($_SESSION["user"]["email"])){
        if (isset($_POST["project"]) || (isset($_POST["mainTasks"]))) {
            $jsonProject = json_decode($_POST["project"]);
            $jsonMainTasks = json_decode($_POST["mainTasks"]);
        
            if($jsonProject->title == ""){
                echo("please type your project name!");
            }else if($jsonProject->description == ""){
                echo("please type your project description!");
            }else if($jsonProject->startDate == ""){
                echo("please type your project start date!");
            }else if($jsonProject->endDate == ""){
                echo("please type your project ending date!");
            }else if(strlen($jsonProject->mainTasks) < 0){
                echo("please add your project main tasks!");
            }else{
                Database::iud("INSERT INTO `projects` 
                (`title`,`description`,`start_date`,`end_date`,`project_status_id`,`owner_email`) VALUES 
                ('" . $jsonProject->title . "','" . $jsonProject->desccription . "','" . $jsonProject->startDate . "','" . $jsonProject->endDate . "','" . $jsonProject->status . "','" . $_SESSION["user"]["email"] . "',)");
                
                Database::iud("INSERT INTO `maintasks` 
                (`title`,`description`,`project_status_id`,`projects_id`,`startDate`,`endDate`) VALUES 
                ('" . $jsonMainTasks->title . "','" . $jsonMainTasks->desccription . "',`1`,`5355`,'" . $jsonMainTasks->startDate . "',,'" . $jsonMainTasks->endDate . "'");

                echo("success");
            }
        
        }else{
            echo("somthing wrong!");
        }
    }else{
        echo("please login first");
    }


?>