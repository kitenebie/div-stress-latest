<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veritas College Of Irosin</title>
        <link rel="shortcut icon" href="../images/vci-logo.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <?php 
  include 'includes/config.php';
?>
</head>
<body>
   <?PHP 
if (isset($_GET['view'])) {
    $id = $_GET['view'];
    $sql = "SELECT * FROM `sendfile` WHERE `id` = $id";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($rows = mysqli_fetch_assoc($res)) {
            $status = $rows['status'];
            if ($status == 'unread') {
                $updateSqlRead = "UPDATE sendfile SET status = 'read' WHERE id = $id";
                $updateResultRead = mysqli_query($conn, $updateSqlRead);
                if ($updateResultRead) { 
                } else {
                    echo "<script>alert('Please try again');location.href='incoming-doc.php';</script> " ;
                }
            }
        }
    }
}
$modifiedTrackingNumber = '';
 if(isset($_GET['view'])){
     $id = $_GET['view'];
     $sql = "SELECT * FROM `sendfile` WHERE `id` = $id";
     $res = mysqli_query($conn, $sql);
     if (mysqli_num_rows($res) > 0) {
         while ($rows = mysqli_fetch_assoc($res)) {
            $id = $rows['id'];
            $trackingnumber = $rows['trackingnumber'];         
            $detail = $rows['detail'];
    
     
            $date = $rows['date'];

            $message = $rows['message'];
            $status = $rows['status'];
            $check1 = $rows['check1'];
            $check2 = $rows['check2'];
            $check3 = $rows['check3'];
            $check4 = $rows['check4'];
            $check5 = $rows['check5'];
            $check6 = $rows['check6'];
            $check7 = $rows['check7'];
            $check8 = $rows['check8'];
            $check9 = $rows['check9'];
      
            $check1quantity = $rows['check1quantity'];
            $check2quantity = $rows['check2quantity'];
            $check3quantity = $rows['check3quantity'];
            $check4quantity = $rows['check4quantity'];
            $check5quantity = $rows['check5quantity'];
            $check6quantity = $rows['check6quantity'];
            $check7quantity = $rows['check7quantity'];
            $check8quantity = $rows['check8quantity'];
            $check9quantity = $rows['check9quantity'];
       
         }
        }
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

     
 }

?>
<div class="header">
    <img src="../images/vci-logo.jpg" width="5%" height="auto" alt="">
  
</div><br>
<div class="container-fluid">
<div class="container">
    <div class="inner-head">
    <p><?php echo $date  ?></p>
    <?php
 ?>
 <p>TRACKING NUMBER: <?php echo $trackingnumber ?></p>
    </div>
    <div class="inner-data">
    <label for="" style="font-weight:700">TYPE OF DOCUMENTS:
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
    <p>Purpose:<br><?php echo $detail  ?></p>
    </div>
  <div class="message-container">
    <p >Message:</p>
    <h3 class="message"><?php echo $message  ?></h3>
  </div> 
   
    <div class="button">
        <a href="incoming-doc.php">Back</a>
    </div>
</div>
</div>
</body>
</html>
<style>
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }.container{
        border-radius: 0px;
background: #f6eeee;
box-shadow:  5px 5px 10px #c0baba,
             -5px -5px 10px #ffffff;
             padding:30px;
          
    }.header{
        display:flex;
        padding:30px;
    }.inner-head{
    display:flex;
    justify-content:end;
    align-items:end;
    flex-direction:column;
    }a[href="incoming-doc.php"]{
        text-decoration:none;
        color:black;
        border:1px solid white;
        padding:10px;

    background:green;
    color:white;
    }.button{
    display:flex;
    justify-content:right;
    }a[href="<?php echo $filename ?>"]{
        text-decoration:none !important;
        color:white !important;
        background:black !important;
        padding:10px !important;
    }.container-file{
        width:fit-content;
    }p{
        font-weight:700;
    }@media (max-width:800px){
        p{
            font-size:10px;
        }#file,a[href="incoming-doc.php"]{
            font-size:10px;
        }img[src="../images/vci-logo.jpg"]{
            width:10%;
        }
    }
</style>
<script>
    let file = document.getElementById("file");
    let situation  = "<?php echo $nofile  ?>";
    if (situation == "nofile"){
        file.style.display = "none";
    }else{
        file.style.display = "block";
    };
   

   
</script>