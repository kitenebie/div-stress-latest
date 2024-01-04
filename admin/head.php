<!Doctype HTML>
	<html>
	<head>
		<title>VCI (Admin)</title>
        <link rel="shortcut icon" href="../images/vci-logo.jpg" type="image/x-icon">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-KVZQ+x0QaWue2KBn2lH24DOa2NVpDlGh6s5fA2XnxFv6mG6Z3JZIS3+usgZgUK3Z" crossorigin="anonymous">
	</head>
	<?php  include 'includes/config.php'; ?>

	<body>
	
	<a href="#mySidenav" id="show"><i class="bi bi-list"></i></a>
	<div id="mySidenav" class="sidenav">
		<a href="#" id="hide"><i class="bi bi-x-lg"></i></a>
		<center><img src="../images/vci-logo-removebg-preview1.png" width="150VW" height="auto" >
		<p style="font-size:20px;color:white">(Admin)</p>
	</center>
	<p class="logo"style=" font-size:0.6em;color:white" >Veritas College Of Irosin</p>
	 <a href="index.php" class="icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>
	  <a href="studentaccount.php"class="icon-a"><i class="bi bi-person-vcard-fill"></i>   Student Account</a>
	  <a href="request.php"class="icon-a"><i class="bi bi-clock-history"></i>Transaction History</a>
	   <a href="logout.php" ><i class="bi bi-box-arrow-in-left"></i>Logout</a>
	</div>
	<div id="main">
		<style>
			#hide{
				display:none;
				
			}#show{
				color:white;
				font-size:30px !important;
			}i[class="bi bi-list"]{
				font-size:20px !important;
			}.sidenav a:hover {
  color: #f1f1f1;
  background:white !important;
  color:black;
}
			@media (max-width:1000px){
				img[src="../images/vci-logo.jpg"]{
					width:10vw;
					height:auto;
				}*{
					font-size:10px !important;
				}.sidenav{
					width:50vw !important;
				}.whole{
					display:flex !important;
					gap:20px !important;
				}#hide{
				display:block;
			}#mySidenav{
				position:absolute;
				left:-50rem;
				
			}#mySidenav:target{
				left:0rem;
				
			}#main{
				margin-left:0px;
			}#main{
				margin-left:0px !important;
			}
			}
			</style>

