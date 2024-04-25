<?php

    // Database connection
    include("./dbconnect.php");

    // Email verification library
    // require_once './libraryDirectory';

    //----------DECLARATION---------
    $firstName = "";
    $lastName = "";
    $userIC = "";
    $phoneNumber= "";
    $_address = "";
    $password= "";
    $passwordRepeat= "";
    // Success messages
    global $success_msg;
    // Error messages
    global $ic_exist, $f_NameErr, $l_NameErr, $_usericErr, $_phoneErr, $_passwordErr;
    // Empty error variable
    global $fNameEmptyErr, $lNameEmptyErr, $icEmptyErr, $phoneEmptyErr,$addressEmptyErr, $passwordEmptyErr;
    //for email (further improvement, email verification)
    global $email_verify_err, $email_verify_success;
    // Empty variables for validation
    $_firstName = $_lastName = $_userIC = $_phoneNumber = $_password = "";
    // Check up variable
    $f_NameOK = $l_NameOK = $userICOK = $phoneOK = $passwordOK = FALSE;

    // Retrieving inputs
    if(isset($_POST["submit"])){
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $userIC = $_POST["user_ic"];
    $phoneNumber= $_POST["phone_number"];
    $_address = $_POST["address"];
    $password= $_POST["password"];
    $passwordRepeat= $_POST["repeat_password"];
    }

    //--------VALIDATION---------
    //(1)check if IC already exist
    $ic_check_query = mysqli_query($con,"SELECT * FROM account WHERE acc_ID = '$userIC'");
    $countRow = mysqli_num_rows($ic_check_query);

    // PHP validation
    if(!empty($firstName) && !empty($lastName) && !empty($userIC) && !empty($phoneNumber) && !empty($password) && !empty($passwordRepeat)){

        //(2)
        if($countRow!=0){
            $ic_exist = '
            <div class="alert alert-danger" role="alert">
            User with the following IC number already exist! </br>
            Contact Principal Roza for further queries.
            </div>
            ';


        }else{
            // 'cleaning' the form data before inserting into the database
            $_firstName=mysqli_real_escape_string($con,$firstName);
            $_lastName=mysqli_real_escape_string($con,$lastName);
            $_userIC=mysqli_real_escape_string($con,$userIC);
            $_phoneNumber=mysqli_real_escape_string($con,$phoneNumber);
            $_password=mysqli_real_escape_string($con,$password);

            //(3)
            if(!preg_match("/^[a-zA-Z ]*$/", $_firstName)){     //checking first name

                $f_NameErr = '
                <div class="alert alert-danger">
                Only letters are allowed!
                </div>
                ';
            }else {
                $f_NameOK = TRUE;
            }
            if(!preg_match("/^[a-zA-Z ]*$/", $_lastName)){       //checking last name

                $l_NameErr = '
                <div class="alert alert-danger">
                Only letters are allowed!
                </div>
                ';
            }else {
                $l_NameOK = TRUE;
            }
            if(!preg_match("/^(([[0-9]{2})(0[1-9]|1[0-2])(0[1-9]|[12][0-9]|3[01]))([0-9]{2})([0-9]{4})$/", $_userIC)){

                $_usericErr = '
                <div class="alert alert-danger">
                Enter your correct IC number!
                </div>
                ';
            }else {
                $userICOK = TRUE;
            }
            if(!preg_match("/^(\+?6?01)[02-46-9]-*[0-9]{7}$|^(\+?6?01)1-*[0-9]{8}$/", $_phoneNumber)){

                $_phoneErr = '
                <div class="alert alert-danger">
                Enter your correct Phone Number!
                </div>
                ';
            }else {
                $phoneOK = TRUE;
            }
            if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,32}$/", $_password)) {

                $_passwordErr = '
                <div class="alert alert-danger">
                Password should be between 6 to 32 characters long, contains at least one uppercase letter, one lowercase letter and one number.
                </div>
                ';
            }else {
                $passwordOK = TRUE;
            }

            //Insert data, if all preg_match condition are met!
            if ($f_NameOK && $l_NameOK && $userICOK && $phoneOK && $passwordOK){
                //Password hashing
                $password_hash = password_hash($password, PASSWORD_DEFAULT);
                //Query
                $sql = "INSERT INTO account (acc_ID, acc_pwd, fName, lName, acc_Address, acc_PhoneNo, acc_Category)
                        VALUES ('$_userIC', '$_password', '$_firstName', '$_lastName', '$_address', '$_phoneNumber', '0')";

                //
                $sqlQuery = mysqli_query($con, $sql);
                // Connection checking
                if(!$sqlQuery){

                    die("MySQL query failed!" .mysqli_error($con));
                }else{
                    if(isset($_GET['message0'])) {echo "<script>alert('Account registered, Please login.')</script>";}
                    header('location:login.php?message0=Register successful');
                }



            }
        }
    }else{
        if(empty($firstName)){

            $fNameEmptyErr = '
            <div class="alert alert-danger">
            Please enter your name.
            </div>
            ';
        }
        if(empty($lastName)){

            $lNameEmptyErr = '
            <div class="alert alert-danger">
            Please enter your name.
            </div>
            ';
        }
        if(empty($userIC)){

            $icEmptyErr = '
            <div class="alert alert-danger">
            Please enter your IC number.
            </div>
            ';
        }
        if(empty($phoneNumber)){

            $phoneEmptyErr = '
            <div class="alert alert-danger">
            Please enter your Phone number.
            </div>
            ';
        }
        if(empty($_address)){

            $addressEmptyErr = '
            <div class="alert alert-danger">
            Please enter your Address.
            </div>
            ';
        }
        if(empty($_password)){

            $passwordEmptyErr = '
            <div class="alert alert-danger">
            Please enter your Password.
            </div>
            ';
        }
    }

?>
