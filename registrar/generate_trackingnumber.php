<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate tracking number</title>
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
        }
        .container {
            padding: 20px;
            background: white;
        }
        input[type="submit"] {
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
        .but {
            display: flex;
            justify-content: end;
            gap: 10px;
        }
        .but a {
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
        textarea {
            width: 100%;
            padding: 10px;
        }
        .but a:hover {
            background: gray;
            transition: background-color 1s;
            color: white;
        }@media(max-width:800px){
            .but input{
                font-size:0.5rem;
            }  .but a{
                font-size:0.5rem;
            }
        }
    </style>
    <br>
    <div class="container">
        <?php
          include 'includes/config.php';
        if (isset($_GET['gtn'])) {
            $id = $_GET['gtn'];
            $sql = "SELECT * FROM `tbl_registrar` WHERE `id`= '$id'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
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
                    ?>
                    <form action="" method="POST">
                        <div class="hidden">
                            <input type="hidden" name="trackingnumber1" id="trackingnumber1">
                        </div>
                        <h1>GENERATE TRACKING NUMBER</h1>
                        <p>(Details)</p>
                        <label for="tod">TYPE OF DOCUMENTS:
                            <ul>
                                <?php if ($check1): ?>
                                    <li><?php echo $check1 ?>&nbsp;<?php echo $check1quantity ?>copy</li>
                                <?php endif; ?>
                                <?php if ($check2): ?>
                                    <li><?php echo $check2 ?>&nbsp;<?php echo $check2quantity ?>copy</li>
                                <?php endif; ?>
                                <?php if ($check3): ?>
                                    <li><?php echo $check3 ?>&nbsp;<?php echo $check3quantity ?>copy</li>
                                <?php endif; ?>
                                <?php if ($check4): ?>
                                    <li><?php echo $check4 ?>&nbsp;<?php echo $check4quantity ?>copy</li>
                                <?php endif; ?>
                                <?php if ($check5): ?>
                                    <li><?php echo $check5 ?>&nbsp;<?php echo $check5quantity ?>copy</li>
                                <?php endif; ?>
                                <?php if ($check6): ?>
                                    <li><?php echo $check6 ?>&nbsp;<?php echo $check6quantity ?>copy</li>
                                <?php endif; ?>
                                <?php if ($check7): ?>
                                    <li><?php echo $check7 ?>&nbsp;<?php echo $check7quantity ?>copy</li>
                                <?php endif; ?>
                                <?php if ($check8): ?>
                                    <li><?php echo $check8 ?>&nbsp;<?php echo $check8quantity ?>copy</li>
                                <?php endif; ?>
                                <?php if ($check9): ?>
                                    <li><?php echo $check9 ?>&nbsp;<?php echo $check9quantity ?>copy</li>
                                <?php endif; ?>    
                            </ul>
                        </label>
                        <div class="fullname">
                            <h3>Fullname</h3>
                            <p><?php echo $fullname ?></p>
                        </div>
                        <div class="date">
                            <h3>Date</h3>
                            <p><?php echo $date ?></p>
                        </div>
                        <div class="details">
                            <h3>Purpose</h3>
                            <textarea name="" id="" rows="2" readonly>
                                <?php echo $details ?>
                            </textarea>
                        </div>
                        <div class="but">
                            <input type="submit" value="Generate" name="generate" id="generate">
                            <a href="request.php">Cancel</a>
                        </div>
                    </form>
                <?php }
            }
        }
        if (isset($_POST['generate'])) {
            $trackingnumber1 = $_POST['trackingnumber1'];
            if($tracking_number == $trackingnumber1 ){
              echo "<script>alert(Error,please try again);location.href='request.php';</script>";
            }else{
            $update = "UPDATE `tbl_registrar` SET `tracking_number` = '$trackingnumber1' where `id` = '$id'";
            $result_update = mysqli_query($conn, $update);
            if ($result_update) {
                echo "<script>alert('Generated successfully');location.href='request.php';</script>";
            } else {
                echo "<script>alert('Error, Please try again');location.href='request.php';</script>";
            }
        }                
    }
        ?>
    </div>
</body>
</html>
<script>
   function generateRandomString(length) {
    const charset = "0123456789";
    const symbolMapping = {
        '1': '!',
        '2': '@',
        '3': '#',
        '4': '$',
        '5': '%',
        '6': '^',
        '7': '&',
        '8': '*',
        '9': '(',
        '0': ')',
    };

    let randomString = "";
    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * charset.length);
        const digit = charset.charAt(randomIndex);
        randomString += digit;
    }

    const trackingNumberWithSymbols = randomString.replace(/[0-9]/g, digit => symbolMapping[digit]);

    document.getElementById("trackingnumber1").value = trackingNumberWithSymbols;
}

// generate
generateRandomString(10);

//pag na click
document.getElementById("generateButton").addEventListener("click", function() {
    generateRandomString(10);
});

</script>
