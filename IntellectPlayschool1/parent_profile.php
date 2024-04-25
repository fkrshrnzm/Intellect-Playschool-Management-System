<?php include 'dbconnect.php'?>
<?php include 'headerparent.php' ?>

<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.php">
                <div class="sidebar-brand-icon "><img src="img/lLogo.png" style="width: 30px; height: 50px;"></div>
                <div class="sidebar-brand-text mx-1"><img src="img/rLogo.png" style="width: 70px; height: 50px;"></div>

            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link" href="parent_main.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item"><a class="nav-link" href="parent_attendance.php"><i class="fas fa-table"></i><span>Attendance</span></a></li>
<!--                <li class="nav-item"><a class="nav-link" href="parent_assessment.php"><i class="far fa-user-circle"></i><span>Assessment</span></a></li>-->
                <li class="nav-item"><a class="nav-link" href="parent_payment.php"><i class="fas fa-user-circle"></i><span>Payment</span></a></li>
                <li class="nav-item"><a class="nav-link" href="student_register.php"><i class="fas fa-user-circle"></i><span>Register child</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">

                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">

                    </form><ul class="navbar-nav flex-nowrap ms-auto">


                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                    <span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo  $_SESSION['firstName']. "   " .$_SESSION['lastName'] ?></span>
                                    <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                    <a class="dropdown-item" href="parent_profile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                    <!--                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a>-->
                                    <!--                                    <a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>-->
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div
                        </li>
                    </ul>
                </div>

            </nav>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Profile</h3>
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <div class="card mb-3">
<!--                            Main-->
                            <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="assets/img/dogs/image2.jpeg" width="160" height="160">
                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change Photo</button></div>
                            </div>
                        </div>
<!--                        <div class="card shadow mb-4">-->
<!--                            <div class="card-header py-3">-->
<!--                                <h6 class="text-primary fw-bold m-0">Projects</h6>-->
<!--                            </div>-->
<!--                            <div class="card-body">-->
<!--                                <h4 class="small fw-bold">Server migration<span class="float-end">20%</span></h4>-->
<!--                                <div class="progress progress-sm mb-3">-->
<!--                                    <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="visually-hidden">20%</span></div>-->
<!--                                </div>-->
<!--                                <h4 class="small fw-bold">Sales tracking<span class="float-end">40%</span></h4>-->
<!--                                <div class="progress progress-sm mb-3">-->
<!--                                    <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="visually-hidden">40%</span></div>-->
<!--                                </div>-->
<!--                                <h4 class="small fw-bold">Customer Database<span class="float-end">60%</span></h4>-->
<!--                                <div class="progress progress-sm mb-3">-->
<!--                                    <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="visually-hidden">60%</span></div>-->
<!--                                </div>-->
<!--                                <h4 class="small fw-bold">Payout Details<span class="float-end">80%</span></h4>-->
<!--                                <div class="progress progress-sm mb-3">-->
<!--                                    <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="visually-hidden">80%</span></div>-->
<!--                                </div>-->
<!--                                <h4 class="small fw-bold">Account setup<span class="float-end">Complete!</span></h4>-->
<!--                                <div class="progress progress-sm mb-3">-->
<!--                                    <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="visually-hidden">100%</span></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
<!--                    <div class="col-lg-8">-->
<!--                        <div class="row mb-3 d-none">-->
<!--                            <div class="col">-->
<!--                                <div class="card text-white bg-primary shadow">-->
<!--                                    <div class="card-body">-->
<!--                                        <div class="row mb-2">-->
<!--                                            <div class="col">-->
<!--                                                <p class="m-0">Peformance</p>-->
<!--                                                <p class="m-0"><strong>65.2%</strong></p>-->
<!--                                            </div>-->
<!--                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>-->
<!--                                        </div>-->
<!--                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col">-->
<!--                                <div class="card text-white bg-success shadow">-->
<!--                                    <div class="card-body">-->
<!--                                        <div class="row mb-2">-->
<!--                                            <div class="col">-->
<!--                                                <p class="m-0">Peformance</p>-->
<!--                                                <p class="m-0"><strong>65.2%</strong></p>-->
<!--                                            </div>-->
<!--                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>-->
<!--                                        </div>-->
<!--                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 fw-bold">User Settings</p>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="profile_process.php">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>IC Number</strong></label><input class="form-control" type="text" id="username" placeholder="<?php echo $_SESSION['acc_ID']?>" name="user_IC"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label><input class="form-control" type="email" id="email" placeholder="<?php echo $_SESSION['email']?>" name="email"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" id="first_name" placeholder="<?php echo $_SESSION['firstName']?>" name="first_name"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" id="last_name" placeholder="<?php echo $_SESSION['lastName']?>" name="last_name"></div>
                                                </div>
                                            </div>
                                            <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit" name="submitDetails">Save Settings</button></div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card shadow">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 fw-bold">Contact Settings</p>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="profile_process.php">
                                            <div class="mb-3"><label class="form-label" for="address"><strong>Address</strong></label><input class="form-control" type="text" id="address" placeholder="<?php echo $_SESSION['address']?>" name="address"></div>
                                            <div class="mb-3"><label class="form-label" for="address"><strong>Phone Number</strong></label><input class="form-control" type="text" id="phoneNumber" placeholder="<?php echo $_SESSION['phoneNumber']?>" name="phone_number"></div>
<!--                                            <div class="row">-->
<!--                                                <div class="col">-->
<!--                                                    <div class="mb-3"><label class="form-label" for="city"><strong>City</strong></label><input class="form-control" type="text" id="city" placeholder="Los Angeles" name="city"></div>-->
<!--                                                </div>-->
<!--                                                <div class="col">-->
<!--                                                    <div class="mb-3"><label class="form-label" for="country"><strong>Country</strong></label><input class="form-control" type="text" id="country" placeholder="USA" name="country"></div>-->
<!--                                                </div>-->
<!--                                            </div>-->
                                            <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit" name="submitAddress">Save&nbsp;Settings</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--                <div class="card shadow mb-5">-->
<!--                    <div class="card-header py-3">-->
<!--                        <p class="text-primary m-0 fw-bold">Forum Settings</p>-->
<!--                    </div>-->
<!--                    <div class="card-body">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-6">-->
<!--                                <form>-->
<!--                                    <div class="mb-3"><label class="form-label" for="signature"><strong>Signature</strong><br></label><textarea class="form-control" id="signature" rows="4" name="signature"></textarea></div>-->
<!--                                    <div class="mb-3">-->
<!--                                        <div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1"><strong>Notify me about new replies</strong></label></div>-->
<!--                                    </div>-->
<!--                                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save Settings</button></div>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>-->
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/theme.js"></script><a class="d-inline border rounded scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</body>

<?php include 'footersecond.php' ?>
