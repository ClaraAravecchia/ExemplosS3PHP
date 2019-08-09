<?php
	class Carro {
		public $cor;
		public $portas;
		public $vel_max;
		public $vel_atual = 0;
		
		/// pra acessar atributos precisa ter o thisss!!!
		
		function mostrar_velocidade(){
			echo $this->vel_atual;
		}
		function acelerar($a, $t){
			$this->vel_atual = $this->vel_atual + $a*$t;
		}
		function frear($a, $t){
			$this->vel_atual = $this->vel_atual - $a*$t;
		}
		function virar($lado){
			echo "Virando para ".$lado;
		}
	}

?>