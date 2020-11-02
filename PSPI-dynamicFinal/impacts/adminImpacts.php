<html>
    <head>
        <title>Admin - Problems</title>
        <link rel="shortcun icon" href="../logoblack.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/9f1f624a60.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="adminImpacts.css">
    </head>
    <body>
        <?php include('../Header_admin/header.php'); ?>
        <div class="container-fluid">
            <div class="row dashboard">
                <h2>Dashboard</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 box">
                    <p>Sections: 
                        <span id="number">
                        <?php 

                            $hostname = "localhost";
                            $database = "climate_hub";
                                
                            $Admin = "Admin";
                            $Admin_password = "climatehub";

                            $link = mysqli_connect($hostname,$Admin,$Admin_password,$database);

                            mysqli_select_db($link,"problem");

                            $sql= "SELECT problem.* FROM problem";
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
                        <button onclick="myfunction()">Add New Section</button>
                    </p>
                </div>
                
            </div>
            <div class="row justify-content-center" id="hidesearch">
                <div class="col-lg-9 " id="searchbox">
                    <form action="searchproblem.php" method="GET">
                        <input type="text" name="search" placeholder="Title">
                        <input type="submit" name="query" value="Search">
                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 upper">
                    <table id="uppertable">
                            <tr class="tablehead">
                                <th class="column1">Title</th>
                                <th class="column2">Image</th>
                                <th class="column3">Text</th>
                                <th class="column4">Action</th>
                            </tr>
                    </table>        
                </div>
            </div>
            <div class="row justify-content-center gap">
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

                                 mysqli_select_db($link,'problem');

                                 $sql= "SELECT problem.* FROM problem";
                                 $result = $link->query($sql);
     
                                 $check = FALSE;                      
                                 if(isset($_GET['check'])){
                                    $check = $_GET['check'];
                                    $Title = $_GET['Title'];
                                    $Image = $_GET['Image'];
                                    $Text1 = $_GET['Text1'];
                                    $Text2 = $_GET['Text2'];
                                    $Text3 = $_GET['Text3'];
                                 }else{
                                     $check = FALSE;
                                 }  
                                 if($check == TRUE){
                                    ob_flush();
                                    flush();
                                    echo    "<tr>";
                                    echo        "<td class='column1'>$Title</td>" ?>
                                                "<td class='column2'><img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($row['Image']); ?> " class="photo"></td>
                             <?php  echo        "<td class='column3'>$Text1.'<br><br>'.$Text2.'<br><br>'.$Text3</td>";
                                    echo        "<td class='column4'><a href='#' class='delete'><svg class='bi bi-trash' width='1em' height='1em' viewBox='0 0 16 16' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>";
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
                                           echo        "<td class='column1'>$row[Title]</td>"; ?>
                                                        <td class='column2'><img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($row['Image']); ?> " class="photo"></td>
                              <?php        echo        "<td class='column3'><div class='scroll'>$row[Text1]<br><br>$row[Text2]<br><br>$row[Text3]</div></td>";
                                           echo        "<td class='column4'><a href='deleteimpact.php?title=$row[Title]' class='delete'><svg class='bi bi-trash' width='1em' height='1em' viewBox='0 0 16 16' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>";
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
                <div class="col-lg-9 addnewproblembox">
                    <form id="addproblem" action="addimpact.php" method="POST" enctype="multipart/form-data">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title">
                        <label for="text1">First Paragraph</label>
                        <input type="text" id="text1" name="text1" >
                        <label for="text2">Second Paragraph</label>
                        <input type="text" id="text2" name="text2" >
                        <label for="text3">Third Paragraph</label>
                        <input type="text" id="text3" name="text3" >
                        <label>Image</label>
                        <label for="img" id="inputfile"><i class="fa fa-cloud-upload"></i>&nbsp;Choose an Image</label>
                        <span style="margin-left: 1%;">
                            <strong>Chosen File: </strong>
                            <span id="filename">None</span>
                        </span>
                        <input type="file" id="img" name="img">
                        <input type="submit" name="submit" value ="Add Problem">
                    </form>
                </div>
            </div>
        </div>
        <?php include('../Footer_admin/footer.php'); ?>
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
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>