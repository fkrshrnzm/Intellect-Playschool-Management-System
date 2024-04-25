<?php include 'dbconnect.php';
 $acc_ID = $_SESSION['acc_ID'];
?>
<?php include 'headerparent.php' ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.php">
                <div class="sidebar-brand-icon "><img src="img/lLogo.png" style="width: 30px; height: 50px;"></div>
                <div class="sidebar-brand-text mx-1"><img src="img/rLogo.png" style="width: 70px; height: 50px;"></div>

            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link active" href="parent_main.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>

                <li class="nav-item"><a class="nav-link" href="parent_attendance.php"><i class="fas fa-table"></i><span>Attendance</span></a></li>
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
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0"> <?php echo "Welcome back,  " .$_SESSION['firstName']. "   " .$_SESSION['lastName']; ?></h3>
                </div>

                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-start-primary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <?php
                                        $sqlstudent = mysqli_query($con, "SELECT * FROM student WHERE acc_ID = '$acc_ID'");
                                        $totals = mysqli_fetch_array($sqlstudent);
                                        $counts = mysqli_num_rows($sqlstudent);
                                        ?>
                                        <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Student </span></div>
                                        <div class="text-dark fw-bold h5 mb-0"><span> <?php echo $counts ?> Student(s)</span></div>
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
                                        $sql= "SELECT SUM(fee_Outstanding) AS outs FROM student_fee 
                                                    JOIN student s on student_fee.s_ID = s.s_ID
                                                    JOIN parent p on s.acc_ID = p.acc_ID
                                                    WHERE p.acc_ID = '$acc_ID '";
                                        $result = mysqli_query($con, $sql);
                                        $outs = mysqli_fetch_array($result);
                                        ?>
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Total Outstanding</span></div>
                                        <div class="text-dark fw-bold h5 mb-0"><span><?php echo "RM "; echo $outs['outs']?></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-start-info py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <?php
                                        $sqlp = "SELECT SUM(fee_Debit) AS debit,SUM(fee_Credit) AS credit FROM student_fee JOIN student s on s.s_ID = student_fee.s_ID WHERE acc_ID='$acc_ID'";
                                        $resultp = mysqli_query($con, $sqlp);
                                        $rowp = mysqli_fetch_array($resultp);
                                        $paymentProgress = ($rowp['credit']/$rowp['debit'])*100;
                                        $paymentProgress = number_format((float)$paymentProgress,0,'.','');
                                        //                                                echo "Debit: " .$rowp['debit'];
                                        //                                                echo "Credit: " .$rowp['credit'];

                                        ?>
                                        <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Payment Progress</span></div>
                                        <div class="row g-0 align-items-center">
                                            <div class="col-auto">
                                                <div class="text-dark fw-bold h5 mb-0 me-3"><span><?php echo $paymentProgress;?>%</span></div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-info" aria-valuenow="<?php echo $paymentProgress;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $paymentProgress;?>%"><span class="visually-hidden">50%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $sqls = "SELECT * FROM student_fee_pdf JOIN student_fee sf on sf.fee_ID = student_fee_pdf.fee_ID JOIN student s on s.s_ID = sf.s_ID WHERE acc_ID='$acc_ID' AND fee_PaymentStatus=0";
                    $results = mysqli_query($con, $sqls);
                    $rows = mysqli_fetch_array($results);
                    $countpending = mysqli_num_rows($results);

                    ?>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-start-warning py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>Payment Status</span></div>
                                        <div class="text-dark fw-bold h5 mb-0"><span><?php echo $countpending; ?> Pending</span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <!--                        <div class="card shadow border-start-warning py-2">-->
                        <!--                            <div class="card-body">-->
                        <!--                                <div class="row align-items-center no-gutters">-->
                        <!--                                    <div class="col me-2">-->
                        <!--                                        <div class="text-uppercase fw-bold text-warning text-xs mb-1"><span>Pending Requests</span></div>-->
                        <!--                                        <div class="fw-bold text-dark h5 mb-0"><span>18</span></div>-->
                        <!--                                    </div>-->
                        <!--                                    <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                    </div>
                </div>
                <div class="row">
                    <!--                ANNOUNCEMENT-->
                    <div class="container py-4 py-xl-5">
                        <div class="row mb-5">
                            <div class="col-md-8 col-xl-6 text-center mx-auto">
                                <h2>Announcement</h2>
                                <p class="w-lg-50">Get our latest Announcement. We provide students with Amazing Education</p>
                            </div>
                        </div>
                        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                            <?php
                            $sql = "SELECT * FROM announcement
                            LEFT JOIN announcement_type_desc ON announcement.announce_Type = announcement_type_desc.announce_Type
                            LEFT JOIN announcement_category_desc ON announcement.announce_Category = announcement_category_desc.announce_Category";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_array($result))
                            {
                                $datetime = new DateTime($row['announce_Time']);

                                if(($row["announce_Type"] == '1') && ($row["announce_Category"] == '0' || $row["announce_Category"] == '2'))
                                {
                                    echo '<div class="col">';
                                    echo"<div class='card'><img class='card-img-top w-100 d-block card-img-top w-100 fit-cover' style='height:200px;'' src='img/announcement/".$row['announce_Media']."'>";
                                    echo'<div class="card-body p-4">';
                                    echo'<h4 class="card-title" style="max-height: 150px; overflow:hidden;">'.$row["announce_Title"].'</h4>';
                                    echo'<p class="text-primary card-text mb-0">'.$datetime->format('g:i A').'</p>';
                                    echo'<p class="text-primary card-text mb-0">Start Event: '.$row["announce_Start"].'</p>';
                                    echo'<p class="text-primary card-text mb-0">End Event: '.$row["announce_End"].'</p>';

                                    echo'<p class="card-text" style="word-wrap: break-word">'.$row["announce_Desc"].'</p>';
                                    echo'<div class="d-flex">
                                            <div>';
                                    echo'<p class="fw-bold mb-0"></p>'; /* RETRIEVE VALUE TEACHER NAME */
                                    echo'</div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <!--                ANNOUNCEMENT-->
                    <!--                ACTIVITY-->
                    <div id="ACT" class="container-fluid" style="padding-top: 30px;padding-bottom: 30px;">
                        <div class="intro">
                            <h1>Fun Activities Every Friday!</h1>
                        </div>
                        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                                <?php

                                $sql = "SELECT * FROM announcement
                            LEFT JOIN announcement_type_desc ON announcement.announce_Type = announcement_type_desc.announce_Type
                            LEFT JOIN announcement_category_desc ON announcement.announce_Category = announcement_category_desc.announce_Category";

                                $result = mysqli_query($con, $sql);
                                while($row = mysqli_fetch_array($result))
                                {
                                    $datetime = new DateTime($row['announce_Time']);

                                    if(($row["announce_Type"] == '2') && ($row["announce_Category"] == '0'  || $row["announce_Category"] == '2' ))
                                    {
                                        echo '<div class="col">';
                                        echo"<div class='card' style='min-height: 500px'><img id='cmedia".$row['announce_Media']." class='card-img-top w-100 d-block card-img-top w-100 fit-cover' style='height:200px;'' src='img/announcement/".$row['announce_Media']."'>";
                                        echo'<div class="card-body p-4">';
                                        echo'<h4 id="cTitle'.$row['announce_Title'].'" class="card-title" style="max-height: 150px; overflow:hidden;">'.$row["announce_Title"].'</h4>';
                                        echo'<p id="ctime'.$row['announce_Time'].'" class="text-primary card-text mb-0">'.$datetime->format('g:i A').'</p>';
                                        echo'<p id="sdate'.$row['announce_Start'].'" class="text-primary card-text mb-0">Start Event: '.$row["announce_Start"].'</p>';
                                        echo'<p id="edate'.$row['announce_End'].'" class="text-primary card-text mb-0">End Event: '.$row["announce_End"].'</p>';
                                        echo'<p id="cdesc'.$row['announce_Desc'].'" class="card-text" style="word-wrap: break-word; min-height: 3.5em; text-overflow: ellipsis; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; line-clamp: 3; -webkit-box-orient: vertical;">'.$row["announce_Desc"].'</p>';
                                        echo'<div class="d-flex"><div>';
                                        echo'<p class="fw-bold mb-0"></p>'; /* RETRIEVE VALUE TEACHER NAME */
                                        echo'</div>';
                                        echo'<form>';
                                        echo'<fieldset>
                                                    <input type="hidden" name="cid" value="'.$row['announce_ID'].'">
                                            </fieldset>';
                                        echo'<div style="text-align: right;">';
                                        echo '<button style="margin-right: 10px; " class="btn btn-danger" type="button" onclick="location.href=\'deleteactivity.php?aa_id='.$row['announce_ID'].'\'">Delete</button>';
                                        echo '<button style="margin-right: 10px; " class="btn btn-warning" value="Submit" type="button" onclick="location.href=\'modifyactivity.php?aa_id='.$row['announce_ID'].'\'">Modify</button>';
                                        echo'</div>';
                                        echo'</form>';
                                        echo'</div>';
                                        echo'</div>';
                                        echo'</div>';
                                        echo'</div>';
                                    }
                                }
                                ?>
                        </div>
                    <!--ACTIVITY-->

                </div>
<!--                <div class="row">-->
<!--                    <div class="col-lg-6 mb-4">-->
<!--                        <div class="card shadow mb-4">-->
<!--                            <div class="card-header py-3">-->
<!--                                <!--                                ANNOUNCEMENT-->-->
<!--                                <h6 class="fw-bold text-primary m-0">Upcoming event</h6>-->
<!--                            </div>-->
<!--                            <ul class="list-group list-group-flush list-group-flush">-->
<!--                                <li class="list-group-item">-->
<!--                                    <div class="row align-items-center no-gutters">-->
<!--                                        <div class="col me-2">-->
<!--                                            <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">10:30 AM</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-auto">-->
<!--                                            <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-1"><label class="form-label form-check-label" for="formCheck-1"></label></div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="list-group-item">-->
<!--                                    <div class="row align-items-center no-gutters">-->
<!--                                        <div class="col me-2">-->
<!--                                            <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">11:30 AM</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-auto">-->
<!--                                            <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-2"><label class="form-label form-check-label" for="formCheck-2"></label></div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="list-group-item">-->
<!--                                    <div class="row align-items-center no-gutters">-->
<!--                                        <div class="col me-2">-->
<!--                                            <h6 class="mb-0"><strong>Lunch meeting</strong></h6><span class="text-xs">12:30 AM</span>-->
<!--                                        </div>-->
<!--                                        <div class="col-auto">-->
<!--                                            <div class="form-check"><input type="checkbox" class="form-check-input" id="formCheck-3"><label class="form-label form-check-label" for="formCheck-3"></label></div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col">-->
<!--                        <div class="row">-->
<!--                            <div class="col-lg-6 mb-4">-->
<!--                                <div class="card text-white bg-primary shadow">-->
<!--                                    <div class="card-body">-->
<!--                                        <p class="m-0">Primary</p>-->
<!--                                        <p class="text-white-50 small m-0">#4e73df</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6 mb-4">-->
<!--                                <div class="card text-white bg-success shadow">-->
<!--                                    <div class="card-body">-->
<!--                                        <p class="m-0">Success</p>-->
<!--                                        <p class="text-white-50 small m-0">#1cc88a</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6 mb-4">-->
<!--                                <div class="card text-white bg-info shadow">-->
<!--                                    <div class="card-body">-->
<!--                                        <p class="m-0">Info</p>-->
<!--                                        <p class="text-white-50 small m-0">#36b9cc</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6 mb-4">-->
<!--                                <div class="card text-white bg-warning shadow">-->
<!--                                    <div class="card-body">-->
<!--                                        <p class="m-0">Warning</p>-->
<!--                                        <p class="text-white-50 small m-0">#f6c23e</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6 mb-4">-->
<!--                                <div class="card text-white bg-danger shadow">-->
<!--                                    <div class="card-body">-->
<!--                                        <p class="m-0">Danger</p>-->
<!--                                        <p class="text-white-50 small m-0">#e74a3b</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6 mb-4">-->
<!--                                <div class="card text-white bg-secondary shadow">-->
<!--                                    <div class="card-body">-->
<!--                                        <p class="m-0">Secondary</p>-->
<!--                                        <p class="text-white-50 small m-0">#858796</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                </div>
            </div>
        </div>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/theme.js"></script>
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
</body>

<?php include 'footersecond.php' ?>

