<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Formulaire</h2>
  <form  method="post">
    <div class="form-group">
      <label for="email">Nom:</label>
      <input type="text" class="form-control"  name="name" required>
    </div>
    <div class="form-group">
      <label for="text">Prenom:</label>
      <input type="text" class="form-control"  name="prenom" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pwd" required>
    </div>
    <div class="form-group">
      <label for="object">Objet:</label>
      <input type="text" class="form-control"  name="object" required>
    </div>
    <div class="form-group">
        <label for="destinataire">Destinataire :</label>
        <select class="form-control" id="destinataire" name="destinataire">
            <option value="service_apres_vente">Service après-vente</option>
            <option value="technique">Technique</option>
        </select>
    </div>
    <div class="form-group">
        <label for="message">Message :</label>
        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
<?php
	
	if (isset($_POST['submit']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['objet']) && !empty($_POST['service']) && !empty($_POST['message'])) {
		
		
		$nom = $_POST['name'];
		$prenom = $_POST['prenom'];
		$email = $_POST['email'];
		$objet = $_POST['object'];
		$service = $_POST['destinataire'];
		$message = $_POST['message'];

		// Afficher les informations saisies par l'utilisateur
		echo '<h1 style="text-align:center;">Informations saisies</h1>';
		echo '<p style="text-align:center;">Nom : $nom</p>';
		echo '<p style="text-align:center;">Prénom : $prenom</p>';
		echo '<p style="text-align:center;">Email : $email</p>';
		echo '<p style="text-align:center;">Objet : $objet</p>';
		echo '<p style="text-align:center;">Service : $service</p>';
		echo '<p style="text-align:center;">Message : $message</p>';
	}
    else{
        echo "";
    }
	?>

	
</html>
