<?php
include_once 'pharmacistLoginCTRL.php';//connection
include_once '../assets/conn/dbconnect.php';//connectio
session_start();//session start

$pharmacist= new pharmacistLoginCTRL();    

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pharmacist Login</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
<link href="../assets/css/material.css" rel="stylesheet">
<style>
	body
	{
    	background-image: url("../assets/img/pharmacist.jpg");
	}
</style>
</head>

<body>
<div class="navigation">
    <br>
   		<h2 id="des"><b>Clinic Wollongong | Pharmacist Login</b></h2>   
        <div class="hi">                         
            <b>
            <!--link to user login-->
            <a href="../adminLoginPage.php" target="_self">Admin Login</a> 
            <a href="../patient/patientLoginPage.php" target="_self">Patient Login</a>
            <a href="pharmacistLoginPage.php" target="_self">Pharmacist Login</a>
            <a href="../doctor/doctorLoginPage.php" target="_self">Doctor Login</a>
            </b>
        </div>
        
</div>
<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST")
    {  
        $login = $pharmacist->onSubmit($_REQUEST['id'],$_REQUEST['password']);  
        if($login)
        { 
            $pharmacist->validateFields($_REQUEST['id'],$_REQUEST['password']);
            $pharmacist->displayPharmacistPage();

        }
        else
        {  
            $pharmacist->displayErrMsg();
        }  
    }   
	$pharmacist->displayPharmacistLogin();
?>

	<div class="end">             
	    <span class="fa fa-bookmark"></span>      
	    	<p><b>Clinic of Wollongong</b></p>
	        <p><b>Northfields Ave Wollongong, NSW 2522 Australia<br>
	        Phone: 1300 367 869<br>
	        International: +61 2 4221 3218<br>
	       	Copyright © 2021 Clinic of Wollongong</p><br>        
	</div>


</body>
</html>