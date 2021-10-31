<?php

class patientLogoutCTRL
{
	public function logout() 
    {  
        $_SESSION['patientSession'] = false;  
        session_destroy();  
    }  

    public function displayPatientLogin()
    {
    	header("location:patientLoginPage.php"); 
    }
}