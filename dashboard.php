<?php
session_start();
require_once("server/connection.php");
$project_rs = Database::search("SELECT COUNT(*) AS `count` FROM `projects` WHERE `owner_email`='" . $_SESSION["user"]["email"] . "'");
$result = $project_rs->fetch_assoc();
$project_count = $result["count"];
// PENDING PROJECTS (TITLE)
$pending_rs = Database::search("SELECT `projects`.`title` AS `title` FROM `projects` INNER JOIN `team` ON `projects`.`id`=`team`.`projects_id`  WHERE `team`.`users_email`='" . $_SESSION["user"]["email"] . "' AND (`projects`.`project_status_id`='1' OR `projects`.`project_status_id`='2')");
// COMPLETED PROJECTS (TITLE)
$completed_rs = Database::search("SELECT `projects`.`title` AS `title` FROM `projects` INNER JOIN `team` ON `projects`.`id`=`team`.`projects_id`  WHERE `team`.`users_email`='" . $_SESSION["user"]["email"] . "' AND `projects`.`project_status_id`='3' ");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Migten</title>
    <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="res/bootstrap.css" />
    <link rel="stylesheet" href="res/style.css" />
    <link rel="stylesheet" href="res/animation.css" />
    <link rel="icon" href="res/logo-sm.png" />
</head>

<body class=" body2">

    <div class="container-fluid">
        <div class="row">

            <?php
            include('sidenav.php');
            ?>

            <div class=" col-12 col-lg-10">
                <div class="row ">
                    <?php
                    include "header3.php"
                    ?>
                    <div class="col-12 flyin zoom">
                        <div class="row g-1">
                            <div class="col-8 offset-2  px-1 py-3 position-relative">
                                <div class="row g-1">
                                    <div class="col-12 text-center rounded js-tilt " style="height: 100px; background-color: #00008099;">
                                        <br />
                                        <span class="fs-3 text-white fw-bold" id="dashboard-project-count"><?php echo ($project_count) ?></span>
                                        <br />
                                        <span class="fs-5 text-white fw-bolder">PROJECT COUNT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PENDINGN PROJECTS (ongoing + not started) -->
                    <div class="offset-1 col-10 col-lg-4 my-3 rounded-3 flyin zoom " style="background-color: #ffffff90;">
                        <div class="row g-1">
                            <div class="col-12 text-center">
                                <label class="form-label fs-4 fw-bold">Pending Projects</label>
                                <hr>
                            </div>
                            <div class=" project " style="height: 150px;">
                                <!-- PENDING PROJECTS ARE LOADING HERE -->
                                <?php
                                if ($pending_rs->num_rows > 0) {
                                    while ($project = $pending_rs->fetch_assoc()) {
                                ?>
                                        <div class="col-12 text-center  my-3">
                                            <a class="fs-6 fw-bold" href="#"><?php echo ($project["title"]) ?></a>
                                        </div>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <h2 class="col-12 h-100 text-center my-2 text-danger">No Pending Projects</h2>
                                <?php
                                }

                                ?>
                            </div>

                        </div>
                    </div>
                    <!-- LOAD COMPLETED PROJECTS -->
                    <div class="offset-1 offset-lg-2 col-10 col-lg-4 my-3 rounded-3 flyin zoom " style="background-color: #ffffff90;">
                        <div class="row g-1">
                            <div class="col-12 text-center">
                                <label class="form-label fs-4 fw-bold">Complete Projects</label>
                                <hr>
                            </div>
                            <div class=" project " style="height: 150px;">
                                <!-- PENDING PROJECTS ARE LOADING HERE -->
                                <?php
                                if ($completed_rs->num_rows > 0) {
                                    while ($project = $completed_rs->fetch_assoc()) {
                                ?>
                                        <div class="col-12 text-center  my-3">
                                            <a class="fs-6 fw-bold" href="#"><?php echo ($project["title"]) ?></a>
                                        </div>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <h2 class="col-12 h-100 text-center my-2 text-danger">No Any Completed Projects</h2>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- LOAD PENDING TASKS -->
                    <div class="offset-1 col-10 my-3 rounded-3 flyin zoom" style="background-color: #ffffff90;">
                        <div class="row g-1">
                            <div class="col-12 text-center">
                                <label class="form-label fs-4 fw-bold">Ongoin Task</label>
                                <hr>
                            </div>
                            <div class=" project " style="height: 200px;">
                                <?php
                                $ongoing_tasks_rs = Database::search("SELECT `tasks`.`title` AS `title`, `maintasks`.`title` AS `maintask`, 
                            `maintasks`.`projects_id` AS `projectId` FROM `tasks` 
                            INNER JOIN `maintasks` ON `maintasks`.`id` = `tasks`.`maintasks_id`
                            WHERE`tasks`.`assigned_email`='" . $_SESSION["user"]["email"] . "' AND `tasks`.`project_status_id`='2' 
                            ORDER BY `maintasks`.`id`");
                                if ($ongoing_tasks_rs->num_rows > 0) {
                                    $main_array = [];
                                    $task_array = [];
                                    while ($task = $ongoing_tasks_rs->fetch_assoc()) {
                                        array_push($task_array, $task);
                                        if (!in_array($task["maintask"], $main_array)) {
                                            array_push($main_array, $task["maintaskஃ"]);
                                        }
                                    }
                                ?>
                                    <div class="col-10 offset-1 my-3">
                                        <?php
                                        foreach ($main_array as $mainTask) {
                                        ?>
                                            <span class="fs-6 text-center fw-bold"><?php echo ($mainTask) ?></span><br />
                                            <?php
                                            foreach ($task_array as $task) {
                                                if ($task["maintask"] == $mainTask) {
                                            ?>
                                                    <span class="fs-6"><?php echo ($task_array['title']);  ?></span><br />
                                        <?php
                                                }
                                            }
                                        }
                                        ?>
                                    </div><?php
                                        } else {
                                            ?>
                                    <h2 class="col-12 h-100 text-center my-2 text-danger">No Any Completed Projects</h2>
                                <?php
                                        }
                                ?>
                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </div>
        <script src="res/bootstrap.bundle.js"></script>
        <script src="res/jquery.min.js"></script>
        <script src="res/tilt.js"></script>
        <script src="script.js"></script>

        <script>
            // TILT (3D ANIMATION)
            const tilt = $('.js-tilt').tilt({
                scale: 1.05,
                glare: true,
                maxGlare: 0.2,
                reset: true
            });
            tilt.methods.destroy.call(tilt);
        </script>
        <script>
            const flyin = document.querySelectorAll(".flyin");

            const observe = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    entry.target.classList.toggle("show", entry.isIntersecting);

                    if (entry.isIntersecting) {
                        observe.unobserve(entry.target);
                    }
                })
            }, {
                threshold: 0.6
            })

            flyin.forEach((fly) => {
                observe.observe(fly);
            })
        </script>
</body>

</html>