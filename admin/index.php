
<?php include('head.php');?>
	</div>
		
		<div class="col-div-6">
	</div>
		<div class="clearfix"></div>
	</div>

		<div class="clearfix"></div>
		<br/>
		<?php 
			$sql = "SELECT * FROM tbl_admin";
			$res = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($res);
			$count = mysqli_num_rows($res);
		?>
        <?php 
			$sql1 = "SELECT * FROM tbl_registrar";
			$res1 = mysqli_query($conn, $sql1);
			$row1 = mysqli_fetch_assoc($res1);
			$count1 = mysqli_num_rows($res1);
		?>
		
	<div class="container">
    <div class="col-div-6">
            <div class="box">
          
                <p class="number"><?php echo $count;?><br/><span>Student Accounts</span></p>
                <i class="fa fa-users box-icon"></i>
            </div>
        </div>
        </div>
        <div class="clearfix"></div>
        <br/><br/>
    </div>
    </div>
	</body>
	</html>
    <style>
        .container{
            width:70%;
            float:right;
        }@media (max-width:800px){
            i[class="fa fa-users box-icon"]{
            display:none;
         }
        }
    </style>
    <style>
        body{
                    overflow-y:scroll;
                    background-image:url(../images/abstract-paper-background-concept.jpg);
                    width:100%;
                    height:auto;
                    background-size:cover;
                }.box{
            border:3px solid green;
            
        }
    </style>