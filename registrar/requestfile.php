<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VCI (registrar)</title>
    <link rel="shortcut icon" href="../images/vci-logo.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body> 
    <?php
      include 'includes/config.php';
    if (isset($_GET['request'])) {
        $requestId = $_GET['request'];
        $sql = "SELECT * FROM `tbl_registrar` WHERE id=$requestId";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($rows = mysqli_fetch_assoc($result)) {
                $email = $rows['email'];
            
                $updateSqlOngoing = "UPDATE tbl_registrar SET status = 'Received' WHERE id = $requestId";
                $updateResultOngoing = mysqli_query($conn, $updateSqlOngoing);

                $body = "HI, Good Day! Thank you for requesting a document. Please have patience while we check your credentials. We will get back to you later...";
                $subject = "Veritas College of Irosin";
                
                if ($updateResultOngoing) {
                    $url = "https://script.google.com/macros/s/AKfycby_jOcTWZAekEvKJw0F6QjyCY8ZGznGmXQr12TCZBqAFZf7BdxblvO9NskJMA5saJ0/exec";
                    $ch = curl_init($url);
                    curl_setopt_array($ch, [
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_POSTFIELDS => http_build_query([
                            "recipient" => $email,
                            "subject" => $subject,
                            "body" => $body
                        ])
                    ]);
                    $result = curl_exec($ch);

                    if ($result === false) {
                        echo "<script>alert('Error sending email. Check your internet connection.'); window.location='request.php';</script>";
                        exit();
                    } else {
                        echo "<script>alert('Update successful');location.href='request.php';</script>";
                    }

                    curl_close($ch);
                } else {
                    echo "<script>alert('Error. Please try again.');location.href='request.php';</script>";
                }
            }
        }
    }
    ?>
</body>
</html>
