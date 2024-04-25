<?php

    // Database connection
    include("./dbconnect.php");
    $acc_ID = $_SESSION['acc_ID'];
    $acc_Category = $_SESSION['category'];
    echo "test1";
    if(isset($_POST["submitDetails"])){
        echo "test2";
        $userIC = $_POST['user_IC'];
        $email = $_POST['email'];
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
    }
    if(isset($_POST['submitAddress'])){
        $address = $_POST['address'];
        $phoneNumber = $_POST['phone_number'];
    }

    if(!empty($userIC)) {
        $_userIC = mysqli_real_escape_string($con, $userIC);
        if (!preg_match("/^(([[0-9]{2})(0[1-9]|1[0-2])(0[1-9]|[12][0-9]|3[01]))([0-9]{2})([0-9]{4})$/", $_userIC)) {

            $_usericErr = '
                        <div class="alert alert-danger">
                        Enter your correct IC number!
                        </div>
                        ';
            echo "tidak ngam";
        } else {
            $userICOK = TRUE;
        }
        if($userICOK){
            echo "test3";
            $sql = "UPDATE account 
                    SET acc_ID = '$_userIC'
                    WHERE acc_ID = '$acc_ID'";
            $sqlQuery = mysqli_query($con, $sql);

        // Connection checking
        if(!$sqlQuery){

            die("MySQL query failed!" .mysqli_error($con));
        }else{
            echo "test4";
//            if(isset($_GET['message0'])) {echo "<script>alert('Changed!')</script>";}
//            if($acc_Category == 0){
//                echo "test5";
//                header('location:parent_profile.php?message0=Changed successful');
//            }
//
//            if($acc_Category == 1){
//                echo "test5w";
//                header('location:teacher_profile.php?message0=Changed successful');
//            }
//
//            if($acc_Category == 2){
//                header('location:admin_profile.php?message0=Changed successful');
//            }

        }
        }


    }
    if(!empty($email)){
        $_email=mysqli_real_escape_string($con,$email);
        if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
            $_emailErr = '<div class="alert alert-danger">
                            Email format is invalid.
                        </div>';
        }else{
            $emailOK= TRUE;
        }

        if($emailOK){
            $sql = "UPDATE account 
                    SET acc_Email = '$_email'
                    WHERE acc_ID = '$acc_ID'";
        }
        $sqlQuery = mysqli_query($con, $sql);
        // Connection checking
        if(!$sqlQuery){

            die("MySQL query failed!" .mysqli_error($con));
        }else{
            if(isset($_GET['message0'])) {echo "<script>alert('Changed!')</script>";}
            
        }
    }

    if(!empty($firstName)){
        echo "test3";
        $_firstName=mysqli_real_escape_string($con,$firstName);
        if(!preg_match("/^[a-zA-Z ]*$/", $_firstName)){     //checking first name

            $f_NameErr = '
                <div class="alert alert-danger">
                Only letters are allowed!
                </div>
                ';
        }else {
            $f_NameOK = TRUE;
            echo "test4";
        }

        if($f_NameOK){
            echo "test5";
            echo "</b> $_firstName";
            $sql = "UPDATE account 
                    SET fName = '$_firstName'
                    WHERE acc_ID = '$acc_ID'";
        }

        $sqlQuery = mysqli_query($con, $sql);
        // Connection checking
        if(!$sqlQuery){

            die("MySQL query failed!" .mysqli_error($con));
        }else{
            echo "test6";
            if(isset($_GET['message0'])) {echo "<script>alert('Changed!')</script>";}
            
        }

    }

    if(!empty($lastName)) {
        $_lastName = mysqli_real_escape_string($con, $lastName);
        if (!preg_match("/^[a-zA-Z ]*$/", $_lastName)) {       //checking last name

            $l_NameErr = '
                        <div class="alert alert-danger">
                        Only letters are allowed!
                        </div>
                        ';
        } else {
            $l_NameOK = TRUE;
        }

        if($l_NameOK){
            $sql = "UPDATE account 
                    SET lName = '$_lastName'
                    WHERE acc_ID = '$acc_ID'";
        }
        $sqlQuery = mysqli_query($con, $sql);
        // Connection checking
        if(!$sqlQuery){

            die("MySQL query failed!" .mysqli_error($con));
        }else{
            if(isset($_GET['message0'])) {echo "<script>alert('Changed!')</script>";}
            
        }

        echo $userICOK;
    }

    if(!empty($address)) {
        $_address= mysqli_real_escape_string($con, $address);

        $sql = "UPDATE account 
                SET acc_Address = '$_address'
                WHERE acc_ID = '$acc_ID'";

        $sqlQuery = mysqli_query($con, $sql);
        // Connection checking
        if(!$sqlQuery){

            die("MySQL query failed!" .mysqli_error($con));
        }else{
            if(isset($_GET['message0'])) {echo "<script>alert('Changed!')</script>";}
            
        }
    }

    if(!empty($phoneNumber)) {
        echo "p1";
        $_phoneNumber= mysqli_real_escape_string($con, $phoneNumber);

        if(!preg_match("/^(\+?6?01)[02-46-9]-*[0-9]{7}$|^(\+?6?01)1-*[0-9]{8}$/", $_phoneNumber)){

            $_phoneErr = '
                <div class="alert alert-danger">
                Enter your correct Phone Number!
                </div>
                ';
        }else {
            echo "p2";
            $phoneOK = TRUE;
        }

        if($phoneOK) {
            echo "PHONE UPDATING";
            $sql = "UPDATE account 
                    SET acc_PhoneNo = '$_phoneNumber'
                    WHERE acc_ID = '$acc_ID'";
            $sqlQuery = mysqli_query($con, $sql);

            // Connection checking
            if (!$sqlQuery) {

                die("MySQL query failed!" . mysqli_error($con));
            } else {
                if (isset($_GET['message0'])) {
                    echo "<script>alert('Changed!')</script>";
                }

            }
        }
    }


//get user data from DB
$output ="SELECT * FROM account WHERE acc_ID= '$acc_ID' ";

//execute sql
$result = mysqli_query($con,$output);
$row = mysqli_fetch_array($result);
echo "test";

$_SESSION['acc_ID']=$row['acc_ID'];
$_SESSION['firstName']=$row['fName'];
$_SESSION['lastName']=$row['lName'];
$_SESSION['phoneNumber']=$row['acc_PhoneNo'];
$_SESSION['category']=$row['acc_Category'];
$_SESSION['email']=$row['acc_Email'];
$_SESSION['address']=$row['acc_Address'];

if($acc_Category == 0){
    header('location:parent_profile.php?message0=Changed successful');
}

if($acc_Category == 1){
    header('location:teacher_profile.php?message1=Changed successful');
}

if($acc_Category == 2){
    header('location:admin_profile.php?message2=Changed successful');
}
?>
