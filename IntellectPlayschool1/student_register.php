<?php include 'dbconnect.php' ?>
<?php include 'headerparent.php' ?>

<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }


</style>

<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.php">
                <div class="sidebar-brand-icon "><img src="img/lLogo.png" style="width: 30px; height: 50px;"></div>
                <div class="sidebar-brand-text mx-1"><img src="img/rLogo.png" style="width: 70px; height: 50px;"></div>

            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link " href="parent_main.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
<!--                <li class="nav-item"><a class="nav-link " href="parent_profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li>-->
                <li class="nav-item"><a class="nav-link" href="parent_attendance.php"><i class="fas fa-table"></i><span>Attendance</span></a></li>
<!--                <li class="nav-item"><a class="nav-link" href="parent_assessment.php"><i class="far fa-user-circle"></i><span>Assessment</span></a></li>-->
                <li class="nav-item"><a class="nav-link" href="financial(Parent).php"><i class="fas fa-user-circle"></i><span>Payment</span></a></li>
                <li class="nav-item"><a class="nav-link active" href="student_register.php"><i class="fas fa-user-circle"></i><span>Register child</span></a></li>
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
<!--            MAIN-->
            <div class="card border-0 shadow-lg o-hidden my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Register your child now!</h4>
                                        <!--                                --><?php //echo $success_msg ?>
                                        <!--                                --><?php //echo $ic_exist ?>
                                    </div>
                                    <form class="user" action="student_register_process.php" method="POST" >
                                        <div class="row mb-3">
                                            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control form-control-user" type="text" id="exampleFirstName" placeholder="Child First Name" name="student_firstname" required></div>
                                            <!--                                    --><?php //echo $fNameEmptyErr ?>
                                            <!--                                    --><?php //echo $f_NameErr ?>
                                            <div class="col-sm-6"><input class="form-control form-control form-control-user" type="text" id="exampleLastName" placeholder="Child Last Name" name="student_lastname" required></div>
                                            <!--                                    --><?php //echo $l_NameErr?>
                                            <!--                                    --><?php //echo $lNameEmptyErr?>
                                        </div>
                                        <div class="mb-3"><input class="form-control form-control form-control-user" type="number" id="exampleInputID" aria-describedby="IDHelp" placeholder="MyKad Number" name="student_ic" required></div>
                                        <!--                                --><?php //echo $_usericErr?>
                                        <!--                                --><?php //echo $icEmptyErr?>
<!--                                        <p>Gender</p>-->
<!--                                        <div class="form-check"><input class="" id="setD_male" type="radio" name="student_gender"><label for="setD_male">Male</label></div>-->
<!--                                        <div class="form-check"><input id="setD_female" type="radio" name="student_gender"><label for="setD_female">Female</label></div>-->

                                        <p>Child Birthday</p>
                                        <div class="mb-3"><input class="form-control form-control form-control-user" type="date" id="exampleInputPhone" aria-describedby="DOBHelp" placeholder="Child Date of Birth" name="student_DOB" required></div>

                                        <p>Do your child have allergy?</p>
                                        <div class="mb-3"><input class="form-control form-control form-control-user" type="text" id="exampleInputAllergy" aria-describedby="AllergyHelp" placeholder="Describe it briefly..." name="student_allergy" required></div>

                                        <p>His/Her favourite Food</p>
                                        <div class="mb-3"><input class="form-control form-control form-control-user" type="text" id="exampleInputAllergy" aria-describedby="AllergyHelp" placeholder="Describe it briefly..." name="student_food" required></div>

                                        <p>His/Her favourite Color</p>
                                        <div class="mb-3"><input class="form-control form-control form-control-user" type="text" id="exampleInputAllergy" aria-describedby="AllergyHelp" placeholder="Describe it briefly..." name="student_color" required></div>

                                        <p>His/Her favourite Toys</p>
                                        <div class="mb-3"><input class="form-control form-control form-control-user" type="text" id="exampleInputAllergy" aria-describedby="AllergyHelp" placeholder="Describe it briefly..." name="student_toys" required></div>

                                        <p>Extra notes about your child...</p>
                                        <div class="mb-3"><input class="form-control form-control form-control-user" type="text" id="exampleInputAllergy" aria-describedby="AllergyHelp" placeholder="Describe it briefly... (optional)" name="student_extraNotes" ></div>

                                        <p>Still wearing diapers during daytime?</p>
                                        <div class="form-check"><input  id="diapers_yes" type="radio" name="diaperStatus" value="0"><label for="diapers_yes">Yes</label></div>
                                        <div class="form-check"><input id="diapers_no" type="radio" name="diaperStatus" value="1"><label for="diapers_no">No</label></div>

                                        <button class="btn btn-primary d-block btn-user w-100 mt-4" name="submit" type="submit">Submit</button>
                                        <!--                                <hr><a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button"><i class="fab fa-google"></i>&nbsp; Register with Google</a><a class="btn btn-primary d-block btn-facebook btn-user w-100" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Register with Facebook</a>-->
                                        <hr>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-register-image" style="background-image:url('img/loginKid.jpg');"></div>
                        </div>
                    </div>
                </div>
            </div>
<!--            MAIN-->
        </div>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>

<?php include 'footersecond.php' ?>
