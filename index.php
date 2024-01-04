<?php include('includes/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Veritas College Of Irosin</title>
        <link rel="shortcut icon" href="images/vci-logo.jpg" type="image/x-icon">
</head>
<body>
<style>
body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: linear-gradient( to right bottom,green 50%,white 50%);
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
}

.login-container {
    width: 300px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    padding: 40px;
    margin-top:50px;
    
}

.header img {
    width: 30%;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.login-form {
    padding: 20px;
}

h2 {
    text-align: center;
}

label,
input {
    display: block;
    margin-bottom: 10px;
}

input[type="text"],
input[type="password"] {
    width: calc(100% - 20px);
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

    </style>
    <div class="login-container">
        <div class="header">
            <center><img src="images/vci-logo.jpg" alt="Logo">
            <h2>Document Tracking System</h2></center>   
        </div>
        <div class="login-form">
            <form action="" method="POST">
                <label for="username">Username:</label>
                <input type="text"  name="username" required>
                <label for="password">Password:</label>
                <input type="password"  name="password" required>
                <button type="submit" name="submit">Login</button> <br><br>
                
            </form>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check login in tbl_admin
    $sql_tbl_admin = "SELECT * FROM `tbl_admin` WHERE `username`= ? AND `password` = ?";
    $stmt_tbl_admin = mysqli_prepare($conn, $sql_tbl_admin);

    if ($stmt_tbl_admin) {
        mysqli_stmt_bind_param($stmt_tbl_admin, "ss", $username, $password);
        mysqli_stmt_execute($stmt_tbl_admin);

        $result_tbl_admin = mysqli_stmt_get_result($stmt_tbl_admin);

        if ($result_tbl_admin && mysqli_num_rows($result_tbl_admin) > 0) {
            $row_tbl_admin = mysqli_fetch_assoc($result_tbl_admin);
            $_SESSION['user_id'] = $row_tbl_admin['id'];
            $_SESSION['fullname'] = $row_tbl_admin['username'];
            $_SESSION['email'] = $row_tbl_admin['email'];
            echo "<script>alert('Successfully logged in!')</script>";
            echo "<script>location.href='user/user.php';</script>";
        }
    }

    
    $sql_admin = "SELECT * FROM `admin` WHERE  `password` = ?";
    $stmt_admin = mysqli_prepare($conn, $sql_admin);
    if ($stmt_admin) {
        mysqli_stmt_bind_param($stmt_admin, "s", $password);
        mysqli_stmt_execute($stmt_admin);
        $result_admin = mysqli_stmt_get_result($stmt_admin);
        if ($result_admin && mysqli_num_rows($result_admin) > 0) {
            $row_admin = mysqli_fetch_assoc($result_admin);
            $_SESSION['id'] = $row_admin['id'];
            if ($row_admin["password"] == $password && $username == 'admin') {
                echo "<script>alert('Welcome admin');location.href = 'admin/index.php';</script>";
            } elseif ($row_admin["password"] == $password && $username == 'registrar') {
                echo "<script>alert('Welcome Registrar');location.href = 'registrar/index.php';</script>";
            }
        }
    }

    
    echo "<script>alert('Invalid username or password');</script>";

    mysqli_close($conn);
}
?>
