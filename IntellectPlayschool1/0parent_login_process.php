<?php
session_start();

//db connection
include("dbconnect.php");

//retrieve input
$phonum = $_POST['phonum'];
$pwd = $_POST['pwd'];

//get user data from DB
$sql ="SELECT * FROM account WHERE acc_PhoneNo ='$phonum' AND acc_pwd = '$pwd' ";

//execute sql
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);

//login check
if($count == 1){ //user found

    //set session
    //$_SESSION['acc_']=session_id();
    //$_SESSION['uid']=$fic; //session variable only at particular page

    if ($row['acc_Category'] == 0) { //parents memang category zero
        header('location:parent_main.php');
    }
}
else{ //user not found
    //display error
    include 'headermain.php';
    echo'User not found';
    include 'footermain.php';
}

mysqli_close($con);
