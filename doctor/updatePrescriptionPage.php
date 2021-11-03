<?php
include_once 'doctorLoginCTRL.php';//connection
include_once 'doctorLogoutCTRL.php';//connection
include_once 'addPrescriptionCTRL.php';
include_once 'updatePrescriptionCTRL.php';
include_once '../assets/conn/dbconnect.php';//connection

session_start();
$conn = mysqli_connect("localhost","root","","csit314");

$doctor = new doctorLoginCTRL();  
$update = new updatePrescriptionCTRL();
$addPres = new addPrescriptionCTRL();  

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

        .title input:read-only { 
        background-color: lightgray;
        color:  gray;
      }

      th, td
      {
        height: 60px;
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
          <a href="addPrescriptionPage.php">
            <i class='bx bx-first-aid' ></i>
            <span class="links_name">Add Prescription</span>
          </a>
        </li>
        <li>
          <a href="searchPatientPrescriptionPage.php">
            <i class='bx bx-search-alt'></i>
            <span class="links_name">Search Prescription</span>
          </a>
        </li>
        <li>
          <a href="viewPrescriptionPage.php" class="active">
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

            <?php

            if(isset($_POST['view']))
            {
              echo "<h2 style='text-align:center;'>Update Prescription</h2>";
              $prescribeid= $_POST['id'];
              $update->getPrescription($prescribeid);
              

              $update->displayViewPrescriptionDetailPage();
            }

              if(isset($_POST['Update']))
              {
    
                    $quantity =  $_POST['qty'];
                    $status = $_POST['status'];
                    $date = $_POST['prescriptiondate'];
                    $doctorid = $_POST['doctorid'];
                    $patientid = $_POST['patientid'];
                    $quantity =  $_POST['qty'];
                    $drugid=  $_POST['drugid'];
                    if($update->onSubmit($quantity))
                    {
                      $update->validateFields($quantity);
                    }
                    else
                    {
                      $update->displayErrMsg();
                    }
                    $update->updatePrescription($doctorid, $patientid, $drugid, $quantity, $date);
            
              }

            ?>

            </div>  
           </div>  
           <br/>  
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