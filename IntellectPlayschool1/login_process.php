<?php
//db connection
include("dbconnect.php");
?>
<head>
    <link rel="stylesheet" href="assets/sweetalert2.css">
    <link rel="stylesheet" href="assets/sweetalert2.min.css">
    <script src="assets/sweetalert2.all.js"></script>
    <script src="assets/sweetalert2.all.min.js"></script>
    <script src="assets/sweetalert2.js"></script>
    <script src="assets/sweetalert2.min.js"></script>
</head>
<?php
//retrieve input
$_userIC = $_POST['user_IC'];
$_password = $_POST['password'];

//get user data from DB
$sql ="SELECT * FROM account WHERE acc_ID ='$_userIC' AND acc_pwd = '$_password' ";

//execute sql
$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);



//login check
if($count == 1){ //user found
    //set session
    $_SESSION['sessionID']=session_id();
    $_SESSION['acc_ID']=$_userIC;
    $_SESSION['firstName']=$row['fName'];
    $_SESSION['lastName']=$row['lName'];
    $_SESSION['phoneNumber']=$row['acc_PhoneNo'];
    $_SESSION['category']=$row['acc_Category'];
    $_SESSION['email']=$row['acc_Email'];
    $_SESSION['address']=$row['acc_Address'];

    switch ($row['acc_Category']){
        case 1:
            header('location:teacher_main.php');
            echo '<script>
    window.location.href="login.php";
    alert("Welcome Back!");</script>';

            break;
        case 2:
            header('location:admin_main.php');
            break;
        default:
            header('location:parent_main.php');
            break;
    }
} else{ //user not found
    //display error
    echo '<script>
    window.location.href="login.php";
    alert("User not Found!");</script>';


    die();
}

mysqli_close($con);
