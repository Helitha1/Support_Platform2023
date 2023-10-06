<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="res/bootstrap.css" />
    <title>Migten | Manage Projects </title>
    <link rel="icon" href="res/logo-sm.png" />
</head>

<body class=" body2">

    <?php
    session_start();
    if (!isset($_SESSION["user"])) {
        header("Location:index.php");
    }
    if (isset($_GET["pid"])) {

        $projectId = $_GET["pid"];

        require "server/connection.php";

        $project_rs = Database::search("SELECT * FROM `projects` WHERE `id` = '" . $projectId . "'");
        $project_num = $project_rs->num_rows;

        if ($project_num > 0) {

            $project_data = $project_rs->fetch_assoc();
        } else {
            echo ("invalid project id");
        }

    ?>

        <div class="container-fluid">
            <div class="row">



                <div class="col-12 mt-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Project</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-12">
                    <div class="row p-2">

                        <div class="col-12 p-3">
                            <div class="row d-grid">
                                <div class="col-12 text-center">
                                    <span class="text-center fw-bold fs-2">Add Project</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <hr />
                        </div>

                        <div class="offset-1 col-10 bg-body border rounded-4 shadow-lg">
                            <div class="row d-grid">

                            </div>

                            <div class="offset-1 col-10 bg-body border  rounded-4 shadow-lg mt-3">
                                <div class="row my-3 p-3 mt-2">



                                    <div class="col-12 mb-3">
                                        <label class="form-label fw-bold">Title</label>
                                        <input type="text" class="form-control" value="<?php echo $project_data["title"] ?>" id="lname" />
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label fw-bold">Description</label>
                                        <input type="text" class="form-control" value="<?php echo $project_data["description"] ?>" id="lname" />
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label class="form-label fw-bold">Start Date</label>
                                        <input type="text" class="form-control" value="<?php echo $project_data["start_date"] ?>" />
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label class="form-label fw-bold">End Date</label>
                                        <input type="text" class="form-control" value="<?php echo $project_data["description"] ?>" />
                                    </div>


                                    <div class="col-12 ">


                                        <div class="row">

                                            <div class="col-6">
                                                <button class="col-12 btn btn-warning">+Add Category</button>
                                            </div>

                                            <div class="col-6">
                                                <button class="col-12 btn btn-warning">+Add Task</button>
                                            </div>

                                        </div>



                                    </div>

                                </div>



                                <div class="col-12 mb-3 p-5">


                                    <div class="row">

                                        <div class="col-6 mb-3 rounded-3 " style="background-color: #0080ff20;">
                                            <br />

                                            <?php

                                            $profession_rs = Database::search("SELECT * FROM `profession`");
                                            $profession_num = $profession_rs->num_rows;

                                            for ($x = 0; $x < $profession_num; $x++) {
                                                $profession_data = $profession_rs->fetch_assoc();
                                            ?>

                                                <button class="btn btn-outline-dark fw-bold col-12 my-3" type="button" onclick="model();"><?php echo $profession_data["title"]; ?></button>


                                            <?php
                                            }

                                            ?>


                                        </div>

                                        <div class="col-6 mb-3 shadow">

                                            <div class="row g-1">
                                                <div class="col-12  my-2 project " style="height: 280px;">


                                                    <div class="col-11 mb-3">

                                                        <div class="row">

                                                            <ul id="taskList">

                                                            </ul>


                                                        </div>

                                                    </div>



                                                </div>

                                            </div>


                                        </div>


                                        <div class="col-12 mb-3">

                                            <div class="row">




                                            </div>

                                        </div>

                                    </div>




                                </div>



                                <!-- model1 -->

                                <div class="modal" tabindex="-1" id="verificationModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <label class="form-label">Title</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="modal-body">
                                                <label class="form-label">Description</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="modal-body">
                                                <label class="form-label">Start Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="modal-body">
                                                <label class="form-label">End Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-12 mb-3 p-4">
                                                <div class="row">
                                                    <button onclick="addProjectTask();" class="btn btn-outline-success fw-bold col-12 my-3" type="button">Add Task</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>



                        </div>






                    </div>
                </div>



            </div>
        </div>

        </div>
        </div>
        <script src="script.js"></script>
        <script src="res/bootstrap.bundle.js"></script>
    <?php

    } else {
        echo ("invalid project id");
    }

    ?>


</body>

</html>