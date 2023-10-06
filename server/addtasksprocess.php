<?php

$t = $_POST["t"];
$d = $_POST["d"];
$sd = $_POST["sd"];
$ed = $_POST["ed"];
$u = $_POST["u"];
$mtid = $_POST["mtid"];


Database::iud("INSERT INTO `tasks` 
(`title`,`description`,`start_date`,`finisht_date`,`project_status_id`,`assigned_email`,`mainTasks_id`) VALUES 
('" . $t . "','" . $d . "','" . $sd . "','" . $ed . "','1','" . $u . "','" . $mtid . "')");


?>