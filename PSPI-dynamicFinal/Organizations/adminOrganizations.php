<html>
     <head>
        <title>Admin - Organizations</title>
        <link rel="shortcun icon" href="../logoblack.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300&display=swap" rel="stylesheet">
        
        <script src="https://kit.fontawesome.com/9f1f624a60.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="adminOrganizations.css">
    </head>
    <body>
        <body>
        <?php include ('../Header_admin/header.php'); ?>
        <div class="container-fluid">
            <div class="row dashboard">
                <h2>Dashboard</h2>
            </div>
            <div class="row justify-content-center">
            <div class="col-lg-5 box">
                    <p>Cards: 
                        <span id="number">
                        <?php 
                          $hostname="localhost";
                            $database="climate_hub";

                            $Admin="Admin";
                            $Admin_password="climatehub";

                            $link = mysqli_connect($hostname,$Admin,$Admin_password,$database);

                            mysqli_select_db($link,'actions');

                            $sql= "SELECT actions.* FROM actions";
                            $result = $link->query($sql);

                            echo mysqli_num_rows($result);
                        ?>
                        </span>
                    </p>
                </div>
                <div class="col-lg-4 box ">
                    <p>
                        <svg class="bi bi-plus-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        </svg>
                        <button onclick="myfunction()">Add New Card</button>
                    </p>
                </div>
            </div>
             <div class="row justify-content-center" id="hidedelete">
                <div class="col-lg-9 " id="deletebox">
                    <form action="delete_card.php" method="POST">
                        <input type="text" name="delete" placeholder="Title">
                        <input type="submit" name="query_delete" value="Delete">
                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 upper">
                    <table id="uppertable">
                            <tr class="tablehead">
                                <th class="column1">Organization</th>
                                <th class="column2">Image</th>
                                <th class="column3">Doc</th>
                                <th class="column4">Theme</th>
                                <th class="column5">Action</th>
                            </tr>
                    </table>        
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 box3 scrollable">
                    <table>
                        <tbody> 
                            <?php
                                #session_start();
                                #$_SESSION['UserName'] = $_SESSION['UserName'];
                                 $hostname="localhost";
                                 $database="climate_hub";

                                 $Admin="Admin";
                                 $Admin_password="climatehub";

                                 $link = mysqli_connect($hostname,$Admin,$Admin_password,$database);

                                 mysqli_select_db($link,'actions');

                                 $sql= "SELECT actions.* FROM actions";
                                 $result = $link->query($sql);
     
                                 $check = FALSE;                      
                                 if(isset($_GET['check'])){
                                    $check = $_GET['check'];
                                    $Title = $_GET['Title'];
                                    $SecTitle = $_GET['SecTitle'];
                                    $Theme = $_GET['Theme'];
                                    $Doc =$_GET['Doc'];
                                    $Image = $_GET['Img'];
                                 }else{
                                     $check = FALSE;
                                 }  
                                 if($check == TRUE){
                                    ob_flush();
                                    flush();
                                    echo    "<tr>";
                                    echo        "<td class='column1'>$Title<br><div id='founded'>$SecTitle</div></td>";
                                    echo        "<td class='column2'>$Image</td>";
                                    echo        "<td class='column3'>$Doc</td>";
                                    echo        "<td class='column4'>$Theme</td>";
                                    echo        "<td class='column5'><a href='#' class='delete'><svg class='bi bi-trash' width='1em' height='1em' viewBox='0 0 16 16' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>";
                                    echo            "<path d='M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z'/>";
                                    echo            "<path fill-rule='evenodd' d='M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z' clip-rule='evenodd'/>";
                                    echo        "</svg></a></td>";
                                    echo    "</tr>";
                                 }else{
                                    if($result-> num_rows > 0){
                                        while($row = $result -> fetch_assoc()){
                                           ob_flush();
                                           flush();
                                           echo    "<tr>";
                                           echo        "<td class='column1'>$row[Title]<br><dic id='founded'>$row[SecTitle]</div></td>"; ?>
                                                       <td class='column2'><img src="data:image/png;charset=utf8;base64, <?php echo base64_encode($row['Img']); ?> " class="photo"></td>
                                  <?php    echo        "<td class='column3'><div class='scroll'>$row[Doc]</div></td>";
                                           echo        "<td class='column4'>$row[Theme]</td>";
                                           echo        "<td class='column5'><a href='delete_card.php?Title=$row[Title]'  class='delete'><svg class='bi bi-trash' width='1em' height='1em' viewBox='0 0 16 16' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>";
                                           echo            "<path d='M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z'/>";
                                           echo            "<path fill-rule='evenodd' d='M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z' clip-rule='evenodd'/>";
                                           echo        "</svg></a></td>";
                                           echo    "</tr>";
                                        }
                                    }
                                 }
                                 
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center " id="hide">
                <div class="col-lg-9 addnewuserbox">
                    <form id="addcard" action="addcard.php" method="POST" enctype="multipart/form-data">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title">
                        <label for="sectitle">Founded in</label>
                        <input type="text" id="sectitle" name="sectitle" >
                        <label for="doc">Doc</label>
                        <input type="text" id="doc" name="doc">
                        <label for="theme">Theme</label>
                        <input type="text" id="theme" name="theme">
                        <label>Image</label>
                        <label for="img" id="inputfile"><i class="fa fa-cloud-upload"></i>&nbsp;Choose a Logo</label>
                        <span style="margin-left: 1%;">
                            <strong>Chosen File: </strong>
                            <span id="filename">None</span>
                        </span>
                        <input type="file" id="img" name="img" >
                        <input type="submit" name="submit" value ="Add Card">
                    </form>
                </div>
            </div>
        </div>
        <?php include ('../Footer_admin/footer.php'); ?>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script>
            let inputFile = document.getElementById('img');
            let fileNameField = document.getElementById('filename');
            inputFile.addEventListener('change',function(event){
                let uploadedFilename = event.target.files[0].name;
                fileNameField.textContent = uploadedFilename;
            });
        </script>
        <script>
             function myfunction(){
                var x = document.getElementById("hide")
                
                if (x.style.display ===  "none"){
                    x.style.display = "flex";
                    $('html,body').animate({
                        scrollTop: $("#hide").offset().top},
                    'slow');
                    
                }
                else{
                    x.style.display = "none";
                }

            }

            function searchboxtoggle(){
                var y = document.getElementById("hidesearch")
                if (y.style.display ===  "none"){
                    y.style.display = "flex";
                }
                else{
                    y.style.display = "none";
                }
            }
            
           function deleteboxtoggle(){
                var y = document.getElementById("hidedelete")
                if (y.style.display ===  "none"){
                    y.style.display = "flex";
                }
                else{
                    y.style.display = "none";
                }
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>