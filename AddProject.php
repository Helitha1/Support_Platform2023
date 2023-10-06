<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="res/bootstrap.css" />
</head>

<body class=" body2">

    <div class="container-fluid">
        <div class="row">



            <div class="col-12 mt-2 bg-white bg-opacity-50">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active text-black" aria-current="page">Add Project</li>
                    </ol>
                </nav>
            </div>

            <div class="col-12">
                <div class="row p-2">

                    <div class="col-12 p-3">
                        <div class="row d-grid">
                            <div class="col-12 text-center">
                                <span class="text-center fw-bold fs-2">Add Project</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <hr />
                    </div>

                    <div class="offset-1 col-10 bg-body border rounded-4 shadow-lg">
                        <div class="row d-grid">

                        </div>

                        <div class="offset-1 col-10 bg-body border  rounded-4 shadow-lg mt-3">
                            <div class="row my-3 p-3 mt-2">



                                <div class="col-12 mb-3">
                                    <label class="form-label fw-bold">Title</label>
                                    <input type="text" class="form-control" id="pt" />
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label fw-bold">Description</label>
                                    <input type="text" class="form-control" id="pd" />

                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label fw-bold">Start Date</label>
                                    <input type="date" class="form-control" id="psd" />
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label fw-bold">End Date</label>
                                    <input type="date" class="form-control" id="ped" />
                                </div>

                                <div class="col-12 mb-3">

                                    <hr class="border border-3 border-dark" />

                                    <h4 class="form-label fw-bold">Main Tasks</h4>


                                    <div class="row">

                                        <div class="col-6 mb-3 rounded-3 " style="background-color: #0080ff20;">
                                            <br/>

                                            <label class="form-label fw-bold">Title</label>
                                            <input type="text" class="form-control" id="tt" />

                                            <label class="form-label fw-bold">Description</label>
                                            <input type="text" class="form-control" id="td" />

                                          
                                            <label class="form-label fw-bold">Start Date</label>
                                            <input type="date" class="form-control" id="tsd" />

                                            <label class="form-label fw-bold">End Date</label>
                                            <input type="date" class="form-control" id="ted" />


                                            <button onclick="addProjectTask();" class="btn btn-outline-success fw-bold col-12 my-3" type="button">Add Task</button>


                                        </div>

                                        <div class="col-6 mb-3 shadow">

                                            <div class="row g-1">
                                                <div class="col-12  my-2 project " style="height: 280px;"> 

 
                                                <div class="col-11 mb-3">  

                                                <div class="row">   

                                                <ul id="taskList">

                                                </ul>


                                                </div>

                                                </div>

                                                    
                                                    <!-- <div class="col-12  my-2 project" style="height: 290px;">
                                                        <button type="button" class="btn btn-outline-primary  col-12 my-1">Database</button>

                                                    </div> -->
                                                </div>

                                            </div>


                                        </div> 


                                        <div class="col-12 mb-3"> 
 
                                        <div class="row"> 
 
                                        
                                                <button onclick="addNewProject();" class="btn btn-outline-info fw-bold col-12 my-3" type="button">Add Project</button>
                                        

                                        </div>

                                        </div>

                                    </div>




                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </div>
            <script src="script.js"></script>
</body>

</html>