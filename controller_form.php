<?php 
	try 
	{
		$bdd = new PDO('mysql:host=localhost;dbname=site_proximite','root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
 	catch (Exception $e) 
	{
 		die('Erreur : ' . $e->getMessage());
	};
	
?>

<?php 
    // Preparation de la requête sql et envoi à la BDD
    $create_new_formulaire = $bdd->prepare(
       'INSERT INTO formulaire_contact(
               Nom, 
               Prenom, 
               Telephone, 
               Email, 
               Message, 
               Date_mail) 
        VALUES(
            :Nom, 
               :Prenom, 
               :Telephone, 
               :Email, 
               :Message, 
               now())');

    $create_new_formulaire->execute(array(
        'Nom' => $_POST['nom'],
        'Prenom' => $_POST['prenom'],
        'Telephone' => $_POST['telephone'],
        'Email' => $_POST['email'],
        'Message' => $_POST['message']));
    $create_new_formulaire->closeCursor();
?>


  <?php header('Location: form_contact.php'); ?>

  <?php if (isset($create_new_formulaire)){
    $_SESSION['msg_confirmation'] = 'Votre message a bien été envoyé';
  }
 ?>