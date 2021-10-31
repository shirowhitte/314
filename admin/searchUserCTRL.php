<?php 

class searchUserControl
{
    public function onSubmit($role, $att, $search)
    {
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $check =  mysqli_query($conn, "SELECT * FROM user where role='$role' and $att rlike '$search'");
        $data = mysqli_fetch_array($check);  
        $result = mysqli_num_rows($check);  
        if ($result == 0) 
        {
            return false;
        }
        return true;  

    }

    public function validateFields($search)
    {
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $err = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $sea = mysqli_real_escape_string($conn, $_POST["search"]);
            $search = preg_replace('/\s+/',' ', $sea);
            if(empty($search))
            {
                $err = "Please fill in this field";
                return false;
            }
            else
            {
                $sea = mysqli_real_escape_string($conn, $_POST["search"]);
                $search = preg_replace('/\s+/',' ', $sea);
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



	public function getUserInfo($search) 
    {  
        $conn = mysqli_connect("localhost","root","","csit314");
        $role = $_POST['role'];
        $att = $_POST['att'];
        $sea = mysqli_real_escape_string($conn, $_POST["search"]);
        $search = preg_replace('/\s+/',' ', $sea);
        
        $sql = "SELECT * FROM user where role='$role' and $att rlike '$search'";
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

    public function displayUsersInfoPage()
    {
        $conn = mysqli_connect("localhost","root","","csit314");
        $role = $_POST['role'];
        $att = $_POST['att'];
        $sea = mysqli_real_escape_string($conn, $_POST["search"]);
        $search = preg_replace('/\s+/',' ', $sea);


        $sql = "SELECT * FROM user where role='$role' and $att rlike '$search'";
        $res = mysqli_query($conn, $sql);
              if(mysqli_num_rows($res)>0)
              {
                   
                        echo "<br><table width='100%' border='1'>\n";
                        echo "<tr><th>Role</th><th>ID</th><th>Name</th><th>Email</th><th>Gender</th><th>Mobile</th></tr>\n";
                        while($Row = $res->fetch_array())
                        {

                            echo "<tr><td>{$Row['role']}</td><td>{$Row['id']}</td>";
                            echo "<td>{$Row['name']}</td><td>{$Row['email']}</td>";
                            echo "<td>{$Row['gender']}</td><td>{$Row['mobile']}</td>";

                            ?>
                           
                            </tr>
                                    <?php
                        }
                    echo "</table>\n";
                    
              }
              else
              {
                 echo "0 records";

              }       
    }




}