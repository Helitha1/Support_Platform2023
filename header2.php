<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="./res/logo-sm.png" />
    <link rel="stylesheet" href="res/main.css" />
    <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="cdn.jsdelivr.net_npm_swiper@10.2.0_swiper-bundle.min.css" />
    <link rel="stylesheet" href="./fontawsome/css/all.css" />
</head>

<body>
<div class="col-12 container-fluid">
    <div class="row">

    
    <!-- NAVIGATION -->
    <div class="navigation-container">

        <!-- LOGO -->
        <div class="brand-logo">
            <img src="res/logo-sm.png" alt="Migten Logo" class="" />
        </div>

        <!-- NAVIGATION MENUE ITEMS AND OTHER MENU ICONS -->
        <div class="navigation-bar" id="nav-menu">
            <!-- MENI TEXTS -->
            <ul class="navigation-bar-text">
                <li class="navigation-item"><a href="" class="active">Home</a></li>
                <li class="navigation-item"><a href="">About</a></li>
                <li class="navigation-item"><a href="">Contact Us</a></li>
                <li class="navigation-item"><a href="">Other Services</a></li>
            </ul>
            <!-- MENU LOGOS -->
            <ul class="navigation-bar-logo">
                
                <li class="navigation-item">
                    <button><i class="fa-solid fa-moon"></i></button>
                </li>
                <!-- USER ACCOUNT -->
                <li class="navigation-item">
                    <div class="col-12">
                        <button class="btn btn-sm btn-primary">
                        <i class="bi bi-arrow-down-circle"></i> Download
                        </button>
                    </div>
                </li>
            </ul>
        </div>

        <!-- TOGGLE BUTTON -->
        <div class="d-block d-sm-none navigation-toggler">
            <button class="btn btn-primary" onclick="toggleNavigation('nav-menu','navigation-toggler-icon')" id="navigation-toggler">
                <i class="fa-solid fa-bars" id="navigation-toggler-icon"></i>
            </button>
        </div>

    </div>
    </div>
</div>
</body>

</html>