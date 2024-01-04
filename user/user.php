
<?php  include 'includes/config.php';?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Veritas College Of Irosin</title>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
                <link rel="shortcut icon" href="../images/vci-logo.jpg" type="image/x-icon">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            </head>
            <body>
                    <div class="header">
            <a href="#sidenav" class="target" ><i class="bi bi-list"></i></a>
        </div>
                <div class="container-fluid">
            <div class="upper-header">
        
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
                    <header> 
                        <h1  >Veritas College Of Irosin</h1>    
                </header>
            </div><br>
                    <div class="container-body">
                        <div class="row1">
                            <a href="user.php">Home</a>
                            <a href="incoming-doc.php">Incoming
                            <?php
        $sql = "SELECT COUNT(*) as status FROM sendfile WHERE firstname = '$fn' and lastname = '$ln'and  middlename = '$mn' AND status = 'unread' and visibility = 'show'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $documentCount = $row['status']; 
        } else {
            $documentCount = 0;
        }
            if ($documentCount > 0) {
                echo '<span class="badge" style="color:#8B0000">' . '('.$documentCount.')' . '</span>';
            }
            ?>
                            </a>
                            <a href="outgoing-doc.php"> Outgoing</a>
                            <a href="trackingpage.php">Tracking Page</a>
                            <a href="documenthide.php">Archive Messages</a>
                            <a href="logout.php">Log Out</a>
                        </div>
                        <div class="row2">    
                    <form action="save.php" method="POST">        

                        <input type="hidden" name="fn" id="" value="<?php echo  $fn  ?>">
                        <input type="hidden" name="ln" id="" value="<?php echo  $ln  ?>">
                        <input type="hidden" name="mn" id="" value="<?php echo  $mn  ?>">
                    
                        <input type="hidden" name="email" id="" value="<?php echo  $email  ?>">
                        <input type="hidden" name="visibility" id="" value="show">
                        <input type="hidden" name="studentid" id="" value="<?php echo $student_id  ?>">

                        <div class="tor">
                        <div class="1">
                        <input type="checkbox" name="check1" id="check1" value="Transcript of Records">Transcript of Records
                        <input type="number" name="quantity1" id="quantity1" placeholder="Quantity">
                        </div>
                        <div class="2">
                        <input type="checkbox" name="check2" id="check2" value="Honorable Dismissal">Honorable Dismissal
                <input type="number" name="quantity2" id="quantity2" placeholder="Quantity">
            </div>
            <div class="3">
            <input type="checkbox" name="check3" id="check3" value="Cert of Grades">Cert of Grades
            <input type="number" name="quantity3" id="quantity3" placeholder="Quantity">
            </div>
            <div class="4">
            <input type="checkbox" name="check4" id="check4" value="Good Moral">Good Moral
            <input type="number" name="quantity4" id="quantity4" placeholder="Quantity">
            </div>
        <div class="5">
        <input type="checkbox" name="check5" id="check5" value="Diploma/Certificate">Diploma/Certificate
        <input type="number" name="quantity5" id="quantity5" placeholder="Quantity">
        </div>
            <div class="6">
            <input type="checkbox" name="check6" id="check6" value="S.O CERTIFICATE">S.O CERTIFICATE
            <input type="number" name="quantity6" id="quantity6" placeholder="Quantity">
            </div>
        <div class="7">
        <input type="checkbox" name="check7" id="check7" value="Cert of Enrollment">Cert of Enrollment
        <input type="number" name="quantity7" id="quantity7" placeholder="Quantity">
        </div>
        <div class="8">
        <input type="checkbox" name="check8" id="check8" value="CAV Certificate">CAV Certificate
        <input type="number" name="quantity8" id="quantity8" placeholder="Quantity">
        </div>
        <div class="9">
        <input type="checkbox" name="check9" id="check9" value="GWA">GWA
        <input type="number" name="quantity9" id="quantity9" placeholder="Quantity">
        </div>
                        </div>
                        </label>
                            <input type="text" id="customOption"  style="display: none;" placeholder="Enter custom option"><br>
                        <label for="details" >Purpose</label>
                            <textarea name="details" id="" name="details"  rows="5" required></textarea>
                        <br>
                        <input type="text" id="othersInput" name="othersInput" style="display: none; width:20%;" placeholder="Enter custom purpose">
                        <br>
                        <input type="hidden" id="trackingNumberInput" name="trackingnumber" value="">
                        <input type="hidden" name="status" value="unread">
                        <div class="button">
                            <input  type="submit"  value="Submit" name="submit">
                        </div>
                    </form>
                  

                        </div>
                        <div class="row3">
                    <img src="../images/vci-logo-removebg-preview1.png" width="100%" height="auto" alt="">
                    <h2 class="text-black" >Document Tracking System</h2>
                </div>
                        </div>
                    </div>
                </div>
                <script>
        document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('check1').addEventListener('change', () => {
            const quantityInput = document.getElementById("quantity1");
            quantityInput.style.display = document.getElementById('check1').checked ? "block" : "none";
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('check2').addEventListener('change', () => {
            const quantityInput = document.getElementById("quantity2");
            quantityInput.style.display = document.getElementById('check2').checked ? "block" : "none";
        });
    }); document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('check3').addEventListener('change', () => {
            const quantityInput = document.getElementById("quantity3");
            quantityInput.style.display = document.getElementById('check3').checked ? "block" : "none";
        });
    });  document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('check4').addEventListener('change', () => {
            const quantityInput = document.getElementById("quantity4");
            quantityInput.style.display = document.getElementById('check4').checked ? "block" : "none";
        });
    });  document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('check5').addEventListener('change', () => {
            const quantityInput = document.getElementById("quantity5");
            quantityInput.style.display = document.getElementById('check5').checked ? "block" : "none";
        });
    }); document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('check6').addEventListener('change', () => {
            const quantityInput = document.getElementById("quantity6");
            quantityInput.style.display = document.getElementById('check6').checked ? "block" : "none";
        });
    }); document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('check7').addEventListener('change', () => {
            const quantityInput = document.getElementById("quantity7");
            quantityInput.style.display = document.getElementById('check7').checked ? "block" : "none";
        });
    });  document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('check8').addEventListener('change', () => {
            const quantityInput = document.getElementById("quantity8");
            quantityInput.style.display = document.getElementById('check8').checked ? "block" : "none";
        });
    }); document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('check9').addEventListener('change', () => {
            const quantityInput = document.getElementById("quantity9");
            quantityInput.style.display = document.getElementById('check9').checked ? "block" : "none";
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
                const handleCheckboxChange = (checkboxId, quantityId) => {
                    const checkbox = document.getElementById(checkboxId);
                    const quantityInput = document.getElementById(quantityId);

                    checkbox.addEventListener('change', () => {
                        quantityInput.value = checkbox.checked ? 1 : '';
                        quantityInput.style.display = checkbox.checked ? "block" : "none";
                    });

                    // Initial setup
                    quantityInput.value = checkbox.checked ? 1 : '';
                    quantityInput.style.display = checkbox.checked ? "block" : "none";
                };

                handleCheckboxChange('check1', 'quantity1');
                handleCheckboxChange('check2', 'quantity2');
                handleCheckboxChange('check3', 'quantity3');
                handleCheckboxChange('check4', 'quantity4');
                handleCheckboxChange('check5', 'quantity5');
                handleCheckboxChange('check6', 'quantity6');
                handleCheckboxChange('check7', 'quantity7');
                handleCheckboxChange('check8', 'quantity8');
                handleCheckboxChange('check9', 'quantity9');
                handleCheckboxChange('check10', 'quantity10');
            });  

        
                typeSelect.addEventListener("change", function() {
                    if (typeSelect.value === "OTHER") {
                        customTypeInput.style.display = "block";
                    } else {
                        customTypeInput.style.display = "none";
                    }
                });

                purposeSelect.addEventListener("change", function() {
                    if (purposeSelect.value === "others") {
                        othersInput.style.display = "block";
                    } else {
                        othersInput.style.display = "none";
                    }
                });
                

    </script>

            </body>
            </html>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Cost Details</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Transcript of Record &#8369;500 per copy<br>
            Honorable Dimissal &#8369;300 per copy<br>
            Diploma &#8369;500 per copy<br>
            Cert of Grades &#8369;200 per copy<br>
            Goodmoral Character &#8369;200 per copy<br>
            GWA Certificate &#8369;200 per copy<br>
            Enrollment Certificate &#8369;200 per copy<br>
            CAV Certificate &#8369;200 per copy<br>
            S.O. Certificate &#8369;200 per copy
        </div>
        </div>
    </div>
    </div>

    <style>
                    *{
                        padding:0;
                        margin:0;
                box-sizing: border-box;
                font-family:'Times New Roman', Times, serif;
                    } #main{
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
                top:0;
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
                    
                    
                    
                    
                    
                    .container-fluid{
                    background:transparent;
                padding: 20px;
                width:100%;
                height: 100vh;
                    }.upper-header{
                    width:5%;
                    }header{
                        display:flex;
                    
                        justify-content: space-between;
                        padding:20px;
                    }#log-out{
                        text-decoration: none;
                        color:black;
                        border:1px solid white;
                        height: fit-content;
                        padding: 10px;
                        color:white;
                    }a{
                        text-decoration: none;
                        color:white;
                        font-size: 25px;
                    }.row1{
                        display: flex;
                        flex-direction: column;
                        border:3px solid green;
                        width: 100%;
                        width: 30%;
                        padding: 20px;
                        gap:20px;
                        border-radius:12px;
                    


                    }.row3{
                        display: flex;
                        flex-direction: column;
                        border:3px solid green;
                        width: 100%;
                        width: 30%;
                        padding: 20px;
                        gap:20px;
                

                border-radius:12px;
                    }
                    .container-body{
                        display: flex;
                        gap:10px;
                    }.row2{
                        border:3px solid green;
                        width: 100%;
                        padding: 20px;
                        gap:20px;
                        display: flex;
                        flex-direction: column;
                        border-radius:12px;


            background:transparent;
                    }label{
                        color:black;
                    display:flex;
                    gap:20px;
                    }form{
                        display: flex;
                        flex-direction: column;
                    }select[class="form-select form-select-lg mb-3"]{
                        width:50%;
                        border-radius: 0px;
                        font-size: 20px;
                    
                    }textarea{
                        width:50%;
                        height: 10vh;
                        padding:5px;
                    }input[type="submit"],input[type="button"]{
                    padding:10px;
                    font-weight: 700;
                    width:30%;
                    }.button{
                        display: flex;
                        justify-content: end;
                        gap:20px;
                    }.row1 > a{
                        border:3px solid green;
                        padding:20px;
                        font-size:1rem;
                        text-align:center;
                        color:black;
                    }body{
                        overflow-y:scroll;
                        background-image:url(../images/abstract-paper-background-concept.jpg);
                        width:100%;
                        height:auto;
                        background-size:cover;
                    }
                
                    .popup {
                    background-color: white;
                    padding: 20px;
                    border: 1px solid green;
                    width: 200px;
                    text-align: center;
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                }.row3{
                display: flex !important;
                flex-direction:column !important;
                }@media (max-width:800px){
                    .row3{
                        display:none;
                    }.row1 a{
                        font-size:15px;
                        width:100%;
                        height:fit-content;
                        padding:5px;
                    }h3[class="text-black"]{
                        font-size:15px;
                    }label{
                        font-size:10px;
                    }select{
                        padding:5px !important;
                        width:100% !important;
                        font-size:10px !important;
                    }textarea{
                        width:100%;
                    }input[type="submit"]{
                        font-size:10px;
                        padding:0;
                    }  header h1{
                    text-align:center;
                    }.upper-header{
                        padding:0px;
                    }.btn{
                        width:100%;
                    }.row3 h2:nth-child(2){
                        font-size:20px;
                    }.container-body{
                        display:flex;
                        flex-direction:column;
                    }.row1{
                        width:100%;
                    }.row3{
                        display:none;
                        width:100%;
                    }
                }#quantity1,#quantity2,#quantity3,#quantity4,#quantity5,#quantity6,
                #quantity7,#quantity8,#quantity9{
                    width:15%;
                    display:none;   
                }#quantity10{
                    width:15%;
                }.btn{
                    width:10%;
                    float:right;
                    background:white;
                    font-weight:700;
                    border:3px solid green;
                }.upper-header{
                border:3px solid green;

                padding:20px;
                width:100%;
                border-radius:12px;
                }header h1{
                    color:black;
                
                }input[type="checkbox"]{
                    cursor:pointer;
                }
            
            
                </style>



