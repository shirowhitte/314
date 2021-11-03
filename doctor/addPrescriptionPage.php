<?php
include_once 'doctorLoginCTRL.php';//connection
include_once 'doctorLogoutCTRL.php';//connection
include_once 'addPrescriptionCTRL.php';
include_once '../assets/conn/dbconnect.php';//connection
date_default_timezone_set('Asia/Singapore');

session_start();
$conn = mysqli_connect("localhost","root","","csit314");

$doctor = new doctorLoginCTRL();  

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
<?php 
             $connect = mysqli_connect("localhost", "root", "", "csit314");  
             if(isset($_POST["add_to_cart"]))  
             {  
                  if(isset($_SESSION["shopping_cart"]))  
                  {  
                       $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
                       if(!in_array($_GET["id"], $item_array_id))  
                       {  
                            $count = count($_SESSION["shopping_cart"]);  
                            $item_array = array(  
                                 'item_id'               =>     $_GET["id"],  
                                 'item_quantity'          =>     $_POST["quantity"]  
                            );  
                            $_SESSION["shopping_cart"][$count] = $item_array;  
                       }  
                       else  
                       {  
                            echo '<script>alert("Item Already Added")</script>';  
                            echo '<script>window.location="addPrescriptionPage.php"</script>';  
                       }  
                  }  
                  else  
                  {  
                       $item_array = array(  
                            'item_id'               =>     $_GET["id"],   
                            'item_quantity'          =>     $_POST["quantity"]  
                       );  
                       $_SESSION["shopping_cart"][0] = $item_array;  
                  }  
             }  
             if(isset($_GET["action"]))  
             {  
                  if($_GET["action"] == "delete")  
                  {  
                       foreach($_SESSION["shopping_cart"] as $keys => $values)  
                       {  
                            if($values["item_id"] == $_GET["id"])  
                            {  
                                 unset($_SESSION["shopping_cart"][$keys]);  
                                 echo '<script>alert("Item Removed")</script>';  
                                 echo '<script>window.location="addPrescriptionPage.php"</script>';  
                            }  
                       }  
                  }  
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
          <a href="addPrescriptionPage.php"  class="active">
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
            <h2 style="text-align: center;">Add Prescription</h2>
            <?php
            $conn = mysqli_connect("localhost","root","","csit314");
            $query = "select id from user where id=$doctorId";
            $result = mysqli_query($conn, $query);
            $Row = mysqli_fetch_array($result);

            ?>
            View Drugs<br><br>
            <form method="post" action="addPrescriptionPage.php">
              <input type="submit" name="addMedicine" value="+">
              <input type="submit" name="minusMedicine" value="-">
            </form>
             <div style="width:100%;">  
             
                <?php $addPres->getDrugs();?>
                <div></div> <br><br> 
            
           
            <form action="addPrescriptionPage.php" method="post">
           
            Doctor ID:
            <input style="border: none;"type="text" name="doctorid" id="doctorid" value="<?php echo $Row['id']; ?>"readonly>
            <br><br>
             Prescription ID 
            <input type="text" name="prescriptionid" required="">
            <br><br>
            Patient ID
            <select name="patientid" >
            <?php $addPres->getPatients();?>
            </select>****do not select id 2001, will send actual email to terrence****<br>



            
                <br />  
                <h3>Medicine Details</h3>  
                <div  >  
                     <table class="table table-bordered" >  
                          <tr >  
                               <th width="5%">ID</th>  
                               <th width="5%">Quantity</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                              <td><input type="text" value="<?php echo $values["item_id"]; ?>" name="drugid" readonly></td>  
                               <td><input type="text" value="<?php echo $values["item_quantity"]; ?>" name="qty" readonly></td>  
                      
                               <td><a href="addPrescriptionPage.php?action=delete&id=<?php echo $values["item_id"]; ?>">Remove</a></td>  


                          </tr>  
                          <?php  
                                    
                               }  
                          ?>  
                        
                          <?php  
                          }  
                          ?>  
                     </table> 
                      <input type="submit" value="Add" name="addp">
           </form> 
            <BR>

                </div>  
           </div>  
           <br />  
          

           <?php


        
           if (isset($_POST['addp'])) 
            {
              foreach($_SESSION["shopping_cart"] as $keys => $values)
              {
              if($addPres->onSubmit($values["item_quantity"]))
                {
                  $addPres->validateFields($values["item_quantity"]);
                  
                } 
                else
                {
                  $addPres->displayErrMsg();
                }
              }
              
              foreach($_SESSION["shopping_cart"] as $keys => $values) 
              {

                $token = $addPres->generateToken();
                $addPres->addPrescription($_REQUEST['prescriptionid'], $doctorId, $_REQUEST['patientid'], $values["item_id"], $values["item_quantity"], date("Y-m-d"), $token);
                

              }  
              $addPres->generateQR();

              $conn = mysqli_connect("localhost","root","","csit314");
              $pid = $_REQUEST['prescriptionid'];
              $q = "select * from prescription where prescriptionid='$pid'";
              $r = mysqli_query($conn, $q);
              $e = mysqli_fetch_array($r);

              $token = $e['tokenid'];
              $date = $e['prescriptionid'];

              $patientid = $_REQUEST['patientid'];
              $qu = "select * from user where id='$patientid'";
              $ru = mysqli_query($conn, $qu);
              $eu = mysqli_fetch_array($ru);

              $email = $eu['email'];
              $name = $eu['name'];

              $quq = "select * from token where tokenid='$token'";
              $ruq = mysqli_query($conn, $quq);
              $euq = mysqli_fetch_array($ruq);

              $qr = $euq['qr'];


              $addPres->sendEmail($email, $name, $token, $qr, $date);
                       
          
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