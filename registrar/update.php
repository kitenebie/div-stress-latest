<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VCI (registrar)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="../images/vci-logo.jpg" type="image/x-icon">
</head>
<body>
<?php
   include 'includes/config.php';

if (isset($_GET['update'])) {
    $requestId = $_GET['update'];

    $updateSqlOngoing = "UPDATE tbl_registrar SET status = 'Received' WHERE `id` = '".$requestId."'";
    $updateResultOngoing = mysqli_query($conn, $updateSqlOngoing);

    if (!$updateResultOngoing) {
        echo "Error updating status: " . mysqli_error($conn);
    }
}   

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    $sql = "SELECT * FROM `tbl_registrar` WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($rows = mysqli_fetch_assoc($result)) {
            $id = $rows['id'];
        
            $details = $rows['details'];
     
     
       
            $fn = $rows['firstname'];
            $mn = $rows['middlename'];
            $ln = $rows['lastname'];
            $fullname = $fn . ' ' . $ln . ' ' . $mn;
            $date = $rows['posted_date'];
            $unread = $rows['status'];
            $tracking_number = $rows['tracking_number'];
       
            $visibility = $rows['visibility'];
            $check1 = $rows['check1'] != null ? $rows['check1'] :0;
            $check2 = $rows['check2'] != null ? $rows['check2'] :0;
            $check3 = $rows['check3'] != null ? $rows['check3'] :0;
            $check4 = $rows['check4'] != null ? $rows['check4'] :0;
            $check5 = $rows['check5'] != null ? $rows['check5'] :0;
            $check6 = $rows['check6'] != null ? $rows['check6'] :0;
            $check7 = $rows['check7'] != null ? $rows['check7'] :0;
            $check8 = $rows['check8'] != null ? $rows['check8'] :0;
            $check9 = $rows['check9'] != null ? $rows['check9'] :0;
         
            $check1quantity = $rows['check1quantity'] != 0 ? $rows['check1quantity'] : 0;
            $check2quantity = $rows['check2quantity'] != 0 ? $rows['check2quantity'] : 0;
            $check3quantity = $rows['check3quantity'] != 0 ? $rows['check3quantity'] : 0;
            $check4quantity = $rows['check4quantity'] != 0 ? $rows['check4quantity'] : 0;
            $check5quantity = $rows['check5quantity'] != 0 ? $rows['check5quantity'] : 0;
            $check6quantity = $rows['check6quantity'] != 0 ? $rows['check6quantity'] : 0;
            $check7quantity = $rows['check7quantity'] != 0 ? $rows['check7quantity'] : 0;
            $check8quantity = $rows['check8quantity'] != 0 ? $rows['check8quantity'] : 0;
            $check9quantity = $rows['check9quantity'] != 0 ? $rows['check9quantity'] : 0;

            $reverseSymbolMapping = array(
                '!' => '1',
                '@' => '2',
                '#' => '3',
                '$' => '4',
                '%' => '5',
                '^' => '6',
                '&' => '7',
                '*' => '8',
                '(' => '9',
                ')' => '0',
            );
            $reversedOriginalTrackingNumber = strrev($rows['tracking_number']);
            $modifiedTrackingNumber = strtr($reversedOriginalTrackingNumber, $reverseSymbolMapping);
            $email = $rows['email'];
            if (isset($_POST['submit'])) {
                $status1 =  $_POST['status2'];
                $status3 =  $_POST['status1'];
                $tracking_number1 =  $_POST['tracking_number1'];
                $fn =  $_POST['fn'];
                $ln =  $_POST['ln'];
                $mn =  $_POST['mn'];
              
                $nofile =  $_POST['nofile'];
                $details1 =  $_POST['details1'];
                $usercode1 =  $_POST['usercode1'];
              
                $datenow =  $_POST['datenow'];
                $body =  $_POST['body'];
                $stat =  $_POST['stat'];
                $visibility =  $_POST['visibility'];
                        $checks11 =  $rows['check1'] != null ? $rows['check1'] : 0;
                        $checks22 =  $rows['check2'] != null ? $rows['check2'] : 0;
                        $checks33 =  $rows['check3'] != null ? $rows['check3'] : 0;
                        $checks44 =  $rows['check4'] != null ? $rows['check4'] : 0;
                        $checks55 =  $rows['check5'] != null ? $rows['check5'] : 0;
                        $checks66 =  $rows['check6'] != null ? $rows['check6'] : 0;
                        $checks77 =  $rows['check7'] != null ? $rows['check7'] : 0;
                        $checks88 =  $rows['check8'] != null ? $rows['check8'] : 0;
                        $checks99 =  $rows['check9'] != null ? $rows['check9'] : 0;
                      
                        $check1quantity =  $rows['check1quantity'] != null ? $rows['check1quantity'] : 0;
                        $check2quantity =  $rows['check2quantity'] != null ? $rows['check2quantity'] : 0;
                        $check3quantity =  $rows['check3quantity'] != null ? $rows['check3quantity'] : 0;
                        $check4quantity =  $rows['check4quantity'] != null ? $rows['check4quantity'] : 0;
                        $check5quantity =  $rows['check5quantity'] != null ? $rows['check5quantity'] : 0;
                        $check6quantity =  $rows['check6quantity'] != null ? $rows['check6quantity'] : 0;
                        $check7quantity =  $rows['check7quantity'] != null ? $rows['check7quantity'] : 0;
                        $check8quantity =  $rows['check8quantity'] != null ? $rows['check8quantity'] : 0;
                        $check9quantity =  $rows['check9quantity'] != null ? $rows['check9quantity'] : 0;
                    
                        $tracking_number1 = $_POST['tracking_number1'];
                        $userCodeID = $rows['email'];
    
   
    $checkDuplicateQuery = "SELECT COUNT(*) as count FROM sendfile WHERE trackingnumber = '".$tracking_number1."'";
    $checkDuplicateResult = mysqli_query($conn, $checkDuplicateQuery);
      

                $updateQuery = "INSERT INTO `sendfile`(`usercode1`,`firstname`,`lastname`,`middlename`,`trackingnumber`,`detail`,`viewstatus`,`date`,`message`,`status`,`visibility`,`check1`,`check2`,`check3`,`check4`,`check5`,`check6`,`check7`,`check8`,`check9`,`check1quantity`,`check2quantity`,`check3quantity`,`check4quantity`,`check5quantity`,`check6quantity`,`check7quantity`,`check8quantity`,`check9quantity`) 
                values ('$userCodeID','$fn','$ln','$mn','$tracking_number1','$details1','$status3','$datenow','$body','$stat','$visibility','$checks11','$checks22','$checks33','$checks44','$checks55','$checks66','$checks77','$checks88','$checks99','$check1quantity','$check2quantity','$check3quantity','$check4quantity','$check5quantity','$check6quantity','$check7quantity','$check8quantity','$check9quantity')";

                $url = "https://script.google.com/macros/s/AKfycby_jOcTWZAekEvKJw0F6QjyCY8ZGznGmXQr12TCZBqAFZf7BdxblvO9NskJMA5saJ0/exec";
                $ch = curl_init($url);
                curl_setopt_array($ch, [
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POSTFIELDS => http_build_query([
                        "recipient" => $_POST['email'],
                        "subject" => $_POST['subject'],
                        "body" => $_POST['body']
                    ])
                ]);
                $result = curl_exec($ch);
                if ($result === false) {
                    echo "<script>alert('Error sending email. Check your internet connection.'); window.location='request.php';</script>";
                    exit();
                }
                curl_close($ch);

                $updateResult = mysqli_query($conn, $updateQuery);
                
                if ($updateResult) {
                    
                    $updatenew = "UPDATE `tbl_registrar` SET `status`='$status3' WHERE `id`='$id'";
                     $Results = mysqli_query($conn, $updatenew);
                     if($Results){
                        echo "<script>alert('sent successfully'); window.location='request.php';</script>";
                        exit();
                     }
                } else {
                    echo "<script>alert('request sent successful, but email sending failed'); window.location='request.php';</script>";
                    exit();
                }
            }
        }
    }
}            
        


