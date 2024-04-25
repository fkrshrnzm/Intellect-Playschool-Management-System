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
            <!--START TEMPLATE-->
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
            function validateForm() {
            if (confirm("Are you sure you want to confirm this attendance?")) {
                return true;
            } else {
                return false;
            }
            }
            </script>
            <div class="container-fluid">
                <h3 class="text-dark mb-1">Student Attendance List</h3>
            </div>
            <div><section class="mt-4"><div class="container-fluid"><div class="row"><div class="col"><div class="card shadow"><div class="card-header py-2"><p class="lead text-info m-0">Attendance:  
                <?php 
                $acc_ID = $_SESSION['acc_ID'];
                //THIS CODE TELLS WEEKDAYS ONLY ON THAT WEEK
                date_default_timezone_set('Asia/Kuala_Lumpur'); 
                
                $date = new DateTime();
                $weekStart = clone $date;
                $weekStart->modify(('Saturday' == $weekStart->format('l')) ? 'Monday next week' : (('Sunday' == $weekStart->format('l')) ? 'Monday next week' : 'Monday this week'));
                $weekEnd = clone $weekStart;
                $weekEnd->modify('next friday');

                echo date('M j, l') ; ?>

                <br></p></div>
            
    <div class="card-body"><div class="table-responsive table mb-0 pt-3 pe-2">
    <table class="table table-striped table-sm my-0 mydatatable table-hover">
                
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Attendance</th>
                        <th>Reason of absence</th>
                        <th>Confirmation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include("dbconnect.php");
                        $current_date = date("Y-m-d");
    
                        //query to select all students from the database
                        $query = "SELECT student.fName,student.mName,student.lName, attendance.att_Date, attendance.att_Type,  attendance.att_Reason, attendance.att_Confirmation, attendance.s_ID FROM student
                        JOIN attendance ON student.s_ID = attendance.s_ID
                        WHERE att_Confirmation = 0
                        ORDER BY fName ASC";
                        $result = mysqli_query($con, $query);
    
                        //loop through the result and create a new row for each student
                        while($row = mysqli_fetch_assoc($result)){
                            if (strtotime($row['att_Date']) < strtotime($current_date)) {//time history before
                            }elseif (strtotime($row['att_Date']) > strtotime($current_date)) {// time lebih from current
                            }else { //time same - can edit from see to unsee
                                echo "<tr>";
                                echo "<td>" . $row['fName'] . " " . $row['mName'] . " " . $row['lName'] . "</td>";
                                if ($row['att_Type'] == 0) {
                                    $jenis = "X";
                                }
                                else{
                                    $jenis = "/";
                                }
                                echo "<td>" . $jenis . "</td>";
                                echo "<td>" . $row['att_Reason'] . "</td>";
                                echo '<td> 
                                <input type="hidden" name="s_ID" value='.$row['s_ID'].'>
                                <input type="hidden" name="date" value='.$row['att_Date'].'>
                                <button type="button" class="btn btn-danger" onclick="confirmConfirm('.$row['s_ID'].',\''.date("Y-m-d", strtotime($row['att_Date'])).'\')"
                                >Confirm</button>
                                </td>';
                                    //code to check if the attendance date matches the current day in the loop
                                    //and display the corresponding data in the table
                                
                                echo "</tr>";
                            }
                        }
                        mysqli_close($con);
                    ?>
                </tbody>
            </table>
    </div></div></div></div></div></div>
    </section></div></div>
    
    <script>
              function confirmConfirm(s_ID, att_Date) {
                Swal.fire({
                  title: 'Are you sure?',
                  text: "Click OK",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'OK'
                }).then((result) => {
                  if (result.value) {
                    window.location.href = 'confirm_data.php?s_id=' + s_ID + '&att_Date=' + att_Date;
                  }
                });
                
              }
        </script>
        <!--END TEMPLATE-->
        </div>
    </div><a class="d-inline border rounded scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<script src="assets/js/theme.js"></script>

</body>

<?php include 'footersecond.php' ?>
