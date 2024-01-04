<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Veritas College Of Irosin</title>
        <link rel="shortcut icon" href="../images/vci-logo.jpg" type="image/x-icon">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <?php include 'includes/config.php';
     
    ?>
        <style>
            *{
                padding:0;
                margin:0;
                box-sizing: border-box;
                font-family:'Times New Roman', Times, serif;
            }.container-fluid{
                background-image:transparent;
                padding: 20px;
                width:100%;
                height: 100vh;
            }.upper-header{
            width:5%;
            }
            header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 20px;
            }

            .row3 {
                display: flex;
                align-items: center;
                margin-top: 20px; 
            }
            
            #log-out{
                text-decoration: none;
                color:black;
                border:1px solid white;
                height: fit-content;
                padding: 10px;
                color:white;
            }a{
                text-decoration: none;
                color:black;
                font-weight: 700;
                font-size: 25px;
            }.row1{
                display: flex;
                flex-direction: column;
                border:3px solid green;
                width: 30%;
                padding: 20px;
                gap:20px;
            }.container-body{
                display: flex;
                gap:10px;
                
            }.row2{
                border:3px solid green;
                width: 100%;
                padding: 20px;
                gap:20px;
                display: flex;
                flex-direction: column;
             overflow-y:scroll;
            }body{
                    overflow-y:scroll;
                    background-image:url(../images/abstract-paper-background-concept.jpg);
                    width:100%;
                    height:auto;
                    background-size:cover;
                }

            label{
                color:white;
            display:flex;
            gap:20px;
            }form{
                display: flex;
                flex-direction: column;
            }select[class="form-select form-select-lg mb-3"]{
                width:20%;
                border-radius: 0px;
                font-size: 20px;
            }textarea{
                width:40%;
                height: 10vh;
            }input[type="submit"],input[type="button"]{
            padding:10px;
            font-weight: 700;
            }.button{
                display: flex;
                justify-content: end;
                gap:20px;
            }.row1 > a{
                border:3px solid green;
                padding:20px;
                font-size:1rem;
            }
            .popup {
            background-color: white;
            padding: 20px;
            border: 1px solid green;
            width: 200px;
            text-align: center;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }.row3{
            display:flex;
            flex-direction:column;
            color: black;
        }
            @media (max-width:800px){
                .row3{
                 display:none;
                }h3[class="text-white"]{
                    font-size:15px;
                }.row1 a{
                    font-size:10px;
                    padding:5px;
                }th,td{
                    font-size:15px;
                }.container-body{
                    display:flex;
                    flex-direction:column;
                }.row1{
                    width:100%;
                    text-align:center;
                }
            } .doc{
        color: black;
        font-family: 'Times New Roman', Times, serif;
        font-weight: 500;
    } #main{
            display:flex;
            flex-direction:column;
            z-index: 20;
            position:absolute;
            left:0px;
        }  
        #main > a {
            color:white;
        }

        label[for="fileInput"]{
            display:grid;
            align-items:center;
        }.header > a > i{
            font-size:30px;
        }
        .header{
            display:flex;
            justify-content:space-between;  
            height:fit-content;
        }
        .header a:nth-child(2){
            text-decoration:none;
            color:black;
            border:1px solid black;
            background:white;
            height:fit-content;
            padding:5px;
        }
        label > i[class="bi bi-pencil-square"]{
            font-size:20px;
            cursor:pointer;
        }
        .image-box{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }
        .nav{
            border: 1px solid black;
            width: max-content;
            padding: 5px;
            background-color: gray;
            position: relative;
        }
        #sidenav{
            position: absolute;
            left:-500px;
            transition:all 1s;
            padding:20px;
            background:rgb(11, 66, 14);
            height:100vh;
            position:fixed;
            top:0;
            border-right:1px solid black;
        }
        #sidenav:target{
            z-index: 100;
            left:0px;
            transition:all 1s;
        }
        i[class="bi bi-list"]{
            font-size:50px;
            color:black;
            font-weight:900;
            z-index: 50;
        }
        i[ class="bi bi-x"]{
            color:white;
            display:flex;
            align-items:end;
            justify-content:end;
            font-size:30px;
        }
        #mySidenav{
            background:#1b5e20;
        }
        .details > label > p{
            font-size:20px;
            color:white;
        }
        .details{
            display:flex;
            flex-direction:column;
            border:none !important;
        }
        label,h1{
            color:white;
        }
        label{
            font-size:20px;
        }@media (max-width:800px){
            a[href="#"]{
                font-size:10px !important;
            }a[href="../index.php"]{
                font-size:10px !important;
            }
        }
        </style>
       
       <div class="header">
        <a href="#sidenav" class="target" ><i class="bi bi-list"></i></a>
    </div>
    <div id="sidenav" class="sidenav" >
        <a href="#"><i class="bi bi-x"></i></a>
        <div class="image-box">
            <img src="../images/vci-logo-removebg-preview1.png" width="100" height="auto" id="show1">
            </label>
            <h5 STYLE="COLOR:WHITE"><?php echo $fullname; ?></h5>
        </div><br>
        <div class="details">
            <label for="">Course:<br>
                <p><?php echo $course; ?></p>
            </label>
            <label for="">Year Level:
                <p><?php echo $year_level; ?></p>
            </label>
            <label for="">Address:
                <p><?php echo $address; ?></p>
            </label>
            <label for="">Email: 
            </label>
            <p style="color:white;font-size:15px;"><?php echo $email; ?></p>
        </div>
    </div>

    <div class="container-fluid" id="head">
    <h3 class="text-dark">Outgoing Document Requests History</h3>
    <?php