?>
<br>
    <div class="container">
        <form method="post" action="">
        <input type="hidden" name="nofile" id="" value="nofile">
            <input type="hidden" name="fn" id="" value="<?php echo $fn  ?>">
            <input type="hidden" name="ln" id="" value="<?php echo $ln  ?>">
            <input type="hidden" name="mn" id="" value="<?php echo $mn  ?>">
            <input type="hidden" name="status2" value="read">
            <input type="hidden" name="stat" value="unread">
            <input type="hidden" name="details1" value="<?php echo $details   ?>">
            <input type="hidden" name="usercode1" value="<?php echo $usercode   ?>">
            <input type="hidden" name="to1" value="<?php echo $to   ?>">
            <input type="hidden" name="datenow" id="datenow">
            <input type="hidden" name="visibility"value="<?php echo $visibility   ?>">
            <input type="hidden" name="check1"value="<?php echo $check1   ?>">
            <input type="hidden" name="check2"value="<?php echo $check2   ?>">
            <input type="hidden" name="check3"value="<?php echo $check3  ?>">
            <input type="hidden" name="check4"value="<?php echo $check4   ?>">
            <input type="hidden" name="check5"value="<?php echo $check5 ?>">
            <input type="hidden" name="check6"value="<?php echo $check6 ?>">
            <input type="hidden" name="check7"value="<?php echo $check7 ?>">
            <input type="hidden" name="check8"value="<?php echo $check8 ?>">
            <input type="hidden" name="check9"value="<?php echo $check9 ?>">
            <input type="hidden" name="check10"value="<?php echo $check10 ?>">
              <input type="hidden" name="check1quantity" value="<?php echo $check1quantity   ?>">
            <input type="hidden" name="check2quantity" value="<?php echo $check2quantity   ?>">
            <input type="hidden" name="check3quantity" value="<?php echo $check3quantity  ?>">
            <input type="hidden" name="check4quantity" value="<?php echo $check4quantity   ?>">
            <input type="hidden" name="check5quantity" value="<?php echo $check5quantity ?>">
            <input type="hidden" name="check6quantity" value="<?php echo $check6quantity ?>">
            <input type="hidden" name="check7quantity" value="<?php echo $check7quantity ?>">
            <input type="hidden" name="check8quantity" value="<?php echo $check8quantity ?>">
            <input type="hidden" name="check9quantity" value="<?php echo $check9quantity ?>">
            <input type="hidden" name="check10quantity"value="<?php echo $check10quantity ?>">
       <center> <img src="../images/vci-logo.jpg" width="10%" height="auto" alt=""></center>
       <p>(Details)</p>
            <label for="tod">TYPE OF DOCUMENTS:
                <ul>
    <?php if ($check1): ?>
        <li><?php echo $check1 ?>&nbsp;<?php echo  $check1quantity ?>copy</li>
        
    <?php endif; ?>

    <?php if ($check2): ?>
        <li><?php echo $check2 ?>&nbsp;<?php echo  $check2quantity ?>copy</li>
    <?php endif; ?>

    <?php if ($check3): ?>
        <li><?php echo $check3 ?>&nbsp;<?php echo  $check3quantity ?>copy</li>
    <?php endif; ?>

    <?php if ($check4): ?>
        <li><?php echo $check4 ?>&nbsp;<?php echo  $check4quantity ?>copy</li>
    <?php endif; ?>

    <?php if ($check5): ?>
        <li><?php echo $check5 ?>&nbsp;<?php echo  $check5quantity ?>copy</li>
    <?php endif; ?>

    <?php if ($check6): ?>
        <li><?php echo $check6 ?>&nbsp;<?php echo  $check6quantity ?>copy</li>
    <?php endif; ?>

    <?php if ($check7): ?>
        <li><?php echo $check7 ?>&nbsp;<?php echo  $check7quantity ?>copy</li>
    <?php endif; ?>

    <?php if ($check8): ?>
        <li><?php echo $check8 ?>&nbsp;<?php echo  $check8quantity ?>copy</li>
    <?php endif; ?>

    <?php if ($check9): ?>
        <li><?php echo $check9 ?>&nbsp;<?php echo  $check9quantity ?>copy</li>
    <?php endif; ?>

