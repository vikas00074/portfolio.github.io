<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Portfolio</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
			ul li a:link{
		text-decoration: none;
		color: white;
		}
		</style>
	</head>
	<body>
		<header class="container">
			<div class="container p-2 bg-primary text-center">
				<p class="text-capitalize text-white">THIS IS MY PORTFOLIO HOME PAGE</p>
			</div>

			<nav class="navbar navbar-expand-lg bg-light">
				<a class="navbar-brand" href="index.html">Portfolio</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">Resume</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="exp.html">Experience</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="qualification.php">Qualification</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Projects
							</a>
							<div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="java_p.html">Java Projects</a>
								<a class="dropdown-item" href="web_p.html">Web development Projects</a>
								<a class="dropdown-item" href="php_p.html">PHP Projects</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<footer>
			<div class="fixed-bottom container">
				<p class="text-center bg-light">Designed & Developed by:
					<br>Vikas Kumar</p>
			</div>
		</footer>
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
	</html>