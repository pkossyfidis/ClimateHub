<!DOCTYPE html>
<html>
<head>
	<title>Climate Hub - Data</title>
	<link rel="shortcun icon" href="../logoblack.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="file:///C:/Users/AlexL/Desktop/css/bootstrap.min.css"></link>
	<script type="text/javascript" src="file:///C:/Users/AlexL/Desktop/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="explore.css">
	
	 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300&display=swap" rel="stylesheet">
	
	<script src="https://kit.fontawesome.com/9f1f624a60.js" crossorigin="anonymous"></script> 
</head>

<body>
	<?php include('../navbar.php'); ?>



	<div class="row no-gutters stl">
		<div class="col-md-12 col">
			<img class="rounded float-left image1" src="world.jpg" >
			<a href="world.html">
				<button id="#btnID1" class="btn1">
					<a id="link_id1" class="myLink" href="../data/data.php">DATA</a> 
				</button>
			</a>
			<img class="rounded float-left image2" src="info.jpg">
			<a href="info.html">
				<button id="#btnID2" class="btn2">
					<a id="link_id2" class="myLink" href="../info/info.php">INFORMATION</a> 
				</button>
			</a>
		</div>
	</div>



	<!-- Footer -->
	<?php include('../footer.php'); ?>
 
	<!-- Arrow Up -->
	<a href="#" class="scrolltotop"><i class="fas fa-arrow-up"></i></a>




	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script>
		//in and out of Image1

		$(document).ready(function(){
		  $(".image1").on({
		    mouseenter: function(){
		      $(".btn1").css("visibility", "visible");
		    },  
		    mouseleave: function(){
		      $(".btn1").css("visibility", "hidden");
		    } 
		  });
		});

		//in and out of Image2
		$(document).ready(function(){
		  $(".image2").on({
		    mouseenter: function(){
		      $(".btn2").css("visibility", "visible");
		    },
		    mouseleave: function(){
		      $(".btn2").css("visibility", "hidden");
		    }
		  });
		});


		$(document).ready(function(){
		  $(".btn1").on({
		    mouseenter: function(){
		    	$(".btn1").css("visibility", "visible");
		    	$(".btn2").css("visibility", "hidden");
		    }
		  });
		});


		$(document).ready(function(){
		  $(".btn2").on({
		    mouseenter: function(){
		      $(".btn2").css("visibility", "visible");
		      $(".btn1").css("visibility", "hidden");
		    }
		  });
		});


	</script>

	

</body>
</html>