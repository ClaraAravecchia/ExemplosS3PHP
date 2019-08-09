<?php
	class NomeDaClasse {
		public $atributo1;
		public $atributo2;
		
		//...
		public $atributoN;
		
		//metodo sem passagem de parametro e sem retorno
		function metodo1(){
			//algoritimo metodo1
			echo "Executando o metodo 1";
		}
		
		// metodo com passagem de parametro
		function metodo2($x1, $x2){
			// atribui x e y a atributo1
			$this->atributo1 = $x.$y;
		}
		
		// metodo com passagem de parametro
		function metodoN($x, $y, $z){
			// algoritmo metodo N
			$this->atributo1 = $x.$y.$z;
			if(sizeof($this->atributo2) > sizeof($this->atributo1)){
				$retorno = $this->atributo2;
		}
			else{
				$retorno = $this->atributo1;
			}
			//metodo com retorno
			return($retorno);
	}
	
	}
?>