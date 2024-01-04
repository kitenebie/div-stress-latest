<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document status</title>
    <link rel="shortcut icon" href="../images/vci-logo.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<style>
        * {
            padding: 0;
            box-sizing: border-box;
            margin: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        body {
            overflow-y: scroll;
            background-image: url(../images/abstract-paper-background-concept.jpg);
            width: 100%;
            height: auto;
            background-size: cover;
        }.container{
            background:white;
            padding:20px;
        }input{
            PADDING:10PX;
            width:100%;

        }label{
            width:100%;
        } input[type="submit"] {
            padding: 10px;
            width: 20%;
            border: 3px solid green;
            background: white;
        }
        input[type="submit"]:hover {
            background: green;
            transition: background-color 1s;
            color: white;
        }
        .butt {
            display: flex;
            justify-content: end;
            gap: 10px;
        }
        .butt a {
            text-decoration: none;
            background: gray;
            display: grid;
            align-items: center;
            padding: 10px;
            color: black;
            width: 20%;
            text-align: center;
            background: white;
            border: 3px solid gray;
        }
      
        .butt a:hover {
            background: gray;
            transition: background-color 1s;
            color: white;
        }
        </style>
        <br>
    <div class="container">
        <?php 
         include 'includes/config.php';
         if (isset($_GET['status'])) {
            $id = $_GET['status'];
   $sql = "SELECT * FROM `tbl_registrar` WHERE `id` = $id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
       while ($rows = mysqli_fetch_assoc($result)) {
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
           $check1status1 = $rows['check1status'];
           $check2status1 = $rows['check2status'];
           $check3status1 = $rows['check3status'];
           $check4status1 = $rows['check4status'];
           $check5status1 = $rows['check5status'];
           $check6status1 = $rows['check6status'];
           $check7status1 = $rows['check7status'];
           $check8status1 = $rows['check8status'];
           $check9status1 = $rows['check9status'];
           ?>
           <form action="" method="POST">
            <h1>UPDATE STATUS</h1>
           <p>(Details)</p>
                        <label for="tod">TYPE OF DOCUMENTS:
                            <ul>
                                <?php if ($check1): ?>
                                    <li><?php echo $check1 ?>&nbsp;<?php echo $check1quantity ?>copy</li>
                                    <input type="text" name="check1status" id="" value="<?php echo $check1status1 ?>">
                                <?php endif; ?>
                                <?php if ($check2): ?>
                                    <li><?php echo $check2 ?>&nbsp;<?php echo $check2quantity ?>copy</li>
                                    <input type="text" name="check2status" id="" value="<?php echo $check2status1 ?>">
                                <?php endif; ?>
                                <?php if ($check3): ?>
                                    <li><?php echo $check3 ?>&nbsp;<?php echo $check3quantity ?>copy</li>
                                    <input type="text" name="check3status" id="" value="<?php echo $check3status1 ?>">
                                <?php endif; ?>
                                <?php if ($check4): ?>
                                    <li><?php echo $check4 ?>&nbsp;<?php echo $check4quantity ?>copy</li>
                                    <input type="text" name="check4status" id="" value="<?php echo $check4status1 ?>">
                                <?php endif; ?>
                                <?php if ($check5): ?>
                                    <li><?php echo $check5 ?>&nbsp;<?php echo $check5quantity ?>copy</li>
                                    <input type="text" name="check5status" id="" value="<?php echo $check5status1 ?>">
                                <?php endif; ?>
                                <?php if ($check6): ?>
                                    <li><?php echo $check6 ?>&nbsp;<?php echo $check6quantity ?>copy</li>
                                    <input type="text" name="check6status" id="" value="<?php echo $check6status1 ?>">
                                <?php endif; ?>
                                <?php if ($check7): ?>
                                    <li><?php echo $check7 ?>&nbsp;<?php echo $check7quantity ?>copy</li>
                                    <input type="text" name="check7status" id="" value="<?php echo $check7status1 ?>">
                                <?php endif; ?>
                                <?php if ($check8): ?>
                                    <li><?php echo $check8 ?>&nbsp;<?php echo $check8quantity ?>copy</li>
                                    <input type="text" name="check8status" id="" value="<?php echo $check8status1 ?>">
                                <?php endif; ?>
                                <?php if ($check9): ?>
                                    <li><?php echo $check9 ?>&nbsp;<?php echo $check9quantity ?>copy</li>
                                    <input type="text" name="check9status" id="" value="<?php echo $check9status1 ?>">
                                <?php endif; ?>
                              
                            </ul>
                        </label>
                        <div class="butt">
                            <input type="submit" value="Update" name="update">
                            <a href="request.php">Cancel</a>
                        </div>
           </form>
    </div>

    <?php }} }?>
</body>
</html>
<?php
if (isset($_POST['update'])) {
    
    $check1status = isset($_POST['check1status']) ? $_POST['check1status'] : '';
    $check2status = isset($_POST['check2status']) ? $_POST['check2status'] : '';
    $check3status = isset($_POST['check3status']) ? $_POST['check3status'] : '';
    $check4status = isset($_POST['check4status']) ? $_POST['check4status'] : '';
    $check5status = isset($_POST['check5status']) ? $_POST['check5status'] : '';
    $check6status = isset($_POST['check6status']) ? $_POST['check6status'] : '';
    $check7status = isset($_POST['check7status']) ? $_POST['check7status'] : '';
    $check8status = isset($_POST['check8status']) ? $_POST['check8status'] : '';
    $check9status = isset($_POST['check9status']) ? $_POST['check9status'] : '';

    $update = "UPDATE `tbl_registrar` SET 
               `check1status`='$check1status',
               `check2status`='$check2status',
               `check3status`='$check3status',
               `check4status`='$check4status',
               `check5status`='$check5status',
               `check6status`='$check6status',
               `check7status`='$check7status',
               `check8status`='$check8status',
               `check9status`='$check9status' 
               WHERE `id`='$id'"; 

    $update_result = mysqli_query($conn, $update);

    if ($update_result) {
        echo "<script>alert('Updated successfully');location.href='request.php';</script>";
    } else {
        echo "<script>alert('Error, please try again');location.href='request.php';</script>";
    }
}
?>
