<?php

class addUserPageCTRL
{
    public function displayAddUserPage()
    {
        ?>
        <div class="container">
            <div class="user-container">
                <div class="form-box">
                <form action="addUserPage.php" method="POST">
                    <label for="id">User ID</label><br>
                    <input type="text" name="id" placeholder="Enter User ID" required>
                    <br>
                    <label for="name">User Name</label><br>
                    <input type="text" name="name" placeholder="Enter Username" required>
                    <br>
                    <label for="email">User Email</label><br>
                     <input type="email" name="email" placeholder="Enter User Email" required>
                    <br>
                    <label for="mobile">User Mobile</label><br>
                    <input type="tel" name="mobile" placeholder="Enter User Mobile" required>
                    <br>
                    <label for="password">User Password</label><br>
                    <input type="password" name="password" placeholder="Enter User Password" required>
                    <br>
                     <label for="gender">Gender</label>
                    <select name="gender" id="gender">
                      <option value="Female">Female</option>
                      <option value="Male">Male</option>
                    </select>
                  
                    <label for="role">Role</label>
                    <select name="role" id="role">
                      <option value="Admin">Admin</option>
                      <option value="Patient">Patient</option>
                      <option value="Pharmacist">Pharmacist</option>
                      <option value="Doctor">Doctor</option>
                    </select> <br><br>
                     
                    <input type="submit" name="addUser" value="ADD USER">
                </form>
                </div>
            </div>
        </div>
        <?php
    }
    public function onSubmit($id, $name, $email, $mobile, $password, $gender, $role) 
    {  
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $check = mysqli_query($conn, "SELECT * from user where id='$id'");  
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

    public function validateFields($id, $name, $email, $mobile, $password, $gender , $role) 
    {
        $conn = mysqli_connect("localhost","root","","csit314");
        $err = "";
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $role = $_POST['role'];
  
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(empty($_POST['id'])||empty($_POST['name'])||empty($_POST['email'])||empty($_POST['mobile'])||empty($_POST['password'])||empty($_POST['gender'])||empty($_POST['name']))
            {
                $err = "Please fill in this field";
                return false;
            }
            else
            {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $password = $_POST['password'];
                $gender = $_POST['gender'];
                $role = $_POST['role'];
                $err="";
                return true;
            }
       
        }
    }

    public function createUserAcc($id, $name, $email, $mobile, $password ,$gender,$role) 
    {  
        $conn = mysqli_connect("localhost","root","","csit314");
        $checkuser = mysqli_query($conn, "SELECT id from user where id='$id'");  
        $result = mysqli_num_rows($checkuser); 
        if ($result == 0) 
        {  
                $createUserAcc = mysqli_query($conn, "INSERT INTO `user`(`id`, `name`, `email`, `password`, `gender`, `mobile`, `role`)values ('$id','$name','$email','$password','$gender','$mobile','$role')") or die(mysqli_error($conn));
            
            return true;  
        } 
        return false;
        
        
    }

   
  
    public function displayErrMsg()
    {
        echo "<br><p style='background-color:white;color:blue;text-align:center;'>User already exists.</p>";  
    }

    public function displayAdminPage()
    {
        $conn = mysqli_connect("localhost","root","","csit314"); 
        header("location:admin/adminPage.php"); 
    }
   
}