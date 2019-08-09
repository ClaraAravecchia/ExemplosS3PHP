<?php 
	include ("classeNomeDaClasse.php");
	
	$o1 = new NomeDaClasse();
	$o2 = new NomeDaClasse();
	
	print_r($o1);
	echo "<br/>";
	
	$maior = $o1->metodoN("x", "y", "z");
	
	print_r($maior);
	
?>