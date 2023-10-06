<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Migten</title>
    <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="cdn.jsdelivr.net_npm_swiper@10.2.0_swiper-bundle.min.css" />
    <link rel="stylesheet" href="res/bootstrap.css" />
    <link rel="stylesheet" href="res/style.css" />
    <link rel="stylesheet" href="res/animation.css" />
    <link rel="icon" href="res/logo-sm.png" />
</head>

<body class=" body2">

    <?php
    session_start();

    require "server/connection.php";

    if (!isset($_SESSION["user"])) {
        header("Location:index.php");
    }
    ?>

    <div class="container-fluid">
        <div class="row">

            <div class="col-12 col-lg-2 d-none d-lg-block">
                <div class="row">
                    <div class="col-12 rounded-bottom align-items-start  bg-black vh-100 ">
                        <div class="row g-1 text-center ">
                            <div class="col-12 mt-3">
                                <h3 class="text-white">Migten Admin Panel</h3>
                                <hr class="border border-1 border-body" />
                            </div>
                            <div class="nav flex-column nav-pills me-3 mt-3 " role="tablist" aria-orientation="vertical">
                                <nav class="nav flex-column ">
                                    <a class="btn btn-outline-secondary my-2" aria-current="page" href="#">All Users</a>
                                    <br />
                                    <a class="btn btn-outline-secondary my-2" href="">All Projects</a>
                                    <br />
                                    <a class="btn btn-outline-secondary my-2" href="#">Complete Projects</a>
                                </nav>
                            </div>

                            <div class=" col-12  mt-3 d-grid p-2 ">
                                <div class="row ">
                                    <a href="signout.php" class="btn btn-danger mt-2" onclick="window.location = 'signout.php';">Sign Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 d-block d-lg-none bg-dark">


                <ul class="nav d-flex justify-content-center align-items-center my-3">
                    <li class="nav-item my-1 mx-1 changeView border-end border-bottom rounded-5 border-white border-opacity-25">
                        <a class="nav-link ">
                            <span class="fs-6 text-white" onclick="window.location = 'dashboard.php'">All Users</span>
                        </a>
                    </li>
                    <li class="nav-item my-1 mx-1 changeView border-end border-bottom rounded-5 border-white border-opacity-25">
                        <a class="nav-link ">
                            <span class="fs-6 text-white" onclick="window.location = 'projects.php'">All Projects </span>
                        </a>
                    </li>
                    <li class="nav-item my-1 mx-1 changeView border-end  border-bottom rounded-5 border-white border-opacity-25">
                        <a class="nav-link ">
                            <span class="fs-6 text-white" onclick="window.location = 'teachersClasses.php'">Compleate Projects</span>
                        </a>
                    </li>
                </ul>

            </div>

            <div class=" col-12 col-lg-10">
                <div class="row ">
                    <?php
                    include "header3.php"
                    ?>

                    <?php
                    $rs =  Database::search("SELECT * FROM `users`");
                    $rs_num = $rs->num_rows;



                    ?>
                    <div class="col-12">
                        <div class="row my-3 p-1 p-lg-4  d-flex justify-content-center align-content-center ">

                            <div class="col-10 offset-lg-0 col-lg-6 px-1 pe-lg-4 mt-2 mb-4 mb-lg-2  flyin zoom">

                                <div class="row g-1">
                                    <div class="col-12 bg-success bg-opacity-50 text-black text-center shadow rounded-4 py-2">
                                        <br />
                                        <h4 class="fw-bolder text-uppercase">All Users
                                        </h4>
                                        <hr />

                                        <div class="col-10 offset-1">
                                            <span class="form-control  rounded-4 bg-success fs-2"><?php echo($rs_num); ?></span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                    <?php
                    $prs =  Database::search("SELECT * FROM `projects`");
                    $prs_num = $prs->num_rows;

                    $prs1 =  Database::search("SELECT * FROM `projects` INNER JOIN `project_status` ON `projects`.`project_status_id` = `project_status`.`id` WHERE `project_status`.`id` = '3'");
                    $prs1_num = $prs1->num_rows;

                    ?>
                            <div class="col-10 offset-lg-0 col-lg-6 px-1 pe-lg-4 mt-2 mb-4 mb-lg-2  flyin zoom">

                                <div class="row g-1">
                                    <div class="col-12 bg-primary bg-opacity-50 text-black text-center shadow rounded-4 py-2">
                                        <br />
                                        <h4 class="fw-bolder text-uppercase">All Projects
                                        </h4>
                                        <hr />

                                        <div class="col-10 offset-1">
                                            <span class="form-control  rounded-4 bg-primary fs-2"><?php echo($prs_num); ?></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-10 offset-lg-0 col-lg-6 px-1 pe-lg-4 mt-2 mb-4 mb-lg-2  flyin zoom">

                                <div class="row g-1">
                                    <div class="col-12 bg-secondary bg-opacity-50 text-black text-center shadow rounded-4 py-2">
                                        <br />
                                        <h4 class="fw-bolder text-uppercase">Compleate Projects<br />
                                        </h4>
                                        <hr />

                                        <div class="col-10 offset-1">
                                            <span class="form-control  rounded-4 bg-secondary fs-2"><?php echo($prs1_num); ?></span>
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