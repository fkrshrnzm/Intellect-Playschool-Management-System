<?php include 'header.php' ?>

<body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-login-image" style="background-image: url(assets/img/dogs/image3.jpeg);"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4">Welcome Back!</h4>
                                </div>
                                <form class="user" method="POST" action="teacher_login_process.php">
                                    <div class="mb-3"><input class="form-control form-control-user" type="tel" id="exampleInputPhone" aria-describedby="phoneHelp" placeholder="Teacher ID" name="t_id" required></div>
                                    <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="pwd" required></div>
                                    <div class="mb-3">
                                        <div class="custom-control custom-checkbox small">
                                            <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                        </div>
                                    </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Login</button>
                                    <hr><a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button"><i class="fab fa-google"></i>&nbsp; Login with Google</a><a class="btn btn-primary d-block btn-facebook btn-user w-100" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Login with Facebook</a>
                                    <hr>
                                </form>
                                <div class="text-center"><a class="small" href="forgot-password.php">Forgot Password?</a></div>
                                <div class="text-center"><a class="small" href="parent_register.php">Create an Account!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<?php include 'footermain.php' ?>
