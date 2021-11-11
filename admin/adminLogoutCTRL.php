<?php

class adminLogoutCTRL
{
	public static function logout() 
    {  
        $_SESSION['adminSession'] = false;  
        $result = session_destroy();  
        if($result){
            return true;
        }
    }  

    public function displayAdminLogin()
    {
    	header("location:../adminLoginPage.php"); 
    }
}