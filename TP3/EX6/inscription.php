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
  <form  method="POST" action="">
    <div class="form-group">
      <label for="nom">Nom:</label>
      <input type="text" class="form-control"  name="name" >
    </div>
    
    <div class="form-group">
      <label for="text">Prenom:</label>
      <input type="text" class="form-control"  name="prenom" >
    </div>
    <div class="form-group">

        <label for="civilite">Civilité:</label>

        <select class="form-control" id="civilite" name="civilite">

            <option value="Mlle">Mlle</option>

            <option value="Mme">Mme</option>

            <option value="M.">M.</option>

        </select>

    </div>
    <div class="form-group">

                <label for="date_naissance">Date de naissance:</label>

                <input type="date" class="form-control" id="date_naissance" name="date_naissance" >

    </div>
    
    <div class="form-group">
        <label >Formation:</label>
        <div class="checkbox">
            <label><input type="checkbox"  name = "formations[]" value="WEB"> WEB</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name = "formations[]" value="DB">DB</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox"  name = "formations[]" value="IA">IA</label>
        </div>
        

    </div>
      
    

    <div class="form-group">

        <label for="mot_de_passe">Mot de passe:</label>

            <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" >

    </div>
    <div class="form-group">
      <label for="pwd2">Confirm Password:</label>
      <input type="password" class="form-control"  name="re_mot_de_passe" >
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>

<?php
    $erreurs=[];
    if (isset($_POST['submit']) ){
        if(!isset($_POST['civilite'])) {

            $erreurs['civilite'] = 'La civilité doit être renseignée.';
    
        }
    
    
    
        // Vérification du nom
    
        if(empty($_POST['name'])) {
    
            $erreurs['name'] = 'Le nom doit être renseigné.';
    
        }
    
    
    
        // Vérification du prénom
    
        if(empty($_POST['prenom'])) {
    
            $erreurs['prenom'] = 'Le prénom doit être renseigné.';
    
        }
    
    
    
        // Vérification de la date de naissance
    
        if(empty($_POST['date_naissance'])) {
    
            $erreurs['date_naissance'] = 'La date de naissance doit être renseignée.';
    
        }
    
    
    
        // Vérification des formations
    
        if(empty($_POST['formations'])) {
    
            $erreurs['formations'] = 'Au moins une formation doit être sélectionnée.';
    
        }
    
    
    
        // Vérification du mot de passe
    
        if(empty($_POST['mot_de_passe'])) {
    
            $erreurs['mot_de_passe'] = 'Le mot de passe doit être renseigné.';
    
        }
    
    
    
        // Vérification de la réécriture du mot de passe
    
        if(empty($_POST['re_mot_de_passe'])) {
    
            $erreurs['re_mot_de_passe'] = 'La réécriture du mot de passe doit être renseignée.';
    
        } elseif($_POST['mot_de_passe'] !== $_POST['re_mot_de_passe']) {
    
            $erreurs['re_mot_de_passe'] = 'Les deux mots de passe ne sont pas identiques.';
    
        }
    
    
    
        // Affichage des erreurs
    
        if(!empty($erreurs)) {
    
            echo '<div class="alert alert-danger">';
    
            foreach($erreurs as $erreur) {
    
                echo $erreur.'<br>';
    
            }
    
            echo '</div>';
    
        } else {
    
            // Affichage des informations saisies par l'utilisateur
    
            echo '<table class="table">';
    
            echo '<tr><td>Civilité:</td><td>'.$_POST['civilite'].'</td></tr>';
    
            echo '<tr><td>Nom:</td><td>'.$_POST['name'].'</td></tr>';
    
            echo '<tr><td>Prénom:</td><td>'.$_POST['prenom'].'</td></tr>';
    
            echo '<tr><td>Date de naissance:</td><td>'.$_POST['date_naissance'].'</td></tr>';
    
            echo '<tr><td>Formations:</td><td>';
    
            foreach($_POST['formations'] as $formation) {
    
                echo htmlspecialchars($formation).'<br>';
    
            }
    
            echo '</td></tr>';
    
            echo '</table>';
    
            }
    
            

    }
	
	

        ?>
	
</html>
