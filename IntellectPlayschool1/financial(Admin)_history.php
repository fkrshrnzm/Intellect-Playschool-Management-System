<?php 
    include('dbconnect.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Financial - Admin_History</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">

    <script type="text/javascript" src="assets/js/javascript.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>

<body><body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <!--  LEFT SIDEBAR  -->
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Brand</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="admin_main.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="admin_profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="admin_attendance.php"><i class="fas fa-table"></i><span>Attendance</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="admin_announcement.php"><i class="far fa-user-circle"></i><span>Announcement</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="admin_activity.php"><i class="far fa-user-circle"></i><span>Activity</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="admin_assessment.php"><i class="fas fa-user-circle"></i><span>Assessment</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="financial(Admin)menu.php"><i class="fas fa-user-circle"></i><span>Financial</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="admin_pending.php"><i class="fas fa-user-circle"></i><span>Pending request</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <!--  TOP BAR  -->
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Hi &ltDisplay Username&gt<User%></h3>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary fw-bold m-0">Student Selection</h6>
                                </div>
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <div class="form-group" style="display: flex; align-items: center;">
                                        <span style="font-weight: 700;">ID:</span>
                                        <select id="student" name="s_ID" class="form-select" onchange="selectFee()" style="display: inline-block; margin-left: 10px; height: 40px; min-height: 40px; min-width: 300px;">
                                            <option hidden disabled selected value> -- select an option -- </option>
                                            <?php
                                                $sql = "SELECT s_ID FROM student";
                                                $result = mysqli_query($con, $sql);
                                                while($row = mysqli_fetch_array($result)) {
                                                    echo "<option value='" . $row['s_ID'] . "'>" . $row['s_ID'] . "</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary fw-bold m-0">Category Selection</h6>
                                </div>
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <div class="form-group" style="display: flex; align-items: center;">
                                        <span style="font-weight: 700;">Category:</span>
                                        <select id="fee_Category" name="fee_Category" class="form-select" style="display: inline-block; margin-left: 10px; height: 40px; min-height: 40px; min-width: 300px;">
                                            <option hidden disabled selected value> -- select an option -- </option>
                                            <?php 
                                                $sql = "SELECT fee_CategoryDesc FROM student_fee_category_desc";
                                                $result = mysqli_query($con, $sql);
                                                while($row = mysqli_fetch_array($result)) {
                                                    echo"<option value = '".$row['fee_Category']."'>".$row['fee_CategoryDesc']."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary fw-bold m-0">Program Selection</h6>
                                </div>
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <div class="form-group" style="display: flex; align-items: center;">
                                        <span style="font-weight: 700;">Program:</span>
                                        <select id="fee_Program" name="fee_Program" class="form-select" style="display: inline-block; margin-left: 10px; height: 40px; min-height: 40px; min-width: 300px;">
                                            <option hidden disabled selected value> -- select an option -- </option>
                                            <?php 
                                                $sql = "SELECT description FROM academic_prog_desc";
                                                $result = mysqli_query($con, $sql);
                                                while($row = mysqli_fetch_array($result)) {
                                                    echo"<option value = '".$row['acad_Prog']."'>".$row['description']."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary fw-bold m-0">Session Selection</h6>
                                </div>
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <div class="form-group" style="display: flex; align-items: center;">
                                        <span style="font-weight: 700;">Session:</span>
                                        <select id="fee_Session" name="fee_Session" class="form-select" style="display: inline-block; margin-left: 10px; height: 40px; min-height: 40px; min-width: 300px;">
                                            <option hidden disabled selected value> -- select an option -- </option>
                                            <?php 
                                                $sql = "SELECT session_Desc FROM student_session_desc";
                                                $result = mysqli_query($con, $sql);
                                                while($row = mysqli_fetch_array($result)) {
                                                    echo"<option value = '".$row['prog_Session']."'>".$row['session_Desc']."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12" style="overflow-x: auto;">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary fw-bold m-0">Created Fees</h6>
                                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                        <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Academic Year</th>
                                                    <th>Category</th>
                                                    <th>Programme</th>
                                                    <th>Class Session</th>
                                                    <th>Status</th>
                                                    <th>Debit (RM)</th>
                                                    <th>Credit (RM)</th>
                                                    <th>Outstanding (RM)</th>
                                                    <th>Payment History</th>
                                                    <th>Operation</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableStudentFee">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary fw-bold m-0">Payment History</h6>
                                </div>
                                <div class="card-body">
                                    <div style="overflow-x:auto;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Reference No.</th>
                                                    <th>Amount (RM)</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Status</th>
                                                    <th>Slip</th>
                                                    <th>Operation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $no = 1;
                                                $sql = "SELECT * FROM student_fee_pdf
                                                        LEFT JOIN student_fee_payment_status_desc ON student_fee_pdf.fee_PaymentStatus = student_fee_payment_status_desc.fee_PayStatus";
                                                $query = mysqli_query($con,$sql);
                                                while ($data=mysqli_fetch_array($query)) {
                                                $viewpdf="viewPDF.php?fee_ID=".$data['fee_ID'];
                                                $deletepdf="deletePDF.php?fee_ID=".$data['fee_ID'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $data['fee_ReferenceNo'];?></td>
                                                    <td><?php echo $data['fee_Amount'];?></td>
                                                    <td><?php echo date("j F Y", strtotime($data['fee_PayDate']));?></td>
                                                    <td><?php echo date("H:i:s", strtotime($data['fee_PayDate']));?></td>
                                                    <td><?php echo $data['fee_PayStatusDesc'];?></td>
                                                    <td><button class="btn btn-link btn-sm"><a href="<?php echo $viewpdf;?>" onclick="window.open('<?php echo $viewpdf;?>', '_blank', 'toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=315,width=900,height=700'); return false;">View PDF</a></button></td>
                                                    <td><?php echo "<a href = 'financial(Admin)_payment_approval.php? id=".$data['fee_ReferenceNo']."' class='btn btn-warning'>Approval</a> &nbsp";?></td>
                                                </tr>
                                                <?php
                                                    $no++;
                                                }?>           
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
</body>

</html>