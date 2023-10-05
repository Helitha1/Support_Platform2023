<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Migten</title>
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

                    <div class="col-6 d-none d-lg-block logo"></div>

                    <div class="col-12 col-lg-6 border-dark shadow-lg bg-transparent rounded-4">
                        <div class="row g-2 p-4">


                            <div class="col-12 ">
                                <p class="title02">SIGN IN</p>
                            </div>
                            <hr />
                            <div class="col-12 ">
                                <label class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control" placeholder="ex:- john@gmail.com" id="email" />
                            </div>

                            <div class="col-12 ">
                                <label class="form-label fw-bold">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control fw-bold" placeholder="ex:- ****" id="password" />
                                    <span class="input-group-text btn btn-dark" id="basic-addon2">Show</span>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberme" />
                                    <label class="form-check-label fw-bold">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" class="link-dark fw-bold" onclick="forgotPassword();">Forgot Password?</a>
                            </div>
                            <div class="col-12 col-lg-6 d-grid my-3">
                                <button class="btn text-white"  style="background-color: #543c4f;" onclick="signIn();">Sign In</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid my-3">
                                <button class="btn text-white" style="background-color: #f13451;" onclick="window.location = 'SignUp.php'">if you are new to this! Sign Up</button>
                            </div>


                        </div>

                    </div>


                </div>


            </div>

            <!-- content  -->

        </div>

        <!-- modal -->

        <div class="modal" tabindex="-1" id="forgotPasswordModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Forgot Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="row g-3">

                            <div class="col-6">
                                <label class="form-label">New Password</label>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" id="p1" />
                                    <button class="btn btn-outline-secondary" type="button" id="npb" onclick="showPassword();">Show</button>
                                </div>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Re-type Password</label>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" id="p2" />
                                    <button class="btn btn-outline-secondary" type="button" id="rnpb" onclick="showPassword2();">Show</button>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Verification Code</label>
                                <input type="text" class="form-control" id="c" />
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="resetPassword();">Reset</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal -->



    </div>


    </div>

    <script src="bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>