<!doctype html>
<html lang="en">
<head>
	<title>Ben</title>

    <?php include './partials/metas.html' ?>
    <?php include './partials/styles.html' ?>
	<link href="./assets/fontawesome5.18/css/all.css" rel="stylesheet">
	<link href="./styles/css/film-entreprise-firstscreen.css" rel="stylesheet">
</head>

<body>

<div class="container shadow pt-0">

    <?php include './partials/header.html' ?>


	<h2 class="mb-5 text-center"><span class="underline-yellow">Tarifications</span></h2>

	<div class="card-deck mb-3 text-center ">

		<div class="card mb-6 shadow-sm">
			<div class="card-header">
				<h4 class="my-0 font-weight-normal lovely">Formule classique</h4>
			</div>
			<div class="card-body">
				<h1 id="classiquePrice" class="card-title pricing-card-title yellow">975 €</h1>
				<p>Avec le classique, je suis présent des préparatifs au gâteau pour vous livrer un film de 15 minutes des meilleurs moments de
					votre mariage, entre musique et moments émouvants.
				</p>
				<p class="mb-4">
					Livraison par Wetransfer et sur clés USB si besoin.
				</p>

				Options:
				<div class="form-check mt-3 mb-4">
					<input class="form-check-input" type="radio" name="priceRadio" value="150" id="defaultCheck1Classique" onclick="addOptionValue(this)">
					<label class="form-check-label" for="defaultCheck1Classique">
						Tous les discours et animation en plus à part 150 €
					</label>
				</div>
				<div class="form-check mb-4">
					<input class="form-check-input" type="radio" name="priceRadio" value="200" id="defaultCheck2Classique" onclick="addOptionValue(this)">
					<label class="form-check-label" for="defaultCheck2Classique">
						La récupération de tous les vidéos filmées 200 €
					</label>
				</div>
				<div class="form-check mb-4">
					<input class="form-check-input" type="radio" name="priceRadio" value="0" id="defaultCheck2Classique" onclick="addOptionValue(this)">
					<label class="form-check-label" for="defaultCheck2Classique">
						Aucune option
					</label>
				</div>

				<!--<a href="./documents/tarification-mariage-firstscreen.pdf" target="_blank">
					<img width="50" height="75" src="images/mariage/miniature-tarification-firstscreen.png" alt="Broche tarifaire Mariage FirstScreen" /> Téléchargez la
					brochure
				</a>-->
			</div>
		</div>

		<div class="card mb-6 shadow-sm">
			<div class="card-header">
				<h4 class="my-0 font-weight-normal lovely">Formule complet</h4>
			</div>
			<div class="card-body">
				<h1 class="card-title pricing-card-title yellow">1300 €</h1>
				<p>Comme pour la formule classique, je suis présent toute la journée.
					<br/> Vous recevrez votre film de 15 minutes des meilleurs moments de votre mariage ainsi qu’un deuxième film plus intimiste comprenant les
					discours et tous les moments de la journée que j’ai capté.</p>
				<p class="mb-4">
					Livraison par Wetransfer et sur clés USB si besoin.
				</p>

				<!--	<a href="./documents/tarification-mariage-firstscreen.pdf" target="_blank">
                        <img width="50" height="75" src="images/mariage/miniature-tarification-firstscreen.png" alt="Broche tarifaire Mariage FirstScreen" /> Téléchargez la
                        brochure
                    </a>-->
			</div>
		</div>

	</div>
</div>


<div class="container shadow mt-3">

	<h2 class="mb-5 text-center"><span class="underline-yellow">Mes réalisations</span></h2>

	<div class="row mb-3 realisation">

		<div class="col-md-6">
			<iframe src="https://www.youtube.com/embed/VzIBr0ikQ54" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen></iframe>
		</div>
		<div class="col-md-6">
			<iframe src="https://www.youtube.com/embed/K8bHC-Xr1Ik" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen></iframe>
		</div>
	</div>

	<div class="row mb-3 realisation">

		<div class="col-md-6">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/8C-HQbYwgjI" frameborder="0"
					allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-md-6">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/v3P2RB6L65s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
	
		<div class="row mb-3 realisation">

		<div class="col-md-6">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/BL-PdO9ASyM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-md-6">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/5UpGReEKsHc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>


</div>


<!-- FOOTER -->
<?php include './partials/footer.html' ?>
<?php include './partials/scripts.html' ?>

<script>
    function addOptionValue(checked) {
        if ($('#' + checked.id).is(':checked') === true) {
            $('#classiquePrice').text(975 + parseInt($('#' + checked.id).val(), 10) + " €")
        } else {
            $('#classiquePrice').text("975 €")
        }
    }

</script>
</body>
</html>










