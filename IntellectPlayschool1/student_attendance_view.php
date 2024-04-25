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
            <div class="container-fluid">
                    <h3 class="text-dark mb-1">Student Attendance</h3>
            </div>
            <div>
                <section class="mt-4"><div class="container-fluid">
                        <div class="row"><div class="col">
                                <div class="card shadow">
                                    <div class="card-header py-2">
                                        <p class="lead text-info m-0">Student Absence Date List<br></p>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive table mb-0 pt-3 pe-2">
                                            <div>
                                                    <table class="table table-striped table-sm my-0 mydatatable">
                                                        <thead>
                                                            <tr>
                                                                <th>Student Name</th>
                                                                <th>Absence Date</th>
                                                                <th>Reasoning</th>
                                                                <th>Change Present</th>
                                                            </tr>
                                                        </thead>
                                                    <tbody>
                                                        <?php
                                                            $acc_ID = $_SESSION['acc_ID'];

                                                            $query = "SELECT student.fName,student.mName,student.lName, attendance.att_Date, attendance.att_Type, attendance.att_Reason, attendance.s_ID FROM student
                                                            JOIN attendance ON student.s_ID = attendance.s_ID
                                                            WHERE student.acc_id = $acc_ID AND att_Type = 0
                                                            ORDER BY att_Date Desc"; //only from the same parent
                                                            $result = mysqli_query($con, $query);
                                                            while ($row = mysqli_fetch_array($result)) {
                                                                $tarikh = $row['att_Date'];
                                                                $newDate = date("l, d F Y", strtotime($tarikh));

                                                                echo "<tr>";
                                                                    echo "<td>".$row['fName']." ".$row['mName']." ".$row['lName']."</td>";
                                                                echo "<td>" . $newDate . "</td>";
                                                                echo "<td>" . $row['att_Reason'] ."</td>";

                                                                    echo '<td> <form method="POST" action="update_data.php"  onsubmit="return confirm(\'Are you sure you want to change the status to Present?\');">
                                                                    <input type="hidden" name="s_ID" value='.$row['s_ID'].'>
                                                                    <input type="hidden" name="date" value='.$row['att_Date'].'>
                                                                    <input class="btn btn-danger" data-bss-hover-animate="pulse" style="margin-left:5px;" type="submit" value="Present" />
                                                                    </form> </td>';
                                                                echo "</tr>";
                                                            }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div><br>
                                        </div><br>
                                    </div><a class="btn btn-primary btn-sm text-truncate shadow-none float-end tenant-continue-btn" role="button" href="parent_attendance.php" style="height: 51px;margin: 6px;padding: 11px 8px;">Attendance Menu  &nbsp;<i class="fas fa-home continue-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

                <!--END TEMPLATE-->

</div>
<a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/theme.js"></script>

</body>
<?php include 'footersecond.php' ?>

