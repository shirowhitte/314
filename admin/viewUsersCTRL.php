<?php 

class viewUsersControl
{
	public function getUserListing() 
    {  
        $conn = mysqli_connect("localhost","root","","csit314");
        $role  = $_POST['role'];
              if($role=="Admin")
              {
                    $query = "select * from user where role='Admin'";
                    $res = mysqli_query($conn, $query);
                    if(mysqli_num_rows($res)>0)
                    {
                        echo "<br><table width='100%' border='1'>\n";
                        echo "<tr><th>Role</th><th>Admin ID</th><th>Name</th><th>Email</th><th>Gender</th><th>Mobile</th><th>View</th></tr>\n";
                        while($Row = $res->fetch_array())
                        {

                            echo "<tr><td>{$Row['role']}</td><td>{$Row['id']}</td>";
                            echo "<td>{$Row['name']}</td><td>{$Row['email']}</td>";
                            echo "<td>{$Row['gender']}</td><td>{$Row['mobile']}</td>";

                            ?>
                            <td><form method="post" action="viewUsersPage.php">
                            	<input type="hidden" name="id" value="<?php echo $Row['id']; ?>">
                            	<input style="background-color: #016064;font-size: 10px;width:50% "type="submit" name="view" value="Details"></td>
                            </tr>
                        </form>
                                    <?php
                        }
                    echo "</table>\n";
                    }
              }
              else if ($role=="Patient")
              {
                    $query = "select * from user where role='Patient'";
                    $res = mysqli_query($conn, $query);
                    if(mysqli_num_rows($res)>0)
                    {
                        echo "<br><table width='100%' border='1'>\n";
                        echo "<tr><th>Role</th><th>Patient ID</th><th>Name</th><th>Email</th><th>Gender</th><th>Mobile</th><th>View</th></tr>\n";
                        while($Row = $res->fetch_array())
                        {

                            echo "<tr><td>{$Row['role']}</td><td>{$Row['id']}</td>";
                            echo "<td>{$Row['name']}</td><td>{$Row['email']}</td>";
                            echo "<td>{$Row['gender']}</td><td>{$Row['mobile']}</td>";

                            ?>
                            <td><form method="post" action="viewUsersPage.php">
                            	<input type="hidden" name="id" value="<?php echo $Row['id']; ?>">
                            	<input style="background-color: #016064;font-size: 10px;width:50% "type="submit" name="view" value="Details"></td>
                            </tr>
                        </form>
                                    <?php
                        }
                    echo "</table>\n";
                    }
              }
              else if($role=="Pharmacist")
              {
                    $query = "select * from user where role='Pharmacist'";
                    $res = mysqli_query($conn, $query);
                    if(mysqli_num_rows($res)>0)
                    {
                        echo "<br><table width='100%' border='1'>\n";
                        echo "<tr><th>Role</th><th>Pharmacist ID</th><th>Name</th><th>Email</th><th>Gender</th><th>Mobile</th><th>View</th></tr>\n";
                        while($Row = $res->fetch_array())
                        {

                            echo "<tr><td>{$Row['role']}</td><td>{$Row['id']}</td>";
                            echo "<td>{$Row['name']}</td><td>{$Row['email']}</td>";
                            echo "<td>{$Row['gender']}</td><td>{$Row['mobile']}</td>";

                            ?>
                             <td><form method="post" action="viewUsersPage.php">
                            	<input type="hidden" name="id" value="<?php echo $Row['id']; ?>">
                            	<input style="background-color: #016064;font-size: 10px;width:50% "type="submit" name="view" value="Details"></td>
                            </tr>
                        </form>
                                    <?php
                        }
                    echo "</table>\n";
                    }
              }
              else
              {
                    $query = "select * from user where role='Doctor'";
                    $res = mysqli_query($conn, $query);
                    if(mysqli_num_rows($res)>0)
                    {
                        echo "<br><table width='100%' border='1'>\n";
                        echo "<tr><th>Role</th><th>Doctor ID</th><th>Name</th><th>Email</th><th>Gender</th><th>Mobile</th><th>View</th></tr>\n";
                        while($Row = $res->fetch_array())
                        {

                            echo "<tr><td>{$Row['role']}</td><td>{$Row['id']}</td>";
                            echo "<td>{$Row['name']}</td><td>{$Row['email']}</td>";
                            echo "<td>{$Row['gender']}</td><td>{$Row['mobile']}</td>";

                            ?>
                             <td><form method="post" action="viewUsersPage.php">
                            	<input type="hidden" name="id" value="<?php echo $Row['id']; ?>">
                            	<input style="background-color: #016064;font-size: 10px;width:50% "type="submit" name="view" value="Details"></td>
                            </tr>
                        </form>
                                    <?php
                        }
                    echo "</table>\n";
                    }

              }  
    	}

    	public function getUsersInfo()
    	{
    		$conn = mysqli_connect("localhost","root","","csit314");
    		$id= $_POST['id'];
    		return $id;
    	}

    	public function displayUsersInfo()
    	{
    		$conn = mysqli_connect("localhost","root","","csit314");
    		$id = $_POST['id'];
    		$query = "select * from user where id=$id";
    		$result = mysqli_query($conn, $query);
    		$Row = mysqli_fetch_array($result);
    		?>

    		<br>
    		<table style="text-align:center;margin-left:auto;margin-right: auto;">
            <tbody>  
            <tr>
                    <td>Role</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['role']; ?>" name="role"required="" readonly  ></td>
                </tr>  
                <tr>
                    <td>ID</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['id']; ?>" name="id"required="" readonly  ></td>
                </tr>                       
                    <tr>
                    <td>Name</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['name'];  ?>" name="name" required="" readonly  ></td>
                </tr>
               
                 <tr>
                    <td>Gender</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['gender']; ?>" name="id"required="" readonly  ></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['mobile']; ?>" name="mobile"required="" readonly  ></td>
                </tr>
                
                <tr>
                    <td>Email</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['email']; ?>" name="email" readonly   required="">
                    </td>
                </tr>  
                <tr>
                    <td colspan="2"><a href="updateUserPage.php?id=<?php echo $Row['id']; ?>">Update Info</a>
                </tr>                                   
            </tbody>
        </table>


    		<?php 


    	}





}