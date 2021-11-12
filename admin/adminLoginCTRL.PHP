<?php

class adminLoginCTRL
{
    public function displayAdminLogin()
    {
        ?>
        <div class="container">
            <div class="login-container">
                <div class="avatar"></div>
                <div class="form-box">
                <form action="adminLoginPage.php" method="POST">
                    <input type="text" name="role" placeholder="Admin" readonly>
                    <br><br>
                    <input type="text" name="id" placeholder="Enter Admin ID" required>
                    <br>
                    <input type="password" name="password" placeholder="Password" required>
                    <br><br>
                    <input type="submit" name="login" value="Login">
                </form>
                </div>
            </div>
        </div>
        <?php
    }
    public function onSubmit($id, $password) 
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


    public static function validateFields($id, $password)
    {
        $validateCount = 0;
        if (preg_match("/^\+?[0-9]{4}$/", $id) && preg_match("/^[A-Za-z\d]{4,}$/", $password)) { // id = 4 digits, password = 4 char minimum
            $validateCount++;
        }

        if (!empty($id) || !empty($password)) {
            $validateCount++;
        }

        if ($validateCount == 2) { // if inputs are valid and not null
            return true;
        } else {
            return false;
        }

    }

    public function verifyUser($id,$password)
    {
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $sql="SELECT name, role , password FROM user WHERE id = '$id' and password='$password'";
        $result = mysqli_query($conn,$sql);
        $user_data = mysqli_fetch_array($result)  or die( mysqli_error($conn));
        $res = mysqli_num_rows($result) or die( mysqli_error($conn));
        if($res==1)
        {
            echo $user_data['role'] ." " .$user_data['name'] ;
            $_SESSION['password'] = $user_data['password'];
            return true;

        }
        return false;
    }
  
    public function displayErrMsg()
    {
        echo "<br><p style='background-color:white;color:blue;text-align:center;'>Invalid ID or Password</p>";  
    }

    public function displayAdminPage()
    {
        $conn = mysqli_connect("localhost","root","","csit314"); 
        header("location:admin/adminPage.php"); 
    }

    public function session() 
    {  
        if (isset($_SESSION['adminSession'])) 
        {  
            return $_SESSION['adminSession'];  
        }  
    }    
}