$sql = "SELECT COUNT(*) as status FROM sendfile WHERE firstname = '$fn' and middlename = '$mn' and lastname = '$ln' AND status = 'unread' and visibility = 'show'";
$result = mysqli_query($conn, $sql);


if ($result) {
    $row = mysqli_fetch_assoc($result);
    $documentCount = $row['status'];
} else {
    $documentCount = 0;
}
?>
        <div class="container-body">
            <div class="row1">
                <a href="user.php">Home</a>
                <a href="incoming-doc.php">Incoming
                <?php
    if ($documentCount > 0) {
        echo '<span class="badge" style="color:#8B0000">' . '('.$documentCount.')' . '</span>';
    }
    ?>
                </a>
                <a href="outgoing-doc.php">Outgoing</a>
                <a href="trackingpage.php">Tracking Page</a>
                <a href="documenthide.php">Archive Messages</a>
                    <a href="logout.php">Log Out</a>
            </div>
            <div class="row2">
  <table class="table table-bordered table-striped" >
                    <thead>
                        <tr>
                        <th>TrackingNumber</th>
                        <th>Purpose</th>
                        <th>DateSent</th>
                        <th>Transcript of Records</th>
                        <th>Honorable Dismissal</th>
                        <th>Cert of Grades</th> 
                        <th>Good Moral</th>
                        <th>Diploma/Certificate</th>
                        <th>S.O CERTIFICATE</th>
                        <th>Cert of Enrollment</th>
                        <th>Cv Certificate</th>
                        <th>GWA</th>      
                        </tr>
                    </thead>
                    <tbody>
                    <?php    
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

$sql = "SELECT * FROM `tbl_registrar` WHERE `firstname` = '$fn' and `middlename` = '$mn' and `lastname` = '$ln'";     
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        $reversedOriginalTrackingNumber = strrev($row['tracking_number']);
        $modifiedTrackingNumber = strtr($reversedOriginalTrackingNumber, $reverseSymbolMapping);
        echo "<td>" . $modifiedTrackingNumber . "</td>";
        echo "<td>" . $row['details'] . "</td>";
        echo "<td>" . $row['posted_date'] . "</td>";
        echo "<td>";
        if (!empty($row['check1'])) {
            echo $row['check1'] . '(' . $row['check1quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td>";
        if (!empty($row['check2'])) {
            echo $row['check2'] . '(' . $row['check2quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td>";
        if (!empty($row['check3'])) {
            echo $row['check3'] . '(' . $row['check3quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td>";
        if (!empty($row['check4'])) {
            echo $row['check4'] . '(' . $row['check4quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td>";
        if (!empty($row['check5'])) {
            echo $row['check5'] . '(' . $row['check5quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td>";
        if (!empty($row['check6'])) {
            echo $row['check6'] . '(' . $row['check6quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td>";
        if (!empty($row['check7'])) {
            echo $row['check7'] . '(' . $row['check7quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td>";
        if (!empty($row['check8'])) {
            echo $row['check8'] . '(' . $row['check8quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td>";
        if (!empty($row['check9'])) {
            echo $row['check9'] . '(' . $row['check9quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<center><h1 class='text-dark'>(No Result Found!)</h1></center>";
}
?>
</tbody>
                  
             </table>
              
            </div>
            <div class="row3">
            <img src="../images/vci-logo.jpg" width="100%" height="auto" alt="">
            <h2 class="doc">Document Tracking System</h2>
            </div>
        </div>
    </div>
</body>

</html>
