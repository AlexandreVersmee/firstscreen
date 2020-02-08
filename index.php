<!doctype html>
<html lang="en">
<head>
	<title>FirstScreen</title>

    <?php include './partials/metas.html' ?>
    <?php include './partials/styles.html' ?>
	<link href="./assets/fontawesome5.18/css/all.css" rel="stylesheet">
	<link href="./styles/css/firstscreen-index.css" rel="stylesheet">
</head>

<body>
<?php include './partials/header.html' ?>

<div id="carouselWelcome" class="carousel slide mb-5" data-ride="carouselWelcome" data-interval="false">
	<ol class="carousel-indicators">
		<li data-target="#carouselWelcome" data-slide-to="0" class="active"></li>
		<li data-target="#carouselWelcome" data-slide-to="1"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<div class="carousel-video-inner">
				<div id="video-player" data-video-id="l8toYz6-REE"></div>
			</div>
		</div>
		<div class="carousel-item">
			<img src="images/firstSreen-Bandeau-accueil.jpg" alt="FirstScreen">
		</div>
	</div>
	<a class=" carousel-control-prev" href="#carouselWelcome" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselWelcome" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>


<div class="container rubrique shadow mb-5">
	<div class="row">
		<div class="col-lg-4">
			<img src="images/mariage/thumbnail-mariage-firstScreen.jpg" class="img-fluid" alt="">
			<h2 class="mt-2 mb-3 text-center">Mariage</h2>
			<p>Le film de mariage est souvent pensé comme un bonus et une extension aux photos. Cependant, la ou les photos figent pour l’éternité, la vidéo est une
				histoire du temps, celui de ce jour unique. Captée ces moments et raconté votre histoire c’est un métier, le nôtre.</p>
			<p><a class="float-right" href="mariage-firstscreen.php" role="button">En savoir plus »</a></p>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
			<img src="images/films_dentreprises/thumbnail-film-entreprises-firstScreen.jpg" class="img-fluid" alt="">
			<h2 class="mt-2 mb-3 text-center">Films d'entreprises</h2>
			<p>Des images au services de votre identité et une histoire orignal et forte pour accrocher votre spectateur. C’est notre credo !</p>
			<p><a class="float-right" href="films-entreprise-firstscreen.php" role="button"> En savoir plus »</a></p>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
			<img src="images/films_artistiques/thumbnail-film-artistique-firstScreen.jpg" class="img-fluid" alt="">
			<h2 class="mt-2 mb-3 text-center">Films artistique</h2>
			<p>S’exprimer au travers de l’écran par du clip ou des courts-métrages.</p>
			<p><a class=" float-right" href="films-artistiques-firstscreen.php" role="button"> En savoir plus »</a></p>
		</div><!-- /.col-lg-4 -->
	</div>
</div>

<div class="container collaboration mb-5 shadow">
	<h2 class="mb-3 text-center mb-5"><span class="underline-yellow">Mes collaborations</span></h2>
	<div class="row mb-5">
		<div class="col-lg-3">
			<div class="card">
				<img class="img-fluid mx-auto d-block" src="./images/partners/logo_TF1.png" alt="slide 1">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="card">
				<img class="img-fluid mx-auto d-block" src="./images/partners/logo_BFM_TV_2019.jpg" alt="slide 2">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="card">
				<img class="img-fluid mx-auto d-block" src="./images/partners/logo_e2c_Grand_Hainaut.png" alt="slide 3">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="card">
				<img class="img-fluid mx-auto d-bloc" src="./images/partners/logo_arenberg.png" alt="slide 4">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3">
			<div class="card">
				<img class="img-fluid mx-auto d-block" src="./images/partners/logo_lita.jpg" alt="slide 5">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="card">
				<img class="img-fluid mx-auto d-block" src="./images/partners/logo_écomusée.png" alt="slide 6">
			</div>
		</div>
		<div class="col-lg-3">
			<div class="card">
				<img class="img-fluid mx-auto d-block" src="./images/partners/talent_digital.jpg" alt="slide 7">
			</div>
		</div>
		<div class="col-lg-3">

		</div>
	</div>
</div>


<!--
<div class="container-fluid ">
	<div class="row justify-content-center">
		<div id="carouselPartners" class="carousel slide mb-5 col-md-6" data-ride="carouselPartners" data-interval="1000">
			<div class="carousel-inner row w-10 mx-auto" role="listbox">
				<div class="carousel-item col-md-4 active">
					<img class="img-fluid mx-auto d-block" src="./images/partners/logo_TF1.png" alt="slide 1">
				</div>
				<div class="carousel-item col-md-4">
					<img class="img-fluid mx-auto d-block" src="./images/partners/logo_BFM_TV_2019.jpg" alt="slide 2">
				</div>
				<div class="carousel-item col-md-4">
					<img class="img-fluid mx-auto d-block" src="./images/partners/logo_e2c_Grand_Hainaut.png" alt="slide 3">
				</div>
				<div class="carousel-item col-md-4">
					<img class="img-fluid mx-auto d-bloc" src="./images/partners/logo_arenberg.png" alt="slide 4">
				</div>
				<div class="carousel-item col-md-4">
					<img class="img-fluid mx-auto d-block" src="./images/partners/logo_lita.jpg" alt="slide 5">
				</div>
				<div class="carousel-item col-md-4">
					<img class="img-fluid mx-auto d-block" src="./images/partners/logo_écomusée.png" alt="slide 6">
				</div>
				<div class="carousel-item col-md-4">
					<img class="img-fluid mx-auto d-block" src="./images/partners/talent_digital.jpg" alt="slide 7">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselPartners" role="button" data-slide="prev">
				<i class="fa fa-chevron-left fa-lg text-muted"></i>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next text-faded" href="#carouselPartners" role="button" data-slide="next">
				<i class="fa fa-chevron-right fa-lg text-muted"></i>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
-->
<!-- FOOTER -->
<?php include './partials/footer.html' ?>
<?php include './partials/scripts.html' ?>
<script src="./js/youtube-slider.js"></script>
</body>
</html>




