<!DOCTYPE html>
	<html>
		<?php include("head.php"); ?>
		<body>
			<?php include("header.php"); ?>
			<div class="formulaire_contact">
				<h2>Formulaire de contact</h2>
				<form action="/ma-page-de-traitement" method="post">
				    <div>
				        <label for="nom">Nom :</label>
				        <input type="text" id="nom" />
				    </div>
				     <div>
				        <label for="prenom">Prénom :</label>
				        <input type="text" id="prenom" />
				    </div>
				     <div>
				        <label for="telephone">Téléphone :</label>
				        <input type="text" id="telephone" />
				    </div>
				    <div>
				        <label for="courriel">Email :</label>
				        <input type="email" id="email" />
				    </div>
				    <div>
				        <label for="message">Message :</label>
				        <textarea id="message"></textarea>
				    </div>
				     <div class="button">
	       				<button type="submit">Envoyer votre message</button>
	    			</div>
				</form>
			</div>

			<?php include("footer.php"); ?>
		</body>

