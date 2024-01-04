<?php
include 'includes/config.php';

if (isset($_GET['done'])) {
    $id = $_GET['done'];

   
    $update = $conn->prepare("UPDATE `tbl_registrar` SET `status`='Cancelled' WHERE `id` = ?");
    $update->bind_param("i", $id);

    if ($update->execute()) {
        echo "<script>alert('Successfully updated');location.href = 'trackingpage.php'</script>";
    } else {
        echo "<script>alert('Error updating status');location.href = 'trackingpage.php'</script>";
    }

    $update->close();
}

$conn->close();
?>
