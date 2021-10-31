<?php

require_once '../phpqrcode/qrlib.php';

class addPrescriptionCTRL
{
    public function getPatients()
    {
        $conn = mysqli_connect("localhost","root","","csit314");
         $select= "SELECT * FROM user where role='Patient'";
        foreach ($conn->query($select) as $rw)
        {
            echo "<option value=$rw[id]>$rw[id]</option>"; 
        }
        
         
    } 

    public function getDrugs()
    {
                $conn = mysqli_connect("localhost","root","","csit314");
                $query = "SELECT * FROM drug";  
                $result = mysqli_query($conn, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                        if (isset($_POST['addMedicine'])) 
                        {
                          ?>

                          <div class="col-md-4">  
                            <br>
                           <form method="post" action="addPrescriptionPage.php?action=add&id=<?php echo $row["drugid"]; ?>">  
                                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                                     <h4 class="text-info"><?php echo $row["drugid"]; ?></h4>  
                                     <h4 ><?php echo $row["drugname"]; ?></h4>  
                                     <input type="text" name="quantity" class="form-control" value="1" />    
                                     <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add Drug" />  
                                </div>  
                           </form> 
                           <br> 
                          </div>  

                          <?php
                        }
                        else if(isset($_POST['addMedicine'])) 
                        {
                                 
                        } 
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
    public function addPrescription($prescriptionid, $doctorid, $patientid, $drugid, $qty, $prescriptiondate, $tokenid) 
    {

        $conn = mysqli_connect("localhost","root","","csit314");
        $insert = mysqli_query($conn, "INSERT INTO `token`(`tokenid`, `qr`) VALUES ('$tokenid',NULL)");
        if($insert)
        {
            foreach($_SESSION["shopping_cart"] as $keys => $values) 
            {
            $drugid = $values["item_id"];
            $qty =  $values["item_quantity"];
               
        

            $result=mysqli_query($conn,"INSERT INTO `prescription`(`prescriptionid`, `doctorid`, `patientid`, `tokenid`, `drugid`, `qty`, `prescriptiondate`, `status`) VALUES ('$prescriptionid','$doctorid','$patientid','$tokenid','$drugid','$qty','$prescriptiondate','Uncollected')");

            if($result)
            {
                $abc = "Prescription" . " ". "has been added.";
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
                    
                    window.location.href = "addPrescriptionPage.php";
                </script>
                <?php
            }
            else
            {
                 echo "Error adding record"; 
            }
            }
        }
        


    }

    public function generateToken()
    {   
        $doctorId = $_SESSION['id'];//get id
        $token = $_REQUEST['prescriptionid']."-".$doctorId."-".$_REQUEST['patientid']; 
        return $token; 
    }

    public function generateQR()
    {
        
        $doctorId = $_SESSION['id'];//get id
        $token = $_REQUEST['prescriptionid']."-".$doctorId."-".$_REQUEST['patientid']; 
        $path = 'img/';
        $file = $path.$token.".png";
        $filename = $token.".png";;
        $conn = mysqli_connect("localhost","root","","csit314");
        $insert = mysqli_query($conn, "UPDATE token SET qr='$filename' WHERE tokenid='$token'");
        if($insert)
        {
            $text = "Doctor ID:". $doctorId."\r\n";
            $text .= "Patient ID:". $_REQUEST['patientid']."\r\n";
            $text .= "Prescription ID:". $_REQUEST['prescriptionid']."\r\n";

            foreach($_SESSION["shopping_cart"] as $keys => $values) 
            {
                $text .= "Drug ID:". $values["item_id"]."\r\n";
                $text .= "Drug Qtt:". $values["item_quantity"]."\r\n";
                   
            }  
            QRcode::png($text, $file,'L', 10);
        }        
    }

    public function sendEmail($email, $name, $token, $qr, $date)
    {
        require 'EmailConfig.php';

        $config = new EmailConfig;
        
        $mail = $config->config();
        $mail->addAddress($email);
        $mail->Subject = "Prescription token and QR for ". $name;
        $body = '<p> Dear ' . $name . ',';
        $body .= '<p> Your token for prescription issued on ' . $date . ' is: ' . $token . '.</p>';
        $body .= '<p> You can collect your drugs at any pharmacy. </p>';
        $body .= '<p> Simply show the pharmacist the provided token or scan the provided QR code by using the pharmacy\'s QR reader. </p>';
        $body .= '<p> ** Message automatically generated by Borderland Squids Sys ** </p>';
        $mail->addAttachment('img/'.$qr); //specify the filepath to your QR image folder here

        $mail->Body = $body;
        
        if ($mail->send()) {
            return true;
        } else {
            return false;
        }
    }


 

   
} 




             