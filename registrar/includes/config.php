<?php
session_start();
$conn = new mysqli("localhost", "root", "", "u700659242_divstress");
// $conn = new mysqli("localhost", "u700659242_divstress", "Codego@28", "u700659242_divstress");
if(!$conn){
    echo "not connected";
}
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];

   
    $account = "SELECT * FROM `admin` WHERE id = ?"; 
    $stmt = mysqli_prepare($conn, $account);

 
    mysqli_stmt_bind_param($stmt, "s", $id);

   
    mysqli_stmt_execute($stmt);

  
    $result = mysqli_stmt_get_result($stmt);

   
    if ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
      
    } else {
       
        echo "<h1 style='color:white'>User not login</h1>";
        echo'<a href="../index.php">Login</a>';

        exit();
    }

   
    mysqli_stmt_close($stmt);
} else {
    echo "User not logged in";
    exit();
}
?>