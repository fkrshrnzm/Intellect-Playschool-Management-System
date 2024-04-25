
<?php
include ('dbconnect.php');
include 'headerstaff.php';

$acc_ID = $_SESSION['acc_ID'];

if(isset($_GET['id']))
{
	$aid = $_GET['id'];
}
?>

<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.php">
                <div class="sidebar-brand-icon "><img src="img/lLogo.png" style="width: 30px; height: 50px;"></div>
                <div class="sidebar-brand-text mx-1"><img src="img/rLogo.png" style="width: 70px; height: 50px;"></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link" href="teacher_main.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item"><a class="nav-link" href="teacher_profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li>
                <li class="nav-item"><a class="nav-link" href="teacher_attendancemenu.php"><i class="fas fa-table"></i><span>Attendance</span></a></li>
                <li class="nav-item"><a class="nav-link active" href="teacher_assessment.php"><i class="fas fa-user-circle"></i><span>Assessment</span></a></li>
                <li class="nav-item"><a class="nav-link" href="teacher_salary.php"><i class="fas fa-user-circle"></i><span>Salary</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn border-0 rounded-circle" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
        <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">

                    </form><ul class="navbar-nav flex-nowrap ms-auto">


                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                    <span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo  $_SESSION['firstName']. "   " .$_SESSION['lastName'] ?></span>
                                    <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                    <a class="dropdown-item" href="teacher_profile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                    <!--                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a>-->
                                    <!--                                    <a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>-->
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div>
                        </li>
                    </ul>
                </div>

            </nav>
            
            <div class="container-fluid">
  <div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0">Academic</h3>    
  </div>
  
  <div class="row">
    <div class="col-lg-12 col-xl-12 col-xxl-12">
      <div class="card shadow mb-4">
        <div class="card-body">
