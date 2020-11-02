<!DOCTYPE html>
<html>
<head>
	<title>Climate Hub - Actions</title>
	<link rel="shortcun icon" href="../logoblack.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/9f1f624a60.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="organizations.css">

</head>
<body>
	<?php include("../navbar.php"); ?>
    <br>
    <div class="container-fluid box">
    <?php    
    	$hostname="localhost";
    	$database="climate_hub";

    	$Admin="Admin";
    	$Admin_password="climatehub";

    	$link = mysqli_connect($hostname,$Admin,$Admin_password,$database);

    	mysqli_select_db($link,'actions');

    	$sql= "SELECT actions.* FROM actions";
    	$result = $link->query($sql);

    ?>
		<div class="row">
			<div class="col-md-3 titlesec">
				<p class="title">Global Warming</p>
			</div>
			<div class="col-md-9 ">
				<?php	
				$sql= "SELECT actions.* FROM actions";
    			$result = $link->query($sql) or die($link->error);
				while($row= $result->fetch_assoc()){
					if($row['Theme']=="Global Warming"){
						echo "<div class='container'>";
						echo	"<div class='card'>";
							echo	'<img src="data:image/jpg;base64,'.base64_encode($row['Img'] ).'"/> ';
								echo "<div class='card-body'>";
										echo "<h2 class='card-title'>$row[Title]</h2>";
										echo "<h6 class='card-title'>$row[SecTitle]</h6>";
										echo "<p class='card-text'>$row[Doc]</p>";														
						        echo "</div>";
							echo "</div>";
						echo "</div>";
					}
				}
				?>

			</div>
		</div>


		<div class="row">
			<div class="col-md-3 titlesec">
				<p class="title">CO2 Emissions</p>
			</div>
			<div class="col-md-9 ">

				<?php
				$sql= "SELECT actions.* FROM actions";
    			$result = $link->query($sql);
				while($row= $result->fetch_assoc()){
					if($row['Theme']=="CO2 Emissions"){
						echo "<div class='container'>";
						echo	"<div class='card'>";
							echo	'<img src="data:image/jpg;base64,'.base64_encode($row['Img'] ).'"/> ';
								echo "<div class='card-body'>";
										echo "<h2 class='card-title'>$row[Title]</h2>";
										echo "<h6 class='card-title'>$row[SecTitle]</h6>";
										echo "<p class='card-text'>$row[Doc]</p>";														
						        echo "</div>";
							echo "</div>";
						echo "</div>";
					}
				}
				?>

			</div>
		</div>


		<div class="row">
			<div class="col-md-3 titlesec">
				<p class="title">Ice Melting</p>
			</div>
			<div class="col-md-9 ">		
			
			<?php
				$sql= "SELECT actions.* FROM actions";
    			$result = $link->query($sql);
				while($row= $result->fetch_assoc()){
					if($row['Theme']=="Ice Melting"){
						echo "<div class='container'>";
						echo	"<div class='card'>";
							echo	'<img src="data:image/jpg;base64,'.base64_encode($row['Img'] ).'"/> ';
								echo "<div class='card-body'>";
										echo "<h2 class='card-title'>$row[Title]</h2>";
										echo "<h6 class='card-title'>$row[SecTitle]</h6>";
										echo "<p class='card-text'>$row[Doc]</p>";														
						        echo "</div>";
							echo "</div>";
						echo "</div>";
					}
				}
				?>

		</div>
	</div>
	</div>
	
	
	<?php include("../footer.php"); ?>
	  <a href="#" class="scrolltotop"><i class="fas fa-arrow-up"></i></a>
	  <script>
		  $(document).ready(function(){
	//check if window is at the top
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrolltotop').fadeIn();
        } else {
            $('.scrolltotop').fadeOut();
        }
    });
    //scroll
    $('.scrolltotop').click(function(){
        $('html, body').animate({scrollTop : 0},500);
    });

});
	  </script>
	  <script>
	$(document).ready(function(){
		$(".more").hide();
		$(".readmore").click(function(){
			$(this).prev().toggle();
			if($(this).text()=="READ MORE"){
				$(this).text("READ LESS");
				$(".more").show();
			} else {
				$(this).text("READ MORE");
				$(".more").hide();
			}
		})
	});
</script>
  <script>
	$(document).ready(function(){
		$(".more2").hide();
		$(".readmore2").click(function(){
			$(this).prev().toggle();
			if($(this).text()=="READ MORE"){
				$(this).text("READ LESS");
				$(".more2").show();
			} else {
				$(this).text("READ MORE");
				$(".more2").hide();
			}
		})
	});
</script>
<script>
	$(document).ready(function(){
		$(".more3").hide();
		$(".readmore3").click(function(){
			$(this).prev().toggle();
			if($(this).text()=="READ MORE"){
				$(this).text("READ LESS");
				$(".more3").show();
			} else {
				$(this).text("READ MORE");
				$(".more3").hide();
			}
		})
	});
</script>

	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	
</body>
</html>