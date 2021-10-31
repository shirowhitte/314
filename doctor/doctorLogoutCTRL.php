<?php

class doctorLogoutCTRL
{
	public function logout() 
    {  
        $_SESSION['doctorSession'] = false;  
        session_destroy();  
    }  

    public function displayDoctorLogin()
    {
    	header("location:doctorLoginPage.php"); 
    }
}