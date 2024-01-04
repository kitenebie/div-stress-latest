<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
   include 'includes/config.php';
if (isset($_GET['search'])) {
    $searchInput = $_GET['search-input'];
    // Modify your SQL query to include the search criteria
    $sql = "SELECT * FROM tbl_registrar WHERE status NOT IN ('Done', 'Cancelled') AND (firstname LIKE '%$searchInput%' OR lastname LIKE '%$searchInput%' OR tracking_number LIKE '%$searchInput%')";
    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            echo '<div class="search-results">';
            echo '<h2>Search Results</h2>';
            echo '<table class="tbl_full">';
            // Display the search results in a separate table
            while ($rows = mysqli_fetch_assoc($res)) {
                $id = $rows['id'];
                $tod = $rows['TOD'];
                $details = $rows['details'];
                $to = $rows['to'];
                $status = $rows['status'];
                $fn = $rows['firstname'];
                $ln = $rows['lastname'];
                $mn = $rows['middlename'];
                $fullname = $fn . ' ' . $ln . ' ' . $mn;
                $purpose = $rows['purpose'];
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
                    <td><?php echo $check1 . ($check1quantity > 0 ? 'x' . $check1quantity : ''); ?> </td>
                    <td><?php echo $check1status ?></td>
                    <td><?php echo $check2 . ($check2quantity > 0 ? 'x' . $check2quantity : ''); ?> </td>
                    <td style="background: <?php echo ($check2status !== '') ? 'black' : ''; ?>; color: white;">
                        <?php echo $check2status; ?>
                    </td>
                    <!-- Add the rest of your table cells here -->
                </tr>
                <?php
            }
            echo '</table>';
            echo '</div>';
        } else {
            echo '<p>No results found</p>';
        }
    } else {
        echo "Error executing search query: " . mysqli_error($conn);
    }
}
?>

</body>
</html>
