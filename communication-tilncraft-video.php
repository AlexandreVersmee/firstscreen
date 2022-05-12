<!doctype html>
<html lang="en">
<head>
	<title>TiltnCraft</title>

    <?php include './partials/metas.html' ?>
    <?php include './partials/styles.html' ?>
	<link href="./assets/fontawesome5.18/css/all.css" rel="stylesheet">
	<link href="./styles/css/film-entreprise-firstscreen.css" rel="stylesheet">
</head>

<body>

<div class="container shadow pt-0">

    <?php include './partials/header.html' ?>


	<h2 class="mb-5 text-center"><span class="underline-yellow">Communication</span></h2>
		<div class="row mb-3 realisation">
        		<p class="lead">text
        		</p>
        	</div>


    	<div class="row mb-3 realisation">
    		<div class="col-md-6">
    			<iframe width="560" height="315" src="https://www.youtube.com/embed/iwxG5PU0JoQ" frameborder="0"
    					allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    		</div>
    		<div class="col-md-6">
    			<iframe width="560" height="315" src="https://www.youtube.com/embed/baWzqzwEX8Y" frameborder="0"
    					allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    		</div>
    	</div>

    	<div class="row mb-3 realisation">
    		<div class="col-md-6">
    			<iframe width="560" height="315" src="https://www.youtube.com/embed/Uad-3e3XQdg" frameborder="0"
    					allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    		</div>
    		<div class="col-md-6">
    			<iframe width="560" height="315" src="https://www.youtube.com/embed/BfMBPcuijSw" frameborder="0"
    					allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    		</div>
    	</div>

    	<div class="row mb-3 realisation">
    		<div class="col-md-6">
    			<iframe width="560" height="315" src="https://www.youtube.com/embed/CNPDArdwPIg" frameborder="0"
    					allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    		</div>
    		<div class="col-md-6">
    			<iframe width="560" height="315" src="https://www.youtube.com/embed/wBMEtpcUMi4" frameborder="0"
    					allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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










