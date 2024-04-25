<?php
include 'dbconnect.php';
include 'headerstaff.php';

$s_ID = $_POST['s_ID'];
$attdate = $_POST['date'];

// Check if the date already exists in the database
$query = "SELECT * FROM attendance WHERE att_Date = '$attdate' AND s_ID = '$s_ID'";
$result = mysqli_query($con, $query);
$num_rows = mysqli_num_rows($result);

if ($num_rows > 0) {
    // Update an existing record
    $query = "UPDATE attendance SET att_Type = 1, att_Reason = NULL WHERE att_Date = '$attdate' AND s_ID = '$s_ID'";
    mysqli_query($con, $query);
    header('location: student_attendance_view.php');
} else {
    echo '<script>
    window.location.href="student_attendance_view.php ";
    alert("Invalid! please choose a student and the absence date");</script>';
}

//close connection
mysqli_close($con);
?>