<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Messages | Migten</title>

    <link rel="stylesheet" href="res/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="res/style.css" />
    <link rel="stylesheet" href="res/fontawsome/css/all.css" />

    <link rel="icon" href="res/logo-sm.png" />
</head>

<body class="body">

    <div class="container-fluid">
        <div class="row">
            <?php include "header.php"; ?>
            <div class="col-12">
                <hr />
            </div>

            <div class="col-12 py-5 px-4">
                <div class="row">
                    <div class="col-12 col-lg-3 shadow-lg rounded-4" style="background-color: #ffffff50;">
                        <div class=" px-4 py-2 my-2">
                            <div class="col-12 my-2">
                                <h5 class="mb-0 my-1 fw-bold text-black">Recents</h5>
                            </div>
                            <div class="col-12">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                            Received
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-black" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                            Sent
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="message_box" id="message_box">

                                            <div class="list-group rounded-0">
                                                <a href="#" class="list-group-item list-group-item-action text-white rounded-0 bg-secondary">
                                                    <div class="media">

                                                        <img src="res/background2.jpg" width="50px" class="rounded-circle">


                                                        <div class="me-4">
                                                            <div class="d-flex align-items-center justify-content-between mb-1 ">
                                                                <h6 class="mb-0 fw-bold">Helitha Wijesooriya</h6>
                                                                <small class="small fw-bold">2023/12/05</small>

                                                            </div>
                                                            <p class="mb-0">pakaya</p>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>


                                            <div class="list-group rounded-0">
                                                <a href="#" class="list-group-item list-group-item-action text-dark rounded-0 bg-body">
                                                    <div class="media">
                                                        <img src="res/homeImg.png" width="50px" class="rounded-circle">
                                                        <div class="me-4">
                                                            <div class="d-flex align-items-center justify-content-between mb-1 ">
                                                                <h6 class="mb-0 fw-bold">Helitha Wijesooriya</h6>
                                                                <small class="small fw-bold">2017/05/06</small>

                                                            </div>
                                                            <p class="mb-0">cgfhg</p>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                        <div class="mt-1 sent">
                                            <div class="list-group rounded-0">
                                                <a href="#" class="list-group-item list-group-item-action text-black rounded-0 bg-secondary">
                                                    <div class="media">
                                                        <img src="res/background2.jpg" width="50px" class="rounded-circle">
                                                        <div class="me-4">
                                                            <div class="d-flex align-items-center justify-content-between mb-1 ">
                                                                <h6 class="mb-0 fw-bold"> me</h6>
                                                                <small class="small fw-bold">2017/05/06</small>

                                                            </div>
                                                            <p class="mb-0">hikj</p>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--  -->
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7 offset-lg-1 shadow-lg rounded-4 my-lg-0 my-2" style="background-color: #ffffff50; height:450px;">
                        <div class="row align-items-end h-100">
                            <div class="row px-4 py-5 text-white chat_box" id="chat_box">
                            </div>

                            <!-- txt -->
                            <div class="col-12 px-2">
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <input type="text" id="msg_txt" class="form-control rounded border-0 py-3 bg-light" placeholder="Type a message ..." aria-describedby="send_btn">
                                        <button class="btn btn-light fs-2 " id="send_btn" onclick="send_msg();"><i class="fa-solid fa-location-arrow fs-2"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- txt -->
                        </div>


                    </div>


                </div>
            </div>




            <div class="col-12">
                <div class="row">
                    <input type="text" name="" id="" class="form-control">\
                    <div class="my-3"></div>
                    <div class="scroll-container">
                        
                    </div>
                </div>
            </div>


            <?php include "footer.php"; ?>
        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>