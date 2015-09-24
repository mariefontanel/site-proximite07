	<?php include("_header.php");
		
	 ?>

		<div class="formulaire_contact">
			<h3 class="titre_form">Formulaire de contact</h3>
			<form method="post" action="controller_form.php">
		    	<div class="champ_form">
					<label for="nom">Nom :</label>
					<input type="text" size="40" name="nom" placeholder="votre nom ..." />
				</div>
				<div class="champ_form">
					<label for="prenom">Prénom :</label>
					<input type="text" size="40" name="prenom" placeholder="votre prénom ..." />
				</div>
				<div class="champ_form">
					<label for="telephone">Téléphone :</label>
					<input type="text" size="40" name="telephone" placeholder="00 00 00 00 00" />
				</div>
				<div class="champ_form">
				    <label for="courriel">Email :</label>
				    <input type="email" size="40"  name="email" placeholder="votre@dresse.fr" />
				</div>
				<div class="champ_form">
					<label for="message">Message :</label>
					<textarea id="message" name="message"></textarea>
				</div>
				<div class="envoyer">
		       		<button type="submit">Envoyer votre message</button>
		    	</div>

			</form>
		</div>
	<?php include("_footer.php"); 
		unset($_SESSION['msg_confirmation']);
	?>



