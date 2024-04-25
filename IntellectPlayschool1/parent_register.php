<?php include('./parent_register_process.php') ?>
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

    * {
        box-sizing: border-box;
    }
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="assets/bootstrap/css/myStyle.css" />

<?php include ('headermain.php')?>

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
                        <div class="flex-grow-1 bg-register-image" style="background-image:url('img/registerKid.jpg');"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
<!--                                --><?php //echo $success_msg ?>
<!--                                --><?php //echo $ic_exist ?>
                            </div>
                            <form class="user" action="" method="POST" >
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control form-control-user" type="text" id="exampleFirstName" placeholder="First Name" name="first_name"></div>
<!--                                    --><?php //echo $fNameEmptyErr ?>
<!--                                    --><?php //echo $f_NameErr ?>
                                    <div class="col-sm-6"><input class="form-control form-control form-control-user" type="text" id="exampleLastName" placeholder="Last Name" name="last_name" ></div>
<!--                                    --><?php //echo $l_NameErr?>
<!--                                    --><?php //echo $lNameEmptyErr?>
                                </div>
                                <div class="mb-3"><input class="form-control form-control form-control-user" type="number" id="exampleInputID" aria-describedby="IDHelp" placeholder="IC Number" name="user_ic"></div>
<!--                                --><?php //echo $_usericErr?>
<!--                                --><?php //echo $icEmptyErr?>
                                <div class="mb-3"><input class="form-control form-control form-control-user" type="tel" id="exampleInputPhone" aria-describedby="PhoneHelp" placeholder="Phone Number" name="phone_number" ></div>
<!--                                --><?php //echo $phoneEmptyErr?>
<!--                                --><?php //echo $_phoneErr?>
                                <div class="mb-3"><input class="form-control form-control form-control-user" type="text" id="exampleInputAddress" aria-describedby="AddressHelp" placeholder="Home Address" name="address" ></div>
<!--                                --><?php //echo $addressEmptyErr?>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control form-control-user" id="password" type="password" id="examplePasswordInput" placeholder="Password" name="password"></div>
<!--                                    --><?php //echo $passwordEmptyErr?>
                                    <div class="col-sm-6"><input class="form-control form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="repeat_password" ></div>
                                </div><button class="btn btn-primary d-block btn-user w-100" name="submit" type="submit">Register Account</button>
<!--                                <hr><a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button"><i class="fab fa-google"></i>&nbsp; Register with Google</a><a class="btn btn-primary d-block btn-facebook btn-user w-100" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Register with Facebook</a>-->
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="teacher_register.php">Register as a Teacher</a></div>
                            <div class="text-center"><a class="small" href="login.php">Already have an account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");

    togglePassword.addEventListener("click", function () {
        // toggle the type attribute
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);

        // toggle the icon
        this.classList.toggle("bi-eye");
    });

    // prevent form submit
    const form = document.querySelector("form");
    form.addEventListener('submit', function (e) {
        e.preventDefault();
    });
</script>
</body>

