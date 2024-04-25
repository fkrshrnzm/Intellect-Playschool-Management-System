<?php
include 'dbconnect.php';


echo'<link rel="stylesheet" href="assets/sweetalert2.css">
    <link rel="stylesheet" href="assets/sweetalert2.min.css">
    <script src="assets/sweetalert2.all.js"></script>
    <script src="assets/sweetalert2.all.min.js"></script>
    <script src="assets/sweetalert2.js"></script>
    <script src="assets/sweetalert2.min.js"></script>';

$s_ID = $_POST['s_ID'];
$attdate = $_POST['attdate'];
$attcat = $_POST['attcat'];
$attreason = $_POST['reason'];
$acc_ID = $_SESSION['acc_ID'];

// Check if the date already exists in the database
$query = "SELECT * FROM attendance WHERE att_Date = '$attdate' AND s_ID = '$s_ID'";
$result = mysqli_query($con, $query);
$num_rows = mysqli_num_rows($result);

if ($num_rows > 0) {
    // Update an existing record
    $query = "UPDATE attendance SET att_Type = '$attcat', att_Reason = '$attreason' WHERE att_Date = '$attdate' AND s_ID = '$s_ID'";
    mysqli_query($con, $query);
    $newDate = date("d F", strtotime($attdate));
    echo'<span></span>';
    $name = mysqli_query($con, "SELECT * FROM student WHERE s_ID ='$s_ID'");
    $rowname = mysqli_fetch_array($name);
    $sm = "Successfull!";
        echo '<script>
            Swal.fire({
          title: "Successful!",
          text: "'.$rowname['fName'].' '.$rowname['lName'].' at '.$newDate.' is set to absence",
          icon: "success",
        }).then(function() {
            window.location.href = "student_attendance.php";
        });
    </script>';

    
} else {
    echo'<span></span>';
    $sm = "Invalid!";
        echo '<script>
            Swal.fire({
          title: "Invalid!",
          text: "Please choose a student and the absence date",
          icon: "error",
        }).then(function() {
            window.location.href = "student_attendance.php";
        });
        </script>';
}

//close connection
mysqli_close($con);
?>