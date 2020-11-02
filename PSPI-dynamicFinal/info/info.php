<!DOCTYPE html>
<html>
<head>
	<title>Climate Hub - Information</title>
	<link rel="shortcun icon" href="../logoblack.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="file:///C:/Users/AlexL/Desktop/css/bootstrap.min.css"></link>
	<script type="text/javascript" src="file:///C:/Users/AlexL/Desktop/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="infostyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300&display=swap" rel="stylesheet">
	
	<script src="https://kit.fontawesome.com/9f1f624a60.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php include('../navbar.php'); ?>
	<div class="container-fluid uppercont">
		<div class="row jumbo">
			<div class="col-lg-6 jumbo-left-col">
				<h1 class="display-4">Were's All This Data <br>Coming From?</h1>
				<p>The data presented on the Climate Hub website come from various trusted sources. Below you can find links that correspond to all the websites we took data from.</p>
			</div>
			<div class="col-lg-6 jumbo-right-col">
				<img src="logo.png" alt="data">
			</div>
		</div>
		<div class="row second">
			<h1>Links Of All The Websites <br> We Collected Data From</h1>
		</div>
		<div class="row third no-gutters">
			
			<div class="col-md-12 rightcol">
				<div class="link-list">
					<ul class="list">
                        <h5>Impacts</h5>
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
                                    echo "<li>";
                                    echo    "<a href='$row[Problems]'>$row[Name]</a>";
                                    echo "</li>";
                                }
                            }
                        ?>
					</ul>
					<ul class="list">
                        <h5>Actions</h5>
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
                                    echo "<li>";
                                    echo    "<a href='$row[Actions]'>$row[Name]</a>";
                                    echo "</li>";
                                }
                            }
                        ?>
					</ul>
					<ul class="list">
                        <h5>More Links</h5>
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
                                    echo "<li>";
                                    echo    "<a href='$row[More]'>$row[Name]</a>";
                                    echo "</li>";
                                }
                            }
                        ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="row fourth">
			<h1>Contact Us</h1>
		</div>
		<div class="row fifth">
			<div class="col-md-12">
				<a href="#" class="contact_us"><svg class="bi bi-envelope" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
					<path fill-rule="evenodd" d="M.071 4.243a.5.5 0 01.686-.172L8 8.417l7.243-4.346a.5.5 0 01.514.858L8 9.583.243 4.93a.5.5 0 01-.172-.686z" clip-rule="evenodd"/>
					<path d="M6.752 8.932l.432-.252-.504-.864-.432.252.504.864zm-6 3.5l6-3.5-.504-.864-6 3.5.504.864zm8.496-3.5l-.432-.252.504-.864.432.252-.504.864zm6 3.5l-6-3.5.504-.864 6 3.5-.504.864z"/>
				  </svg>: AKLPTeam.gmail.com</a>
				  <p class="phone"><svg class="bi bi-phone" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M11 1H5a1 1 0 00-1 1v12a1 1 0 001 1h6a1 1 0 001-1V2a1 1 0 00-1-1zM5 0a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V2a2 2 0 00-2-2H5z" clip-rule="evenodd"/>
					<path fill-rule="evenodd" d="M8 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
				  </svg> : +30 678924567</p>
			</div>
		</div>
	</div>	
	<?php include('../footer.php'); ?>
	  <a href="#" class="scrolltotop"><i class="fas fa-arrow-up"></i></a>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

	<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript" src="script.js"></script>

</body>
</html>