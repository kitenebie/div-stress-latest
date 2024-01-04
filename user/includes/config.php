<?php
session_start();
// $conn = new mysqli("localhost", "u700659242_divstress", "Codego@28", "u700659242_divstress");
 $conn = new mysqli("localhost", "root", "", "u700659242_divstress");
if(!$conn){
    echo "not connected";
}     if (isset($_SESSION['fullname'])) {
    $fullname = $_SESSION['fullname'];
    $account = "SELECT * FROM `tbl_admin` WHERE username = ?";
    $stmt = mysqli_prepare($conn, $account);
    mysqli_stmt_bind_param($stmt, "s", $fullname);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $fn = $row['firstname'];
        $mn = $row['middlename'];
        $ln = $row['lastname'];
        $usercode = $fn . $mn . $ln;
        $email = $row['email'];
        $username = $row['username'];
        $student_id = $row['student_id'];
        $course = $row['course'];
        $year_level = $row['year_level'];
        $address = $row['address'];
    } else {
        echo "User not found in the database";
        exit();
    }

    mysqli_stmt_close($stmt);
} else {
    echo "User not logged in";
    echo '<a href="../index.php">Login</a>';
    exit();
}
?>