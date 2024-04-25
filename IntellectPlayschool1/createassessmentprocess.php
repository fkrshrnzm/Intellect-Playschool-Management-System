<?php
include ("dbconnect.php");


$aid = $_POST['aid'];
$acad_Prog = $_POST['acad_Prog'];
$s_ID = $_POST['s_ID'];
$acad_CommStat = $_POST['acad_CommStat'];
$acad_CommDate = $_POST['acad_CommDate'];
$acad_assessmenttype = $_POST['acad_assessmenttype'];

if ($acad_Prog == '1'){

    $query = "SELECT MAX(acad_ID) as max_id FROM academic_le";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $max_id = $row['max_id'];
    $aid = $max_id + 1;

    $sql = "INSERT INTO academic_le(acad_ID, s_ID, acad_Prog, acad_CommDate, acad_CommStat)
    VALUES ('$aid', '$s_ID', '$acad_Prog', '$acad_CommDate', '$acad_CommStat')";

    if($acad_assessmenttype == '1'){

        header("location:vakassessmentle.php?id=".$aid);
    }
    else if($acad_assessmenttype == '2'){
        header("location:intelligentassessmentle.php?id=".$aid);
    }
    else{
        //kat sini akan display message kata LE takde assessment for subjects
        //header('location:createassessment.php');
        echo "<script>
        window.location.href='createassessment.php';
        alert('Sorry, there is Subject Assessment for Little Explorer Program.');
        </script>";
    }
}

else {

    $query1 = "SELECT MAX(acad_ID) as max_id FROM academic_fk";
    $result1 = mysqli_query($con, $query1);
    $row = mysqli_fetch_assoc($result1);
    $max_id = $row['max_id'];
    $aid = $max_id + 1;

    $sql1 = "INSERT INTO academic_fk(acad_ID, s_ID, acad_Prog, acad_CommDate, acad_CommStat)
    VALUES ('$aid', '$s_ID', '$acad_Prog', '$acad_CommDate', '$acad_CommStat')";

    mysqli_query($con, $sql1); // execute the insert query

    if($acad_assessmenttype === '1'){
        header("location:vakassessmentfk.php?id=".$aid); 
    }
    else if($acad_assessmenttype === '2'){
        header("location:intelligentassessmentfk.php?id=".$aid);
    }
    else{
        header('location:subjectassessment.php?id='.$aid);
    }
}

mysqli_query($con,$sql);
mysqli_close($con);

include 'headermain.php';

include 'footermain.php';


?>



<?php

include 'footermain.php';

?>
