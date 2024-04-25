<?php 
include ('dbconnect.php');
include 'headerstaff.php'; 

$acad_Prog = $_POST['program'];
$s_ID = $_POST['student'];

if($acad_Prog == 1){
    $sqlle = "SELECT * FROM academic_le                                                    
        WHERE s_ID='$s_ID'";
    $resultle = mysqli_query($con,$sqlle);

    // $sqlINT = "SELECT * FROM academic_le
    //         JOIN academic_le_intelligent ON academic_le.acad_ID = academic_le_intelligent.acad_ID
    //         WHERE s_ID='$s_ID'";
    // $resultINT = mysqli_query($con,$sqlINT);



}
else{
    $sqlfk = "SELECT * FROM academic_fk
        WHERE s_ID='$s_ID'";
$resultfk = mysqli_query($con,$sqlfk);

}


?>


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
                <li class="nav-item"><a class="nav-link active" href="teacher_assessment.php"><i class="fas fa-user-circle"></i><span>Assessment</span></a></li>
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
                                </div>
                        </li>
                    </ul>
                </div>

            </nav>
            <div class="container-fluid">
            <div class="d-sm-flex justify-content-between align-items-center mb-4"><h3 class="text-dark mb-0">Academic</h3></div>
            
            <div class="row"><div class="col-lg-7 col-xl-8"><div class="card shadow mb-4">
                <div class="card-body">
                <div class="container">
                    
                <br><h3>The Student's Assessment List</h3>
                <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Academic ID</th>
                    <th scope="col">Assessment Date</th>
                    <th scope="col">Assessment Status</th>
                    <th scope="col">Operation</th>
                </tr>
                </thead>
                <tbody>

                <?php
                
                if($acad_Prog == 1){
                    while($row=mysqli_fetch_array($resultle)){
                        echo '<tr>';
                        echo "<td>".$row['s_ID']."</td>";
                        echo "<td>".$row['acad_ID']."</td>";
                        echo "<td>".$row['acad_commDate']."</td>";
                        echo "<td>".$row['acad_CommStat']."</td>";
                        echo "<td>";
                        echo "<a href='viewassessmentleprocess.php?id=".$row['acad_ID']."' class='btn btn-warning'>View</a>";
                        echo "</td>";
                        echo '</tr>';
                    }
                    
                }
                else{
                    while($row=mysqli_fetch_array($resultfk)){
                        echo '<tr>';
                        echo "<td>".$row['s_ID']."</td>";
                        echo "<td>".$row['acad_ID']."</td>";
                        echo "<td>".$row['acad_CommDate']."</td>";
                        echo "<td>".$row['acad_CommStat']."</td>";
                        echo "<td>";
                        echo "<a href='viewassessmentfkprocess.php?id=".$row['acad_ID']."' class='btn btn-warning'>View</a>";
                        echo "</td>";
                        echo '</tr>';
                    }
                }


?>
                </tbody>
                
                </div>
          

    </div></div></div>
    


</div>

                </div>
            </div>
        </div>
        
    </div><a class="d-inline border rounded scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
</body>
</div>
<?php include 'footersecond.php' ?>
