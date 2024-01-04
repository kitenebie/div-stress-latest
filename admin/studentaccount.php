<?php  include 'head.php'; ?>
<?php 
    if(isset($_SESSION['create'])){
        echo $_SESSION['create'];
        unset($_SESSION['create']);
    }
    if(isset($_SESSION['update'])){
        echo $_SESSION['update'];
        unset($_SESSION['update']);
    }
    if(isset($_SESSION['delete'])){
        echo $_SESSION['delete'];
        unset($_SESSION['delete']);
    }
    if (isset($_POST['search_button'])) {
        $searchTerm = $_POST['search'];
        $sql = "SELECT * FROM tbl_admin WHERE student_id LIKE '%$searchTerm%'";
    } else {
        $sql = "SELECT * FROM tbl_admin";
    }

    $res = mysqli_query($conn, $sql);

?>
     

<form action="" method="POST">
    <br>
    <a href="add-account.php" class="btnadd"><i class="bi bi-person-plus-fill"></i>Add Account</a>
    <input type="search" name="search" id="search">
    <input type="submit" value="Search" name="search_button">
    <br>
    <br>
    <table class="tbl_full">
        <tr>
            <th>STUDENT ID</th>
            <th>USERNAME</th>
            <th>FIRSTNAME</th>
            <th>MIDDLENAME</th>
            <th>LASTNAME</th>
            <th>ADDRESS</th>
            <th>COURSE</th>
            <th>YEAR LEVEL</th>
            <th>EMAIL</th>
            <th>ACTION</th>      
        </tr>

        <?php
        if ($res && mysqli_num_rows($res) > 0) {
            while ($rows = mysqli_fetch_assoc($res)) {
                $id = $rows['id'];
                $username = $rows['username'];
                $firstname = $rows['firstname'];
                $middlename = $rows['middlename'];
                $lastname = $rows['lastname'];
                $address = $rows['address'];
                $course = $rows['course'];
                $year = $rows['year_level'];
                $email = $rows['email'];
                $student_id = $rows['student_id'];
                ?>
                <tr>
                    <td><?php echo $student_id; ?></td>
                    <td><?php echo $username; ?></td>
                    <td><?php echo $firstname; ?></td>
                    <td><?php echo $middlename; ?></td>
                    <td><?php echo $lastname; ?></td>
                    <td><?php echo $address; ?></td>
                    <td><?php echo $course; ?></td>
                    <td><?php echo $year; ?></td>
                    <td><?php echo $email; ?></td>
                    <td style="display:flex;flex-direction:column">
                        <a class="btnupdate" href="update_acc.php?id=<?php echo $id; ?>"><i class="bi bi-pen"></i>Edit</a>
                        <a class="btndelete" href="delete.acc.php?id=<?php echo $id; ?>"><i class="bi bi-trash3"></i>Delete</a>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='10'>No records found</td></tr>";
        }
        ?>
    </table>
</form>
<style>
    .tbl_full{
        width:100VW;
        border:1px solid black;
        background-color: white;
        border: 1px solid black;
        overflow:hidden !important;
    }
    .btnupdate{
  
    padding: 5px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    color: green;
    text-decoration: none;
    border:1px solid black !important;
  
    }
    .btnupdate a{
        color: black;
        text-decoration: none;
       
    }
    
    .btndelete{
    padding: 5px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    color: red;
    border:1px solid black;
    text-decoration:none;

    }
    
    .btndelete a{
    color: black;
    text-decoration: none;
    }.btnadd{
        padding:10px;
    }.btnadd:hover{
background:green;
color:white;
    }th{
        font-size:10px;
    }   body{
                    overflow-y:scroll;
                    background-image:url(../images/abstract-paper-background-concept.jpg);
                    width:100%;
                    height:auto;
                    background-size:cover;
                }form{
            overflow:scroll !important;
        
        }
    
    @media(max-width:800px){
        th{
            font-size:5px !important;
        }td{
            font-size:9px !important;
        } .btndelete{
            font-size:5px !important;
          
        }.btnupdate{
            font-size:5px !important;
          
        }
    }
</style>