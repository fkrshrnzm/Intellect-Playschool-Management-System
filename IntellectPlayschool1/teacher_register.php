<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>IntellectPlayschoolV2</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/Navbar-Centered-Links-icons.css">
</head>

<body class="bg-gradient-primary">
<br>
<br>
<br>
<br>
<section>
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
                                <h4 class="text-dark mb-4">Enter your Teacher ID and Password</h4>
                            </div>
                            <form class="user"  method="POST" action="teacher_register_process.php">
                                <div class="mb-3"><input class="form-control form-control-user" type="tel" id="exampleInputPhone" aria-describedby="phoneHelp" placeholder="Enter Teacher ID" name="t_id" required></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="pwd" required></div>
                                <div class="mb-3">
                                    <div class="custom-control custom-checkbox small">
<!--                                        <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>-->
                                    </div>
                                </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Register</button>
                                <hr>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>


