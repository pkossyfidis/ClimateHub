<html>
    <head>
        <title>Admin - Info</title>
        <link rel="shortcun icon" href="../logoblack.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="info_admin_style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <?php include('../Header_admin/header.php') ?>
        <div class="container-fluid ">
            <div class="row dashboard">
                <h2>DashBoard</h2>
            </div>
            <div class="row boxes">
                <div class="col-md-4 box">
                    <h2>Impacts</h2>
                    <div class="links">
                    <?php
                        $hostname = "localhost";
                        $database = "climate_hub";
                    
                        $Admin = "Admin";
                        $Admin_password = "climatehub";
                    
                        $link = mysqli_connect($hostname, $Admin, $Admin_password, $database);
                    
                        mysqli_select_db($link, 'problem_links');
                    
                        $sql = "SELECT problem_links.* FROM problem_links";
                        $result = $link-> query($sql);  

                        if($result-> num_rows > 0){
                            while($row = $result -> fetch_assoc()){
                                echo "<a href='$row[Problems]'>$row[Name]</a>";
                            }
                        }
                    ?>
                    </div>
                    <form action="add_links.php" method="POST">
                        <input type="text" name="link1" placeholder="Link">
                        <input type="text" name="name1" placeholder="Name">
                        <input type="submit" name="add1" value="Add">
                        <input type="submit" name="delete1" value="Delete">
                    </form>
                </div>
                <div class="col-md-4 box">
                    <h2>Actions</h2>
                    <div class="links">
                        <?php
                            $hostname = "localhost";
                            $database = "climate_hub";
                    
                            $Admin = "Admin";
                            $Admin_password = "climatehub";
                    
                            $link = mysqli_connect($hostname, $Admin, $Admin_password, $database);
                    
                            mysqli_select_db($link, 'action_links');
                    
                            $sql = "SELECT action_links.* FROM action_links";
                            $result = $link-> query($sql);  

                            if($result-> num_rows > 0){
                                while($row = $result -> fetch_assoc()){
                                    echo "<a href='$row[Actions]'>$row[Name]</a>";
                                }
                            }
                        ?>
                    </div>
                    <form action="add_links.php" method="POST">
                        <input type="text" name="link2" placeholder="Link">
                        <input type="text" name="name2" placeholder="Name">
                        <input type="submit" name="add2" value="Add">
                        <input type="submit" name="delete2" value="Delete">
                    </form>
                </div>
            </div>
                <div class="row second_row justify-content-center">
                    <div class="col-md-4 box">
                        <h2>More Links</h2>
                        <div class="links">
                        <?php
                            $hostname = "localhost";
                            $database = "climate_hub";
                    
                            $Admin = "Admin";
                            $Admin_password = "climatehub";
                    
                            $link = mysqli_connect($hostname, $Admin, $Admin_password, $database);
                    
                            mysqli_select_db($link, 'more_links');
                    
                            $sql = "SELECT more_links.* FROM more_links";
                            $result = $link-> query($sql);  

                            if($result-> num_rows > 0){
                                while($row = $result -> fetch_assoc()){
                                    echo "<a href='$row[More]'>$row[Name]</a>";
                                }
                            }
                        ?>
                        </div>
                        <form action="add_links.php" method="POST">
                            <input type="text" name="link3" placeholder="Link">
                            <input type="text" name="name3" placeholder="Name">
                            <input type="submit" name="add3" value="Add">
                            <input type="submit" name="delete3" value="Delete">
                        </form>
                    </div>
                </div>  
        </div>
        <?php include('../Footer_admin/footer.php') ?>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

	<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>