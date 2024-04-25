<?php
include ('dbconnect.php');

if($_POST['prog']){
    $prog = $_POST['prog'];
    if($prog==0){
        echo "<option hidden disabled selected value> -- select an option -- </option>";
    }else{
        $sql = mysqli_query($con, "SELECT * FROM student WHERE acad_Prog='$prog'");
        echo "<option hidden disabled selected value> -- select a student-- </option>";
        while($row = mysqli_fetch_array($sql)){
            echo "<option value='" . $row['s_ID'] . "'>". $row['fName']. '  ' .$row['lName'] . "</option>";
        }
    }
}

?>