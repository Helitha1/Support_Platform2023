<?php

$t = $_POST["t"];
$d = $_POST["d"];
$sd = $_POST["sd"];
$ed = $_POST["ed"];
$mtid = $_POST["id"];


Database::iud("INSERT INTO `tasks` 
(`title`,`description`,`start_date`,`finisht_date`,`project_status_id`,`mainTasks_id`) VALUES 
('" . $t . "','" . $d . "','" . $sd . "','" . $ed . "','1','" . $id . "')");


?>