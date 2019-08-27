<?php

	include "classePessoa.php";

	class Secretario extends Pessoa{		
		public $salario;
		
		public function __construct($vetor){
			parent::__construct($vetor);
			$this->salario = $vetor["salario"];
		}
		
		function exibe(){
			
			$this->exibe_pessoa();
			
			echo    "
			<fieldset>
			<div>	
						<label>Salário:</label> ".$this->salario."
					</div>
			</fieldset>";
		}

		function exibe_tr(){
			$this->exibe_tr_pessoa();
			echo "<td>".$this->salario."</td>
				  </tr>";
		}
		
	}
	

?>