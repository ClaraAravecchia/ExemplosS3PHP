<?php

	include "classePessoa.php";

	class Aluno extends Pessoa{		
		public $matricula;
		public $nota;

		public function __construct($vetor){
			parent::__construct($vetor);
			$this->matricula = $vetor["matricula"];
			$this->nota = $vetor["nota"];
		}	
		
	
	public function exibe(){
		$this->exibe_pessoa();	
			
		echo "
		<fieldset>
				<div>
					<label>Matrícula:</label> ".$this->matricula."
				</div>
				<div>
					<label>Nota:</label> ".$this->nota."
				</div>
		</fieldset>";
		
		
	}

	function exibe_tr(){
		$this->exibe_tr_pessoa();
		echo "<td>".$this->matricula."</td>
				<td>".$this->nota."</td>
	
			  </tr>";
	}
}	

?>