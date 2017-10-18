<html>
	<head>
		<?php
			include_once 'head.php';
		?>
	</head>
	<body>
		<?php
			include_once 'menu.php';
		?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h1>Viralate</h1>
				</div>
			</div>
			
			<section id="sliderhome">
				<div id="meuSlider" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#meuSlider" data-slide-to="0" class="active"></li>
						<li data-target="#meuSlider" data-slide-to="1"></li>
						<li data-target="#meuSlider" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active"><img src="application/views/images/slide1.jpg" alt="Slide 1"/></div>
						<div class="item"><img src="application/views/images/slide2.jpg" alt="Slide 2"/></div>
						<div class="item"><img src="application/views/images/slide3.jpg" alt="Slide 3"/></div>
					</div>
					<a class="left carousel-control" href="#meuSlider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#meuSlider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</section>
		</div>
	
	

	
	
	
	</body>
</html>