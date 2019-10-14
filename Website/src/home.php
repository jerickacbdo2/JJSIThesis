<!DOCTYPE HTML>
<html>

<head>
	<title>Jasper Jean</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" type="image/ico" href="../image/jjasper.png">
	<!-- bootstrapcss -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">

</head>

<body>
	<!-- Nav -->
	<div class="container-fluid p-0">
	<nav class="navbar navbar-expand-lg" style="background-color:hsla(233, 52%, 13%, 0.84)">
	<a class="navbar-brand" href="home.php"><img src="../image/jasper.png" class="img-thumbnail" width="16%" height="16%"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<div class="mr-auto"></div>
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pages/busrental.php">Bus Rental</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pages/contact.php">Conatact Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pages/about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pages/user/user.php">crud</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="banner-area">
	<div class=" jumbotron text-center">
  <h1></h1>
  <p></p> 
</div>
</div>

	<!-- slidesimage
	<div class="slideshow-container">

		<div class="mySlides fade">

			<img src="../image/bus1.jpg" style="width:30% height:10%">
		</div>

		<div class="mySlides fade">
			<img src="../image/bus2.jpg" style="width:30% height:10%">
		</div>

		<div class="mySlides fade">
			<img src="../image/bus3.jpg" style="width:30% height:10%">
		</div>

	</div> -->
	<br>

	<div style="text-align:center">
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
	</div>
	<br>

<section>
<div class="container-fluid text-center">
  <div class="number d-flex flex-md-row-wrap justify-content-center">
    <div class="rect">
      <h3>0256</h3>
      <p>Bus Plate number</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>
</div>
</section>

	<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			slideIndex++;
			if (slideIndex > slides.length) {
				slideIndex = 1
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " active";
			setTimeout(showSlides, 2000); // Change image every 2 seconds
		}
	</script>

</body>
	<!-- Bootstrap js -->
	<script src="../js/bootstrap.min.js"></script>
</html>