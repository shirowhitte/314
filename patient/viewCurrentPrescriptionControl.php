<?php 

class viewCurrentPrescriptionControl
{

    public function onSubmit($status) 
    {  
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $check = mysqli_query($conn, "SELECT status from prescription");  
        $data = mysqli_fetch_array($check);  
        $result = mysqli_num_rows($check);  
        if ($result > 0) {  
 
            return true;  
        } 
        else 
        {  
            return false;  
        }  
    }
    public function getPrescriptions($patient_id, $status)
    {
        $conn = mysqli_connect("localhost","root","","csit314");
        $check = mysqli_query($conn, "SELECT * from prescription where patientid='$patient_id' and status='$status'");  
        $data = mysqli_fetch_array($check);  
        $result = mysqli_num_rows($check);  
        if ($result > 0)
        {  
            return true;  
        } 
        else 
        {  
            return false;  
        }  
    }
	public function displayViewPrescriptionPage() 
    {  
        $conn = mysqli_connect("localhost","root","","csit314");
        $patientId = $_SESSION['id'];//get id
        $query = "select * from prescription where status='Uncollected' and patientid='$patientId'";
        $res = mysqli_query($conn, $query);

                    if(mysqli_num_rows($res)>0)
                    {
                        echo "<br><table width='100%' border='1' style='text-align:center;'>\n";
                        echo "<tr ><th style='text-align:center;' >Prescription ID</th><th style='text-align:center;'>Doctor ID</th><th style='text-align:center;'>Token ID</th><th style='text-align:center;'>Drug ID</th><th style='text-align:center;'>Quantity</th><th style='text-align:center;'>Date</th><th style='text-align:center;'>View</th></tr>\n";
                        while($Row = $res->fetch_array())
                        {

                            echo "<tr><td>{$Row['prescriptionid']}</td><td>{$Row['doctorid']}</td>";
                            echo "<td>{$Row['tokenid']}</td>";
                            echo "<td>{$Row['drugid']}</td><td>{$Row['qty']}</td>";
                            echo "<td>{$Row['prescriptiondate']}</td>";

                            ?>
                            <td><form method="post" action="viewCurrentPrescriptionPage.php">
                            	<input type="hidden" name="id" value="<?php echo $Row['prescriptionid']; ?>">
                                <input type="hidden" name="drugid" value="<?php echo $Row['drugid']; ?>">
                            	<input style="background-color: #016064;font-size: 10px;width:100% "type="submit" name="view" value="Details"></td>
                            </tr>
                        </form>
                                    <?php
                        }
                    echo "</table>\n";
                    }
              
        
    	}

        public function getPrescription($prescription_id)
        {
            $conn = mysqli_connect("localhost","root","","csit314");
            $prescription_id = $_POST['id'];
            return $prescription_id;
        }

        public function displayViewPrescriptionDetailPage()
        {
            $conn = mysqli_connect("localhost","root","","csit314");
            $prescribeid= $_POST['id'];
            $drugid= $_POST['drugid'];
            $query = "select * from prescription where prescriptionid='$prescribeid' and drugid='$drugid'";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result)>0)
            {
                while($Row = $result->fetch_array())
                {

            ?>
            <br>
            <table style="text-align:center;margin-left:auto;margin-right: auto;">
            <tbody>  
                  <tr>       
                    <td colspan="2"> 
                        <?php
                        $image = $Row['tokenid'].".png"; 
                        echo '<img style="width:250px;height:250px;" src="../doctor/img/'.$image.'" />';
                        ?>
                </tr> 
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
                 <tr>
                    <td>Drug ID</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['drugid']; ?>" name="drugid" required=""readonly  >
                
                </tr>
                
                <tr>
                    <td>Quantity</td>
                    <td><input style="width:400px;padding-left: 100px;"type ="text" value="<?php echo  $Row['qty'];?>" name="qty" readonly  required="">
                    </td>
                </tr>  
                <tr>
                    <td>Status</td>
                    <td><input style="width:400px;padding-left: 100px;"type ="text" value="<?php echo  $Row['status'];?>" name="status" readonly>
                    </td>
                </tr> 
                  
                <tr>
                    <td colspan="2"><br><a href="viewCurrentPrescriptionPage.php" style="background-color: #016064;font-size: 20px;width:500px;">BACK</a></td>
                </tr>                                   
            </tbody>
        </table>
        </form>
    
            <?php 
            }
        }
        }

    




}