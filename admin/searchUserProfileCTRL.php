<?php 

class searchUserProfileControl
{
    public function onSubmit($role)
    {
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $check =  mysqli_query($conn, "SELECT * FROM user where role='$role'");
        $data = mysqli_fetch_array($check);  
        $result = mysqli_num_rows($check);  
        if ($result == 0) 
        {
            return false;
        }
        return true;  

    }

    public function validateFields($role)
    {
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $err = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $role = $_POST['role'];
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
       
        }
    }   

    public function displayErrMsg()
    {
        echo "User doesn't exist";
        return false;
    }



	public function getUserProfile($role) 
    {  
        $conn = mysqli_connect("localhost","root","","csit314");
        $role = $_POST['role'];
        
        $sql = "SELECT * FROM user where role='$role'";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res)>0)
        {
            return true;
        }
        else
        {
            return false;
        }
             
    }

    public function displayUserProfilePage()
    {
        $conn = mysqli_connect("localhost","root","","csit314");
        $role = $_POST['role'];

        $sql = "SELECT * FROM user where role='$role'";
        $counting = "SELECT COUNT(role) as total FROM user WHERE role='$role'";
        $result= $conn->query($counting);
        $data= $result->fetch_assoc();
        $res = mysqli_query($conn, $sql);

              if(mysqli_num_rows($res)>0)
              {
                   
                        echo "<br><table width='100%' border='1'>\n";
                        echo "<tr><th>Role</th><th>No of Users</th><th>View</th></tr>\n";
                    
                            echo "<tr><td>{$role}</td><td>{$data['total']}</td><td><a href='viewUserProfile.php'>Details</a></td>";
                           
                            

                            ?>
                           
                            </tr>
                                    <?php
                        
                    echo "</table>\n";
                    
              }
              else
              {
                 echo "0 records";

              }       
    }




}