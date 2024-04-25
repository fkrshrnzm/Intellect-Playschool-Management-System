<?php
include ('dbconnect.php');

if(isset($_POST['acadProg'])){
    $prog = $_POST['acadProg'];

    $sql = "SELECT * FROM program_assessment 
            JOIN academic_assessmenttype_desc 
            WHERE acad_Prog='$prog'";

    $result = mysqli_query($con, $sql);?>
    <label for="exampleInputPassword1" id="assessmentType" class="assessmentType form-label mt-4">Assessment Type</label>
<?php
    echo '<select class="form-select" name="acad_assessmenttype" id="exampleSelect1">';
    while ($row3 = mysqli_fetch_array($result)) {
        echo "<option value = '" . $row3['acad_assessmenttype'] . "'>" . $row3['description'] . "</option>";
    }
    echo '</select>';
}

?>

<?php
include ('dbconnect.php');

if($_POST['prog']){
    $prog = $_POST['prog'];?>

    <option hidden disabled selected value> -- select an option -- </option>
<?php
        $sql = "SELECT * FROM program_assessment 
            JOIN academic_assessmenttype_desc aad on aad.acad_assessmenttype = program_assessment.acad_assessmenttype 
            WHERE acad_Prog='$prog'";
        $result = mysqli_query($con, $sql);

        while ($row3 = mysqli_fetch_array($result)) {
            echo "<option value = '" . $row3['acad_assessmenttype'] . "'>" . $row3['description'] . "</option>";
        }
}
?>
