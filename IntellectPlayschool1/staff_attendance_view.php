<?php
include 'dbconnect.php';
include 'headerstaff.php';?>

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
        <div class="container-fluid"><h3 class="text-dark mb-1">Teacher attendance</h3></div>
        <div><section class="mt-4">
        <div class="container-fluid">
            <div class="row"><div class="col"><div class="card shadow">
            <div class="card-header py-2"><p class="lead text-info m-0">Teacher Absence Date&nbsp;<br></p></div>
            <div class="card-body"><div class="table-responsive table mb-0 pt-3 pe-2"><div>
            <table class="table table-striped table-sm my-0 mydatatable">
                
            <thead>
                <tr>
                    <th>Absence Date</th>
                    <th>Reason Absence</th>
                    <th>Action</th>
                </tr>
            </thead>
                
            <tbody>
        
            <?php
            $acc_ID = $_SESSION['acc_ID'];
            date_default_timezone_set('Asia/Kuala_Lumpur');
            $current_date = date("Y-m-d");

            //connect to database
            include("dbconnect.php");

            //query to select all son from the database
            $query = "SELECT * FROM attendance WHERE acc_ID = $acc_ID AND att_Type = 0 ORDER BY att_Date DESC" ;
            $result = mysqli_query($con, $query);

            //loop through the result and create a new row for each son
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>"; //time history before
                if (strtotime($row['att_Date']) < strtotime($current_date)) {

                    $tarikh = $row['att_Date'];
                    $newDate = date("l, d F Y", strtotime($tarikh));

                    echo "<td>" . $newDate ."</td>";
                    echo "<td>" . $row['att_Reason'] ."</td>";
                    echo '<td><button class="btn btn-danger disabled" style="margin-left:5px;" type="submit" ><i class="far fa-edit" style="font-size:15px;"></i></button><div class="btn-group" role="group"></div></td>';
                } elseif (strtotime($row['att_Date']) > strtotime($current_date)) {// time lebih from current
                    $tarikh = $row['att_Date'];
                    $newDate = date("l, d F Y", strtotime($tarikh));
                    
                    echo "<td>" . $newDate ." unlogical </td>";
                    echo "<td>" . $row['att_Reason'] ."</td>";
                    echo '<td><button class="btn btn-danger disabled" style="margin-left:5px;" type="submit" ><i class="far fa-edit" style="font-size:15px;"></i></button><div class="btn-group" role="group"></div></td>';
                } else { //time same - can edit from see to unsee

                    $tarikh = $row['att_Date'];
                    $newDate = date("l, d F Y", strtotime($tarikh));

                    echo "<td>" . $newDate ."</td>";
                    echo "<td>" . $row['att_Reason'] ."</td>";
                    echo '<td><a class="btn btn-danger" style="margin-left:5px;" role="button" data-bss-hover-animate="pulse" href="teacher_attendance.php"><i class="far fa-edit" style="font-size:15px;"></i></a></td>';
                }
            }
            mysqli_close($con);
            ?>
            
            </tbody>
            </table></div><br></div>
            
            <a class="btn btn-primary btn-sm text-truncate shadow-none float-end tenant-continue-btn" role="button" href="teacher_attendancemenu.php" style="height: 51px;margin: 6px;padding: 11px 8px;">Attendance Menu &nbsp;<i class="fas fa-home continue-icon"></i></a>
            <!--END TEMPLATE-->
        </div>
    </div><a class="d-inline border rounded scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
                <script src="assets/js/theme.js"></script>

</body>

<?php include 'footersecond.php' ?>
