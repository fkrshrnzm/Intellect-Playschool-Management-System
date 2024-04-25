<?php
//db connection
include("dbconnect.php");

//retrieve input
$t_id = $_POST['t_id'];
$pwd = $_POST['pwd'];


$sql = "SELECT * FROM account WHERE acc_ID='$t_id' AND acc_pwd='$pwd'";

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
if($count == 1){ //user found

    //set session
    //$_SESSION['acc_ID']=session_id();
    //$_SESSION['t_id']=$t_id; //session variable only at particular page
echo "test1";
    if($row['acc_Category']==1){  //teacher

        echo '<script>
    window.location.href="teacher_register2.php?id='.$t_id.'";
    alert("Fill in details");</script>';

    }
    else{   //customer
        header('location:404page.php');
    }
}
else{ //user not found
    //display error
    echo '<script>
    window.location.href="login.php";
    alert("User not Found!");</script>';
}

mysqli_close($con);

?>

