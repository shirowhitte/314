<?php
include_once 'adminLoginCTRL.php';//connection
include_once 'adminLogoutCTRL.php';//connection
include_once 'viewUserProfileCTRL.php';//connection
include_once 'viewUsersCTRL.php';
include_once '../assets/conn/dbconnect.php';//connectio

session_start();

$viewUserProfile = new viewUserProfileCTRL();
$updateUserProfile = new updateUserProfileCTRL();
$admin = new adminLoginCTRL();  

$adminId = $_SESSION['id'];//get id
$adminPw = $_SESSION['password'];//get id

if (!$admin->session())
    {  
        header("Location:../adminLoginPage.php");  
    }

$adminLogout = new adminLogoutCTRL();  

if(isset($_POST['logout'])) 
{
  $adminLogout->logout();
  header('Location: ../adminLoginPage.php'); //exit to home page
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add User</title>
        <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/material.css" rel="stylesheet">
        <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
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
        user-container
        {
          width: 100%;
          height: 80%;
        }
        table { page-break-inside:auto; text-align: center;}
        tr,th   { page-break-inside:avoid; page-break-after:auto;text-align: center; height: 50px;}

        a
        {
          color: white;
          font-size: 20px;
          padding-bottom: 5px;
        }
   		</style>
    </head>

<body>
  <div class="sidebar">
    <div class="logo-details">
        </li>
        </li>
      <i class='bx bx-clinic'></i>
      <span class="logo_name">E-Prescription</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="adminPage.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-user-circle' ></i>
            <span class="links_name">Doctor</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user-circle' ></i>
            <span class="links_name">Pharmacist</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-user-rectangle' ></i>
            <span class="links_name">Patient</span>
          </a>
        </li>
        <li>
          <a href="viewUserProfile.php" class="active">
            <i class='bx bx-street-view'></i>
            <span class="links_name">View User Profile</span>
          </a>
        </li>
        <li>
          <a href="addUserPage.php"  >
            <i class='bx bx-user-plus' ></i>
            <span class="links_name">Add New User</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
      	<h2> <b> Welcome, <?php echo $admin->verifyUser($adminId, $adminPw);?> </b></h2> 
      </div>  
       <form method = "POST" >
              	<input type = "submit" value="Log Out" name="logout" />
            </form>
     
    </nav>

    <div class="home-content">
    

        <div class="sales-boxes">
        <div class="recent-sales box" style="height: 700px;">
          <div class="title" >
            UPDATE USER PROFILE <BR>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
              $id = $_REQUEST['id'];
              $role = $_REQUEST['role'];
              $updateUserProfile->changeUserRole($id, $role);
            }
            else
            {
              $id = $_REQUEST['id'];
              $role = " ";
              $updateUserProfile->changeUserRole($id, $role);
            }
            ?>
          </div>
          <h1><a href="viewUserProfile.php"><b><i class="fa fa-home" aria-hidden="true"></i> &nbsp;Back</a></h1><br><br>
            
            
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