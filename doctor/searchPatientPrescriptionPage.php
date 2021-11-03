<?php
include_once 'doctorLoginCTRL.php';//connection
include_once 'doctorLogoutCTRL.php';//connection
include_once 'addPrescriptionCTRL.php';
include_once 'viewPrescriptionCTRL.php';
include_once 'searchPatientPrescriptionCTRL.php';
include_once '../assets/conn/dbconnect.php';//connection

session_start();
$conn = mysqli_connect("localhost","root","","csit314");

$doctor = new doctorLoginCTRL();  
$view = new viewPrescriptionControl();
$addPres = new addPrescriptionCTRL();  
$searchp =  new searchPrescriptionControl();

$doctorId = $_SESSION['id'];//get id
$doctorPw = $_SESSION['password'];//get id

if (!$doctor->session())
    {  
        header("Location:../doctorLoginPage.php");  
    }

$doctorLogout = new doctorLogoutCTRL();  

if(isset($_POST['logout'])) 
{
  $doctorLogout->logout();
  header('Location:doctorLoginPage.php'); //exit to home page
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Doctor Page</title>
        <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/material.css" rel="stylesheet">
      	<link rel="stylesheet" href="../assets/css/page.css">
      	<!-- Boxicons CDN Link -->
      	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      	<style>
    		input[type="submit"]
    		{
    			width: 150px;
    			height: 40px;
    			border: none;
    			background-color: #0a1172;
    			border-radius: 50px ;
    			font-weight: bold;
    			color: white;
    			font-family: Arial, Helvetica, sans-serif;
    		}

    		input[type="submit"]:hover
    		{
    			width: 150px;
    			height: 40px;
    			border: none;
    			background-color: #000137;
    			border-radius: 50px 20px ;
    			font-weight: bold;
    			color: white;
    			font-family: Arial, Helvetica, sans-serif;
    		}
   		</style>
    </head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-clinic'></i>
      <span class="logo_name">E-Prescription</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="doctorPage.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="addPrescriptionPage.php" >
            <i class='bx bx-first-aid' ></i>
            <span class="links_name">Add Prescription</span>
          </a>
        </li>
        <li>
          <a href="searchPatientPrescriptionPage.php" class="active">
            <i class='bx bx-search-alt'></i>
            <span class="links_name">Search Prescription</span>
          </a>
        </li>
        <li>
          <a href="viewPrescriptionPage.php">
            <i class='bx bx-history'></i>
            <span class="links_name">View Prescription</span>
          </a>
        </li>
        
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
      	<h2> <b> Welcome, <?php echo $doctor->verifyUser($doctorId, $doctorPw);?> </b></h2> 
      </div>  
       <form method = "POST" >
          <input type = "submit" value="Log Out" name="logout" />
      </form>
    </nav>

    <div class="home-content">
      <div class="sales-boxes">
        <div class="recent-sales box" style="width:100%">
          <div class="title">
            <h2 style="text-align: center;"> Search Prescription</h2>
            <form method="post" action="searchPatientPrescriptionPage.php" style="text-align: center;"><br>
              <select style="width: 50%;" name="pid" id="pid">
                       <?PHP 
                      $conn = mysqli_connect("localhost","root","","csit314");
                       $select1= "SELECT DISTINCT(prescriptionid) FROM prescription WHERE doctorid='$doctorId'";
                       echo "<option>Select Prescription</option>"; 
                      foreach ($conn->query($select1) as $rw)
                      {
                          echo "<option value=$rw[prescriptionid]>$rw[prescriptionid]</option>"; 
                      }

                      ?>
                    </select> <br><br>
                    
                    <select style="width: 50%;" name="patient" id="patient">
                       <?PHP 
                      $conn = mysqli_connect("localhost","root","","csit314");
                       $select= "SELECT id FROM user WHERE role='Patient'";
                      echo "<option>Select Patient</option>"; 
                      foreach ($conn->query($select) as $rw)
                      {
                          echo "<option value=$rw[id]>$rw[id]</option>"; 
                      }

                      ?>
                    </select> <br><br>
                    

                    <input style="background-color: #59788e;font-size: 10px;width:30%"type="submit" name="searchP" value="Search">

            </form>
            <br>

            <?php
              if (isset($_POST['searchP'])) 
              {
                $prescriptionid = $_REQUEST['pid'];
                $patientid = $_REQUEST['patient'];
                
                if($searchp->onSubmit($doctorId, $patientid))
                {
                  $searchp->getPrescriptions($doctorId, $patientid);
                }
                $searchp->displayViewPrescriptionPage();
                $searchp->getPrescription($prescriptionid);
              }
              if(isset($_POST['view']))
              {
                $searchp->displayViewPrescriptionDetailPage();
              }
            ?>
            <BR>
            </div>  
           </div>  
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".sidebarBtn");
  sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>