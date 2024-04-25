<?php include 'dbconnect.php'?>
<?php include 'headerstaff.php' ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Intellect Playschool- Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="assets/bootstrap/css/Navbar-Centered-Links-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <!--    <script src="assets/bootstrap/js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="assets/js/javascript.js"></script>
    <script type="text/javascript" src="assets/js/todo.js"></script>
    <!--    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>-->
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->



</head>


<body id="page-top">


<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="admin_main.php">
                <div class="sidebar-brand-icon "><img src="img/lLogo.png" style="width: 30px; height: 50px;"></div>
                <div class="sidebar-brand-text mx-1"><img src="img/rLogo.png" style="width: 70px; height: 50px;"></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link active" href="admin_main.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <!--                    <li class="nav-item"><a class="nav-link" href="admin_profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li>-->
                <li class="nav-item"><a class="nav-link" href="admin_attendance.php"><i class="fas fa-table"></i><span>Attendance</span></a></li>
                <li class="nav-item"><a class="nav-link" href="admin_announcement.php"><i class="far fa-user-circle"></i><span>Announcement</span></a></li>
                <li class="nav-item"><a class="nav-link" href="admin_activity.php"><i class="far fa-user-circle"></i><span>Activity</span></a></li>
                <li class="nav-item"><a class="nav-link" href="admin_assessment.php"><i class="fas fa-user-circle"></i><span>Assessment</span></a></li>
                <li class="nav-item"><a class="nav-link" href="financial(Admin)menu.php"><i class="fas fa-user-circle"></i><span>Financial</span></a></li>
                <li class="nav-item"><a class="nav-link" href="admin_pending.php"><i class="fas fa-user-circle"></i><span>Pending request</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn border-0 rounded-circle" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>

    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <!--                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">-->
                    <!--                            <div class="input-group"><input class="bg-light border-0 form-control form-control small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>-->
                    <!--                        </form>-->
                    <ul class="navbar-nav flex-nowrap ms-auto">
                        <!--                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>-->
                        <!--                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">-->
                        <!--                                    <form class="me-auto navbar-search w-100">-->
                        <!--                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">-->
                        <!--                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>-->
                        <!--                                        </div>-->
                        <!--                                    </form>-->
                        <!--                                </div>-->
                        <!--                            </li>-->
                        <!--                            <li class="nav-item dropdown no-arrow mx-1">-->
                        <!--                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>-->
                        <!--                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">-->
                        <!--                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">-->
                        <!--                                            <div class="me-3">-->
                        <!--                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>-->
                        <!--                                            </div>-->
                        <!--                                            <div><span class="small text-gray-500">December 12, 2019</span>-->
                        <!--                                                <p>A new monthly report is ready to download!</p>-->
                        <!--                                            </div>-->
                        <!--                                        </a><a class="dropdown-item d-flex align-items-center" href="#">-->
                        <!--                                            <div class="me-3">-->
                        <!--                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>-->
                        <!--                                            </div>-->
                        <!--                                            <div><span class="small text-gray-500">December 7, 2019</span>-->
                        <!--                                                <p>$290.29 has been deposited into your account!</p>-->
                        <!--                                            </div>-->
                        <!--                                        </a><a class="dropdown-item d-flex align-items-center" href="#">-->
                        <!--                                            <div class="me-3">-->
                        <!--                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>-->
                        <!--                                            </div>-->
                        <!--                                            <div><span class="small text-gray-500">December 2, 2019</span>-->
                        <!--                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>-->
                        <!--                                            </div>-->
                        <!--                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </li>-->

                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                    <span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo  $_SESSION['firstName']. "   " .$_SESSION['lastName'] ?></span>
                                    <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                    <a class="dropdown-item" href="admin_profile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                    <!--                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a>-->
                                    <!--                                    <a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>-->
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0"><?php echo "Welcome back,  " .$_SESSION['firstName']. "   " .$_SESSION['lastName']. "!"; ?></h3>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-start-primary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <?php
                                        $sqlstudent = "SELECT * FROM attendance WHERE att_Type=1 AND att_User=0 AND att_Date=curdate();";
                                        $result = mysqli_query($con,$sqlstudent);
                                        $counts = mysqli_num_rows($result);
                                        ?>
                                        <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Total Student Today </span></div>
                                        <div class="text-dark fw-bold h5 mb-0"><span> <?php echo $counts ?> Student</span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-start-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <?php
                                        $sql= "SELECT * FROM student_fee WHERE fee_Status=0";
                                        $result = mysqli_query($con, $sql);

                                        $due = mysqli_num_rows($result);
                                        ?>
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1" ><span>Total Due Payment</span></div>
                                        <div class="text-dark fw-bold h5 mb-0"><span><?php echo $due." Payment" ?></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-start-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <?php
                                        $sql= "SELECT * FROM student_fee_pdf WHERE fee_PaymentStatus=0";
                                        $result = mysqli_query($con, $sql);

                                        $due = mysqli_num_rows($result);
                                        ?>
                                        <div class="text-uppercase text-warning fw-bold text-xs mb-1" ><span>New Pending Payment</span></div>
                                        <div class="text-dark fw-bold h5 mb-0"><span><?php echo $due." Payment" ?></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-start-primary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <?php
                                        $sqlstudent = "SELECT * FROM student;";
                                        $result = mysqli_query($con,$sqlstudent);
                                        $counts = mysqli_num_rows($result);
                                        ?>
                                        <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Total Student</span></div>
                                        <div class="text-dark fw-bold h5 mb-0"><span> <?php echo $counts ?> Student</span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Announcement -->
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                        <div class="card shadow mb-4">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/4.jpg" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5></h5>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/1.jpg" alt="..." >
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5></h5>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/4.jpg" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5></h5>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/2.jpg" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5></h5>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/4.jpg" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5></h5>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <!--TO DO LIST-->
                        <script type="text/javascript" src="app.js"></script>
                    </div>
                    <!-- Activity -->
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Playgroup this friday</h6>

                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div>
                                    <div class="row">
                                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="img/p1.jpg" class="d-block w-100" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Activity</h6>

                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div>
                                    <div class="row">
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="img/a1.jpg" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="img/a2.jpg" alt="Second slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <small></small>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <!-- Table 1 -->
                    <?php
                    $sql = "SELECT * FROM academic_subname_desc
                                LEFT JOIN account a on academic_subname_desc.acc_ID = a.acc_ID";
                    $result = mysqli_query($con, $sql);

                    ?>

                    <!--                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">-->
                    <!--                            <h5><a href="assignedTeacher.php">Assigned Teacher</a></h5>-->
                    <!--                            <div id="table-wrapper">-->
                    <!--                                <div id="table-scroll" >-->
                    <!--                                    <table class="table table-bordered" >-->
                    <!--                                        <thead style="text-align: left; text-justify: auto;">-->
                    <!--                                        <tr >-->
                    <!--                                            <th>Subject</th>-->
                    <!--                                            <th>Teacher</th>-->
                    <!--                                            <th>Operation</th>-->
                    <!--                                        </tr>-->
                    <!--                                        </thead>-->
                    <!--                                        <tbody id="" style="text-align: left; ">-->
                    <!--                                        --><?php //while($row=mysqli_fetch_array($result)){?>
                    <!--                                        <tr >-->
                    <!--                                            <td>--><?php //echo $row['description'] ?><!--</td>-->
                    <!--                                            <form action="admin" type="POST">-->
                    <!--                                                <td>-->
                    <!--                                                    <select class="form-select" multiple>-->
                    <!---->
                    <!--                                                        --><?php
                    //                                                        $sql2 = "SELECT * FROM teacher LEFT JOIN account a on a.acc_ID = teacher.acc_ID";
                    //                                                        $result2 = mysqli_query($con, $sql2);
                    //                                                        while($row2=mysqli_fetch_assoc($result2)){?>
                    <!--                                                        <option value="--><?php //echo $row2['acc_ID']?><!--">--><?php //echo $row2['fName']. " ".$row2['lName'] ?><!--</option>-->
                    <!--                                                        --><?php //}?>
                    <!--                                                    </select>-->
                    <!--                                                </td>-->
                    <!--                                                <td>-->
                    <!--                                                    <button class="btn btn-warning">Submit</button>-->
                    <!--                                                </td>-->
                    <!--                                            </form>-->
                    <!---->
                    <!--                                        </tr>-->
                    <!--                                        --><?php //}?>
                    <!--                                        </tbody>-->
                    <!---->
                    <!--                                    </table>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->



                </div>
            </div>

        </div>


        <?php include 'footersecond.php' ?>
    </div><a class="d-inline border rounded scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="assets/js/theme.js"></script>
</body>

