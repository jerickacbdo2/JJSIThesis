<!DOCTYPE HTML>
<html>

<head>
	<title>Jasper Jean</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" type="image/ico" href="../image/jjasper.png">
	<!-- bootstrapcss -->
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="../css/maincss/style.css">

</head>

<body>
	<!-- Nav -->
	<div class="container-fluid p-0 sticky-top">
		<nav class="navbar navbar-expand-lg " style="background-color:hsla(233, 52%, 13%, 0.84)">
			<a class="navbar-brand" href="home.php"><img src="../image/jasper.png" class="img-thumbnail" width="16%" height="50%"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon bg-light"></span>
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
						<a class="nav-link" href="pages/contact.php">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pages/about.php">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pages/user/userlogin.php">crud</a>
					</li>
					<li>
						<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	<!-- carousel area -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="..\image\slideimg3jjsi.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<a class="btn btn-success btn-lg" href="http://localhost/viktor/index.php/product-category/shoes/" title="">Buy now!
					</a>
				</div>
			</div>
			<div class="carousel-item">
				<img src="..\image\slideimg3jjsi.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<a class="btn btn-success btn-lg" href="http://localhost/viktor/index.php/product-category/shoes/" title="">Buy now!
					</a>
				</div>
			</div>
			<div class="carousel-item">
				<img src="../image/slideimgjjsi2.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<a class="btn btn-success btn-lg" href="http://localhost/viktor/index.php/product-category/shoes/" title="">Liza Paisa!
					</a>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>


	<!-- jumbotron area -->
	<div class="jumbotron jumbotron-fluid text-center">
		<div class="container">
			<h1 class="display-4">Jasper Jeans</h1>
			<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
		</div>
	</div>


	<!-- top footer -->
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
	<div class="container-fluid text-center bg-white">
		<table class="table table-hover ">
			<thead class="thead-dark thead-expand-lg">
				<tr>
					<th scope="col">#</th>
					<th scope="col">First</th>
					<th scope="col">Last</th>
					<th scope="col">Handle</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="id01" class="modal">

		<form class="modal-content animate" action="/action_page.php" method="post">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				<h2>Log in</h2>
			</div>

			<div class="container">
				<label for="usrname">Username</label>
				<input type="text" id="usrname" name="usrname" required>

				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

				<button type="submit">Login</button>
				<label>
					<input type="checkbox" checked="checked" name="remember"> Remember me
				</label>
			</div>

			<div class="container" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
				<span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		</form>
	</div>

	<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
		var myInput = document.getElementById("psw");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");

		// When the user clicks on the password field, show the message box
		myInput.onfocus = function() {
			document.getElementById("message").style.display = "block";
		}

		// When the user clicks outside of the password field, hide the message box
		myInput.onblur = function() {
			document.getElementById("message").style.display = "none";
		}

		// When the user starts to type something inside the password field
		myInput.onkeyup = function() {
			// Validate lowercase letters
			var lowerCaseLetters = /[a-z]/g;
			if (myInput.value.match(lowerCaseLetters)) {
				letter.classList.remove("invalid");
				letter.classList.add("valid");
			} else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
			}

			// Validate capital letters
			var upperCaseLetters = /[A-Z]/g;
			if (myInput.value.match(upperCaseLetters)) {
				capital.classList.remove("invalid");
				capital.classList.add("valid");
			} else {
				capital.classList.remove("valid");
				capital.classList.add("invalid");
			}

			// Validate numbers
			var numbers = /[0-9]/g;
			if (myInput.value.match(numbers)) {
				number.classList.remove("invalid");
				number.classList.add("valid");
			} else {
				number.classList.remove("valid");
				number.classList.add("invalid");
			}

			// Validate length
			if (myInput.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("valid");
			} else {
				length.classList.remove("valid");
				length.classList.add("invalid");
			}
		}
	</script>
</body>

<!-- carousel -->
<!-- <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var carousel= document.getElementsByClassName("carousel-inner");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script> -->
<!-- Bootstrap js -->
<script src="../css/bootstrap/js/bootstrap.min.js"></script>
<script src="../css/bootstrap/js/bootstrap.bundle.js"></script>
<script src="../css/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>