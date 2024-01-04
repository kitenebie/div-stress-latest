
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
        <?php
$sql = "SELECT COUNT(*) as id FROM tbl_registrar WHERE status != 'unread'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $documentCount = $row['id'];
} else {
    $documentCount = 0;
};

$sqli = "SELECT COUNT(*) as id FROM tbl_registrar WHERE status != 'unread'";
$result1 = mysqli_query($conn, $sqli);

if ($result1) {
    $row1 = mysqli_fetch_assoc($result1); 
    $documentCount1 = $row1['id']; 
} else {
    $documentCount1 = 0;
}


?>
		
	<div class="container">
    <div class="col-div-6">
            <div class="box">
                <p class="number"> <?php
    if ($documentCount > 0) {
        echo '<span class="badge" style="color:#8B0000">' . '('.$documentCount.')' . '</span>';
    }
    ?><br/><span><i class="bi bi-file-earmark-bar-graph-fill"></i> Request </span></p>
              
            </div>
            <div class="box">
                <p class="number"> <?php
    if ($documentCount > 0) {
        echo '<span class="badge" >' . '('.$documentCount1.')' . '</span>';
    }
    ?><br/><span><i class="bi bi-clock-history"></i>History count</span></p>
            
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
        *{
            font-family:'Times New Roman', Times, serif;
        }
        .box{
            border:3px solid green;
        }
        body{
                    overflow-y:scroll;
                    background-image:url(../images/abstract-paper-background-concept.jpg);
                    width:100%;
                    height:auto;
                    background-size:cover;
                }
        .container{
            width:70%;
            float:right !important;
        }.col-div-6{
            display:flex;
            width:100%;
        }@media(max-width:800px){
            span{
                font-size:10px !important;
            }.box{
                width:100% !important;
            } .container{
                float:left;
                width:100%;
            }
        }
    </style>