<?php
$uid = $_SESSION['acc_ID'];
$sql = "SELECT * FROM account WHERE acc_ID='$uid'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
if ($row['acc_Category'] == 1) {
    header('location:404page.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>IntellectPlayschoolV2</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/Navbar-Centered-Links-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body>

</html>