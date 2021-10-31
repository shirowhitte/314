<?php

class pharmacistLogoutCTRL
{
	public function logout() 
    {  
        $_SESSION['pharmacistSession'] = false;  
        session_destroy();  
    }  

    public function displayPharmacistLogin()
    {
    	header("location:pharmacistLoginPage.php"); 
    }
}