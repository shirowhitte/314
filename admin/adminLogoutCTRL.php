<?php

class adminLogoutCTRL
{
	public function logout() 
    {  
        $_SESSION['adminSession'] = false;  
        session_destroy();  
    }  

    public function displayAdminLogin()
    {
    	header("location:../adminLoginPage.php"); 
    }
}