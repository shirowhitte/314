<?php

class updateUserProfileCTRL
{
    public function displayUpdateUserProfilePage()
    {
        $conn = mysqli_connect("localhost","root","","csit314");
        $rolename = $_GET['rolename'];
      
                    $query = "select * from role where rolename='$rolename'" ;
                    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
            
                    $row = mysqli_fetch_array($res);
        ?>
        <form method="post" action="updateUserProfilePage.php?rolename=<?php echo $row['rolename']; ?>">
            <table width='100%' border='1'><br>
                <tr>
                    <td>Rolename</td>
                    <td><input style="width:300px;padding-left: 5px;" type ="text" value="<?php echo $row['rolename']; ?>" readonly name="rolename" required=""></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>
                     <input style="width:300px;padding-left: 5px;" type ="text" value="<?php echo $row['des']; ?>" name="des">
                    </select>

                    <td> 
                </tr>
            </table>
            <br>
                    <input style="font-size: 10px;"type="submit" name="updateUser" value="Update">
        </form>
        <?php

         
    } 
    public function onSubmit($role, $des) 
    {  
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $check = mysqli_query($conn, "SELECT rolename from role where rolename='$role'");  
        $data = mysqli_fetch_array($check);  
        $result = mysqli_num_rows($check);  
        if ($result == 1) {  
 
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
        $role = $_POST['rolename'];
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(empty($_POST['role']))
            {
                $err = "Please fill in this field";
                return false;
            }
            else
            {
                $role = $_POST['rolename'];
                $err="";
                return true;
            }
            return true;
       
        }
    }
    public function changeUserProfile($role, $des) 
    {
        $conn = mysqli_connect("localhost","root","","csit314");
        $sql = "select rolename, des from role where rolename='$role'"; 
        $result = mysqli_query($conn, $sql);
        $userRow = mysqli_fetch_array($result);
        if (isset($_POST['updateUser'])) 
        {
            $result=mysqli_query($conn,"UPDATE role SET rolename='$role', des='$des' WHERE rolename='$role'");

            if($result)
            {
                $abc = "Role: ".$role. " ". "has been modified.";
                ?>
                <script type="text/javascript">

                    var test="<?php echo $abc; ?>";
                </script>
                <?php
                echo '<script language="javascript">';
                 echo 'alert(test)';
                 echo '</script>';
                ?>
                <script>
                    
                    window.location.href = "viewUserProfile.php";
                </script>
                <?php
            }
            else
            {
                 echo "Error editing record"; 
            }
        }


    }

    public function displayErrMsg()
    {
        echo "Error editing field";
    }
 

   
}