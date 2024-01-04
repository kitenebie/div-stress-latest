<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veritas College Of Irosin</title>
    <link rel="stylesheet" href="sytle.css">
    <link rel="shortcut icon" href="../images/vci-logo.jpg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <?php include 'schead.php'; 
 
?>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing: border-box;
            font-family:'Times New Roman', Times, serif;
        }
        .container-fluid {
            padding: 20px;
            width: 100%;
        }
        input[type="password"],
        input[type="submit"] {
            padding: 10px;
        }
        .search-form {
            display: flex;
            justify-content: end;
            align-items:end;
            gap: 10px;
           
            width:100%;
        }
        form {
            display: flex;
            justify-content: space-between;
        }
        .box {
            display: flex;
            justify-content: space-between;
            border:1px solid gray;
            width:97%;
          
        }.inner-container{
            display:flex; 
        }.row1{
            display:flex;
            flex-direction:column;
            border:3px solid green;
padding:20px;
width:20%;
gap:10px;
        }.row1 > a {
            text-decoration:none;
            color:black;
            border:3px solid green;
padding:20px;
text-align:center;
        }.row2{
            color:white;
            border:3px solid green;
            width:100%;
           
         
        }.inner-container{
            display:flex;
            gap:20px;
        }.details > p {
            font-size:20px;
        }.inner-row1 > p{
            font-size:15px;
        }.inner-row1{
            display:flex;
        width:100%;
        
            padding:10px;
        }body{
                    overflow-y:scroll;
                    background-image:url(../images/abstract-paper-background-concept.jpg);
                    width:100%;
                    height:auto;
                    background-size:cover;
                }.box:hover{
         border:2px solid black;
       
        }.details{
            display:flex;
        }.details{
            border:1px solid black;
        }#action > a{
           color:black;
           text-decoration:none;
        }.action{
            display:flex;
          flex-direction:column;
            height:fit-content;
           
        }@media (min-width:0px) and (max-width:800px){
            a{
                font-size:10px;
            }.row1{
                width:fit-content;
            }img{
               width:10%;
               height:5vh;
            }p{
                font-size:10px !important; 
            }.box{
            width:100%;
           padding:0;
            }input[type="password"]{
                padding:0;
                width:100%;

            }input[type="submit"]{
                padding:0;
                width:50%;
            }.inner-container{
                display:flex;
                flex-direction:column;
            }.row1{
                width:100%;
            }.box{
                padding:10px;
            }#logo{
                width:50%;
                height:auto;
            }
        }.action-view a{
            border:1px solid black;
            padding:5px; 
        }
    </style>
    <?php
    
        $sql = "SELECT COUNT(*) as status FROM sendfile WHERE firstname = '$fn' and lastname = '$ln' and middlename = '$mn' AND status = 'unread' and visibility = 'show'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $documentCount = $row['status'];
        } else {
            $documentCount = 0;
        }
        ?>
  

    <?php
    $data = '';

    if (isset($_GET['search'])) {
        $data = $_GET['searchinput']; 
    }
    $storeFilter = "WHERE usercode1 = '$usercode'"; 
    $reverseSymbolMapping = array(
        '!' => '1',
        '@' => '2',
        '#' => '3',
        '$' => '4',
        '%' => '5',
        '^' => '6',
        '&' => '7',
        '*' => '8',
        '(' => '9',
        ')' => '0',
    );
    $escapedData = mysqli_real_escape_string($conn, strtr($data, array_flip($reverseSymbolMapping)));
    ?>

     <h1 class="text-dark">Archive messages</h1>
        <div class="inner-container">
        <div class="row1">
                    <a href="user.php">Home</a>
                    <a href="incoming-doc.php">Incoming
                    <?php
    if ($documentCount > 0) {
        echo '<span class="badge" style="color:#8B0000">' . '('.$documentCount.')' . '</span>';
    }
    ?>
                    </a>
                    <a href="outgoing-doc.php">Outgoing</a>
                    <a href="trackingpage.php">Tracking Page</a>
                    <a href="documenthide.php">Archive Messages</a>
                    <a href="logout.php">Log Out</a>
                </div>
                <div class="row2">  <div class="container-fluid">
        <form action="" method="GET">
            <div class="search-form">
                <input type="password" name="searchinput">
                <input type="submit" value="Search" name="search">
            </div>
        </form></div>          
        <?php
$searchQuery = " AND (REVERSE(trackingnumber) LIKE '%$escapedData%' OR REVERSE(trackingnumber) LIKE '%" . strtr($escapedData, $reverseSymbolMapping) . "')";
$incoming = "SELECT * FROM `sendfile` WHERE firstname = '$fn' and lastname = '$ln' and middlename = '$mn' AND  visibility = 'hide'" . $searchQuery . " ORDER BY id DESC";
$result = mysqli_query($conn, $incoming);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $trackingnumber = $row['trackingnumber']; 
        $typeofdoc = $row['typeofdoc'];
        $detail = $row['detail'];
        $from = $row['to'];
        $trackingnumber = $row['trackingnumber'];
        $visibility = $row['visibility'];
        $firstname = $row['firstname'];
        $middlename = $row['middlename'];
        $lastname = $row['lastname'];
?>
   
              <form action="" method="post">
                    <div class="box">
                   <div class="inner-row1">
                   <img src="../images/vci-logo.jpg" width="10%" height="auto" alt="" id="logo">
                 <p><?php echo $trackingnumber ?></p>
                   
                   </div>
                   
                     <div class="action ">
                   <div class="action-view d-flex" id="action" style="gap:20px">          
                   <a href="recoverupdate.php?update=<?php echo $id ?>">View</a>                  
                   </div>
                     </div>
                    </div>
                </form>
            <?php } 
        } else {?>
           <center><H1>NO RESULTS!</H1></center>
      <?php  }
        ?>
    </div></div>
</body>
</html>
