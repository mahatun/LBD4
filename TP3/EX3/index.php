<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Formulaire</h2>
  <form action="to.php" method="post">
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
    <button type="submit">Submit</button>
  </form>
</div>

</body>
</html>
