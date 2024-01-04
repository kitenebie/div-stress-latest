<?php
include 'includes/config.php';
if (isset($_POST['submit'])) {
  try{
    $details = $_POST['details'];
    $status =  $_POST['status'];
    $fn =  $_POST['fn'];
    $mn =  $_POST['mn'];
    $ln =  $_POST['ln'];
    $email =  $_POST['email'];
    $studentid =  $_POST['studentid'];
    $visibility =  $_POST['visibility'];
    $quantity1 =  $_POST['quantity1'] != null ? $_POST['quantity1']:0;
    $quantity2 =  $_POST['quantity2'] != null ? $_POST['quantity2'] :0;
    $quantity3 =  $_POST['quantity3'] != null ? $_POST['quantity3'] :0;
    $quantity4 =  $_POST['quantity4'] != null ? $_POST['quantity4'] :0;
    $quantity5 =  $_POST['quantity5'] != null ? $_POST['quantity5'] :0;
    $quantity6 =  $_POST['quantity6'] != null ? $_POST['quantity6'] :0;
    $quantity7 =  $_POST['quantity7'] != null ? $_POST['quantity7'] :0;
    $quantity8 =  $_POST['quantity8'] != null ? $_POST['quantity8'] :0;
    $quantity9 =  $_POST['quantity9'] != null ? $_POST['quantity9'] :0;
 
    $check1 = isset($_POST['check1']) ? 'Transcript of Records' : null;
    $check2 = isset($_POST['check2']) ? 'Honorable Dismissal' : null;
    $check3 = isset($_POST['check3']) ? 'Cert of Grades' : null;
    $check4 = isset($_POST['check4']) ? 'Good Moral' : null;
    $check5 = isset($_POST['check5']) ? 'Diploma/Certificate' : null;
    $check6 = isset($_POST['check6']) ? 'S.O CERTIFICATE' : null;
    $check7 = isset($_POST['check7']) ? 'Cert of Enrollment' : null;
    $check8 = isset($_POST['check8']) ? 'CAV Certificate' : null;
    $check9 = isset($_POST['check9']) ? 'GWA' : null;

    // $check1 = 'Transcript of Records' ;
    // $check2 = 'Honorable Dismissal' ;
    // $check3 = 'Cert of Grades' ;
    // $check4 = 'Good Moral' ;
    // $check5 = 'Diploma/Certificate' ;
    // $check6 = 'S.O CERTIFICATE' ;
    // $check7 = 'Cert of Enrollment' ;
    // $check8 = 'CAV Certificate' ;
    // $check9 = 'GWA' ;

    // Check if at least one checkbox is selected
    if (!($check1 || $check2 || $check3 || $check4 || $check5 || $check6 || $check7 || $check8 || $check9)) {
        echo "<script>alert('Please select at least one checkbox')</script>";
    } else {
        $sql = "INSERT INTO tbl_registrar (
            details, posted_date, status, email, visibility, 
            check1, check2, check3, check4, check5, check6, check7, check8, check9, 
            firstname, lastname, middlename, 
            check1quantity, check2quantity, check3quantity, check4quantity, check5quantity, check6quantity, check7quantity, check8quantity, check9quantity, 
            student_id, 
            check1status, check2status, check3status, check4status, check5status, check6status, check7status, check8status, check9status, 
            tracking_number
        ) 
        VALUES (?, NOW(), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A')";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssssssssssssssssssss", $details, $status, $email, $visibility, $check1, $check2, $check3, $check4, $check5, $check6, $check7, $check8, $check9, $fn, $ln, $mn, $quantity1, $quantity2, $quantity3, $quantity4, $quantity5, $quantity6, $quantity7, $quantity8, $quantity9, $studentid);
        
        if ($stmt->execute()) {
            echo "<script>alert('Successfully Sent'); location.href ='/user/user.php'</script>";
        } else {
            echo "<script>alert('Error in execution'); location.href ='/user/user.php'</script>";
        }
        $stmt->close();
        
    }
  }catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
}
?>