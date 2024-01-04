<?php include('head.php'); ?>
<style>
    table{
        width:fit-content;
       height:auto;
    }
    *{
        margin: 0;
        padding:0;
        box-sizing:border-box;
       
        font-family:'Times New Roman', Times, serif;
    }

    .table-container {
        height: auto;
      overflow:scroll;
        width:70%;
      margin-left:auto;
    }

    .tbl_full {
        width: 100%;
        border: 1px solid black;
        background-color: white;
        padding: 25px;
        table-layout: auto;
        
    }

    .tbl_full th,
    .tbl_full td {
        width:100%;
        padding:8px;
        border: 1px solid #ccc;
        white-space: nowrap;
       text-align:center;
        text-overflow: ellipsis; 
    } .tbl_full{
        width:100%;
    }
    .tbl_full th {
        background-color: #f2f2f2;
        width:100%;
    }form{
        width:100%;
     z-index:999999;
    
    }body{
                    overflow-y:scroll;
                    background-image:url(../images/abstract-paper-background-concept.jpg);
                    width:100%;
                    height:auto;
                    background-size:cover;
                }
    .unread {
        font-weight: bold;
    }
    .btnupdate {
        background-color: #4CAF50;
        padding:5px;
        color: white;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
        text-decoration: none; 
    }
    .btnupdate:hover {
        background-color: #45a049;
    }
    @media screen and (max-width: 800px) {
        .tbl_full {
            overflow-x: auto;
            width:20%;
        }body{
            overflow:scroll;
        }th,td{
  font-size:10px;
        }h1{
            font-size:15px;
        }.table-container{
            width:100% !important ;
            margin-left:0 !important;
        }
    }
</style>

<form action="" method="GET">
    <h1 style="color: white;"><i class="bi bi-file-earmark-bar-graph-fill"></i>REQUEST</h1>
    <div class="table-container">
        <input type="search" name="search-input" id="">
        <input type="submit" value="Search" name="search">
        <table class="tbl_full">
        <tr>
              <th>Student ID</th>
              <th>Tracking number</th>
         
             <th>Fullname</th>
             <th>Posted date</th>
            <th>Transcript of Records</th>
            <th>Status</th>
            <th>Honorable Dismissal</th>
            <th>Status</th>
            <th>Cert of Grades</th>
            <th>Status</th>
            <th>Good Moral</th>
            <th>Status</th>
            <th>Diploma/Certificate</th>
            <th>Status</th>
            <th>S.O CERTIFICATE</th>
            <th>Status</th>
            <th>Cert of Enrollment</th>
            <th>Status</th>
            <th>Cv Certificate</th>
            <th>Status</th>
            <th>GWA</th>   
            <th>Status</th>
            <th>Timer</th>
            <th>ACTIONS</th>   
        </tr>
        <?php
