<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veritas College Of Irosin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../images/vci-logo.jpg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php  include 'includes/config.php';
  if (isset($_SESSION['fullname'])) {
    $fullname = $_SESSION['fullname'];

    $email = $_SESSION['email'];
    $account = "SELECT * FROM `tbl_admin` WHERE email = '". $email ."'"; 
    $stmt = mysqli_prepare($conn, $account);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $firstname = $row['firstname'];
        $middlename = $row['middlename'];
        $lastname = $row['lastname'];
        $usercode = $firstname . $middlename . $lastname;
        $email = $row['email'];
        $username = $row['username'];
    
    } else {
      
        echo "User not found in the database";
        exit();
    }
    mysqli_stmt_close($stmt);
} else {
    echo "User not logged in";
    
    exit();
}

    $searchResult = '';

   
    if (isset($_GET['search-button'])) {
        $searchResult = $_GET['searchbox'];
    }
    ?>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing: border-box;
            font-family:'Times New Roman', Times, serif;
        }.container-fluid{
            background:transparent;
     padding: 20px;
     width:100%;
     height:auto;
   
   
        }input[type="search"],input[type="submit"]{
         
        padding:5px;
        }.search-form{
            display: flex;
            justify-content: end;
            gap:10px;
        }#table{
            width:100%;
            height:20px;
            border-collapse: separate;
            background:white;
            border:1px solid white;
          
        } #th{
 
          text-align:center;
            border:1px solid gray;
            border-collapse:none;
            width:fit-content;
           
            padding:5px;
        }#td{
            padding:5px;
          text-align:center;
            border:1px solid gray !important;
         
            width:fit-content;
        }#tr{
            width:fit-content;
        }
        form{
            display:flex;
            justify-content:space-between;
        
        }.inner-container{
            display:flex;
            gap:20px;
        }.row1{
            display:flex;
            flex-direction:column;
            border:3px solid green;
            padding:20px;
            gap:20px;
            width:20%;
        }.row1 > a{
            font-size:1rem;
            text-decoration:none;
            color:black;
            border:3px solid green;
            padding:20px;
            text-align:center;
        }body{
                    overflow-y:scroll;
                    background-image:url(../images/abstract-paper-background-concept.jpg);
                    width:100%;
                    height:auto;
                    background-size:cover;
                }
table{
            width:100%;
            overflow:scroll;
        }#cancelled{
            text-decoration:none;
            padding:5px;
            background:green;
            color:white;
        }
        @media (max-width:800px){
            h1[class="text-white"]{
                font-size:15px;
            }input[type="password"]{
                padding:0 !important;
            }input[type="submit"]{
                font-size:10px;
            }.row1 a{
                font-size:10px;
                padding:5px;
                width:100%;
            }.row1{
                width:30%;
            }th,td{
                font-size:15px;
                
            }table{
                overflow:scroll;
            }.inner-container{
                display:flex;
                flex-direction:column;
            }.row1{
                width:100%;
            }form{
                display:flex;
                flex-direction:column;
            }
        }
    </style>
     <?php
      $sql = "SELECT COUNT(*) as status FROM sendfile WHERE firstname = '$fn' and lastname= '$ln' and middlename = '$mn' AND status = 'unread' and visibility = 'show'";
      $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $documentCount = $row['status'];
    } else {
        $documentCount = 0;
    };

