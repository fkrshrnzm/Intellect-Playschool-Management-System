<?php
session_start();

//db connection
include("dbconnect.php");

//retrieve input
$t_id = $_POST['t_id'];
$pwd = $_POST['pwd'];

//get user data from DB
$sql ="SELECT * FROM account WHERE acc_ID ='$t_id' AND acc_pwd = '$pwd' ";

//execute sql
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);

//login check
if($count == 1){ //user found
    //set session
    //$_SESSION['acc_']=session_id();
    //$_SESSION['uid']=$fic; //session variable only at particular page

    switch ($row['acc_Category']){
        case 1:
            header('location:teacher_main.php');
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
    header('location:login.php');
    die();
}

mysqli_close($con);
