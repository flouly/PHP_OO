<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="../view/css/bootstrap.css" />
	</head>
	<body>
		<div id="container" style="width: 90%; margin: 5vh auto">
			<div class="row">
			
			
<!-- Forme contractée :  -->
<?php for($i = 0; $i < count($employes); $i ++) : 
extract($employes[$i]);
?>

<div class="col-sm-6 col-lg-3 col-md-4">
	<div class="thumbnail">
		<img src="../view/image1.jpg" alt="">
		<div class="caption">
			<h4 class="pull-right">Id : <?= $id_employes ?></h4>		
		<h4><a href="fiche_employe.php?id=<?= $id_employes ?>"><?= $prenom . ' ' . strtoupper($nom) ?></a>
			</h4>
			<ul>
				<li>Prenom : <?= $prenom ?></li>
				<li>Nom : <?= $nom ?></li>
				<li>Service : <?= $service ?></li>
				<li>Embauche : <?= $date_embauche ?></li>
				<li>Salaire : <?= $salaire ?>€</li>
				<li>Sexe : <?= ($sexe == 'm') ? 'Homme' : 'Femme' ?></li>
			</ul>
		</div>
		<div class="ratings">
			<p class="pull-right">15 reviews</p>
			<p>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
				<span class="glyphicon glyphicon-star"></span>
			</p>
		</div>
	</div>
</div>


<?php endfor; ?>
				
				
			</div>
		</div>
	</body>
</html>