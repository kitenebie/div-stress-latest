        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Veritas College Of Irosin</title>
            <link rel="stylesheet" href="style.css">
            <link rel="shortcut icon" href="../images/vci-logo.jpg" type="image/x-icon">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        </head>
        <body>
            <?php 
            include 'includes/config.php';
        ?>
            <style>
                *{
                    padding:0;
                    margin:0;
                    box-sizing: border-box;
                    font-family:'Times New Roman', Times, serif;
                }  #main{
            display:flex;
            flex-direction:column;
            z-index: 20;
            position:absolute;
            left:0px;
        }  
        #main > a {
            color:white;
        }

        label[for="fileInput"]{
            display:grid;
            align-items:center;
        }.header > a > i{
            font-size:30px;
        }
        .header{
            display:flex;
            justify-content:space-between;  
            height:fit-content;
        }
        .header a:nth-child(2){
            text-decoration:none;
            color:black;
            border:1px solid black;
            background:white;
            height:fit-content;
            padding:5px;
        }
        label > i[class="bi bi-pencil-square"]{
            font-size:20px;
            cursor:pointer;
        }
        .image-box{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }
        .nav{
            border: 1px solid black;
            width: max-content;
            padding: 5px;
            background-color: gray;
            position: relative;
        }
        #sidenav{
            position: absolute;
            left:-500px;
            transition:all 1s;
            padding:20px;
            background:rgb(11, 66, 14);
            height:100vh;
            top:0;
            position:fixed;
            border-right:1px solid black;
        }
        #sidenav:target{
            z-index: 100;
            left:0px;
            transition:all 1s;
        }
        i[class="bi bi-list"]{
            font-size:50px;
            color:black;
            font-weight:900;
            z-index: 50;
        }
        i[ class="bi bi-x"]{
            color:white;
            display:flex;
            align-items:end;
            justify-content:end;
            font-size:30px;
        }
        #mySidenav{
            background:#1b5e20;
        }
        .details > label > p{
            font-size:20px;
            color:white;
        }
        .details{
            display:flex;
            flex-direction:column;
            border:none !important;
        }
        label,h1{
            color:white;
        }
        label{
            font-size:20px;
        }@media (max-width:800px){
            a[href="#"]{
                font-size:10px !important;
            }a[href="../index.php"]{
                font-size:10px !important;
            }
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
                    background:white;
                    padding:20px;
                
                }.inner-container{
                    display:flex; 
                    background:transparent;
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
                 display:flex;

                 justify-content:end;
                 align-items:end;
                 width:100%;
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
                        padding: 10px;
                    }#logo{
                        width:100%;
                        height:auto;
                    }
                }.action-view a{
                    border:1px solid black;
                    padding:5px; 
                }
            </style>
             <div class="header">
        <a href="#sidenav" class="target" ><i class="bi bi-list"></i></a>
    </div>
    <div id="sidenav" class="sidenav" >
        <a href="#"><i class="bi bi-x"></i></a>
        <div class="image-box">
            <img src="../images/vci-logo-removebg-preview1.png" width="100" height="auto" id="show1">
            </label>
            <h5 STYLE="COLOR:WHITE"><?php echo $fullname; ?></h5>
        </div><br>
        <div class="details">
            <label for="">Course:<br>
                <p><?php echo $course; ?></p>
            </label>
            <label for="">Year Level:
                <p><?php echo $year_level; ?></p>
            </label>
            <label for="">Address:
                <p><?php echo $address; ?></p>
            </label>
            <label for="">Email: 
            </label>
            <p style="color:white;font-size:15px;"><?php echo $email; ?></p>
        </div>
    </div>

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
            <?php
                     $sql = "SELECT COUNT(*) as status FROM sendfile WHERE firstname = '$fn' and lastname= '$ln' and middlename = '$mn' AND status = 'unread' and visibility = 'show'";
                     $result = mysqli_query($conn, $sql);
     
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $documentCount = $row['status'];
        } else {
            $documentCount = 0;
        }
        ?>
            <h1 class="text-dark">Incoming Message</h1>
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
$searchQuery = " AND (trackingnumber LIKE '%" . strtr($escapedData, $reverseSymbolMapping) . "%')";
$incoming = "SELECT * FROM `sendfile` WHERE firstname = '$fn' AND middlename = '$mn' AND lastname = '$ln' AND visibility = 'show' " . $searchQuery . " ORDER BY id DESC";
        $result = mysqli_query($conn, $incoming);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $trackingnumber = $row['trackingnumber']; 
               
                $detail = $row['detail'];
                $trackingnumber = $row['trackingnumber'];
                $visibility = $row['visibility'];
        ?>
                        <form action="" method="post">
                            <div class="box">
                        <div class="inner-row1">
                        <img src="../images/vci-logo.jpg" width="10%" height="auto" alt="" id="logo">
                        <p><?php echo $trackingnumber; ?></p>
                        </div>       
                            <div class="action ">
                        <div class="action-view " id="action">          
                        <a href="viewincoming.php?view=<?php echo $id ?>">View</a>
                            <a href="update.php?update=<?php echo $id ?>">Hide</a>
                        </div>          
                            </div>
                            </div>
                        </form>
                    <?php } 
                } else {?>
                <center><H1 class="text-dark">NO RESULTS!</H1></center>
            <?php  }
                ?>
            </div></div>
        </body>
        </html>
