<?php
    class ExemploPublico{
        public $atributo_publico;
        public function metodo_publico(){
            echo "Este é um método publico";
        }

        public function __construct($valor){
            $this->atributo_publico = $valor;
        }
    }
?>