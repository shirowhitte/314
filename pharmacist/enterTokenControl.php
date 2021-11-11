<?php

class EnterTokenControl
{
	public function displaySearchTokenPage()
	{
		$conn = mysqli_connect("localhost","root","","csit314"); 
		?>
			<form method="post" action="enterTokenPage.php">
			<input type="text" name="token" id="token" required="">
			<input type="submit" name="enter" id="enter">
		</form>
		<?

	}

	public function onSubmit($tokenid)
    {
        $conn = mysqli_connect("localhost","root","","csit314"); 
        $sea = mysqli_real_escape_string($conn, $tokenid);
		$search = preg_replace('/\s+/',' ', $sea);
        $check =  mysqli_query($conn, "SELECT * FROM prescription where  concat_ws(' ',tokenid) rlike '$search'");
        $data = mysqli_fetch_array($check);  
        $result = mysqli_num_rows($check);  
        if ($result == 0) 
        {
            return false;
        }
        return true;  

    }

    public function validateFields($tokenid)
    {
    	$conn = mysqli_connect("localhost","root","","csit314");
        $err = "";
        $token = $_POST['token'];
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(empty($_POST['token']))
            {
                $err = "Please fill in this field";
                return false;
            }
            else
            {
                $token = $_POST['token'];
                $err="";
                return true;
            }
       
        }
    }


        public function displayErrMsg()
        {
        	echo "<br>";
        
        	
        	echo "<h4>Field Validation Failed</h4>";
        }

        public function displayErr1Msg()
        {
        	echo "<br>";
        	echo "No Records";
        }

        public function searchToken($tokenid)
        {
        	$conn = mysqli_connect("localhost","root","","csit314");
            $sea = mysqli_real_escape_string($conn, $tokenid);
			$search = preg_replace('/\s+/',' ', $sea);
			$query = "select * from prescription where concat_ws(' ',tokenid) rlike '$search'  order by tokenid='$tokenid' ";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result)>0)
            {
            	return true;
            }
            return false;

        }

        public function displayTokenPrescriptionPage()
        {
        	$conn = mysqli_connect("localhost","root","","csit314");
        	$tokenid = $_POST['token'];
            $sea = mysqli_real_escape_string($conn, $tokenid);
			$search = preg_replace('/\s+/',' ', $sea);
			$query = "select * from prescription where concat_ws(' ',tokenid) rlike '$search'  order by tokenid='$tokenid', status  DESC";
            $result = mysqli_query($conn, $query);
        	 if(mysqli_num_rows($result)>0)
              {
                        echo "<br><table width='100%' border='1' style='text-align:center;'>\n";
                        echo "<tr ><th style='text-align:center;'>Token ID</th><th style='text-align:center;'>Prescription</th><th style='text-align:center;'>Doctor</th><th style='text-align:center;'>Patient</th><th style='text-align:center;'>Drug</th><th style='text-align:center;'>Quantity</th><th style='text-align:center;'>Status</th><th style='text-align:center;'>Update</th></tr>\n";
                        while($Row = $result->fetch_array())
                        {

                            echo "<tr><td>{$Row['tokenid']}</td><td>{$Row['prescriptionid']}</td><td>{$Row['doctorid']}</td>";
                            echo "<td>{$Row['patientid']}</td><td>{$Row['drugid']}</td>";
                            echo "<td>{$Row['qty']}</td><td>{$Row['status']}</td>";
                            ?>
                              <td><form method="post" action="updatePrescriptionStatusPage.php">
                                <input type="hidden" name="tokenid" value="<?php echo $Row['tokenid']; ?>">
                                <input style="background-color: #016064;font-size: 10px;width:100% "type="submit" name="update" value="Dispense"></td>
                            </form>
                            </tr>
                                    <?php
                        }
                    echo "</table>\n";
                    
              }
           
        }


}


