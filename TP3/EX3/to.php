<html>
    <html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1 style="color: blue;">Infos etudiant:</h1>
        <ul>
            <li>Name: <?php echo $_POST["name"] ?></li>
            <li>Prenom: <?php echo $_POST["prenom"] ?></li>
            <li>Email: <?php echo $_POST["email"] ?></li>
            <li>Password: <?php echo $_POST["pwd"] ?></li>
            <li>Objet: <?php echo $_POST["object"] ?></li>
            <li>Destinataire: <?php echo $_POST["destinataire"] ?></li>
            <li>Message: <?php echo $_POST["message"] ?></li>

        </ul>
    </body>
</html>