<div class="d-sm-flex justify-content-between align-items-center mb-4">
        <div>
        <h5 class="text-dark">Subject Assessment</h5>
        <br>
            <ol>
            <form action="subjectassessmentprocess.php" method="post">

            <table cellspacing="0" style="table-layout: fixed;" style="word-wrap: break-word;" width="100%">
                          
            
                          <tr>
                          <th style="text-align:center">Subject</th>
                          <?php
                          $subnametype = mysqli_query($con, "SELECT * FROM academic_subnametype_desc  ");

                          foreach($subnametype as $row){
                      
                            echo'<th style="text-align:center" name="acad_SubNameType">'.$row['description'].'</th>';
                          }
                          ?>
                          </tr>
                          
                          <?php

                          $test = "SELECT * FROM academic_subname_desc WHERE acc_ID='$acc_ID'";
                          $result = mysqli_query($con, $test);

                          while($row=mysqli_fetch_array($result)){
                              echo $row['description'];
                              echo "<br>";
                          }


                            echo'<tr>';
                            echo'<td name="acad_SubName1">'."Bahasa Melayu".'</td>';
                            
                            $sql1 = "SELECT * FROM academic_subcomm_desc";
                            $result1 = mysqli_query($con,$sql1);
                            echo '<td><select class="form-select" name="acad_SubComm10" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result1))
			      		            {
                            echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';

                            $sql2 = "SELECT * FROM academic_subcomm_desc";
                            $result2 = mysqli_query($con,$sql2);
                            echo '<td><select class="form-select" name="acad_SubComm20" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result2))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';
                            
                            $sql3 = "SELECT * FROM academic_subcomm_desc";
                            $result3 = mysqli_query($con,$sql3);
                            echo '<td><select class="form-select" name="acad_SubComm30" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result3))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';
                            
                            $sql4 = "SELECT * FROM academic_subcomm_desc";
                            $result4 = mysqli_query($con,$sql4);
                            echo '<td><select class="form-select" name="acad_SubComm40" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result4))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';

                            echo '</tr>';

                            
                            echo'<tr>';
                            echo'<td name="acad_SubName2">'."Bahasa Inggeris".'</td>';
                            
                            $sql5 = "SELECT * FROM academic_subcomm_desc";
                            $result5 = mysqli_query($con,$sql5);
                            echo '<td><select class="form-select" name="acad_SubComm11" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result5))
			      		            {
                            echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';

                            $sql6 = "SELECT * FROM academic_subcomm_desc";
                            $result6 = mysqli_query($con,$sql6);
                            echo '<td><select class="form-select" name="acad_SubComm21" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result6))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';
                            
                            $sql7 = "SELECT * FROM academic_subcomm_desc";
                            $result7 = mysqli_query($con,$sql7);
                            echo '<td><select class="form-select" name="acad_SubComm31" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result7))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';
                            
                            $sql8 = "SELECT * FROM academic_subcomm_desc";
                            $result8 = mysqli_query($con,$sql8);
                            echo '<td><select class="form-select" name="acad_SubComm41" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result8))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';

                            echo '</tr>';


                            echo'<tr>';
                            echo'<td name="acad_SubName3">'."Bahasa Arab".'</td>';
                            
                            $sql9 = "SELECT * FROM academic_subcomm_desc";
                            $result9 = mysqli_query($con,$sql9);
                            echo '<td><select class="form-select" name="acad_SubComm12" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result9))
			      		            {
                            echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';

                            $sql10 = "SELECT * FROM academic_subcomm_desc";
                            $result10 = mysqli_query($con,$sql10);
                            echo '<td><select class="form-select" name="acad_SubComm22" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result10))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';
                            
                            $sql11 = "SELECT * FROM academic_subcomm_desc";
                            $result11 = mysqli_query($con,$sql11);
                            echo '<td><select class="form-select" name="acad_SubComm32" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result11))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';
                            
                            $sql12 = "SELECT * FROM academic_subcomm_desc";
                            $result12 = mysqli_query($con,$sql4);
                            echo '<td><select class="form-select" name="acad_SubComm42" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result12))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';

                            echo '</tr>';


                            echo'<tr>';
                            echo'<td name="acad_SubName4">'."Matematik".'</td>';
                            
                            $sql13 = "SELECT * FROM academic_subcomm_desc";
                            $result13 = mysqli_query($con,$sql13);
                            echo '<td><select class="form-select" name="acad_SubComm13" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result13))
			      		            {
                            echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';

                            $sql14 = "SELECT * FROM academic_subcomm_desc";
                            $result14 = mysqli_query($con,$sql14);
                            echo '<td><select class="form-select" name="acad_SubComm23" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result14))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';
                            
                            $sql15 = "SELECT * FROM academic_subcomm_desc";
                            $result15 = mysqli_query($con,$sql3);
                            echo '<td><select class="form-select" name="acad_SubComm33" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result15))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';
                            
                            $sql16 = "SELECT * FROM academic_subcomm_desc";
                            $result16 = mysqli_query($con,$sql16);
                            echo '<td><select class="form-select" name="acad_SubComm43" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result16))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';

                            echo '</tr>';


                            echo'<tr>';
                            echo'<td name="acad_SubName5">'."Sains".'</td>';
                            
                            $sql17 = "SELECT * FROM academic_subcomm_desc";
                            $result17 = mysqli_query($con,$sql17);
                            echo '<td><select class="form-select" name="acad_SubComm14" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result17))
			      		            {
                            echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';

                            $sql18 = "SELECT * FROM academic_subcomm_desc";
                            $result18 = mysqli_query($con,$sql18);
                            echo '<td><select class="form-select" name="acad_SubComm24" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result18))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';
                            
                            $sql19 = "SELECT * FROM academic_subcomm_desc";
                            $result19 = mysqli_query($con,$sql19);
                            echo '<td><select class="form-select" name="acad_SubComm34" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result19))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';
                            
                            $sql20 = "SELECT * FROM academic_subcomm_desc";
                            $result20 = mysqli_query($con,$sql20);
                            echo '<td><select class="form-select" name="acad_SubComm44" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result20))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';

                            echo '</tr>';


                            echo'<tr>';
                            echo'<td name="acad_SubName6">'."Arts & Craft".'</td>';
                            
                            $sql21 = "SELECT * FROM academic_subcomm_desc";
                            $result21 = mysqli_query($con,$sql21);
                            echo '<td><select class="form-select" name="acad_SubComm15" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result21))
			      		            {
                            echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';

                            $sql22 = "SELECT * FROM academic_subcomm_desc";
                            $result22 = mysqli_query($con,$sql22);
                            echo '<td><select class="form-select" name="acad_SubComm25" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result22))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';
                            
                            $sql23 = "SELECT * FROM academic_subcomm_desc";
                            $result23 = mysqli_query($con,$sql23);
                            echo '<td><select class="form-select" name="acad_SubComm35" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result23))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';
                            
                            $sql24 = "SELECT * FROM academic_subcomm_desc";
                            $result24 = mysqli_query($con,$sql24);
                            echo '<td><select class="form-select" name="acad_SubComm45" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result24))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';

                            echo '</tr>';


                            echo'<tr>';
                            echo'<td name="acad_SubName7">'."Pendidikan Islam & Jawi/Moral".'</td>';
                            
                            $sql25 = "SELECT * FROM academic_subcomm_desc";
                            $result25 = mysqli_query($con,$sql25);
                            echo '<td><select class="form-select" name="acad_SubComm16" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result25))
			      		            {
                            echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';

                            $sql26 = "SELECT * FROM academic_subcomm_desc";
                            $result26 = mysqli_query($con,$sql26);
                            echo '<td><select class="form-select" name="acad_SubComm26" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result26))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';
                            
                            $sql27 = "SELECT * FROM academic_subcomm_desc";
                            $result27 = mysqli_query($con,$sql27);
                            echo '<td><select class="form-select" name="acad_SubComm36" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result27))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';
                            
                            $sql28 = "SELECT * FROM academic_subcomm_desc";
                            $result28 = mysqli_query($con,$sql28);
                            echo '<td><select class="form-select" name="acad_SubComm46" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result28))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';

                            echo '</tr>';


                            echo'<tr>';
                            echo'<td name="acad_SubName8">'."Sports/Sensory Gym/Brain Gym".'</td>';
                            
                            $sql29 = "SELECT * FROM academic_subcomm_desc";
                            $result29 = mysqli_query($con,$sql29);
                            echo '<td><select class="form-select" name="acad_SubComm17" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result29))
			      		            {
                            echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';

                            $sql30 = "SELECT * FROM academic_subcomm_desc";
                            $result30 = mysqli_query($con,$sql30);
                            echo '<td><select class="form-select" name="acad_SubComm27" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result30))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';
                            
                            $sql31 = "SELECT * FROM academic_subcomm_desc";
                            $result31 = mysqli_query($con,$sql31);
                            echo '<td><select class="form-select" name="acad_SubComm37" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result31))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';
                            
                            $sql32 = "SELECT * FROM academic_subcomm_desc";
                            $result32 = mysqli_query($con,$sql32);
                            echo '<td><select class="form-select" name="acad_SubComm47" id="exampleSelect1">';
			      		            while($row = mysqli_fetch_array($result32))
			      		            {
                              echo"<option value = '".$row['acad_SubComm']."'>".$row['acad_SubComm']." : ".$row['description']."</option>";
			      		            }
			      	              echo '</select></td>';

                            echo '</tr>';
                          
                          ?> 

                          
                      </table>           
                    
                <br>
                
                <div>
    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Submit">
    <input type="hidden" name="aid" value="<?php echo $aid?>">
</div>

                
                
            </form>
    </ol>            
    
    </div>
            
</div>


          

    </div></div></div></div></div></div>
    <?php include 'footersecond.php' ?>