<?php

class addUserProfileCTRL
{
    public function displayAddUserProfilePage()
    {
        ?>
        <div class="container">
            <div class="user-container">
                <div class="form-box">
                <form action="addUserProfilePage.php" method="POST">
                    <label for="New role"></label><br>
                    <input type="text" name="role" placeholder="Insert new role" required>
                    <br>     <br><br>
                    <input type="submit" name="addROLE" value="ADD NEW ROLE">
                </form>
                </div>
            </div>
        </div><?php
    }
    public function onSubmit($role) 
    {  
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $check = mysqli_query($conn, "SELECT rolename from role where rolename='$role'") or die( mysqli_error($conn));  
        $data = mysqli_fetch_array($check);  
        $result = mysqli_num_rows($check);  
        if ($result == 0) {  
 
            return true;  
        } 
        else 
        {
            return false;  
        }  
    }

    public function validateFields($role)
    {
        $conn = mysqli_connect("localhost","root","","csit314");
        $err = "";
        $role = $_POST['role'];
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(empty($_POST['role']))
            {
                $err = "Please fill in this field";
                return false;
            }
            else
            {
                $role = $_POST['role'];
                $err="";
                return true;
            }
            return true;
       
        }
    }
    public function addUserProfile($role)
    {
        $conn = mysqli_connect("localhost","root","","csit314");
        $add = mysqli_query($conn, "SELECT rolename from role where rolename='$role'") or die( mysqli_error($conn));  
        $result = mysqli_num_rows($add); 
        if ($result == 0) 
        {  
                $addUserProfile = mysqli_query($conn, "INSERT INTO `role`(`rolename`, `des`) VALUES ('$role',NULL)") or die(mysqli_error($conn));
                if($addUserProfile)
                {
                    echo "<br><p style='text-align:center;'>Added Successfully</p>";
                }
                return true;  
        }
 
        else
        {
            echo "<br><p style='text-align:center;'>Failed</p>";
            return false;
        }

    }

    
}