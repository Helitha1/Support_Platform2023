<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="res/bootstrap.css" />
    <title>Migten | User Profile </title>
    <link rel="icon" href="res/logo-sm.png" />
</head>

<body class=" body2">

    <?php

    require "server/connection.php";

    if (isset($_GET["email"])) {
        session_start();
        $user_email = $_GET["email"];

        $user_rs = Database::search("SELECT * FROM `users` INNER JOIN `gender` ON gender.id = users.gender_id WHERE `email` = '$user_email'");
        $user_num = $user_rs->num_rows;

        if ($user_num > 0) {
            $user_data = $user_rs->fetch_assoc();

    ?>

            <div class="container-fluid">
                <div class="row">



                    <div class="col-12 mt-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="col-12">
                        <div class="row p-2">

                            <div class="col-12 p-3">
                                <div class="row d-grid">
                                    <div class="col-12 text-center">
                                        <span class="text-center fw-bold fs-2">My Profile</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr />
                            </div>

                            <div class="offset-1 col-10 bg-body border rounded-4 shadow-lg">
                                <div class="row d-grid">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 col-lg-6 my-3 border-end">
                                                <div class="row g-2">


                                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                                        <img src="res\logo-sm.png" class="img p-1  rounded-circle" style="width: 150px; height: 150px;" id="myProfile" />
                                                    </div>


                                                </div>
                                            </div>



                                            <div class="col-12 col-lg-6">
                                                <div class="row g-2">
                                                    <div class="col-12">
                                                        <div class="row p-3">


                                                            <div class="col-12 text-center">
                                                                <span class="fw-bold"><?php echo ($user_data["fname"] . " " . $user_data["lname"]) ?></span> <br>
                                                                <span class="fw-bold text-black-50"><?php echo ($user_data["email"]) ?></span><br>
                                                                <span class="fw-bold text-black-50"><?php echo ($user_data["about"]) ?></span><br>



                                                            </div>
                                                            <div class="col-12 text-center text-lg-start">
                                                                <input type="file" class="d-none" id="profileimg6" accept="image/*" />
                                                                <button for="profileimg6" class="btn btn-primary mt-5">Update Profile Image</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="offset-1 col-10 bg-body border  rounded-4 shadow-lg mt-3">
                                <div class="row my-3 p-3 mt-2">

                                    <div class="text-center mb-3">
                                        <h4 class="fw-bold text-black-50 fs-3">Profile settings</h4>
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label class="form-label fw-bold">First Name</label>
                                        <input type="text" class="form-control" value="<?php echo ($user_data["fname"]) ?>" readonly id="lname" />
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label class="form-label fw-bold">Last Name</label>
                                        <input type="text" class="form-control" value="<?php echo ($user_data["lname"]) ?>" readonly id="lname" />
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label class="form-label fw-bold">Email</label>
                                        <input type="email" class="form-control" readonly value="<?php echo ($user_data["email"]) ?>" />
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label class="form-label fw-bold">Profession</label>
                                        <select class=" form-select " id="profession">

                                            <?php


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

                                    <div class="col-12 mb-3">
                                        <label class="form-label fw-bold">About</label>
                                        <input type="text" class="form-control" readonly value="<?php echo ($user_data["about"]) ?>" />
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label fw-bold">Skils</label>
                                        <!-- <input type="text" class="form-control" readonly value="" /> -->
                                        <div class=" g-2" role="group" aria-label="Basic outlined example">

                                            <?php


                                            $skill_rs = Database::search("SELECT * FROM `users_has_skills` INNER JOIN `skills` ON skills.id = users_has_skills.skills_id  WHERE `users_email` = '" . $_SESSION["user"]["email"] . "'");
                                            $skill_num = $skill_rs->num_rows;

                                            for ($x = 0; $x < $skill_num; $x++) {
                                                $skill_data = $skill_rs->fetch_assoc();
                                            ?>

                                                <button type="button" class="btn btn-outline-primary"><?php echo $skill_data["name"] ?></button>
                                            <?php
                                            }

                                            ?>

                                            <button class="btn btn-outline-secondary fw-bold" type="button">+</button>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-6 mb-3">
                                        <label class="form-label fw-bold">password</label>
                                        <div class="input-group ">
                                            <input type="password" class="form-control" readonly id="npi" value="<?php echo ($user_data["password"]) ?>" />
                                            <button class="btn btn-outline-secondary" type="button"><i id="e1" class="bi bi-eye-slash-fill"></i></button>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-6 mb-3">
                                        <input type="text" class="form-control" readonly value="<?php echo $user_data["title"] ?>" />
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <div class=" text-center text-lg-start text-end">
                                            <input type="file" class="d-none" id="profileimg6" accept="image/*" />
                                            <button for="profileimg6" class="btn btn-primary mt-5">Save</button>
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
    } else {
        echo ("invalid user");
    }

    ?>



</body>

</html>