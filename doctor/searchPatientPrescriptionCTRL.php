<?php 

class searchPrescriptionControl
{
    public function onSubmit($doc_id, $patient_id)
    {
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $check =  mysqli_query($conn, "SELECT * FROM prescription where doctorid='$doc_id' and patientid='$patient_id'");
        $data = mysqli_fetch_array($check);  
        $result = mysqli_num_rows($check);  
        if ($result == 0) 
        {
            return false;
        }
        return true;  

    }

    public function getPrescriptions($doc_id, $patient_id)
    {
        $conn = mysqli_connect("localhost","root","","csit314");
        $doc_id= $_SESSION['id'];
        return $doc_id;
    }

    public function displayViewPrescriptionPage()
    {
        $conn = mysqli_connect("localhost","root","","csit314");
        $prescriptionid = $_REQUEST['pid'];
        $patientid = $_REQUEST['patient'];
        $sql = "SELECT * FROM prescription where (prescriptionid='$prescriptionid') or (patientid='$patientid')";
        $res = mysqli_query($conn, $sql);
              if(mysqli_num_rows($res)>0)
              {
                        echo "<br><table width='100%' border='1'>\n";
                        echo "<tr><th>Prescription</th><th>Doctor</th><th>Patient</th><th>Drug</th><th>Quantity</th><th>View</th></tr>\n";
                        while($Row = $res->fetch_array())
                        {

                            echo "<tr><td>{$Row['prescriptionid']}</td><td>{$Row['doctorid']}</td>";
                            echo "<td>{$Row['patientid']}</td><td>{$Row['drugid']}</td>";
                            echo "<td>{$Row['qty']}</td>";
                            ?>
                              <td><form method="post" action="searchPatientPrescriptionPage.php">
                                <input type="hidden" name="id" value="<?php echo $Row['prescriptionid']; ?>">
                                <input type="hidden" name="drugid" value="<?php echo $Row['drugid']; ?>">
                                <input style="background-color: #016064;font-size: 10px;width:100% "type="submit" name="view" value="Details"></td>
                            </form>
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

        public function getPrescription($prescription_id)
        {
            $conn = mysqli_connect("localhost","root","","csit314");
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
                    <td><input style="width:400px;padding-left: 100px;"type ="text" value="<?php echo  $Row['qty'];?>" name="qty" readonly  required="">
                    </td>
                </tr>  
                <tr>
                    <td>Status</td>
                    <td><input style="width:400px;padding-left: 100px;"type ="text" value="<?php echo  $Row['status'];?>" name="status" readonly>
                    </td>
                </tr> 
                  
                <tr>
                    <td><a href="searchPatientPrescriptionPage.php"  style="background-color: #016064;font-size: 10px;width:100%">BACK</a></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $Row['prescriptionid']; ?>">
                        <input type="hidden" name="drugid" value="<?php echo $Row['drugid']; ?>">
                        <input style="background-color: #016064;font-size: 10px;width:100%; "type="submit" name="view" value="Update">
                    </td>       
                </tr>                                   
            </tbody>
        </table>
        </form>
    
            <?php 
            }
        }
        }
    




}