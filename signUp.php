<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Migten | Sign Up </title>
    <link rel="stylesheet" href="res/bootstrap.css" />
    <link rel="stylesheet" href="res/style.css" />
    <link rel="icon" href="res/logo-sm.png" />

</head>

<body class="body">

    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-center">



            <!-- content  -->
            <div class="col-12 ">
                <div class="row p-3 ">

                   

                    <div class="col-12 col-lg-6 offset-lg-3 border-dark shadow-lg bg-transparent rounded-4">
                        <div class="row g-2 p-4">


                            <div class="col-12 ">
                                <p class="title02 text-uppercase">Sign Up</p>
                            </div>
                            <hr />
                            <div class="col-12 col-lg-6 ">
                                <label class="form-label fw-bold">First Name </label>
                                <input type="text" class="form-control" placeholder="ex:- john" id="fname" />
                            </div>

                            <div class="col-12 col-lg-6 ">
                                <label class="form-label fw-bold">Last Name</label>
                                <input type="text" class="form-control" placeholder="ex:- john" id="lname" /> 
                            </div>
                            <div class="col-12 col-lg-6 ">
                                <label class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control" placeholder="ex:- john@" id="email" />
                            </div> 
                    
                            
                            <div class="col-12 col-lg-6">
                                <label class="form-label fw-bold">Gender</label>
                                <select class=" form-select " id="gender">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>



                            </div> 

                               
                            <div class="col-12 ">
                                <label class="form-label fw-bold">Profession</label>
                                <select class=" form-select " id="profession">

                                <?php

                                require "server/connection.php";

                                $profession_rs = Database::search("SELECT * FROM `profession`");
                                $profession_num = $profession_rs->num_rows;

                                for ($x = 0; $x < $profession_num; $x++) {
                                    $profession_data = $profession_rs->fetch_assoc();
                                ?>

                                    <option value="<?php echo $profession_data["id"]; ?>"><?php echo $profession_data["title"]; ?></option>

                                <?php
                                }

                                ?>
                                    <!-- <option value="1">Ui/Ux</option>
                                    <option value="2">Back End Developer</option> -->
                                </select>



                            </div>

                            <div class="col-12 col-lg-6">
                                <label class="form-label fw-bold">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="ex:- ****" id="password" />
                                    <span class="input-group-text btn btn-dark" id="basic-addon2">Show</span>
                                </div>

                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="form-label fw-bold">Confirm Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="ex:- ****" id="password2" />
                                    <span class="input-group-text btn btn-dark" id="basic-addon2">Show</span>
                                </div>
                            </div>



                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberme" />
                                    <label class="form-check-label">Remember Me</label>
                                </div>

                            </div>

                            <div class="col-12 col-lg-6 d-grid my-3">
                                <button class="btn text-white shadow-lg" style="background-color: #543c4f;" onclick="signUp();">Sign Up</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid my-3">
                                <button class="btn text-white shadow-lg" style="background-color: #f13451;" onclick="window.location = 'SignIn.php'">if you have an account? Sign In </button>
                            </div>




                        </div>

                    </div>


                </div>


            </div>

            <!-- content  -->


            <!-- model1 -->

            <div class="modal" tabindex="-1" id="verificationModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Sign Up Verification</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label class="form-label">Enter Your Verification Code</label>
                            <input type="text" class="form-control" id="vcode">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="verify();">Verify</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- model1 -->

        </div>

    </div>


    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body> 

</html>