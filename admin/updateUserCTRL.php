<?php 

class updateUserCTRL
{
	public function onSubmit($id, $name, $email, $mobile, $gender) 
    {  
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $check = mysqli_query($conn, "SELECT * from user where id='$id'");  
        $data = mysqli_fetch_array($check);  
        $result = mysqli_num_rows($check);  
        if ($result == 0) {  
 
            return false;  
        } 
        else 
        {  
            return true;  
        }  
        
      
    }

    public function validateFields($id, $name, $email, $mobile, $gender) 
    {
        $conn = mysqli_connect("localhost","root","","csit314");
        $err = "";
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $gender = $_POST['gender'];
  
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(empty($_POST['id'])||empty($_POST['name'])||empty($_POST['email'])||empty($_POST['mobile'])||empty($_POST['gender']))
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
                $gender = $_POST['gender'];
                $err="";
                return true;
            }
       
        }
    }

    public function updateUserAcc($id, $name, $email, $mobile,$gender) 
    {  
        $conn = mysqli_connect("localhost","root","","csit314");
        $checkuser = mysqli_query($conn, "SELECT id from user where id='$id'");  
        $result = mysqli_num_rows($checkuser); 
        if ($result == 1) 
        {  
                $updateUserAcc = mysqli_query($conn, "UPDATE `user` SET `name`='$name',`email`='$email',`gender`='$gender',`mobile`='$mobile' WHERE id='$id'") or die(mysqli_error($conn));
            
            return true;  
        } 
        return false;
        
        
    }

    public function displayErrMsg()
    {
        echo "<br><p style='background-color:white;color:blue;text-align:center;'>Error editing info.</p>";  
    }



    	public function displayUpdateUserPage()
    	{
    		$conn = mysqli_connect("localhost","root","","csit314");
    		$id = $_GET['id'];
    		$query = "select * from user where id=$id";
    		$result = mysqli_query($conn, $query);
    		$Row = mysqli_fetch_array($result);
    		?>

    		<br>
    		<table style="text-align:center;margin-left:auto;margin-right: auto;">
            <tbody>  
           
            <tr>
                    <td>Role</td>
                     <form method="post" action="updateUserPage.php?id=<?php echo $Row['id']; ?>">
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['role']; ?>" name="role"required="" readonly  ></td>
                </tr>  
                <tr>
                    <td>ID</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['id']; ?>" name="id"required="" readonly  ></td>
                </tr>                       
                    <tr>
                    <td>Name</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['name'];  ?>" name="name" required=""  ></td>
                </tr>
               
                 <tr>
                    <td>Gender</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['gender']; ?>" name="gender"required=""   ></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['mobile']; ?>" name="mobile"required=""  ></td>
                </tr>
                
                <tr>
                    <td>Email</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['email']; ?>" name="email" required="">
                    </td>
                </tr>  
                <tr>
                    <td></td>
                     <td><input type = "submit" value="Update" name="update" /></td>
                 </form>
                </tr>                                   
            </tbody>
        </table>


    		<?php 


    	}





}