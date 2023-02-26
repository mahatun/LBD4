
<!DOCTYPE html>
<html>
<head>
	<title>Calculatrice</title>
	<!-- Include Bootstrap stylesheet -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-4">
		<h1 class="text-center mb-4">Calculatrice</h1>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="mb-4">
			<div class="form-group">
				<label for="op1">Opérande 1 :</label>
				<input type="text" name="op1" id="op1" class="form-control">
			</div>
			<div class="form-group">
				<label for="op2">Opérande 2 :</label>
				<input type="text" name="op2" id="op2" class="form-control">
			</div>
			<div class="form-group">
				<label>Opération :</label><br>
				<div class="form-check form-check-inline">
					<input type="radio" name="operation" value="addition" id="addition" class="form-check-input" checked>
					<label for="addition" class="form-check-label">Addition</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" name="operation" value="soustraction" id="soustraction" class="form-check-input">
					<label for="soustraction" class="form-check-label">Soustraction</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" name="operation" value="multiplication" id="multiplication" class="form-check-input">
					<label for="multiplication" class="form-check-label">Multiplication</label>
				</div>
				<div class="form-check form-check-inline">
					<input type="radio" name="operation" value="division" id="division" class="form-check-input">
					<label for="division" class="form-check-label">Division</label>
				</div>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Calculer</button>
		</form>

		<?php
			if(isset($_POST['submit'])){
				$op1 = $_POST['op1'];
				$op2 = $_POST['op2'];
				$operation = $_POST['operation'];

				if(empty($op1) || empty($op2)){
					echo "<div class='alert alert-danger'>Veuillez saisir les deux opérandes.</div>";
				}
				else{
					switch($operation){
						case "addition":
							$resultat = $op1 + $op2;
							break;
						case "soustraction":
							$resultat = $op1 - $op2;
							break;
						case "multiplication":
							$resultat = $op1 * $op2;
							break;
						case "division":
							if($op2 == 0){
								echo "<div class='alert alert-danger'>La division par zéro n'est pas autorisée.</div>";
							}
							else{
								$resultat = $op1 / $op2;
							}
							break;
					}
                    echo "<div class='alert alert-success'>Résultat de l'op $resultat </div>";
                }
                
            }
		
        ?>
                