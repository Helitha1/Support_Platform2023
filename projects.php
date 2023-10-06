<?php
session_start();
require_once("server/connection.php");

if (!isset($_SESSION["user"])) {
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Migten</title>
    <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="res/bootstrap.css" />
    <link rel="stylesheet" href="res/style.css" />
    <link rel="stylesheet" href="res/animation.css" />
    <link rel="stylesheet" href="res/fontawsome/css/all.css" />
    <link rel="icon" href="res/logo-sm.png" />
</head>

<body class=" body2">
    <div class="container-fluid">
        <div class="row">

            <?php
            include('sidenav.php');
            ?>

            <div class=" col-12 col-lg-10">
                <div class="row">
                    <?php
                    include "header3.php"
                    ?>
                    <div class="col-10 offset-1 offset-lg-0 col-lg-4 bg-dark p-4 m-lg-3 my-2 project  flyin zoom" style="height: 600px;">
                        <div class="row">
                            <div class="col-12">
                                <div class="row text-white">
                                    <div class="col-3 text-start p-2">
                                        <a href="dashboard.php"><i class="fa-solid fa-arrow-left text-light fs-3"></i></a>
                                    </div>
                                    <div class="col-6 text-center">
                                        <span class="fs-3">My Projects</span>
                                    </div>
                                    <div class="col-3 text-end p-2">
                                        <a href="dashboard.php"><i class="fa-regular fa-circle-xmark text-white fs-3"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 my-3">
                                <div class="row">
                                    <?php
                                    $project_rs = Database::search("SELECT * FROM `projects`");
                                    $project_num = $project_rs->num_rows;
                                    for ($x = 0; $x < $project_num; $x++) {
                                        $project_data = $project_rs->fetch_assoc();
                                    ?>
                                        <div class="col-10 offset-1 my-2">
                                            <button onclick='loadProject(<?php echo $project_data["id"]; ?>);' class="btn btn-primary form-control" id="project-button-<?php echo $project_data["id"]; ?>"><?php echo $project_data["title"]; ?></button>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-10 offset-1 offset-lg-0 col-lg-7 bg-secondary bg-opacity-25 m-lg-3 project flyin zoom" style="height: 600px;">
                        <div class="row">
                            <div class="col-10 text-start">
                                <span class="fs-3 text-white fw-bold m-2" id="project-title">PROJECT TITLE HERE</span>
                            </div>
                            <div class="col-2 text-end ">
                                <button class="m-2 btn btn-secondary" id="project-edit-button">Edit</button>
                            </div>
                            <hr>
                            <div class="col-12">
                                <label class="form-label fw-bold fs-4">Description</label>
                                <p class="form-control" id="project-description">DESCRIPTION HERE</p>
                            </div>
                            <hr>
                            <div class="col-12">
                                <label class="form-label fw-bold fs-4">Status</label>
                                <!-- STATUS HERE -->
                                <!-- 1 - warning, 2-warning, 3-success -->
                                <i class="fa-solid fa-circle" id="project-status-button"></i>
                            </div>
                            <hr>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label fw-bold fs-4">Start Date : &nbsp;</label>
                                        <span class="fs-5" id="project-start_date">START DATE HERE</span>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label fw-bold fs-4">End Date : &nbsp;</label>
                                        <span class="fs-5" id="project-end-date">PROJECT END DATE HERE</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12">
                            <label class="form-label fw-bold fs-4">TimeLine</label>
                            <!-- timeline -->
                            <div class="container py-5">
                                <div class="row">
                                    <div class="col-10 offset-1 collg10 offset-lg-2">
                                        <div >
                                            <!-- LOAD TASKS HERE -->
                                            <ul class="timeline-1 text-black"  id="project-content">
         
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- timeline -->
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
        loadProject(3);



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


        // TILT (3D ANIMATION)
        const tilt = $('.js-tilt').tilt({
            scale: 1.05,
            glare: true,
            maxGlare: 0.2,
            reset: true
        });
        tilt.methods.destroy.call(tilt);
    </script>
</body>

</html>