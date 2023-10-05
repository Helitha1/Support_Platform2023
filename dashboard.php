<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Migten</title>
    <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="cdn.jsdelivr.net_npm_swiper@10.2.0_swiper-bundle.min.css" />
    <link rel="stylesheet" href="res/bootstrap.css" />
    <link rel="stylesheet" href="res/style.css" />
    <link rel="stylesheet" href="res/animation.css" />
    <link rel="icon" href="res/logo-sm.png" />
</head>

<body class=" body2">

    <div class="container-fluid">
        <div class="row">

            <div class="col-12 col-lg-2 d-none d-lg-block">
                <div class="row">
                    <div class="col-12 rounded-bottom align-items-start  bg-black vh-100 ">
                        <div class="row g-1 text-center ">
                            <div class="col-12 mt-3">
                                <h3 class="text-white">Migten</h43>
                                    <hr class="border border-1 border-body" />
                            </div>
                            <div class="nav flex-column nav-pills me-3 mt-3 " role="tablist" aria-orientation="vertical">
                                <nav class="nav flex-column ">
                                    <a class="btn btn-outline-secondary my-2" aria-current="page" href="#">Dashboard</a>
                                    <br />
                                    <a class="btn btn-outline-secondary my-2" href="projects.php">Projects</a>
                                    <br />
                                    <a class="btn btn-outline-secondary my-2" href="#">Create Projects</a>
                                    <br />
                                    <a class="btn btn-outline-secondary my-2" href="#">Manage Profile</a>
                                </nav>
                            </div>
                            <!-- <div class="col-12 mt-5">
                                    <hr class="border border-1 border-dark" />
                                    <h4 class="text-dark fw-bold">Check results</h4>
                                    <hr class="border border-1 border-dark" />
                                </div> -->

                            <div class=" col-12  mt-3 d-grid p-2 ">
                                <div class="row ">
                                    <a href="signout.php" class="btn btn-danger mt-2">Sign Out</a>
                                </div>
                                <hr class="border border-1 border-dark" />
                                <hr class="border border-1 border-dark" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 d-block d-lg-none bg-dark">
                <ul class="nav d-flex justify-content-center align-items-center my-3">
                    <li class="nav-item my-1 mx-1 changeView border-end border-bottom rounded-5 border-white border-opacity-25">
                        <a class="nav-link ">
                            <span class="fs-6 text-white" onclick="window.location = 'dashboard.php'">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item my-1 mx-1 changeView border-end border-bottom rounded-5 border-white border-opacity-25">
                        <a class="nav-link ">
                            <span class="fs-6 text-white" onclick="window.location = 'projects.php'">Projects </span>
                        </a>
                    </li>
                    <li class="nav-item my-1 mx-1 changeView border-end  border-bottom rounded-5 border-white border-opacity-25">
                        <a class="nav-link ">
                            <span class="fs-6 text-white" onclick="window.location = 'teachersClasses.php'">Create Projects</span>
                        </a>
                    </li>
                    <li class="nav-item my-1 mx-1 changeView border-end border-bottom rounded-5 border-white border-opacity-25">
                        <a class="nav-link ">
                            <span class="fs-6 text-white" onclick="window.location = 'teacherProfile.php'">Manage Profile</span>
                        </a>
                    </li>
                </ul>

            </div>

            <div class=" col-12 col-lg-10">
                <div class="row ">
                    <?php
                    include "header3.php"
                    ?>
                    <div class="col-12 flyin zoom">
                        <div class="row g-1">
                            <div class="col-8 offset-2  px-1 py-3 position-relative">
                                <div class="row g-1">
                                    <div class="col-12 text-center rounded js-tilt " style="height: 100px; background-color: #00008099;" >
                                        <br />
                                        <span class="fs-3 text-white fw-bold">4</span>
                                        <br />
                                        <span class="fs-5 text-white fw-bolder">PROJECT COUNT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="offset-1 col-10 col-lg-4 my-3 rounded-3 flyin zoom " style="background-color: #ffffff90;">
                        <div class="row g-1">
                            <div class="col-12 text-center">
                                <label class="form-label fs-4 fw-bold">Pending Projects</label>
                                <hr>
                            </div>
                            <div class=" project " style="height: 150px;">
                                <div class="col-12 text-center  my-3">
                                    <a class="fs-6 fw-bold" href="#">Migten web application</a>
                                </div>
                                <div class="col-12 text-center  my-3">
                                    <a class="fs-6 fw-bold" href="#">Migten web application</a>
                                </div>
                                <div class="col-12 text-center  my-3">
                                    <a class="fs-6 fw-bold" href="#">Migten web application</a>
                                </div>
                                <div class="col-12 text-center  my-3">
                                    <a class="fs-6 fw-bold" href="#">Migten web application</a>
                                </div>
                                <div class="col-12 text-center  my-3">
                                    <a class="fs-6 fw-bold" href="#">Migten web application</a>
                                </div>
                                <div class="col-12">
                                    <div class="first-place"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="offset-1 offset-lg-2 col-10 col-lg-4 my-3 rounded-3 flyin zoom " style="background-color: #ffffff90;">
                        <div class="row g-1">
                            <div class="col-12 text-center">
                                <label class="form-label fs-4 fw-bold">Complete Projects</label>
                                <hr>
                            </div>
                            <div class=" project " style="height: 150px;">
                                <div class="col-12 text-center  my-3">
                                    <a class="fs-6 fw-bold" href="#">Migten mobile application</a>
                                </div>
                                <div class="col-12 text-center  my-3">
                                    <a class="fs-6 fw-bold" href="#">Migten mobile application</a>
                                </div>
                                <div class="col-12 text-center  my-3">
                                    <a class="fs-6 fw-bold" href="#">Migten mobile application</a>
                                </div>
                                <div class="col-12 text-center  my-3">
                                    <a class="fs-6 fw-bold" href="#">Migten mobile application</a>
                                </div>
                                <div class="col-12 text-center  my-3">
                                    <a class="fs-6 fw-bold" href="#">Migten mobile application</a>
                                </div><div class="col-12 text-center  my-3">
                                    <a class="fs-6 fw-bold" href="#">Migten mobile application</a>
                                </div>
                                <div class="col-12">
                                    <div class="first-place"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="offset-1 col-10 my-3 rounded-3 flyin zoom" style="background-color: #ffffff90;">
                        <div class="row g-1">
                            <div class="col-12 text-center">
                                <label class="form-label fs-4 fw-bold">Ongoin Task</label>
                                <hr>
                            </div>
                            <div class=" project " style="height: 200px;">
                                <div class="col-10 offset-1 my-3">
                                    <span class="fs-6 text-center fw-bold">Migten web application</span><br />
                                    <span class="fs-6">Ui Ux design</span><br />
                                    <span class="fs-6">Backend</span><br />
                                    <span class="fs-6">MySql Database</span><br />
                                </div>
                                <div class="col-10 offset-1 my-3">
                                    <span class="fs-6 text-center fw-bold">Migten web application</span><br />
                                    <span class="fs-6">Ui Ux design</span><br />
                                    <span class="fs-6">Backend</span><br />
                                    <span class="fs-6">MySql Database</span><br />
                                </div>
                                <div class="col-10 offset-1 my-3">
                                    <span class="fs-6 text-center fw-bold">Migten web application</span><br />
                                    <span class="fs-6">Ui Ux design</span><br />
                                    <span class="fs-6">Backend</span><br />
                                    <span class="fs-6">MySql Database</span><br />
                                </div>
                                <div class="col-12">
                                    <div class="first-place"></div>
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