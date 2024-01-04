<?php
  include 'includes/config.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `tbl_admin` WHERE id=$id";
    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        $_SESSION['delete'] = "<script>alert('Admin Successfully Deleted!')</script>";
        header("location: studentaccount.php");
    } else {
        $_SESSION['delete'] = "<script>alert('Admin Failed To Delet!')</script>";
        header("location: studentaccount.php");
    }
} else {
    echo "Invalid Id or No Id Identify!";
}
?>
