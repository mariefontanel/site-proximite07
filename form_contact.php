	<?php include("_header.php"); ?>
		<div class="formulaire_contact">
			<h3 class="titre_form">Formulaire de contact</h3>
			<form action="traitement_form.php" target="_blank" method="post">
		    	<div class="champ_form">
					<label for="nom">Nom :</label>
					<input type="text" id="nom"  size="30" placeholder="votre nom ..." />
				</div>
				<div class="champ_form">
					<label for="prenom">Prénom :</label>
					<input type="text" id="prenom" size="30" placeholder="votre prénom ..." />
				</div>
				<div class="champ_form">
					<label for="telephone">Téléphone :</label>
					<input type="text" id="telephone" size="30" placeholder="00 00 00 00 00" />
				</div>
				<div class="champ_form">
				    <label for="courriel">Email :</label>
				    <input type="email" id="email" size="50" placeholder="votre@dresse.fr" />
				</div>
				<div class="champ_form">
					<label for="message">Message :</label>
					<textarea id="message"></textarea>
				</div>
				<div class="envoyer">
		       		<button type="submit">Envoyer votre message</button>
		    	</div>
			</form>
		</div>
	<?php include("_footer.php"); ?>

