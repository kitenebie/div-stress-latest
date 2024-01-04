<?php
   include 'includes/config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "UPDATE `tbl_registrar` SET `status` = 'Done' WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script> alert('Update Done'); location.href = 'history.php'; </script>";
    } else {
        echo "<script> alert('Error, please try again'); location.href = 'history.php'; </script>";
    }
} else {
    echo "ID not set";
}
?>
