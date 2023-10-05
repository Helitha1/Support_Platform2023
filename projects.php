<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Migten</title>
    <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="cdn.jsdelivr.net_npm_swiper@10.2.0_swiper-bundle.min.css" />
    <link rel="stylesheet" href="res/bootstrap.css" />
    <link rel="stylesheet" href="res/style.css" />
    <link rel="stylesheet" href="res/animation.css" />
    <link rel="stylesheet" href="res/fontawsome/css/all.css" />
    <link rel="icon" href="res/logo-sm.png" />
</head>

<body class=" body2">

    <div class="container-fluid">
        <div class="row">


        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>

            <div class="col-12 col-lg-2 d-none d-lg-block">
                <div class="row">
                    <div class="col-12 rounded-bottom align-items-start bg-black vh-100 ">

                        <div class="row g-1 text-center ">



                            <div class="col-12 mt-3">



                                <h3 class="text-white">Migten</h43>

                                    <hr class="border border-1 border-body" />
                            </div>
                            <div class="nav flex-column nav-pills me-3 mt-3 " role="tablist" aria-orientation="vertical">
                                <nav class="nav flex-column ">
                                    <a class="btn btn-outline-secondary my-2" aria-current="page" href="dashboard.php">Dashboard</a>
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




                                    <a href="#" class="btn btn-danger mt-2">Sign Out</a>

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
                            <span class="fs-6 text-white" onclick="window.location = '###'">Create Projects</span>
                        </a>
                    </li>
                    <li class="nav-item my-1 mx-1 changeView border-end border-bottom rounded-5 border-white border-opacity-25">
                        <a class="nav-link ">
                            <span class="fs-6 text-white" onclick="window.location = '####'">Manage Profile</span>
                        </a>
                    </li>

                </ul>


            </div>

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
                                    <div class="col-10 offset-1 my-2">
                                        <button class="btn btn-primary form-control">Migten mobile Application</button>
                                    </div>
                                    <div class="col-10 offset-1 my-2">
                                        <button class="btn btn-primary form-control">Migten mobile Application</button>
                                    </div>
                                    <div class="col-10 offset-1 my-2">
                                        <button class="btn btn-primary form-control">Migten mobile Application</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-10 offset-1 offset-lg-0 col-lg-7 bg-secondary bg-opacity-25 m-lg-3  flyin zoom" style="height: 600px;">
                        <div class="row">
                            <div class="col-12 text-start p-2 m-2">
                                <span class="fs-3 text-white fw-bold">Migten mobile Application</span>
                            </div>
                            <hr>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold fs-4">Description</label>
                                <p class="form-control">esetn ydxr xdru d drudrysy xt sset eesetn ydxr xdru d drudrysy xt sset eesetn ydxr xdru d drudrysy xt sset eesetn ydxr xdru d drudrysy xt sset e</p>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold fs-4">Status</label>
                                <i class="fa-solid fa-circle text-success"></i>
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