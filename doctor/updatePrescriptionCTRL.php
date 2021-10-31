<?php
class updatePrescriptionCTRL
{
    public function getPrescription($id)
    {
        return $id;    
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
            <form method="post" action="updatePrescriptionPage.php">
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
                 <tr>
                    <td>Drug ID</td>
                    <td><input  style="width:400px;padding-left: 100px;"type ="text" value="<?php echo $Row['drugid']; ?>" name="drugid" required=""readonly  >
                
                </tr>
                
                <tr>
                    <td>Quantity</td>
                    <td><input style="width:400px;padding-left: 100px;"type ="text" value="<?php echo  $Row['qty'];?>" name="qty"  required="">
                    </td>
                </tr>  
                <tr>
                    <td>Status</td>
                    <td><input style="width:400px;padding-left: 100px;"type ="text" value="<?php echo  $Row['status'];?>" name="status" readonly>
                    </td>
                </tr> 
                  
                <tr>
                    <td style="height: 100px;" colspan="2">
                        <input type="submit" name="Update" value="Update">

                    </td>
                </tr>                                   
            </tbody>
        </table>
        </form>
    
            <?php 
            }
        }
    }

    
    public function onSubmit($quantity) 
    {  
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $check = mysqli_query($conn, "SELECT qty from prescription where qty=0");  
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

    public function validateFields($quantity)
    {
        $conn = mysqli_connect("localhost","root","","csit314");
            if(empty($quantity))
            {
                return false;
            }
            return true;
        
    }

    public function displayErrMsg()
    {
        echo "Please fill in this field";
        return false;
    }
        public function updatePrescription($doctorid, $patientid, $drugid, $quantity, $date)
        {
            $conn = mysqli_connect("localhost","root","","csit314");
            $prescriptionid = $_POST['prescriptionid'];   
            $drugid = $_POST['drugid'];          
                    $result=mysqli_query($conn,"UPDATE `prescription` SET `qty`='$quantity' WHERE prescriptionid='$prescriptionid' and drugid='$drugid'");

                    if($result)
                    {
                        $abc = "Prescription" . " ". "has been modified.";
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
                            
                            window.location.href = "viewPrescriptionPage.php";
                        </script>
                        <?php
                    }
                    else
                    {
                         echo "Error adding record"; 
                    }
                
            }
   
} 

