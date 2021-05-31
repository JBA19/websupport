<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

        <?= $this->renderSection("body") ?>

        <!-- <div id="scroll_to_top">
			<img src="<?php echo base_url(); ?>/images/scrolltop.png" alt="Retourner en haut">
		</div> -->
		
        <footer class="container-fluid">
            <p>&copy; 2021 - Tous droits réservés</p>
            <p><a href="<?= base_url('legals') ?>">Mentions légales</a> - <a href="<?= base_url('sitemap') ?>">Plan du site</a></p>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/ad6fd6db77.js" crossorigin="anonymous"></script>
    </body>
</html>