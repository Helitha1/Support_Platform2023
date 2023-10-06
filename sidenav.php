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
                        <a class="btn btn-outline-secondary my-2" aria-current="page" href="dashboard.php">Dashboard</a>
                        <br />
                        <a class="btn btn-outline-secondary my-2" href="projects.php">Projects</a>
                        <br />
                        <a class="btn btn-outline-secondary my-2" href="AddProject.php">Create Projects</a>
                        <br />
                        <a class="btn btn-outline-secondary my-2" href="UserProfile">Manage Profile</a>
                    </nav>
                </div>
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
                <span class="fs-6 text-white" onclick="window.location = 'AddProject.php'">Create Projects</span>
            </a>
        </li>
        <li class="nav-item my-1 mx-1 changeView border-end border-bottom rounded-5 border-white border-opacity-25">
            <a class="nav-link ">
                <span class="fs-6 text-white" onclick="window.location = 'UserProfile.php'">Manage Profile</span>
            </a>
        </li>
    </ul>
</div>