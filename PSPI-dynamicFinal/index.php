<!DOCTYPE html>
<html>
<head>
	<title>Climate Hub - Home Page</title>
	<link rel="shortcun icon" href="../logoblack.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="app.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="https://kit.fontawesome.com/9f1f624a60.js" crossorigin="anonymous"></script>
</head>
<body>
	<?php include("navbar.php"); ?>
	<div id="MagicCarousel" class=" my-carousel carousel slide " data-ride="carousel">
		<img class="ontop" src="cover.png">
	  <div class="carousel-inner" role="listbox">
	    <ol class="carousel-indicators">
	      <li data-target="#MagicCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#MagicCarousel" data-slide-to="1"></li>
	      <li data-target="#MagicCarousel" data-slide-to="2"></li>
	      <li data-target="#MagicCarousel" data-slide-to="3"></li>
	      <li data-target="#MagicCarousel" data-slide-to="4"></li>
	    </ol>

	    <div class="carousel-item active">
		  <img class="d-block carousel-image" src="forest.jpg">
	      <div class="carousel-caption">
	      		<p><svg class="bi bi-geo-alt" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 002 6c0 4.314 6 10 6 10zm0-7a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
				  </svg> Felton, United States</p>
	      </div> 
	    </div>
	    <div class="carousel-item">
	      <img class="d-block  carousel-image" src="nuclear.jpg">
	      <div class="carousel-caption">
	      		<p><svg class="bi bi-geo-alt" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 002 6c0 4.314 6 10 6 10zm0-7a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
				  </svg> Doel, Beveren, Belgium</p>
	      </div> 
	    </div>
	    <div class="carousel-item">
	      <img class="d-block  carousel-image" src="iceberg.jpg">
	      <div class="carousel-caption">
	      		<p><svg class="bi bi-geo-alt" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 002 6c0 4.314 6 10 6 10zm0-7a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
				  </svg> Greenland</p>
	      </div> 
	    </div>
	    <div class="carousel-item">
	      <img class="d-block  carousel-image" src="trash.jpg">
	      <div class="carousel-caption">
	      		<p><svg class="bi bi-geo-alt" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 002 6c0 4.314 6 10 6 10zm0-7a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
				  </svg> Bangladesh</p>
	      </div> 
	    </div>
	    <div class="carousel-item">
	      <img class="d-block  carousel-image" src="5.jpg">
	      <div class="carousel-caption">
	      		<p><svg class="bi bi-geo-alt" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 002 6c0 4.314 6 10 6 10zm0-7a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
				  </svg> Columbia Gorge, Wasco, Oregon, USA</p>
	      </div> 
	    </div>
	    
	    <a class="carousel-control-prev ontopbutton" href="#MagicCarousel" role = "button" data-slide="prev">
	      <span class="carousel-control-prev-icon"></span>
	      <span class="sr-only">Previous</span> 
	    </a>
	    <a class="carousel-control-next ontopbutton" href="#MagicCarousel" role = "button" data-slide="next">
	      <span class="carousel-control-next-icon"></span>
	      <span class="sr-only">Next</span> 
	    </a>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<img id="imagelogo"  src="logoblack.png">
			</div>
			<div class="col-lg-6 paragraph">
				<h1 data-aos="fade-right" data-aos-anchor-placement="top-center" data-aos-once="true">CLIMATE HUB</h1>
				<p data-aos="fade-top" data-aos-anchor-placement="top-center" data-aos-once="true">Climate change is now affecting every country on every continent. It is disrupting national economies and affecting lives, costing people, communities and countries dearly today and even more tomorrow. Weather patterns are changing, sea levels are rising, weather events are becoming more extreme and greenhouse gas emissions are now at their highest levels in history. Climate Hub is a website made by a group of young undergrads with the goal to inform people about these problems and encourage them to take action.</p>
			</div>
		</div>
	</div>
	
	<!-- Footer -->
	<?php include("footer.php"); ?>

	<!-- Arrow Up -->
	<a href="#" class="scrolltotop"><i class="fas fa-arrow-up"></i></a>
	
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

	<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript" src="script.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  	<script>
    	AOS.init();
  	</script>
</body>
</html>