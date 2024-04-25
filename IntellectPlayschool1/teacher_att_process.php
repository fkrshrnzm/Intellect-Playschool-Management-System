<?php
include 'dbconnect.php';
include 'headerstaff.php';

echo'<link rel="stylesheet" href="assets/sweetalert2.css">
    <link rel="stylesheet" href="assets/sweetalert2.min.css">
    <script src="assets/sweetalert2.all.js"></script>
    <script src="assets/sweetalert2.all.min.js"></script>
    <script src="assets/sweetalert2.js"></script>
    <script src="assets/sweetalert2.min.js"></script>';

$attdate = $_POST['attdate'];
$attcat = $_POST['attcat'];
$attreason = $_POST['reason'];
$acc_ID = $_SESSION['acc_ID'];


// Check if the date already exists in the database
$query = "SELECT * FROM attendance WHERE acc_ID = '$acc_ID' AND att_Date = '$attdate'";
$result = mysqli_query($con, $query);
$num_rows = mysqli_num_rows($result);
echo $num_rows;
    if ($num_rows > 0) {
    // Update the existing record
    $query ="UPDATE attendance 
            SET att_Type = '$attcat',
                att_Reason = '$attreason'
            WHERE att_Date = '$attdate' AND acc_ID = $acc_ID";
    mysqli_query($con, $query);
    echo'<span></span>';
    $sm = "Successfull!";
        echo '<script>
            Swal.fire({
          title: "Successful!",
          text: "Attendance Confirmed",
          icon: "success",
        }).then(function() {
            window.location.href = "staff_attendance_view.php";
        });
        </script>';

    }
    else {
    // Insert a new record
    $query ="INSERT INTO attendance(att_User,att_Date,att_Type,att_Reason,acc_ID) VALUE (1,'$attdate','$attcat','$attreason','$acc_ID')";
    mysqli_query($con, $query);
    echo'<span></span>';
    $sm = "Successfull!";
        echo '<script>
            Swal.fire({
          title: "Successful!",
          text: "Attendance Confirmed",
          icon: "success",
        }).then(function() {
            window.location.href = "staff_attendance_view.php";
        });
        </script>';
    }


//close connection
mysqli_close($con);
?>