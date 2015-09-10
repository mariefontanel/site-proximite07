<?php include("head.php"); ?>
<body>
	<?php include("header.php"); ?>
		<div class="formulaire_contact">
			<h2 class="titre_form">Formulaire de contact</h2>
			<form action="/ma-page-de-traitement" method="post">
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
				<div class="button">
		       		<button type="submit">Envoyer votre message</button>
		    	</div>
			</form>
		</div>
	<?php include("footer.php"); ?>
</body>

