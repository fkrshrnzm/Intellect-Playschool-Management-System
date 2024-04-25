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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <div class="container-fluid"><div class="col-md-12">
                <h2 class="text-center text-info">Update Student Attendance</h2>
                </div></div><div><section class="mt-4"><div class="container-fluid"><div class="row"><div class="col-xxl-1"></div><div class="col-xxl-6"><div class="card shadow"><div class="card-header py-2">
                <p class="lead text-info m-0">WEEK: [
                
                <?php 
                
                //THIS CODE TELLS WEEKDAYS ONLY ON THAT WEEK
                date_default_timezone_set('Asia/Kuala_Lumpur'); 
                
                $date = new DateTime();
                $weekStart = clone $date;
                $weekStart->modify(('Saturday' == $weekStart->format('l')) ? 'Monday next week' : (('Sunday' == $weekStart->format('l')) ? 'Monday next week' : 'Monday this week'));
                $weekEnd = clone $weekStart;
                $weekEnd->modify('next friday');

                echo " " . $weekStart->format('d-m-Y') . " until " . $weekEnd->format('d-m-Y')." " ; ?>

                ]<br /></p></div>
                <div class="card-body">
            <form method="POST" action="student_att_process.php">
                    
                        <?php
                        $acc_ID = $_SESSION['acc_ID'];

                        $sql="SELECT * FROM student WHERE acc_ID = $acc_ID";
                        $res = mysqli_query($con,$sql);
    
                        
                        echo '<div class="form-group mb-3"><label class="form-label form-label" for="student" >Select Student</label><select class = "form-select" name="s_ID" multiple>';
                            while($row= mysqli_fetch_array($res)){
                                echo "<option value=".$row['s_ID'].">" . $row['fName'] ." ". $row['lName']."</option>";
                            }
                            echo '</select></div>';

                            //THIS CODE TELLS WEEKDAYS ONLY ON THAT WEEK
                            date_default_timezone_set('Asia/Kuala_Lumpur'); 
                            $weekday = date('d-m-Y');

                            $date = new DateTime();
                            $weekStart = clone $date;
                            $weekStart->modify(('Saturday' == $weekStart->format('l')) ? 'Monday next week' : (('Sunday' == $weekStart->format('l')) ? 'Monday next week' : 'Monday this week'));
                            $weekEnd = clone $weekStart;
                            $weekEnd->modify('next friday');
                            
                            echo '<div class="form-group mb-3"><label class="form-label form-label" >Select Only Absence Date</label><select class = "form-select" name="attdate" multiple>';
                            for ($i = clone $weekStart; $i <= $weekEnd; $i->modify('+1 day')) {
                                if($i->format('d-m-Y') != 'Saturday' && $i->format('d-m-Y') != 'Sunday'){
                                echo "<option value=" . $i->format('Y-m-d') . ">" . $i->format('d-m-Y') . ", " . $i->format('l') . "</option>";
                                }
                            }
                            echo '</select></div>';
                        
                        ?>
                    
                    
                    <div class="form-group mb-3"><label class="form-label" for="disabledInput">Attendance Type</label>
                    <input class="form-control" id="disabledInput" type="text" placeholder="Absent" disabled=""></div>
                    <input type="hidden" name="attcat" value="0">
                    
                    <div class="form-group mb-3"><textarea name="reason" class="form-control" placeholder="Reason absence (optional)" rows="5"></textarea></div>
                
                    <div class="col-md-3 mr-auto"><input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Submit"></div>    


                </form>

                </div><a class="btn btn-primary btn-sm text-truncate shadow-none float-end tenant-continue-btn" role="button" data-bss-hover-animate="pulse" href="student_attendance_view.php" style="height: 51px;margin: 6px;padding: 11px 8px;">View Student Attendance &nbsp;<i class="fas fa-clipboard-list continue-icon"></i></a></div></div><div class="col-xxl-4"><div class="card"><div class="card-body border rounded shadow mt-xxl-0" style="padding-bottom: 15px;padding-left: 15px;padding-top: 15px;padding-right: 15px;"><h5 class="card-title">Rules And Regulation</h5><p class="fw-bold text-danger card-text">1. Parents must update <span style="text-decoration: underline;">ONLY the absence date</span> every once a week<br><br>2. If multiple days absence, parents can re-submit a new absence date by ENTER THE SUBMIT BUTTON .<br><br>3. Once finished submit, parents can&nbsp;&nbsp;<br><strong>PUSH BUTTON&nbsp;VIEW STUDENT ABSENCE.</strong><br><br>4. If the student expected to come every day on that week, parents don't have to fill anything.&nbsp;<strong>PUSH BUTTON VIEW STUDENT ABSENCE</strong><br><br></p></div></div></div></div></div></section></div></div><footer class="bg-white sticky-footer"><div class="container my-auto">

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

