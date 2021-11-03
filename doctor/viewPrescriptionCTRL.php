<?php 

class viewPrescriptionControl
{
    public function getPrescriptions($doc_id)
    {
        $conn = mysqli_connect("localhost","root","","csit314");
        $doc_id= $_SESSION['id'];
        return $doc_id;
    }
	public function displayViewPrescriptionPage() 
    {  
        $conn = mysqli_connect("localhost","root","","csit314");
        $query = "select * from prescription where status='Uncollected'";
        $res = mysqli_query($conn, $query);

                    if(mysqli_num_rows($res)>0)
                    {
                        echo "<br><table width='100%' border='1' style='text-align:center;'>\n";
                        echo "<tr ><th style='text-align:center;' >Prescription ID</th><th style='text-align:center;'>Doctor ID</th><th style='text-align:center;'>Patient ID</th><th style='text-align:center;'>Token ID</th><th style='text-align:center;'>Drug ID</th><th style='text-align:center;'>Quantity</th><th style='text-align:center;'>Date</th><th style='text-align:center;'>Status</th><th style='text-align:center;'>View</th></tr>\n";
                        while($Row = $res->fetch_array())
                        {

                            echo "<tr><td>{$Row['prescriptionid']}</td><td>{$Row['doctorid']}</td>";
                            echo "<td>{$Row['patientid']}</td><td>{$Row['tokenid']}</td>";
                            echo "<td>{$Row['drugid']}</td><td>{$Row['qty']}</td>";
                            echo "<td>{$Row['prescriptiondate']}</td><td>{$Row['status']}</td>";

                            ?>
                            <td><form method="post" action="viewPrescriptionPage.php">
                            	<input type="hidden" name="id" value="<?php echo $Row['prescriptionid']; ?>">
                                <input type="hidden" name="drugid" value="<?php echo $Row['drugid']; ?>">
                            	<input style="background-color: #016064;font-size: 10px;width:100% "type="submit" name="view" value="Details"></td>
                            </tr>
                        </form>
                                    <?php
                        }
                    echo "</table>\n";
                    }
                $conn = mysqli_connect("localhost","root","","csit314");
                $sql= "select * from prescription where status='Collected'";
                $r = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($r)>0)
                        {
                            echo "<br><table width='100%' border='1' style='text-align:center;'>\n";
                            echo "<tr><th style='text-align:center;'>Prescription ID</th><th style='text-align:center;'>Doctor ID</th><th style='text-align:center;'>Patient ID</th><th style='text-align:center;'>Token ID</th><th style='text-align:center;'>Drug ID</th><th style='text-align:center;'>Quantity</th><th style='text-align:center;'>Date</th><th style='text-align:center;'>Status</th></tr>\n";
                            while($collect = $r->fetch_array())
                            {

                                echo "<tr><td>{$collect['prescriptionid']}</td><td>{$collect['doctorid']}</td>";
                                echo "<td>{$collect['patientid']}</td><td>{$collect['tokenid']}</td>";
                                echo "<td>{$collect['drugid']}</td><td>{$collect['qty']}</td>";
                                echo "<td>{$collect['prescriptiondate']}</td><td>{$collect['status']}</td>";

                                ?>
                                </tr>
        
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
                    <td><a href="viewPrescriptionPage.php"  style="background-color: #016064;font-size: 10px;width:100%">BACK</a></td>
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