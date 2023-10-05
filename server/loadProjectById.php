<?php
require "connection.php";
// RESPONSE OBJECT
$response_obj = new stdClass();
$code = 0;
if (isset($_GET["pid"])) {
    // GET PROJECT DATA FROM DATABASE
    $project_rs = Database::search("SELECT * FROM `projects` WHERE `projects`.`id` = '" . $_GET["pid"] . "'");
    // CHECK PROJECT IS AVAILABLE IN DATABASE
    if ($project_rs->num_rows) {
        // RESPONSE PROJECT OBJECT
        $project_object = new stdClass();
        // FETCH PROJECT DATA
        $project_array = $project_rs->fetch_assoc();
        // SET DATA TO OBJECT
        $project_object = $project_rs;
        // GET MAIN TASKS USING PROJECT ID
        $main_task_rs = Database::search("SELECT * FROM `maintask` WHERE `project_id` = '" . $project_array["id"] . "'");
        // CHECK HAVE ANY MAIN TASKS
        if ($main_task_rs->num_rows > 0) {
            // MAIN TASK ARRAY
            $main_task_array = array();
            // FETCH DATA TO ARRAY
            while ($main_task_rs->fetch_assoc()) {
                array_push($main_task_array, $main_task);
            }
            // SET MAIN TASKS TO PROJECT
            $project_object->mainTasks = $main_task_array;
            // ASSIGN PROJECT OBJECT TO MAIN RESPONSE OBJECT
            $response_obj->data = $project_object;
        } else {
            $code = 20;
        }
    } else {
        $code = 19;
    }
} else {
    $code = 99;
}
// ASSIGN CODE TO RESPONSE OBJECT
$response_object->code = $code;
// ECHO RESPONSE OBJECT
echo(json_encode($response_obj));