<?php 
    include('dbconnect.php');
$acc_ID = $_SESSION['acc_ID'];

$sql= "SELECT SUM(fee_Outstanding) AS outs FROM student_fee 
            JOIN student s on student_fee.s_ID = s.s_ID
            JOIN parent p on s.acc_ID = p.acc_ID
            WHERE p.acc_ID = '$acc_ID '";
$result = mysqli_query($con, $sql);
$outs = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Financial - Parent_History</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
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
                    <li class="nav-item"><a class="nav-link" href="parent_main.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
<!--                    <li class="nav-item"><a class="nav-link" href="parent_profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li>-->
                    <li class="nav-item"><a class="nav-link" href="parent_attendance.php"><i class="fas fa-table"></i><span>Attendance</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="parent_assessment.php"><i class="far fa-user-circle"></i><span>Assessment</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="financial(Parent).php"><i class="fas fa-user-circle"></i><span>Payment</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="student_register.php"><i class="fas fa-user-circle"></i><span>Register child</span></a></li>
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
                        <h3 class="text-dark mb-0"><?php echo "Hi " .$_SESSION['firstName']. "   " .$_SESSION['lastName']. "!" ?></h3>
                            <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Total Outstanding</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo "RM "; echo $outs['outs']?></span></div>
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
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Student</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>? Student(s)</span></div>
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
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Payment Progress</span></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span>50%</span></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">50%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>Payment Status</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>? Pending</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary fw-bold m-0">Financial Status Summary</h6>
                                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                        <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div style="overflow-x:auto;">
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
                                                    <th>Payment</th>
                                                    <th>Payment History</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $no = 1;
                                                $sql = "SELECT * FROM student_fee
                                                        LEFT JOIN student_session_desc ON student_fee.fee_Session = student_session_desc.prog_Session
                                                        LEFT JOIN student_fee_status_desc ON student_fee.fee_Status = student_fee_status_desc.fee_Status
                                                        LEFT JOIN academic_prog_desc ON student_fee.fee_Program = academic_prog_desc.acad_Prog
                                                        LEFT JOIN student_fee_category_desc ON student_fee.fee_Category = student_fee_category_desc.fee_Category
                                                        LEFT JOIN student ON student_fee.s_ID = student.s_ID";
                                                $query = mysqli_query($con,$sql);
                                                while ($data=mysqli_fetch_array($query)) {
                                                $viewhistory="financial(Parent)_history.php?fee_ID=".$data['fee_ID'];
                                                $payment="financial(Parent)_payment.php?fee_ID=".$data['fee_ID'];
                                                ?>
                                                <tr>
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo date("Y", strtotime($data['fee_Date']));?></td>
                                                    <td><?php echo $data['fee_CategoryDesc'];?></td>
                                                    <td><?php echo $data['description'];?></td>
                                                    <td><?php echo $data['session_Desc'];?></td>
                                                    <td><?php echo $data['fee_StatusDesc'];?></td>
                                                    <td><?php echo $data['fee_Debit'];?></td>
                                                    <td><?php echo $data['fee_Credit'];?></td>
                                                    <td><?php echo $data['fee_Outstanding'];?></td>
                                                    <td><button class="btn btn-outline-info btn-sm text-black-50"><a href="<?php echo $payment;?>" style="text-decoration: none;">Pay Now</a></button></td>
                                                    <td><button class="btn btn-outline-info btn-sm text-black-50"><a href="<?php echo $viewhistory;?>" style="text-decoration: none;">View History</a></button></td>
                                                </tr>
                                                <?php
                                                    $no++;
                                                }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $no = 1;
                                                $sql = "SELECT * FROM student_fee_pdf
                                                        LEFT JOIN student_fee_payment_status_desc ON student_fee_pdf.fee_PaymentStatus = student_fee_payment_status_desc.fee_PayStatus";
                                                $query = mysqli_query($con,$sql);
                                                while ($data=mysqli_fetch_array($query)) {
                                                $viewpdf="viewPDF.php?fee_ReferenceNo=".$data['fee_ReferenceNo'];
                                                $deletepdf="deletePDF.php?fee_ReferenceNo=".$data['fee_ReferenceNo'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $data['fee_ReferenceNo'];?></td>
                                                    <td><?php echo $data['fee_Amount'];?></td>
                                                    <td><?php echo date("j F Y", strtotime($data['fee_PayDate']));?></td>
                                                    <td><?php echo date("H:i:s", strtotime($data['fee_PayDate']));?></td>
                                                    <td><?php echo $data['fee_PayStatusDesc'];?></td>
                                                    <td><button class="btn btn-outline-info btn-sm text-black-50"><a href="<?php echo $viewpdf;?>" style="text-decoration: none;" onclick="window.open('<?php echo $viewpdf;?>', '_blank', 'toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=315,width=900,height=700'); return false;">View PDF</a></button></td>
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

        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>

</body>
<?php include 'footersecond.php' ?>

</html>