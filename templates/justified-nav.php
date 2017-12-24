<!doctype html>
<html lang="en">
	<head>
        <?php include '../sitewide/globals-top.php'; ?>
		<title>Justified Nav Template for Bootstrap</title>
		<!-- Custom styles for this template -->
		<link href="justified-nav.css" rel="stylesheet">
	</head>
	<body class="sidebar-collapse">
		<div class="se-pre-con"></div>
        <?php include '../sitewide/header.php'; ?>
		<main role="main" class="container">
			<header class="masthead">
				<h3 class="text-muted">Project name</h3>
				<nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
					<button class="navbar-toggler" type="button" data-toggle="collapse"
					        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
					        aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav text-md-center nav-justified w-100">
							<li class="nav-item active">
								<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Projects</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Services</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Downloads</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">About</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01"
								   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>

								<div class="dropdown-menu" aria-labelledby="dropdown01">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<!-- Jumbotron -->
			<div class="jumbotron">
				<h1>Marketing stuff!</h1>

				<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus,
					tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
					amet.</p>

				<p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
			</div>
			<!-- Example row of columns -->
			<div class="row">
				<div class="col-lg-4">
					<h2>Heading</h2>

					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
						commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
						porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

					<p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
				</div>
				<div class="col-lg-4">
					<h2>Heading</h2>

					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
						commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
						porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>

					<p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
				</div>
				<div class="col-lg-4">
					<h2>Heading</h2>

					<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
						Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus
						commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>

					<p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
				</div>
			</div>
		</main>
        <?php include '../sitewide/footer.php'; ?>
        <?php include '../sitewide/globals-bottom.php'; ?>
	</body>
</html>