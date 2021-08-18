<?php  

	$numeros = $_POST;
	$maior = 0;
	$menor = 0;

	foreach ($numeros as $numero) {
		if($numero > $maior){
			$maior = $numero;
			//$menor = $numero;			
		}	
		
	}

	echo "Maior número é ".max($numeros)."<br>";
	echo "Menor número é ".min($numeros)."<br>";

?>