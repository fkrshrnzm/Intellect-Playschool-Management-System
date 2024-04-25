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
<!--                <li class="nav-item"><a class="nav-link" href="parent_profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li>-->
                <li class="nav-item"><a class="nav-link active" href="parent_attendance.php"><i class="fas fa-table"></i><span>Attendance</span></a></li>
<!--                <li class="nav-item"><a class="nav-link" href="parent_assessment.php"><i class="far fa-user-circle"></i><span>Assessment</span></a></li>-->
                <li class="nav-item"><a class="nav-link" href="financial(Parent).php"><i class="fas fa-user-circle"></i><span>Payment</span></a></li>
                <li class="nav-item"><a class="nav-link" href="student_register.php"><i class="fas fa-user-circle"></i><span>Register child</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <!--                    <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">-->
                    <!--                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>-->
                    <!--                    </form>-->
                    <ul class="navbar-nav flex-nowrap ms-auto">
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
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
                <!--START TEMPLATE-->
                
                <div class="container"><div class="row"><div class="col-md-12"><h2 class="text-center text-info">Update RTK-Covid Test Menu</h2> <br></div></div><div class="row"><div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div><div class="col-auto col-xl-6 col-xxl-7"><div class="card"><div class="card-body border rounded shadow-lg">
                <form method="POST" action="student_RTK_process.php" enctype="multipart/form-data">

                <?php
                        $acc_ID = $_SESSION['acc_ID'];

                        $sql="SELECT * FROM student WHERE acc_ID = $acc_ID";
                        $res = mysqli_query($con,$sql);
    
                        
                        echo '<div class="form-group mb-3"><label class="form-label form-label" for="student" >Select Student</label><select class = "form-select" name="s_ID"> ';
                            while($row= mysqli_fetch_array($res)){
                                echo "<option value=".$row['s_ID'].">" . $row['fName'] ." ". $row['lName']."</option>";
                            }
                            echo '</select></div>';
                
                ?>
                    
                <div class="form-group mb-3"><label class="form-label form-label" >Date tested</label>
                <input class="form-control form-control" type="date" name="attdate" readonly = ""
                value="<?php 
                date_default_timezone_set('Asia/Kuala_Lumpur');
                echo date('Y-m-d'); ?>"></div>
                        
                    <div class="form-group mb-3"><label class="form-label form-label form-label form-label">RTK Status</label><select class="form-select" name="rtkstatus">
                                <option value="0" selected>Negative</option>
                                <option value="1">Positive</option>
                            </select></div>
                        
                    <fieldset>
                        <div class="form-group">
                        <label class="form-label">Upload RTK Test Evidence</label>
                        <input type="file" class="form-control" name="rtkmedia" id="my_media" required>
                        <br>
                        <input type="submit" name="submit" value="Submit" class="btn btn-block btn-primary text-white py-3 px-5">
                        </div>
                    </fieldset>
            </form>
                </div></div></div>
                
                <div class="col-auto col-md-10 col-lg-4 col-xxl-3"><div class="card"><div class="card-body border rounded shadow mt-xxl-0" style="padding-bottom: 15px;padding-left: 15px;padding-top: 15px;padding-right: 15px;"><h5 class="card-title">Steps</h5><p class="fw-bold text-danger card-text">1. Parents must update the students RTK test every once a week<br><br>2. If the student have tested positive in the following week, parents must change the status to positive</p></div></div></div></div></div></div></div></div>
                
                <!--END TEMPLATE-->
                </div>
            </div>
        </div>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/theme.js"></script>

</body>

<?php include 'footersecond.php' ?>

