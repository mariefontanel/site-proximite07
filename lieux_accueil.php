<?php include("_header.php"); ?>

<div class="bloc_lieux">
	<div class="texte_lieux">
		<h3 class="titre_lieux">Lieux d'accueil</h3>
			<h4>Un seul N° de téléphone 04 75 30 50 82 pour prendre rendez-vous dans les lieux suivants: </h4>
				<ul>
					<li><div class="stmartin">A Saint Martin De Valamas (07310) : Quartier le Pont(siège)</div></li>
					<li><div class="stagreve">A Saint Agrève (07320): Centre socio culturel, Place Verdun</div></li>
					<li><div class="lamastre">A Lamastre (07270) : Communauté de communes, 18 rue Ferdinand Herold </div></li>
					<li><div class="cheylard">A Le Cheylard (07160) sur 2 sites : </div></li>
				<ul>
						<li>Relais emploi, quartier de la Gare</li>
						<li>Poleyrieux, zone d'Aric</li>
					</ul>
				<li><div class="ollieres">Aux Ollières(07360) : Antenne de la Communauté d’agglo Privas centre Ardèche, le Tissage</div></li>
			</ul>
	</div>				

	<div class="carte_lieux_accueil"><img src="images/cartecouleur.svg"class="img_carte_couleur">
	<form name="iti" action="#" class="form_itineraire">  
	Calculer votre itinéraire pour nous rencontrer :
	<p>Vous partez de : <input type="text" name="depart" />  
	<input type="hidden" name="arrivee" value="Site de Proximité des Boutières, Le Pont, 07310 Saint-Martin-de-Valamas"/>  
	<input type="button" value="Rechercher" onclick="window.open('http://maps.google.fr/maps?f=d&hl=fr&saddr='+document.iti.depart.value+'&daddr='+document.iti.arrivee.value+'&ie=UTF8&z=12&om=1');" /></p>
	</form>
	</div>
</div>	
<?php include("_footer.php"); ?>
