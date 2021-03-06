<?php
include_once 'patientLoginCTRL.php';//connection
include_once 'patientLogoutCTRL.php';//connection
include_once '../assets/conn/dbconnect.php';//connectio

session_start();

$patient = new patientLoginCTRL();  

$patientId = $_SESSION['id'];//get id
$patientPw = $_SESSION['password'];//get id

if (!$patient->session())
    {  
        header("Location:patientLoginPage.php");  
    }

$patientLogout = new patientLogoutCTRL();  

if(isset($_POST['logout'])) 
{
  $patientLogout->logout();
  header('Location:patientLoginPage.php'); //exit to home page
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Patient Page</title>
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
          <a href="patientPage.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="viewCurrentPrescriptionPage.php">
            <i class='bx bx-check-square' ></i>
            <span class="links_name">View Current Record</span>
          </a>
        </li>
        <li>
          <a href="viewPreviousPrescriptionPage.php">
             <i class='bx bx-history' ></i>
            <span class="links_name">View Past Record</span>
          </a>
        </li>
        
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
      	<h2> <b> Welcome, <?php echo $patient->verifyUser($patientId, $patientPw); ?> </b></h2> 
      </div>  
       <form method = "POST" >
              	<input type = "submit" value="Log Out" name="logout" />
            </form>
     
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        
        <div class="box" style="width:100%">
          <div class="right-side" style="text-align: center;">
            <div class="box-topic">Today Date</div>
            <div class="number"><p>
            <script> document.write(new Date().toLocaleDateString()); </script>
            </p></div>
          </div>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box" style="width:100%;">
          <div class="title" ><h2 style="text-align: center;">The Uncollected Prescription</h2> 

            <?php
            $conn = mysqli_connect("localhost","root","","csit314");
            $query = "select * from prescription where patientid='$patientId ' and status='Uncollected' ORDER BY patientid DESC LIMIT 1";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result)>0)
            {
                while($Row = $result->fetch_array())
                {

            ?>
            <br>
                        <?php
                        $image = $Row['tokenid'].".png"; 
                        echo '<img style="float:left;" src="../doctor/img/'.$image.'" />';
                        ?><br><br><br>
                        <div style="text-align: left;">
                    Prescription ID&nbsp;:
                    <input style="border: none;" type ="text" value="<?php echo $Row['prescriptionid']; ?>" name="prescriptionid"required="" readonly  ><br>
                    Prescription Date&nbsp;:
                    <input  style="border: none;" type ="text" value="<?php echo $Row['prescriptiondate']; ?>" name="prescriptiondate"  required="" readonly><br>
                    Token ID&nbsp;:
                    <input  style="border: none;" type ="text" value="<?php echo $Row['tokenid']; ?>" name="tokenid"required="" readonly  ><br>
                    Status&nbsp;:
                    <input style="border: none;" type ="text" value="<?php echo  $Row['status'];?>" name="status" readonly>
                  </div><br>

                  <p>You can collect your drugs at any pharmacy.<br>
                    Simply show the pharmacist the provided token or scan the provided QR code by using the pharmacy's QR reader.</p>
        
            <?php 
            }
        }
        else
        {
          echo '<p style="text-align:center;"><br><BR><BR>No Records</p>';
        }

            ?>



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