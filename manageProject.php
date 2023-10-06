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
                                    <span class="text-center fw-bold fs-2">Manage Project</span>
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
                                        <input type="text" class="form-control" value="<?php echo $project_data["title"] ?>" id="t" />
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label fw-bold">Description</label>
                                        <input type="text" class="form-control" value="<?php echo $project_data["description"] ?>" id="d" />

                                    </div>

                                    <div class="col-6 mb-3">
                                        <label class="form-label fw-bold">Start Date</label>
                                        <input type="text" class="form-control" name="start_date" value="<?php echo $project_data["start_date"] ?>" />
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label class="form-label fw-bold">End Date</label>
                                        <input type="text" class="form-control" name="end_date" value="<?php echo $project_data["end_date"] ?>" />
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

                                <div class="col-12 container-fluid p-4">
                                    <div class="row">

                                        <div class="bg-black text-white col-12 mt-2 pt-2 pb-2">
                                            <div class="row">

                                                <div class=" col-4 col-lg-1 text-lg-start text-center border-end border-dark ">
                                                    <label class="fs-6 fw-bold">Task</label>
                                                </div>
                                                <div class="col-3  d-none  d-lg-block   text-center border-end border-dark ">
                                                    <label class="fs-6 fw-bold">Description</label>
                                                </div>
                                                <div class="col-lg-2   col-4 text-center border-end border-dark ">
                                                    <label class="fs-6 fw-bold">Category</label>
                                                </div>

                                                <div class="col-1 d-none  d-lg-block   border-end border-dark text-center ">
                                                    <label class="fs-6 fw-bold">Start Time</label>
                                                </div>
                                                <div class="col-1  col-lg-1 d-none  d-lg-block   border-end border-dark text-center ">
                                                    <label class="fs-6 fw-bold">End Time</label>
                                                </div>

                                                <div class="col-4  col-lg-4 border-end border-dark text-center ">
                                                    <label class="fs-6 fw-bold">Action</label>

                                                </div>

                                            </div>

                                        </div>

                                        <!-- RECORD -->
                                        <div class="border border-dark col-12 mt-2 pt-2 pb-2">
                                            <div class="row">

                                                <div class=" col-4 col-lg-1 text-lg-start text-center border-end border-dark ">
                                                    <label class="fs-6">Task 1</label>
                                                </div>
                                                <div class="col-3  d-none  d-lg-block   text-center border-end border-dark ">
                                                    <label class="fs-6">Hello Project 1</label>
                                                </div>
                                                <div class="col-lg-2   col-4 text-center border-end border-dark ">
                                                    <label class="fs-6">UI/UX</label>
                                                </div>

                                                <div class="col-1 d-none  d-lg-block   border-end border-dark text-center ">
                                                    <label class="fs-6">04/20</label>
                                                </div>
                                                <div class="col-1  col-lg-1 d-none  d-lg-block   border-end border-dark text-center ">
                                                    <label class="fs-6">04/27</label>
                                                </div>

                                                <div class="col-4  col-lg-4 border-end border-dark text-center ">

                                                    <button class="col-3 btn btn-success">Edit</button>
                                                    <button class="col-3 btn btn-danger">Delete</button>
                                                </div>

                                            </div>

                                        </div>

                                        <!-- RECORD 2 -->
                                        <div class="border border-dark col-12 mt-2 pt-2 pb-2">
                                            <div class="row">

                                                <div class=" col-4 col-lg-1 text-lg-start text-center border-end border-dark ">
                                                    <label class="fs-6">Task 2</label>
                                                </div>
                                                <div class="col-3  d-none  d-lg-block   text-center border-end border-dark ">
                                                    <label class="fs-6">Hello Project 2</label>
                                                </div>
                                                <div class="col-lg-2   col-4 text-center border-end border-dark ">
                                                    <label class="fs-6">Back End</label>
                                                </div>

                                                <div class="col-1 d-none  d-lg-block   border-end border-dark text-center ">
                                                    <label class="fs-6">04/20</label>
                                                </div>
                                                <div class="col-1  col-lg-1 d-none  d-lg-block   border-end border-dark text-center ">
                                                    <label class="fs-6">04/27</label>
                                                </div>

                                                <div class="col-4  col-lg-4 border-end border-dark text-center ">
                                                    <button class="col-3 btn btn-success">Edit</button>
                                                    <button class="col-3 btn btn-danger">Delete</button>
                                                </div>

                                            </div>

                                        </div>


                                        <!-- RECORD 3 -->
                                        <div class="border border-dark col-12 mt-2 pt-2 pb-2">
                                            <div class="row">

                                                <div class=" col-4 col-lg-1 text-lg-start text-center border-end border-dark ">
                                                    <label class="fs-6">Task 2</label>
                                                </div>
                                                <div class="col-3  d-none  d-lg-block   text-center border-end border-dark ">
                                                    <label class="fs-6">Hello Project 3</label>
                                                </div>
                                                <div class="col-lg-2   col-4 text-center border-end border-dark ">
                                                    <label class="fs-6">Front End</label>
                                                </div>

                                                <div class="col-1 d-none  d-lg-block   border-end border-dark text-center ">
                                                    <label class="fs-6">04/20</label>
                                                </div>
                                                <div class="col-1  col-lg-1 d-none  d-lg-block   border-end border-dark text-center ">
                                                    <label class="fs-6">04/27</label>
                                                </div>

                                                <div class="col-4  col-lg-4 border-end border-dark text-center ">
                                                    <button class="col-3 btn btn-success">Edit</button>
                                                    <button class="col-3 btn btn-danger">Delete</button>
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

    <?php

    } else {
        echo ("invalid project id");
    }

    ?>



</body>

</html>