?>
    <div class="container-fluid"> 
        <form method="GET" action="trackingpage.php"> 
            <h1 class="text-black">Tracking Page</h1>
            <div class="search-form">
                <input type="password" name="searchbox"> 
                <input type="submit" value="Search" name="search-button">  
            </div>
        </form><br>
        <div class="inner-container">
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
         <div style="overflow:scroll">
         <table id="table">
                <tr>
                <th id="th">TrackingNumber</th>
                        <th id="th">Purpose</th>
                        <th id="th">DateSent</th>
                        <th id="th">Transcript of Records</th>
                        <th  id="th">Doc status</th>
                        <th id="th">Honorable Dismissal</th>
                        <th  id="th">Doc status</th>
                        <th id="th">Cert of Grades</th> 
                        <th  id="th">Doc status</th>
                        <th id="th">Good Moral</th>
                        <th  id="th">Doc status</th>
                        <th id="th">Diploma/Certificate</th>
                        <th  id="th">Doc status</th>
                        <th id="th">S.O CERTIFICATE</th>
                        <th  id="th">Doc status</th>
                        <th id="th">Cert of Enrollment</th>
                        <th  id="th">Doc status</th>
                        <th id="th">Cv Certificate</th>
                        <th  id="th">Doc status</th>
                        <th id="th">GWA</th>
                        <th  id="th">Doc status</th>
                     
                    <th id='th'>Status</th>
                    <th  id='th'>Actions</th>
                </tr>

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
        $escapedData = mysqli_real_escape_string($conn, strtr($searchResult, array_flip($reverseSymbolMapping)));
        
        $searchQuery = " AND (REVERSE(tracking_number) LIKE '%$escapedData%' OR REVERSE(tracking_number) LIKE '%" . strtr($escapedData, $reverseSymbolMapping) . "')";
        $incoming = "SELECT * FROM `tbl_registrar` WHERE email = ?" . $searchQuery . " ORDER BY id DESC";

        $stmt = mysqli_prepare($conn, $incoming);
        mysqli_stmt_bind_param($stmt, "s", $_SESSION['email']);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                echo "<tr>";
                $reversedOriginalTrackingNumber = strrev($row['tracking_number']);
                $modifiedTrackingNumber = strtr($reversedOriginalTrackingNumber, $reverseSymbolMapping);
                echo "<td id='td'>" . $modifiedTrackingNumber . "</td>";
                echo "<td id='td'>" . $row['details'] . "</td>";
                echo "<td id='td'>" . $row['posted_date'] . "</td>";
                echo "<td id='td'>";
        if (!empty($row['check1'])) {
            echo $row['check1'] . '(' . $row['check1quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td id='td'>" . $row['check1status'] . "</td>";
        echo "<td id='td'>";
        if (!empty($row['check2'])) {
            echo $row['check2'] . '(' . $row['check2quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td id='td'>" . $row['check2status'] . "</td>";
        echo "<td id='td'>";
        if (!empty($row['check3'])) {
            echo $row['check3'] . '(' . $row['check3quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td id='td'>" . $row['check3status'] . "</td>";
        echo "<td id='td'>";
        if (!empty($row['check4'])) {
            echo $row['check4'] . '(' . $row['check4quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td id='td'>" . $row['check4status'] . "</td>";
        echo "<td id='td'>";
        if (!empty($row['check5'])) {
            echo $row['check5'] . '(' . $row['check5quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td id='td'>" . $row['check5status'] . "</td>";
        echo "<td id='td'>";
        if (!empty($row['check6'])) {
            echo $row['check6'] . '(' . $row['check6quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td id='td'>" . $row['check6status'] . "</td>";
        echo "<td id='td'>";
        if (!empty($row['check7'])) {
            echo $row['check7'] . '(' . $row['check7quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td id='td'>" . $row['check7status'] . "</td>";
        echo "<td id='td'>";
        if (!empty($row['check8'])) {
            echo $row['check8'] . '(' . $row['check8quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td id='td'>" . $row['check8status'] . "</td>";
        echo "<td id='td'>";
        if (!empty($row['check9'])) {
            echo $row['check9'] . '(' . $row['check9quantity'] . ' copy' . ')';
        }
        echo "</td>";
        echo "<td id='td'>" . $row['check9status'] . "</td>";
                echo "<td id='td'>" . $row['status'] . "</td>";?>
              <td id='td'><a href="done.php?done=<?php echo $id; ?>" id="cancelled">Cancel</a></td>
          <?php      echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>(No Result Found!)</td></tr>";
        }
        
                ?>
            </table>
         </div>
        </div>
    </div>
</body>
</html>
