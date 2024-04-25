<?php include 'dbconnect.php'?>
<?php include 'headerstaff.php'?>
<link rel="stylesheet" href="assets/sweetalert2.css">
<link rel="stylesheet" href="assets/sweetalert2.min.css">
<script src="assets/sweetalert2.all.js"></script>
<script src="assets/sweetalert2.all.min.js"></script>
<script src="assets/sweetalert2.js"></script>
<script src="assets/sweetalert2.min.js"></script>


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
            <li class="nav-item"><a class="nav-link active" href="teacher_attendancemenu.php"><i class="fas fa-table"></i><span>Attendance</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="teacher_announcement.php"><i class="fas fa-user-circle"></i><span>Announcement</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="teacher_activity.php"><i class="fas fa-user-circle"></i><span>Activity</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="teacher_assessment.php"><i class="fas fa-user-circle"></i><span>Assessment</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="teacher_salary.php"><i class="fas fa-user-circle"></i><span>Salary</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn border-0 rounded-circle" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>

                    <ul class="navbar-nav flex-nowrap ms-auto">
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
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--START TEMPLATE-->
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            <div>
             <form method="post" action="teacher_att_process.php">

                <div class="container" id="info-container"><div class="row"><div class="col-md-12">
                <h2 class="text-center text-info">Teacher Attendance</h2>
                </div><div class="col-xxl-3"><div></div></div><div class="col-12 col-sm-12 col-md-12 col-xxl-6 site-form">

                <div class="form-group mb-3"><label class="form-label form-label" >Date attendance</label>
                <input class="form-control form-control" type="date" name="attdate" readonly = ""
                value="<?php 
                date_default_timezone_set('Asia/Kuala_Lumpur');
                echo date('Y-m-d'); ?>"></div>

                <br>
                
                <div class="form-group mb-3"><label class="form-label form-label" >Select Attendance</label>
                <select class="form-select" name="attcat">
                        <option value="1" selected>Present</option>
                        <option value="0">Absent</option>
                </select></div>
                
                <br>
            
                <div class="form-group mb-3"><textarea name="reason" id="" class="form-control" placeholder="Reason absence (optional)" cols="20" rows="5"></textarea></div>
                    
                <div class="col-md-3 mr-auto"><input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Update"></div>
                    
                        </div>
                    </div>
                </div>

            </form>
           </div>
            <!--END TEMPLATE-->
        </div>
        <?php include 'footersecond.php' ?>
    </div><a class="d-inline border rounded scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>

<script>
    window.onload = function()
    {
        var error = "<?php echo $_GET['error']; ?>";
        if(error)
        {
            alert(error);
        }
    }
    document.writeln()
</script>
<script src="assets/js/theme.js"></script>

</body>


