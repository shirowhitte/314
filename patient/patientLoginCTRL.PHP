<?php

class patientLoginCTRL
{
    public function displayPatientLogin()
    {
        ?>
        <div class="container">
            <div class="login-container">
                <div class="avatar"></div>
                <div class="form-box">
                <form action="patientLoginPage.php" method="POST">
                    <input type="text" name="role" placeholder="Patient" readonly>
                    <br><br>
                    <input type="text" name="id" placeholder="Enter Patient ID" required>
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
        $role = "Patient";
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $check = mysqli_query($conn, "SELECT * from user where id='$id' and password='$password' and role='$role'");  
        $data = mysqli_fetch_array($check);  
        $result = mysqli_num_rows($check);  
        if ($result == 1) {  
            $_SESSION['patientSession'] = true;  
            $_SESSION['id'] = $data['id']; 
            $_SESSION['password'] = $data['password'];    
            return true;  
        } 
        else 
        {  
            return false;  
        }  
    }

    public function validateFields($id, $password)
    {
        $conn = mysqli_connect("localhost","root","","csit314");
        $err = "";
        $id = $_POST['id'];
        $password = $_POST['password'];
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(empty($_POST['id'])||empty($_POST['password']))
            {
                $err = "Please fill in this field";
                return false;
            }
            else
            {
                $id = $_POST['id'];
                $password = $_POST['password'];
                $err="";
                return true;
            }
       
        }
    }

    public function verifyUser($id,$password)
    {
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $sql="SELECT name, role , password FROM user WHERE id = '$id' and password='$password'";
        $result = mysqli_query($conn,$sql);
        $user_data = mysqli_fetch_array($result) or die( mysqli_error($conn));
        $res = mysqli_num_rows($result) or die( mysqli_error($conn));
        if($res==0)
        {
            return false;

        }
        else
        {
            echo $user_data['role'] ." " .$user_data['name'];
            $_SESSION['password'] = $user_data['password'];
            
        }
    }
  
    public function displayErrMsg()
    {
        echo "<br><p style='background-color:white;color:blue;text-align:center;'>Invalid ID or Password</p>";  
    }

    public function displayPatientPage()
    {
        $conn = mysqli_connect("localhost","root","","csit314"); 
        header("location:patientPage.php"); 
    }

    public function session() 
    {  
        if (isset($_SESSION['patientSession'])) 
        {  
            return $_SESSION['patientSession'];  
        }  
    }    
}