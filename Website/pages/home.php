<!DOCTYPE HTML>
<html>

<head>
	<title>Jasper Jean</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<!-- Nav -->
	<nav id="menu">
		<ul class="links">
			<li><a href="MasterPage.php">Home</a></li>
			<li><a href="#about">Program</a></li>
			<li><a href="index.php">Admissions</a></li>
			<li><a href="index.php">Services</a></li>
			<li><a href="index.php">About</a></li>
			<li class="push"><a href="../login.php">Log In</a></li>
		</ul>
	</nav>
		<!-- slidesimage -->
		<div class="slideshow-container">

			<div class="mySlides fade">

				<img src="../image/bus1.jpg" style="width: 50%">
			</div>

			<div class="mySlides fade">
				<img src="../image/bus2.jpg" style="width: 50%">
			</div>

			<div class="mySlides fade">
				<img src="../image/bus3.jpg" style="width: 50%">
			</div>

		</div>
		<br>

		<div style="text-align:center">
			<span class="dot"></span>
			<span class="dot"></span>
			<span class="dot"></span>
		</div>

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

</html>