<?php
session_start();
$_SESSION = array();
session_destroy();
$_SESSION['logout'] = "<script>alert ('Successfully Logout!')</script>";
header("location: ../index.php");
exit();
?>