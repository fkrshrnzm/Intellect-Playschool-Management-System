<?php include 'headermain.php';
$id = $_GET['id'];

echo $id;

?>
<body class="bg-gradient-primary">
<section>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="card border-0 shadow-lg o-hidden my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image:url('img/teacherKid.jpg');"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Enter Your Details!</h4>
                            </div>
                            <form class="user" method="POST" action="teacher_register2_process.php">
                                <input type="hidden" name="tid" value="<?php echo $id; ?>">
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control form-control-user" type="text" id="exampleFirstName" placeholder="First Name" name="fname" required></div>
                                    <div class="col-sm-6"><input class="form-control form-control form-control-user" type="text" id="exampleLastName" placeholder="Last Name" name="lname" required></div>
                                </div>
<!--                                <div class="mb-3"><input class="form-control form-control form-control-user" type="tel" id="exampleInputPhone" aria-describedby="phoneHelp" placeholder="IC Number" name="phonum" required></div>-->
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="pwd" required></div>
                                    <div class="col-sm-6"><input class="form-control form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="repeat_pwd" required></div>
                                </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Submit Your Details</button>
                                <hr>
                                <hr>
                            </form>

                            <div class="text-center"><a class="small" href="login.php">Already have an account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

