<!DOCTYPE html>
<html>
<head>
	<title>Climate Hub - Problems</title>
	<link rel="shortcun icon" href="../logoblack.png">
	<link rel="stylesheet" type="text/css" href="impacts.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300&display=swap" rel="stylesheet"></script>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" >
	<script src="https://kit.fontawesome.com/9f1f624a60.js" crossorigin="anonymous"></script>
</head>
<body>

	<!--NavBar Code-->
	<?php include("../navbar.php"); ?>


	<!--Problems Page code starts here-->
	<?php
			$hostname = "localhost";
			$database = "climate_hub";
				
			$Admin = "Admin";
			$Admin_password = "climatehub";

			$link = mysqli_connect($hostname,$Admin,$Admin_password,$database);

			mysqli_select_db($link,"lts");
			mysqli_select_db($link,"problem");

			$sql = "SELECT lts.* FROM lts";
			$sql1 = "SELECT problem.* FROM problem";
			$result = $link -> query($sql);
			$result1 = $link -> query($sql1);
			$check = FALSE;
	?>

			<div class="lts" data-aos="fade-down" data-aos-duration="1300">
		<?php	if($result -> num_rows > 0){
					while($row = $result -> fetch_assoc()){ ?>
						<a class="links" href=" <?php echo $row['href'] ?>"> <?php echo $row['Link'] ?> </a>
		     <?php }
		    	}  ?>
		    </div>

	
	<!--Main Code-->
	<div class="container-fluid box">
	<?php	$a = 'more';
			$b = 'readmore';
			if($result1 -> num_rows > 0){
				while($row = $result1 -> fetch_assoc()){ 
					$id = $row['ID']; 
					$more = $a.$id; 
					$readmore = $b.$id; ?>
					<div class="row">
						<div class="col-md-3 titlesec">
							<p> <?php echo $row['Title'] ?> </p>
						</div>
						<div class="col-md-9 <?php if($id==2 or $id==3 or $id==4){ echo 'sub'; } ?> ">
							<p class="info">
								<img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($row['Image']); ?> " class="images">
								<p class="text"> <?php echo $row['Text1'] ?> </p>
								<p class="text"><span class="<?php echo $more ?> "> <?php echo $row['Text2'] ?> </span> </p>
								<p class="text"><span class="<?php echo $more ?> "> <?php echo $row['Text3'] ?> </span></p>
								<p class="pread"><button class="<?php echo $readmore ?> " id="<?php echo $row['Link'] ?>">READ MORE</button></p>
							</p>
						</div>
					</div>
	  <?php }
		    	}  ?>				
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
<script>
	$(document).ready(function(){
		$(".more1").hide();
		$(".readmore1").click(function(){
			$(this).prev().toggle();
			if($(this).text()=="READ MORE"){
				$(this).text("READ LESS");
				$(".more1").show();
			} else {
				$(this).text("READ MORE");
				$(".more1").hide();
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
<script>
	$(document).ready(function(){
		$(".more4").hide();
		$(".readmore4").click(function(){
			$(this).prev().toggle();
			if($(this).text()=="READ MORE"){
				$(this).text("READ LESS");
				$(".more4").show();
			} else {
				$(this).text("READ MORE");
				$(".more4").hide();
			}
		})
	});
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>
</html>