</ul>
            </label>
            <label for="purpose">purpose:<br>
                <textarea name="" id="purpose" name="purpose" cols="30" rows="5" readonly><?php echo $details?></textarea>
            
            </label>
           
            <label for="user">Fullname:
            <input type="text" id="user" name="fullname" value="<?php echo $fullname;?>" readonly>
            </label>
            <label for="date">Date:
            <input type="text" id="date" name="date" value="<?php echo $date?>" readonly>
            </label>
            <label for="yearlevel">TRACKING NUMBER:
            <input type="text" id="number" name="tracking_number1" value="<?php echo $modifiedTrackingNumber?>" readonly>
            </label> 
            <p>(Actions)</p>
            <label for="">
            <select name="status1" id="status" required>
                <option value="" style="display:none">Request/Denied</option>
                <option value="Request Approved"> Request Approved</option>
                <option value="Request Denied">Request Denied</option>
            </select>
            </label>
            <div class="wrapper">
        <form action="index.php" method="post">
            <label for="email" style="display:none">Email<br>
                <input type="email" name="email" id="email" value="<?php echo $email   ?>">
            </label><br>
            <label for="subject" style="display:none">Subject<br>
                <input type="text" name="subject" value="Veritas College of Irosin">
            </label><br>
            <div class="form-floating">
  <textarea class="form-control" placeholder="Message" name="body" id="floatingTextarea2" style="height: 100px" required></textarea>
  <label for="floatingTextarea2">Message</label>
</div>
            <br><br>
            <div class="button">
            <input type="submit" name="submit" value="Save">
          <input type="button" value="Cancel" onclick="back()">
            </div>
         
        </form>
     
    </div>
           
        </form>
    </div>
    </div>
</body>
</html>
<style>
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }textarea{
        border:3px solid green !important; 
    }
    form{
        display:flex;
        flex-direction:column;
        width:50%;
        padding:20px;   
        height:auto;
        background:white;
        gap:20px;
        border:3px solid green;
    }.container{
      display:flex;
      justify-content:center;
    }input{
    
        background:transparent;
    } body{
            background-image:linear-gradient( to right bottom,green 50%, white 50%);
        }label{
        font-weight:bold;
    }select{
        width:50%;
        padding:10px;
    }input[type="submit"],input[type="button"]{
  color:white;
  cursor:pointer;
        width:100%;
        padding:10px;
        background:#1b5e20;
    }.button{
        display:flex;
        gap:10px;
    }input{
        border:none;
    }@media (max-width:800px){
        form{
            width:100%;
        }
    }textarea{
        width:100%;
        padding:20px;
    }
</style>
<script>
function back(){
    location.href="request.php";
}
let date_container = document.getElementById("datenow");
let datenow = new Date();
date_container.value = datenow;

</script>