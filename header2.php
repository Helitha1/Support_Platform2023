 <?php
    session_start();

    if (isset($_SESSION["user"])) {
        $user_button = '
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown1" data-toggle="dropdown">
          <i class="fa fa-user"></i>  ' . ($_SESSION["user"]["fname"]) . '
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdown1" id="">
            <a class="dropdown-item" href="dashboard.php">DASHBOARD</a>
            <a class="dropdown-item" href="signout.php">SIGNOUT</a>
        </div>
    </div>
    ';
    } else {
        $user_button = '<a href="">Sign In</a>';
    }
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=7" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="icon" type="image/png" href="./res/logo-sm.png" />
     <link rel="stylesheet" href="res/main.css" />
     <link rel="stylesheet" href="res/bootstrap.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
     <link rel="stylesheet" href="res/cdn.jsdelivr.net_npm_swiper@10.2.0_swiper-bundle.min.css" />
     <link rel="stylesheet" href="fontawsome/css/all.css" />
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
                         <li class="navigation-item"><?php echo ($user_button);  ?></li>
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
                 <div class="d-block d-md-none navigation-toggler">
                     <button class="btn btn-primary" onclick="toggleNavigation('nav-menu','navigation-toggler-icon')" id="navigation-toggler">
                         <i class="fa-solid fa-bars" id="navigation-toggler-icon"></i>
                     </button>
                 </div>

             </div>
         </div>

         <script src="main.js"></script>
         <script src="res/bootstrap.bundle.js"></script>

 </body>

 </html>