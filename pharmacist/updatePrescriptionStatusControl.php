<?php
class updatePrescriptionStatusCTRL
{

    public function onSubmit($tokenid)
    {
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $tokenid= $_POST['tokenid'];
        $check =  mysqli_query($conn, "SELECT * FROM prescription where tokenid='$tokenid'");
        $data = mysqli_fetch_array($check);  
        $result = mysqli_num_rows($check);  
        if ($result == 0) 
        {
            return false;
        }
        return true;  

    }


    public function displayTokenPrescriptionPage()
    {
            $conn = mysqli_connect("localhost","root","","csit314");
            $tokenid= $_POST['tokenid'];
            $query = "select * from prescription where tokenid='$tokenid' limit 1";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result)>0)
            {
                while($Row = $result->fetch_array())
                {

            ?>
            <br>
            <form method="post" action="updatePrescriptionStatusPage.php">
            <table style="text-align:center;margin-left:auto;margin-right: auto;">
            <tbody>  
            <tr>       
                    <td>Prescription ID</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['prescriptionid']; ?>" name="prescriptionid"required="" readonly  ></td>
                </tr> 
                <tr>
                    <td>Prescription Date&nbsp;</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['prescriptiondate']; ?>" name="prescriptiondate"  required="" readonly>
                    </td>
                </tr> 
                <tr>
                    <td>Doctor ID</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['doctorid']; ?>" name="doctorid"required="" readonly  ></td>
                </tr>                       
                <tr>
                    <td>Patient ID</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['patientid'];  ?>" name="patientid" required="" readonly  ></td>
                </tr>
                 <tr>
                    <td>Token ID</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['tokenid']; ?>" name="tokenid"required="" readonly  ></td>
                </tr>

                <?php
 
                $sql = "select * from prescription where tokenid='$tokenid' ";
                $count =1;
                 foreach($conn->query($sql) as $rw)
                 {
                    ?>
               
                
                 <tr>
                    <td>Drug ID <?php echo $count ?></td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $rw['drugid']; ?>" name="drugid" required=""readonly  >
                
                </tr>
                 <tr>
                    <td>Quantity <?php echo $count ?></td>
                    <td><input style="width:400px;padding-left: 100px;"type ="text" value="<?php echo  $rw['qty'];?>" name="qty"  readonly required="">
                    </td>
                </tr>  
                    <?php
                    $count++;
                    }
                    ?>
                
               
                <tr>
                    <td>Status</td>
                    <td><select style="width:300px;padding-left: 100px;" name="status" readonly>
                        <option value="Collected">Collected</option>
                        <option value="Uncollected">Uncollected</option>
                    </select>
                    </td>
                </tr> 
                  
                <tr>
                    <td><br><a href="enterTokenPage.php" style="background-color: #016064;font-size: 10px;width:100%">BACK TO TOKEN</a></td>
                    <td>
                         
                        <br><input style="background-color: #016064;font-size: 10px;width:100%; color: white; " type="submit" name="Update" value="Update">

                    </td>
                </tr>                                   
            </tbody>
        </table>
        </form>
    
            <?php 
            }
        }
    }

    public function updatePrescriptionStatus($tokenid)
    {
            $conn = mysqli_connect("localhost","root","","csit314");
            $tokenid= $_POST['tokenid'];
            $status= $_POST['status'];
            $result=mysqli_query($conn,"UPDATE prescription SET status='$status' where tokenid='$tokenid'");

                    if($result)
                    {
                        $abc = "Status" . " ". "update successfully.";
                        ?>
                        <script type="text/javascript">

                            var test="<?php echo $abc; ?>";
                        </script>
                        <?php
                        echo '<script language="javascript">';
                         echo 'alert(test)';
                         echo '</script>';
                        ?>
                        
                        <?php
                    }
                    else
                    {
                         echo "Error editing record"; 
                    }
                
    }

    public function displaySearchTokenPage()
    {
        ?>
        <script>               
            window.location.href = "enterTokenPage.php";
        </script>
         <?php

    }



    
    





}