<?php
    // Database connection
    include("./dbconnect.php");
    $acc_ID = $_SESSION['acc_ID'];
    if(isset($_POST["submit"])){
        $firstName = $_POST['student_firstname'];
        $lastName = $_POST['student_lastname'];
        $studentIC = $_POST['student_ic'];
        $_studentDOB = $_POST['student_DOB'];
        $_studentAllergy = $_POST['student_allergy'];
        $_studentFood = $_POST['student_food'];
        $_studentColor = $_POST['student_color'];
        $_studentToys = $_POST['student_toys'];
        $_studentExtraNotes = $_POST['student_extraNotes'];
        $_studentDiapers = $_POST['diaperStatus'];
    }

$_firstName=mysqli_real_escape_string($con,$firstName);
$_lastName=mysqli_real_escape_string($con,$lastName);
$_studentIC=mysqli_real_escape_string($con,$studentIC);

    if(!preg_match("/^[a-zA-Z ]*$/", $_firstName)){     //checking first name

        $f_NameErr = '
                    <div class="alert alert-danger">
                    Only letters are allowed!
                    </div>
                    ';
    }else {
        $f_NameOK = TRUE;
    }
    if(!preg_match("/^[a-zA-Z ]*$/", $_lastName)){     //checking first name

        $l_NameErr = '
                    <div class="alert alert-danger">
                    Only letters are allowed!
                    </div>
                    ';
    }else {
        $l_NameOK = TRUE;
    }
    if(!preg_match("/^(([[0-9]{2})(0[1-9]|1[0-2])(0[1-9]|[12][0-9]|3[01]))([0-9]{2})([0-9]{4})$/", $_studentIC)){

    $_usericErr = '
                    <div class="alert alert-danger">
                    Enter your correct IC number!
                    </div>
                    ';
    }else {
    $studentICOK = TRUE;
    }

    $sql = "INSERT INTO student(fName, lName, s_myKid, s_DOB, s_Allergy, s_favFood, s_favColor, s_favToys, s_DStatus, acc_ID) 
            VALUES ('$_firstName', '$_lastName', '$_studentIC', '$_studentDOB', '$_studentAllergy', '$_studentFood', '$_studentColor', '$_studentToys', '$_studentDiapers','$acc_ID')";
    $sqlQuery = mysqli_query($con, $sql);
    // Connection checking
    if(!$sqlQuery){

        die("MySQL query failed!" .mysqli_error($con));
    }else{
        if(isset($_GET['message0'])) {echo "<script>alert('Account registered, Please login.')</script>";}
        header('location:student_register.php?message0=Register successful');
}
?>