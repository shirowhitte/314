<?php 

class viewPrescriptionControl
{
	public function getPrescriptionListing() 
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
                            <td><form method="post" action="updatePrescriptionPage.php">
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

    




}