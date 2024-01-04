<?php include 'head.php';  ?>

<?php
$sql = "SELECT * FROM tbl_registrar WHERE status != 'unread' ";
$result = mysqli_query($conn, $sql);

?>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
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
        width: 100%;
        height: auto;
        background: white;
        padding: 10px;
        overflow: scroll !important;
        margin-left:auto !important;
    } body{
            background-image:linear-gradient( to right,green, white );
        }
    td {
        border: 1px solid gray;
        font-size: 0.9rem;
       
        width: fit-content !important;
        padding:10px !important;
    }  body{
                    overflow-y:scroll;
                    background-image:url(../images/abstract-paper-background-concept.jpg);
                    width:100%;
                    height:auto;
                    background-size:cover;
                }   #delete:hover{
        background:red;
        transition:background-color 1s;
        cursor:pointer;
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
        <h1><i class="bi bi-clock-history"></i>HISTORY</h1>
        <form method="POST">
       
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
         
            echo '<th>PURPOSE</th>';

            echo '<th>POSTED DATE</th>';
            echo '<th>TRACKING NUMBER</th>';
            echo '<th>STATUS</th>';
           
            
            echo '<th>  <button type="submit" name="delete"><i class="bi bi-trash3-fill"></i></button></th>';
            echo '</tr>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row["firstname"] . '</td>';
                echo '<td>' . $row["middlename"] . '</td>';
                echo '<td>' . $row["lastname"] . '</td>';
                echo '<td>' . $row["check1"] . '</td>';
                echo '<td>' . $row["check2"] . '</td>';
                echo '<td>' . $row["check3"] . '</td>';
                echo '<td>' . $row["check4"] . '</td>';
                echo '<td>' . $row["check5"] . '</td>';
                echo '<td>' . $row["check6"] . '</td>';
                echo '<td>' . $row["check7"] . '</td>';
                echo '<td>' . $row["check8"] . '</td>';
                echo '<td>' . $row["check9"] . '</td>';
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
                
                echo '<td>' . $row["status"] . '</td>'; 
                           echo '<td><input type="checkbox" name="delete_ids[]" value="' . $row['id'] . '"></td>';
                echo '</tr>';
            }?>
              </form>
          <?php  echo '</table>';
        } else {
            echo "<p>No records found.</p>";
        }

       
        if (isset($_POST['delete'])) {
           
            if (empty($delete_ids)) {
                echo "<script>alert('Please select at least one record to delete.');</script>";
            } else {
                $delete_ids = $_POST['delete_ids'];
                $delete_ids_str = implode(',', $delete_ids);
                $delete_query = "DELETE FROM tbl_registrar WHERE id IN ($delete_ids_str)";
                
                if (mysqli_query($conn, $delete_query)) {
                    echo "<script>alert('Selected records deleted successfully.');</script>";
                } else {
                    echo "Error deleting records: " . mysqli_error($conn);
                }
            }
        }
        
        mysqli_close($conn);
        ?>
    </div>
</body>

</html>
