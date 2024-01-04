<?php
include 'includes/config.php';

if (isset($_GET['update'])) {
    $requestId = $_GET['update'];

    $updateSqlOngoing = "UPDATE `sendfile` SET `visibility` = 'show' WHERE id = $requestId";
    $updateResultOngoing = mysqli_query($conn, $updateSqlOngoing);
    if ($updateResultOngoing) {
        echo "<script>alert('Update successful');location.href='incoming-doc.php';</script>";
    } else {
        echo "<script>alert('Error updating');location.href='documenthide.php';</script>";
    }
}
?>
