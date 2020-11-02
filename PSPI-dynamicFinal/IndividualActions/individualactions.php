<!DOCTYPE html>
<html>
<head>
	<title>Climate Hub - Personal Actions</title>
	<link rel="shortcun icon" href="../logoblack.png">
	<link rel="stylesheet" type="text/css" href="actions2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300&display=swap" rel="stylesheet"></script>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" >
	<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
	<script src="https://kit.fontawesome.com/9f1f624a60.js" crossorigin="anonymous"></script>
</head>
<body>

	<!--NavBar Code-->
	<?php include("../navbar.php"); ?>

	<div class="container-fluid box ">


		<?php
			$hostname = "localhost";
			$database = "climate_hub";
				
			$Admin = "Admin";
			$Admin_password = "climatehub";

			$link = mysqli_connect($hostname,$Admin,$Admin_password,$database);

			mysqli_select_db($link,"card");
			mysqli_select_db($link,"lezantes");

			$sql = "SELECT card.* FROM card";
			$sql1 = "SELECT lezantes.* FROM lezantes";
			$result = $link -> query($sql);
			$result1 = $link -> query($sql1);
			$check = FALSE; 
			$counter = 0 ?>

	<?php	if($result1 -> num_rows > 0){
				while($row2 = $result1 -> fetch_assoc()){ ?>
					<div class="row quote">
						<div class="container">
							<p class="title"> <?php echo $row2['Title'] ?> </p>      
							<p class="info"> <?php echo $row2['Text'] ?> </p>
					    </div>
					</div>

				<!--PHP Code for Cards -->
				  <?php if($result -> num_rows > 0){ ?>
								<div class="row blue">
							 <?php $counter1 = 0; ?>
						      <?php while($counter1 < 3){ 
										$row1 = $result -> fetch_assoc() ?>
										<div class="col-md-2 no">
											<div class="flip-card">
												<div class="flip-card-inner">
													<div class="flip-card-front">
														<img src="data:image/png;charset=utf8;base64, <?php echo base64_encode($row1['Logo']); ?> " class="photo">
							   							<h3 class="mob"> <?php echo $row1['Title'] ?> </h3>
													</div>
								  					<div class="flip-card-back">
								   						<p class="text"> <?php echo $row1['Text'] ?> </p>
													</div>
												</div>
											</div>
										</div>
										<?php $counter1 += 1; ?>
							  <?php } ?>
							   </div>
				  <?php } ?>
	      <?php }
	        } ?>
	
	</div>

	<?php include("../footer.php"); ?>
	<a href="#" class="scrolltotop"><i class="fas fa-arrow-up"></i></a>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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

</body>
</html>