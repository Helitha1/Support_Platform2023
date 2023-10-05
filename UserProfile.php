<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="res/bootstrap.css" />
</head>

<body  class=" body2">

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
                                                        <span class="fw-bold">helitha wijesooriya</span> <br>
                                                        <span class="fw-bold text-black-50">info@gmail.com</span><br>
                                                        <span class="fw-bold text-black-50"> Once logged in, you'll land on your personalized dashboard. Here, you'll find an overview of your tasks, projects, and upcoming deadlines.
                                                        Once logged in, you'll land on your personalized dashboard. Here, you'll find an overview of your tasks, projects, and upcoming deadlines.
</span><br>



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
                                <input type="text" class="form-control" value="helitha" readonly id="lname" />
                            </div>

                            <div class="col-6 mb-3">
                                <label class="form-label fw-bold">Last Name</label>
                                <input type="text" class="form-control" value="helitha" readonly id="lname" />
                            </div>

                            <div class="col-6 mb-3">
                                <label class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control" readonly value="info@gmail.com" />
                            </div>

                            <div class="col-6 mb-3">
                                <label class="form-label fw-bold">Profession</label>
                                <input type="text" class="form-control" readonly value="UI/Ux" />
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">About</label>
                                <input type="text" class="form-control" readonly value="aaaaaaaaaaaaaaaaaaaaaa" />
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Skils</label>
                                <!-- <input type="text" class="form-control" readonly value="" /> -->
                                <div class=" g-2" role="group" aria-label="Basic outlined example">
                               
  <button type="button" class="btn btn-outline-primary">Left</button>
  <button type="button" class="btn btn-outline-primary">Middle</button>
  <button type="button" class="btn btn-outline-primary">Right</button>
  <button type="button" class="btn btn-outline-primary">Middle</button>
  <button type="button" class="btn btn-outline-primary">Right</button>

  <button class="btn btn-outline-secondary fw-bold" type="button">+</button>
</div>
                            </div>

                            <div class="col-12 col-lg-6 mb-3">
                                <label class="form-label fw-bold">password</label>
                                <div class="input-group ">
                                    <input type="password" class="form-control" readonly id="npi" value="4441244" />
                                    <button class="btn btn-outline-secondary" type="button"><i id="e1" class="bi bi-eye-slash-fill"></i></button>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 mb-3">

                                <label class="form-label fw-bold">Gender</label>
                                <input type="text" class="form-control" readonly value="male" />
                            </div>

                            <!-- <div class="offset-2 offset-lg-4 col-8 col-lg-4 d-grid mt-3">
                            <button class="btn btn-success" >Update My Profile</button>

                        </div> -->
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

</body>

</html>