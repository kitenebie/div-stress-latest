<!DOCTYPE HTML>
<html>
<head>
    <title>Veritas College Of Irosin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../admin/css/style.css" type="text/css"/>
    <link rel="shortcut icon" href="../images/vci-logo.jpg" type="image/x-icon">
</head>
<?php 
include 'includes/config.php';

?>
<body>
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

    <style>
        #main{
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
    </style>
   
</body>
</html>
