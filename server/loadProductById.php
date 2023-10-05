<?php

require "connection.php";
$response_obj = new stdClass();


if($_GET["pid"]){

    $project_rs = Database::search("SELECT * FROM `projects` WHERE `id` = '" . $_GET["pid"] . "'");
    $project_num = $project_rs->num_rows;

    if ($project_num > 0) {
        $project_data = $project_rs->fetch_assoc();

        $response_obj->projects = $project_data;
        echo (json_encode($response_obj));

        
    } else {
        echo ("invalid project id");
    }

}else{
    echo("somthing wrong!");
}
