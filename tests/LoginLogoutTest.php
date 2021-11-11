<?php

// require __DIR__ . "/../admin/adminLoginCTRL.php";


class LoginLogoutTest extends \PHPUnit\Framework\TestCase {

    public static function onSubmit($id, $password) 
    {  
        $role = "Admin";
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $check = mysqli_query($conn, "SELECT * from user where id='$id' and password='$password' and role='$role'");  
        $data = mysqli_fetch_array($check);  
        $result = mysqli_num_rows($check);  
        if ($result == 1) {  
            $_SESSION['adminSession'] = true;  
            $_SESSION['id'] = $data['id']; 
            $_SESSION['password'] = $data['password'];    
            return true;  
        } 
        else 
        {  
            return false;  
        }  
    }

    public function testLoginWithRightDetails(): void{
        $this->assertEquals(
            true,
            LoginLogoutTest::onSubmit('1003', 'admc')
        );
    }

    public function testLoginWithWrongDetails(): void{
        $this->assertEquals(
            false,
            adminLoginCTRL::onSubmit('1003', 'admin1003')
        );
    }

}
