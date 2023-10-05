<?php
session_start();

if (isset($_SESSION["user"])) {
    $user_button = '
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            ' . $_SESSION["user"]["fname"] . '
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
            <li><a class="dropdown-item" href="signout.php">Signout</a></li>
        </ul>
    </div>
    ';
} else {
    $user_button = '<a href="signIn.php">Sign In</a>';
}
?>
<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<link rel="stylesheet" href="res/bootstrap.css" />
<link rel="stylesheet" href="res/style.css" />
<link rel="stylesheet" href="res/animation.css" />
<link rel="stylesheet" href="res/main.css" />

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

                        <li class="navigation-item"><?php echo ($user_button);  ?></li>
                        <!-- <li class="navigation-item"><a href="">Dashboard</a></li> -->
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
                    <div class="d-block d-md-none navigation-toggler">
                        <button class="btn btn-primary" onclick="toggleNavigation('nav-menu','navigation-toggler-icon')" id="navigation-toggler">
                            <i class="fa-solid fa-bars" id="navigation-toggler-icon"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>

</body>

</html>

<script src="main.js"></script>
<script src="res/bootstrap.bundle.js"></script>
</body>