<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Calcular Média </title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

		<style media="screen">
			input::-webkit-outer-spin-button,
			input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
			}

			input[type=number] {
			-moz-appearance: textfield;
			}
	</style>
	</head>
	<body>
		<div class="container">

			<div class="col-3 text-center">
				<h3>Calcular Média</h3>
				<hr>
				<form  class="form-control bg-light" action="resultado.php" method="POST">
						<?php for($x=1; $x<11;$x++){ ?>
							<label> Número <?=$x;?> </label><br>
							<input type="number" class="mb-1" name="number<?=$x;?>"><br><br>
						<?php } ?>	
						<button class="btn btn-primary mb-1">Enviar Dados</button>
				</form>	
			</div>
				
		</div>	
	</body>
</html>