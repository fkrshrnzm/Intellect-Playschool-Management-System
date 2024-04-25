<?php include 'dbconnect.php'?>
<?php include 'headerstaff.php' ?>

<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.php">
                <div class="sidebar-brand-icon "><img src="img/lLogo.png" style="width: 30px; height: 50px;"></div>
                <div class="sidebar-brand-text mx-1"><img src="img/rLogo.png" style="width: 70px; height: 50px;"></div>

            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link" href="teacher_main.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item"><a class="nav-link" href="teacher_attendancemenu.php"><i class="fas fa-table"></i><span>Attendance</span></a></li>
                <li class="nav-item"><a class="nav-link" href="teacher_announcement.php"><i class="far fa-user-circle"></i><span>Announcement</span></a></li>
                <li class="nav-item"><a class="nav-link" href="teacher_activity.php"><i class="far fa-user-circle"></i><span>Activity</span></a></li>
                <li class="nav-item"><a class="nav-link active" href="teacher_asessment.php"><i class="fas fa-user-circle"></i><span>Assessment</span></a></li>
                <li class="nav-item"><a class="nav-link" href="teacher_salary.php"><i class="fas fa-user-circle"></i><span>Salary</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn border-0 rounded-circle" id="sidebarToggle" type="button"></button></div>
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
                                    <a class="dropdown-item" href="teacher_profile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                    <!--                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a>-->
                                    <!--                                    <a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>-->
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div
                        </li>
                    </ul>
                </div>

            </nav>
            <div class="container-fluid">
            <div class="d-sm-flex justify-content-between align-items-center mb-4"><h3 class="text-dark mb-0">Academic</h3></div>
            
            <div class="row"><div class="col-lg-7 col-xl-8"><div class="card shadow mb-4">
                <div class="card-body">
                <div class="container">
                    
        
            
                <a class="btn btn-primary" role="button" href="createassessment.php" style="width:200px;height:235px;margin:28px;padding:100px 12px;color:var(--bs-btn-color);background:var(--bs-purple);text-align:center;">Create Assessment</a>
                <a class="btn btn-primary" role="button" href="editassessment.php" style="width: 200px;height: 235px;margin: 28px;padding: 100px 12px;color: var(--bs-btn-color);background: var(--bs-purple);">Edit Assessment</a>
                <a class="btn btn-primary" role="button" href="viewassessment.php" style="width:200px;height:235px;margin:28px;padding:100px 12px;color:var(--bs-btn-color);background:var(--bs-purple);">View Assessment</a>
                <a class="btn btn-primary" role="button" href="deleteassessment.php" style="width:200px;height:235px;margin:28px;padding:100px 12px;color:var(--bs-btn-color);background:var(--bs-purple);">Delete Assessment</a>
            
           
                </div>
          

    </div></div></div><div class="col-lg-5 col-xl-4"><div class="card shadow mb-4"><div class="card-body"><h2 class="text-black mb-4">Academic page</h2>
    <h5>Click on any of the option to perform the task.</h5><br><ul>
    <li><span class="d-block text-black">"Create Assessment"</span></li>
    <li><span class="d-block text-black">"Edit Assessment"</span></li>
    <li><span class="d-block text-black">"View Assessment"</span></li>
    <li><span class="d-block text-black">"Delete Assessment"</span></li>
</ul></div></div></div></div>

                </div>
            </div>
        </div>
        
    </div><a class="d-inline border rounded scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>

</div>
<script src="assets/js/theme.js"></script>

</body>
<?php include 'footersecond.php' ?>
