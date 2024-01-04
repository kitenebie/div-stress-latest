<!Doctype HTML>
	<html>
	<head>
		<title>VCI (registrar)</title>
        <link rel="shortcut icon" href="../images/vci-logo.jpg" type="image/x-icon">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-KVZQ+x0QaWue2KBn2lH24DOa2NVpDlGh6s5fA2XnxFv6mG6Z3JZIS3+usgZgUK3Z" crossorigin="anonymous">
	</head>
	<?php    include 'includes/config.php';?>

	<body>
	<?php
$sql = "SELECT COUNT(*) as id FROM tbl_registrar WHERE status = 'unread'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $documentCount = $row['id'];
} else {
    $documentCount = 0;
}
?>

	
		<a href="#mySidenav" id="show"><i class="bi bi-list"></i></a>
		<div id="mySidenav" class="sidenav">
		<a href="#" id="hide"><i class="bi bi-x-lg"></i></a>
		<center><img src="../images/vci-logo-removebg-preview1.png" width="100VW" height="auto" alt="">
		<p style="font-size:20px;color:white" id="p1">(Registrar)</p>
	    </center>
	    <p class="logo"style="font-size:0.6em;color:white" >Veritas College Of Irosin</p>
	    <a href="index.php" class="icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>
	    <a href="request.php"class="icon-a"><i class="bi bi-file-earmark-bar-graph-fill"></i>  Request
	  <?php
    if ($documentCount > 0) {
        echo '<span class="badge" style="color:#8B0000">' . '('.$documentCount.')' . '</span>';
    }
    ?>
	</a>
	  <a href="history.php"><i class="bi bi-clock-history"></i>History</a>
<a href="logout.php"><i class="bi bi-box-arrow-in-left"></i>Logout</a>

	</div>
	<div id="main">
	
<style>
	#hide{
		display:none;
	}#show{
		color:white;
		font-size:30px !important;
	}#mySidenav{
		position:fixed;
		top:0;
	}
	.whole{
		display:flex;
		justify-content:space-around;
	}@media (min-width: 0px) and (max-width: 1000px) {
body{
	overflow:scroll;
}
	}
	@media (min-width: 0px) and (max-width: 800px) {
    
    #p1{
		font-size: 10px !important;
	}
    img[src="../images/vci-logo.jpg"] {
        width: 30%;
    }#mySidenav{
		position:absolute;
		left:-20rem;
		}

    .logo {
        font-size: 10px !important;
    }a{
		font-size: 10px !important;
	}#hide{
		display:block;
	}#mySidenav:target{
		left:0rem;
	}
}

</style>
		