<?php

class viewUserProfileCTRL
{
    
    
    public function getUserProfile() 
    {  
        $conn = mysqli_connect("localhost","root","","csit314");
      
                    $query = "select rolename, des from role";
                    $res = mysqli_query($conn, $query);
                    if(mysqli_num_rows($res)>0)
                    {
                        echo "<br><table width='100%' border='1'>\n";
                        echo "<tr><th>Role</th><th>Description</th><th>Update Role</th></tr>\n";
                        while($row = $res->fetch_array())
                        {

                            echo "<tr><td>{$row['rolename']}</td><td>{$row['des']}</td>";

                            ?>
                            <td><a href="updateUserProfilePage.php?rolename=<?php echo $row['rolename']; ?>">Update</i></a></td>
                            </tr>
                                    <?php
                        }
                    echo "</table>\n";
                    }
             
    }
}