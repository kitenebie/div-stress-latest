<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VCI (Registration form)</title>
    <?php  include 'includes/config.php'; ?>
    <link rel="shortcut icon" href="../images/vci-logo.jpg" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image:linear-gradient(to right bottom, green 50%, white 50%);
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            border:3px solid green;
        }
        .logo {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
            position: relative;
            
        }
        .form-group label {
            position: absolute;
            left: 30px;
            top: 20px;
            transition: top 0.3s, font-size 0.3s;
            color: #333;
            font-size:10px;
            
        }
        .form-group input {
            width: calc(100% - 40px);
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
            box-sizing: border-box;
            border:1px solid green;
        }
        .form-group input:focus + label,
        .form-group input:not(:placeholder-shown) + label {
            top: -10px;
            font-size: 12px;
            color: #4caf50;
        }
        .form-actions {
            text-align: center;
        }
        .form-actions button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="../images/vci-logo.jpg" width="20%" height="auto" alt="Logo" width="100">
        </div>
        <form action="#" method="post">
        <div class="form-group">
                <input type="text" id="student_id" name="student_id" required placeholder="">
                <label for="student_id">Student ID</label>
            </div>
            <div class="form-group">
                <input type="text" id="username" name="username" required placeholder="">
                <label for="username">Username</label>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" required placeholder="">
                <label for="password">Password</label>
            </div>
            <div class="form-group">
                <input type="text" id="" name="firstname" required placeholder="">
                <label for="firstname">Firstname</label>
            </div>
            <div class="form-group">
                <input type="text" id="" name="middlename" required placeholder="">
                <label for="middlename">Middlename</label>
            </div>
            <div class="form-group">
                <input type="text" id="" name="lastname" required placeholder="">
                <label for="lastname">Lastname</label>
            </div>
            <div class="form-group">
                <input type="text" id="" name="address" required placeholder="">
                <label for="password">Address</label>
            </div>
            <div class="form-group">
                <input type="text" id="" name="course" required placeholder="">
                <label for="password">Course</label>
            </div>
            <div class="form-group">
                <input type="text" id="" name="year" required placeholder="">
                <label for="password">Year/Level</label>
            </div>
            <div class="form-group">
                <input type="email" id="" name="email" required placeholder="">
                <label for="password">Email</label>
            </div>
            <div class="form-actions">
                <button type="submit" name="submit">Create Account</button>
                <button type="button" onclick="cancel()">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>
<script>
    function cancel(){
        location.href="studentaccount.php";
    }
</script>
<?php


if(isset($_POST['submit'])){
    $username =   $conn->real_escape_string($_POST['username']);
    $password =  $conn->real_escape_string($_POST['password']);
    $firstname =  $conn->real_escape_string($_POST['firstname']);
    $middlename =  $conn->real_escape_string($_POST['middlename']);
    $lastname =  $conn->real_escape_string($_POST['lastname']);
    $address =  $conn->real_escape_string($_POST['address']);
    $course =  $conn->real_escape_string($_POST['course']);
    $yearslevel =  $conn->real_escape_string($_POST['year']);
    $email =  $conn->real_escape_string($_POST['email']); 
    $student_id =  $conn->real_escape_string($_POST['student_id']);
    $checkUsernameQuery = "SELECT * FROM tbl_admin WHERE username='$username'";
    $checkUsernameResult = mysqli_query($conn, $checkUsernameQuery);
    if (mysqli_num_rows($checkUsernameResult) > 0) {
        echo "<script>alert ('Username already exists!')</script>";
        
    } else {
    $sql = "INSERT INTO tbl_admin(`username`, `password`, `address`, `course`, `year_level`,`email`,`firstname`,`middlename`,`lastname`,`student_id`) 
            VALUES ('$username', '$password', '$address', '$course', '$yearslevel', '$email','$firstname','$middlename','$lastname','$student_id')"; 
    $res = mysqli_query($conn, $sql);
    if($res){
        echo "<script>alert('Successfully added an student');location.href='studentaccount.php';</script>";
    }else{
        echo "<script>alert('error,please try again');</script>";
    }
}}
?>