if (isset($_GET['search'])) {
    $searchInput = $_GET['search-input'];
 
    $sql = "SELECT * FROM tbl_registrar WHERE status NOT IN ('Done', 'Cancelled') AND (student_id LIKE '%$searchInput%' )";
    $res = mysqli_query($conn, $sql);

if ($res == true) {
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        while ($rows = mysqli_fetch_assoc($res)) {
            $id = $rows['id'];
          
            $details = $rows['details'];   
                        $status = $rows['status'];
                        $fn = $rows['firstname'];
                        $ln = $rows['lastname'];
                        $mn = $rows['middlename'];
                        $fullname = $fn . ' ' . $ln . ' ' . $mn; 
                        $user = $rows['from_user'];
                        $date = $rows['posted_date'];
                        $studentid = $rows['student_id'];
                        $unread = $rows['status'];
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
                        $check1status = $rows['check1status'];
                        $check2status = $rows['check2status'];
                        $check3status = $rows['check3status'];
                        $check4status = $rows['check4status'];
                        $check5status = $rows['check5status'];
                        $check6status = $rows['check6status'];
                        $check7status = $rows['check7status'];
                        $check8status = $rows['check8status'];
                        $check9status = $rows['check9status'];
        
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
                        $tracking_number = $rows['tracking_number'];
                        $usercode = $rows['usercode'];
                    ?>
                          <tr class="<?php echo $unread ? 'unread' : ''; ?>">
                          <td><?php echo $studentid ?></td>
                            <td><?php echo $modifiedTrackingNumber ?></td>
                            <td><?php echo $user ?></td>
                            <td><?php echo $fullname; ?></td>
                            <td><?php echo $date; ?> </td>  
                            <td>
    <?php echo $check1 . ($check1quantity > 0 ? 'x' . $check1quantity : ''); ?>
</td>
<td style="background: <?php echo ($check1status !== '') ? 'black' : ''; ?>; color: white;">
    <?php echo $check1status; ?>
</td>
    <td><?php echo $check2 . ($check2quantity > 0 ? 'x' . $check2quantity : ''); ?> </td>
    <td style="background: <?php echo ($check2status !== '') ? 'black' : ''; ?>; color: white;">
    <?php echo $check2status; ?>
</td>
    <td><?php echo $check3 . ($check3quantity > 0 ? 'x' . $check3quantity : ''); ?> </td>
    <td style="background: <?php echo ($check3status !== '') ? 'black' : ''; ?>; color: white;">
    <?php echo $check3status; ?>
</td>
    <td><?php echo $check4 . ($check4quantity > 0 ? 'x' . $check4quantity : ''); ?> </td>
    <td style="background: <?php echo ($check4status !== '') ? 'black' : ''; ?>; color: white;">
        <?php echo  $check4status  ?></td>
    <td><?php echo $check5 . ($check5quantity > 0 ? 'x' . $check5quantity : ''); ?> </td>
    <td style="background: <?php echo ($check5status !== '') ? 'black' : ''; ?>; color: white;">
        <?php echo  $check5status  ?></td>
    <td><?php echo $check6 . ($check6quantity > 0 ? 'x' . $check6quantity : ''); ?> </td>
    <td style="background: <?php echo ($check6status !== '') ? 'black' : ''; ?>; color: white;">
        <?php echo  $check6status  ?></td>
    <td><?php echo $check7 . ($check7quantity > 0 ? 'x' . $check7quantity : ''); ?> </td>
    <td style="background: <?php echo ($check7status !== '') ? 'black' : ''; ?>; color: white;">
        <?php echo  $check7status  ?></td>
    <td><?php echo $check8 . ($check8quantity > 0 ? 'x' . $check8quantity : ''); ?> </td>
    <td  style="background: <?php echo ($check8status !== '') ? 'black' : ''; ?>; color: white;">
        <?php echo  $check8status  ?></td>
    <td><?php echo $check9 . ($check9quantity > 0 ? 'x' . $check9quantity : ''); ?> </td>
    <td style="background: <?php echo ($check9status !== '') ? 'black' : ''; ?>; color: white;">
    <?php echo $check9status; ?>
                </td>
                <?php
if ($status === "Request Approved") {
    // Calculate time difference in seconds
    $postedTime = strtotime($date); // convert posted date to seconds
    $timeDifference = max(0, 2 * 24 * 60 * 60 - (time() - $postedTime)); // countdown for 2 days

    // Display the timer in days, hours, minutes, and seconds
    $days = floor($timeDifference / (24 * 3600));
    $hours = floor(($timeDifference % (24 * 3600)) / 3600);
    $minutes = floor(($timeDifference % 3600) / 60);
    $seconds = $timeDifference % 60;
    $timerDisplay = sprintf('%02d:%02d:%02d:%02d', $days, $hours, $minutes, $seconds);
} else {
    $timerDisplay = ''; // If status is not "Request Approved", set timer to empty
}
echo '<td>' . $timerDisplay . '</td>';
?>

                            <td >
                                <a class="btnupdate" href="requestfile.php?request=<?php echo $id ?>">Received</a>
                                <a class="btnupdate" href="update.php?update=<?php echo $id ?>">Send msg</a>
                                <a class="btnupdate" href="generate_trackingnumber.php?gtn=<?php echo $id ?>">Generate TN</a>
                                <a class="btnupdate" href="doc-status.php?status=<?php echo $id ?>">Update</a>
                                <a class="btnupdate" href="done.php?done=<?php echo $id ?>">Done</a>
                            </td>
                        </tr>
                        <?php
                        }
                    } else {
                        echo '<tr><td colspan="28">No results found</td></tr>';
                    }
                } else {
                    echo "Error executing search query: " . mysqli_error($conn);
                }
            } else {
                $sql = "SELECT * FROM tbl_registrar WHERE status NOT IN ('Done', 'Cancelled')";
                $res = mysqli_query($conn, $sql);

                if ($res == true) {
                    while ($rows = mysqli_fetch_assoc($res)) {
                        $id = $rows['id'];
                   
                        $details = $rows['details'];
                             
                                    $status = $rows['status'];
                                    $fn = $rows['firstname'];
                                    $ln = $rows['lastname'];
                                    $mn = $rows['middlename'];
                                    $fullname = $fn . ' ' . $ln . ' ' . $mn;
     
                                    $date = $rows['posted_date'];
                                    $studentid = $rows['student_id'];
                                    $unread = $rows['status'];
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
                                    $check1status = $rows['check1status'];
                                    $check2status = $rows['check2status'];
                                    $check3status = $rows['check3status'];
                                    $check4status = $rows['check4status'];
                                    $check5status = $rows['check5status'];
                                    $check6status = $rows['check6status'];
                                    $check7status = $rows['check7status'];
                                    $check8status = $rows['check8status'];
                                    $check9status = $rows['check9status'];
                    
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
                                    $tracking_number = $rows['tracking_number'];
                                 
                                  
                           
                                   
            
                        ?>
                        <tr class="<?php echo $unread ? 'unread' : ''; ?>">
                        <td><?php echo $studentid ?></td>
                            <td><?php echo $modifiedTrackingNumber ?></td>
    
                            <td><?php echo $fullname; ?></td>
                            <td><?php echo $date; ?> </td>  
                            <td>
    <?php echo $check1 . ($check1quantity > 0 ? 'x' . $check1quantity : ''); ?>
</td>
<td style="background: <?php echo ($check1status !== '') ? 'black' : ''; ?>; color: white;">
    <?php echo $check1status; ?>
</td>
    <td><?php echo $check2 . ($check2quantity > 0 ? 'x' . $check2quantity : ''); ?> </td>
    <td style="background: <?php echo ($check2status !== '') ? 'black' : ''; ?>; color: white;">
    <?php echo $check2status; ?>
</td>
    <td><?php echo $check3 . ($check3quantity > 0 ? 'x' . $check3quantity : ''); ?> </td>
    <td style="background: <?php echo ($check3status !== '') ? 'black' : ''; ?>; color: white;">
    <?php echo $check3status; ?>
</td>
    <td><?php echo $check4 . ($check4quantity > 0 ? 'x' . $check4quantity : ''); ?> </td>
    <td style="background: <?php echo ($check4status !== '') ? 'black' : ''; ?>; color: white;">
        <?php echo  $check4status  ?></td>
    <td><?php echo $check5 . ($check5quantity > 0 ? 'x' . $check5quantity : ''); ?> </td>
    <td style="background: <?php echo ($check5status !== '') ? 'black' : ''; ?>; color: white;">
        <?php echo  $check5status  ?></td>
    <td><?php echo $check6 . ($check6quantity > 0 ? 'x' . $check6quantity : ''); ?> </td>
    <td style="background: <?php echo ($check6status !== '') ? 'black' : ''; ?>; color: white;">
        <?php echo  $check6status  ?></td>
    <td><?php echo $check7 . ($check7quantity > 0 ? 'x' . $check7quantity : ''); ?> </td>
    <td style="background: <?php echo ($check7status !== '') ? 'black' : ''; ?>; color: white;">
        <?php echo  $check7status  ?></td>
    <td><?php echo $check8 . ($check8quantity > 0 ? 'x' . $check8quantity : ''); ?> </td>
    <td  style="background: <?php echo ($check8status !== '') ? 'black' : ''; ?>; color: white;">
        <?php echo  $check8status  ?></td>
    <td><?php echo $check9 . ($check9quantity > 0 ? 'x' . $check9quantity : ''); ?> </td>
    <td style="background: <?php echo ($check9status !== '') ? 'black' : ''; ?>; color: white;">
    <?php echo $check9status; ?>
                </td>
                <?php
if ($status === "Request Approved") {
    // Calculate time difference in seconds
    $postedTime = strtotime($date); // convert posted date to seconds
    $timeDifference = max(0, 2 * 24 * 60 * 60 - (time() - $postedTime)); // countdown for 2 days

    // Display the timer in days, hours, minutes, and seconds
    $days = floor($timeDifference / (24 * 3600));
    $hours = floor(($timeDifference % (24 * 3600)) / 3600);
    $minutes = floor(($timeDifference % 3600) / 60);
    $seconds = $timeDifference % 60;
    $timerDisplay = sprintf('%02d:%02d:%02d:%02d', $days, $hours, $minutes, $seconds);
} else {
    $timerDisplay = ''; // If status is not "Request Approved", set timer to empty
}
echo '<td>' . $timerDisplay . '</td>';
?>

                            <td >
                                <a class="btnupdate" href="requestfile.php?request=<?php echo $id ?>">Received</a>
                                <a class="btnupdate" href="update.php?update=<?php echo $id ?>">Send msg</a>
                                <a class="btnupdate" href="generate_trackingnumber.php?gtn=<?php echo $id ?>">Generate TN</a>
                                <a class="btnupdate" href="doc-status.php?status=<?php echo $id ?>">Update</a>
                                <a class="btnupdate" href="done.php?done=<?php echo $id ?>">Done</a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "Error retrieving data: " . mysqli_error($conn);
                }
            }
            ?>
        </table>
    </div>
</form>

<?php 

// Update status to 'Cancelled' for requests older than 2 days
$twoDaysAgo = date('Y-m-d H:i:s', strtotime('-2 days'));
$sqlUpdate = "UPDATE tbl_registrar SET status = 'Cancelled' WHERE status = 'Request Approved' AND posted_date < '$twoDaysAgo'";
$result = mysqli_query($conn, $sqlUpdate);

if ($result) {
    echo "Status updated successfully.";
} else {
    echo "Error updating status: " . mysqli_error($conn);
}

 ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function updateStatus() {
        $.ajax({
            url: 'auto_cancel.php',
            success: function(response) {
                console.log(response);
            },
            error: function(error) {
                console.error('Error updating status:', error);
            }
        });
    }

    function checkAndUpdateStatus(timerDisplay, requestId) {
        if (timerDisplay === '00:00:00:00') {
            // Timer has expired, delete the row
            $.ajax({
                url: 'delete_row.php?requestId=' + requestId,
                method: 'POST',
                success: function(response) {
                    console.log(response);
                },
                error: function(error) {
                    console.error('Error deleting row:', error);
                }
            });
        }
    }

    function isValidTrackingNumber(trackingNumber) {
        // Check if the tracking number starts with 'A/N'
        return trackingNumber.startsWith('A/N');
    }

    setInterval(updateStatus, 60000);
    $(document).ready(function() {
        $('tr').each(function() {
            var trackingNumber = $(this).find('td:nth-child(2)').text();
            
            // Check if the tracking number is valid before initializing the timer
            if (!isValidTrackingNumber(trackingNumber)) {
                // If tracking number is not 'A/N', hide the content of the second-to-last column (timer)
                $(this).find('td:nth-last-child(2)').html('<span style="display:none;">' + $(this).find('td:nth-last-child(2)').text() + '</span>');
                return;
            }

            var timerDisplay = $(this).find('td:nth-last-child(2)').text();
            var requestId = $(this).find('td:nth-last-child(3)').text();
            
            var timeParts = timerDisplay.split(':');
            var days = parseInt(timeParts[0]);
            var hours = parseInt(timeParts[1]);
            var minutes = parseInt(timeParts[2]);
            var seconds = parseInt(timeParts[3]);
            
            var totalSeconds = days * 24 * 60 * 60 + hours * 60 * 60 + minutes * 60 + seconds;

            if (totalSeconds <= 0) {
                // Timer has expired, update status to 'Cancelled'
                $.ajax({
                    url: 'auto_cancel.php?requestId=' + requestId,
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.error('Error updating status:', error);
                    }
                });
            }
            // Check and update status when the timer reaches 00:00:00:00
            checkAndUpdateStatus(timerDisplay, requestId);
        });
    });
</script>
