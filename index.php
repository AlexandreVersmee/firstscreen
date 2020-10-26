<!doctype html>
<html lang="en">
<head>
	<title>Ben</title>

    <?php include './partials/metas.html' ?>
    <?php include './partials/styles.html' ?>
	<link href="./assets/fontawesome5.18/css/all.css" rel="stylesheet">
	<link href="./styles/css/index-ben-video.css" rel="stylesheet">
</head>

<body>

<div class="container pt-0">
	<div class="row">
		<div class="col-12">
            <?php include './partials/header.html' ?>
		</div>

		<div class="col-12">
			<div id="carouselWelcome" class="carousel slide mb-lg-5 ml-lg-5 mr-lg-5" data-ride="carouselWelcome" data-interval="false">
				<ol class="carousel-indicators">
					<li data-target="#carouselWelcome" data-slide-to="0" class="active"></li>
<!--					<li data-target="#carouselWelcome" data-slide-to="1"></li>
-->				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="carousel-video-inner">
							<div id="video-player" data-video-id="nFmAjfY_8rg"></div>
						</div>
					</div>
					<!--<div class="carousel-item">
						<div class="carousel-video-inner">
							<div id="video-player" data-video-id="nFmAjfY_8rg"></div>
						</div>
					</div>-->
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


			<div class="jumbotron">
				<h1 class="display-4">Salut c’est <span class="edosz">Ben</span>,</h1>
				<p class="lead">Bienvenue sur mon site professionnel, ici vous retrouvez une partie de mes créations et des informations sur mes services.<br />
					J’ai toujours rêvé de faire un métier qui me passionne, l’audiovisuel c’est un véritable choc pour moi, l’occasion de pouvoir écrire en image et de
					raconter des histoires, de faire réagir les gens, d’être heureux.<br />
					Le chemin est semé d'embûches mais c’est avec le sourire et la détermination que je vous invite à me rejoindre ou me proposer un projet.<br />
					À très bientôt !
				</p>

				<div class="card mb-3" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-4">
							<img class="photo-ben" src="images/IMG_20200617_191216_080.jpg" alt="Photographie de Ben vidéaste" title="Photographie de Ben vidéaste" />
						</div>
						<div class="col-8">
							<div class="card-body">
								<p class="card-text"><br/>
									<i class="fas fa-phone-square"></i> 06 64 83 34 41<br />
									<i class="far fa-envelope"></i> benjaminversmee@gmail.com<br />
									<i class="fab fa-instagram"></i> www.instagram.com/versmeebenjamin
								</p>
							</div>
						</div>
					</div>
				</div>


			</div>

			<!--<blockquote class="blockquote">
				<p class="mb-0">

					Bienvenue sur mon site professionnel, ici vous retrouvez une partie de mes créations et des informations sur mes services.<br />
					J’ai toujours rêvé de faire un métier qui me passionne, l’audiovisuel c’est un véritable choc pour moi l’occasion de pouvoir écrire en image et de raconter
					des histoires, de faire réagir les gens, d’être heureux.<br />
					Le chemin est semé d'embûches mais c’est avec le sourire et la détermination que je vous invite à me rejoindre où me proposé un projet.<br />
					À très bientôt !
					<br />



				</p>
			</blockquote>-->
		</div>
	</div>
</div>


<!-- FOOTER -->
<?php include './partials/footer.html' ?>
<?php include './partials/scripts.html' ?>
<script src="./js/youtube-slider.js"></script>
</body>
</html>




