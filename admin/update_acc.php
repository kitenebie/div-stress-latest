<?php
 include 'includes/config.php'; 



if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM `tbl_admin` WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            $rows = mysqli_fetch_assoc($result);
            $un = $rows['username'];
            $fn = $rows['firstname'];
            $mn = $rows['middlename'];
            $ln = $rows['lastname'];
            $add = $rows['address'];
            $cou = $rows['course'];
            $yl = $rows['year_level'];

            if (isset($_POST['submit'])) {
                $username = mysqli_real_escape_string($conn, $_POST['username']);
                $fullname = mysqli_real_escape_string($conn, $_POST['firstname']);
                $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
                $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
                $address = mysqli_real_escape_string($conn, $_POST['address']);
                $course = mysqli_real_escape_string($conn, $_POST['course']);
                $year = mysqli_real_escape_string($conn, $_POST['yearlevel']);

                $updateQuery = "UPDATE `tbl_admin` SET `username`='$username', `firstname`='$fullname', `lastname`='$lastname', `middlename`='$middlename', `address`='$address', `course`='$course', `year_level`='$year' WHERE id=$id";

                $updateResult = mysqli_query($conn, $updateQuery);

                if ($updateResult) {
                    $_SESSION['update'] = "<script>alert('Update Account Successfully')</script>";
                    header("location: studentaccount.php");
                    exit();
                } else {
                    $_SESSION['update'] = "<script>alert('Update Account Failed')</script>";
                    header("location: studentaccount.php");
                    exit();
                }
            }
        } else {
            $_SESSION['update'] = "<script>alert('Admin Not Found')</script>";
            header("location: studentaccount.php");
            exit();
        }
    } else {
        echo "Error: " . mysqli_error($conn);
        exit();
    }
} else {
    echo "<script>alert('ID parameter not set!')</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VCI (edit account)</title>
        <link rel="shortcut icon" href="../images/vci-logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 300px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"] {
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }

        input[type="submit"], input[type="button"] {
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 3px;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Account</h1>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($un);?>" require>

            <label for="firstname">First Name:</label>
            <input type="text" id="fullname" name="firstname" value="<?php echo htmlspecialchars($fn);?>" required>
              
            <label for="middlename">Middle Name:</label>
             <input type="text" name="middlename" id="" value="<?PHP echo $mn  ?>">
            
             <label for="lastname">Last Name:</label>
             <input type="text" name="lastname" id="" value="<?PHP echo $ln  ?>">

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($add);?>" required>

            <label for="course">Course:</label>
            <input type="text" id="course" name="course" value="<?php echo htmlspecialchars($cou);?>" required>

            <label for="yearlevel">Year Level:</label>
            <input type="text" id="yearlevel" name="yearlevel" value="<?php echo htmlspecialchars($yl);?>" required>

            <input type="submit" name="submit" value="Save">
            <input type="button" value="Cancel" onclick="cancel()">
        </form>
    </div>
</body>

</html>
<script>
    function cancel(){
        location.href = "studentaccount.php";
    }
</script>
