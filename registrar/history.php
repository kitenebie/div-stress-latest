<?php include('head.php'); ?>

<?php
$sql = "SELECT * FROM tbl_registrar WHERE status != 'unread' ";
$result = mysqli_query($conn, $sql);

?>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;

            font-family:'Times New Roman', Times, serif;

    }
    table {
       width:100%;
    }
    th {
        text-align: center !important;
        padding: 10px;
        border: 1px solid gray;
        font-size: 0.9rem;
        width: fit-content !important;
        padding:10px !important;
    }.container{
        width: 70%;
        height: auto;
        background: white;
        padding: 10px;
        overflow: scroll !important;
        margin-left:auto !important;
    }  body{
                    overflow-y:scroll;
                    background-image:url(../images/abstract-paper-background-concept.jpg);
                    width:100%;
                    height:auto;
                    background-size:cover;
                }
    td {
        border: 1px solid gray;
        font-size: 0.9rem;
       
        width: fit-content !important;
        padding:10px !important;
    }body{
        overflow:scroll;
    }
    h1 {
        color: black;
      
    }@media  (max-width:800px){
        h1{
            font-size:10px !important;
        }th,td{
            font-size:5px;
        }table{
            display:flex;
            flex-direction:column;
        }.container{
            width: 100%;
        }
    }#done{
        text-decoration:none;
        background:green;
        padding:10px;
        color:white;
    }form{
        display:flex;
        gap:10px;
       
      
    }input{
        padding:10px;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veritas Collage of Irosin</title>
    <link rel="shortcut icon" href="../images/vci-logo.jpg" type="image/x-icon">
</head>

<body>

    <div class="container">
 
      <?php
       $searchfunction = "";
       if (isset($_POST['search'])) {
           $searchfunction = $_POST['search-box'];
           $escapedData = mysqli_real_escape_string($conn, $searchfunction);
       
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
       
           $reversedOriginalTrackingNumber = strrev(strtr($escapedData, array_flip($reverseSymbolMapping)));
           $search = "SELECT * FROM `tbl_registrar` WHERE `tracking_number` LIKE '%$reversedOriginalTrackingNumber%'";
           $result = mysqli_query($conn, $search);
       } else {
        $sql = "SELECT * FROM tbl_registrar WHERE status != 'unread' AND status != 'Received'";
        $result = mysqli_query($conn, $sql);
        
       }
        ?>
     <h1><i class="bi bi-clock-history"></i>HISTORY</h1>
     <?php
     if ($result && mysqli_num_rows($result) > 0) {
            echo '<table>';
            echo '<tr>';
            echo '<th>Firstname</th>';
            echo '<th>Middlename</th>';
            echo '<th>Lastname</th>';
            echo '<th>Transcript of Records</th>';
            echo '<th>Honorable Dismissal</th>';
            echo '<th>Cert of Grades</th>';
            echo '<th>Good Moral</th>';
            echo '<th>Diploma/Certificate</th>';
            echo '<th>S.O CERTIFICATE</th>';
            echo '<th>Cert of Enrollment</th>';
            echo '<th>Cv Certificate</th>';
            echo '<th>GWA</th>';
            echo '<th>DETAILS</th>';
   

            echo '<th>POSTED DATE</th>';
            echo '<th>TRACKING NUMBER</th>';
            echo '<th>STATUS</th>';
     
            echo '</tr>';

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                echo '<tr>';
                echo '<td>' . $row["firstname"] . '</td>';
                echo '<td>' . $row["middlename"] . '</td>';
                echo '<td>' . $row["lastname"] . '</td>';
                echo "<td>";
                if (!empty($row['check1'])) {
                    echo $row['check1'] . '(' . $row['check1quantity'] . ' copy' . ')';
                }
                echo "<td>";
                if (!empty($row['check2'])) {
                    echo $row['check2'] . '(' . $row['check2quantity'] . ' copy' . ')';
                }
                echo "<td>";
                if (!empty($row['check3'])) {
                    echo $row['check3'] . '(' . $row['check3quantity'] . ' copy' . ')';
                }
                echo "<td>";
                if (!empty($row['check4'])) {
                    echo $row['check4'] . '(' . $row['check4quantity'] . ' copy' . ')';
                }
                echo "<td>";
                if (!empty($row['check5'])) {
                    echo $row['check5'] . '(' . $row['check5quantity'] . ' copy' . ')';
                }
                echo "<td>";
                if (!empty($row['check6'])) {
                    echo $row['check6'] . '(' . $row['check6quantity'] . ' copy' . ')';
                }
                echo "<td>";
                if (!empty($row['check7'])) {
                    echo $row['check7'] . '(' . $row['check7quantity'] . ' copy' . ')';
                }
                echo "<td>";
                if (!empty($row['check8'])) {
                    echo $row['check8'] . '(' . $row['check8quantity'] . ' copy' . ')';
                }
                echo "<td>";
                if (!empty($row['check9'])) {
                    echo $row['check9'] . '(' . $row['check9quantity'] . ' copy' . ')';
                }
                echo '<td>' . $row["details"] . '</td>';
             
         
                echo '<td>' . $row["posted_date"] . '</td>';
                
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
                
                $reversedOriginalTrackingNumber = strrev($row['tracking_number']);  
                $modifiedTrackingNumber = strtr($reversedOriginalTrackingNumber, $reverseSymbolMapping);
                echo '<td>' . $modifiedTrackingNumber . '</td>';
                echo '<td>' . $row["status"] . '</td>';?>
               
            <?php    echo '</tr>';
            }

            echo '</table>';
        } else {
            echo "<p>No records found.</p>";
        }

        mysqli_close($conn);
        ?>
    </div>
</body>

</html>
