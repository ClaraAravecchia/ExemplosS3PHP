<?php
    class PaiProtected{

        protected function metodo_do_pai(){
            echo "Método protegido do pai. Acessivel tanto para objetos do tipo 'Pai protected' quanto 'FilhadePaiProtected'<br/>
            E aqui, um atributo protegido sendo acessado tanto por objetos de 'PaiProtected' quanto 'FilhadePaiProtected'";
            echo $this->atributo_do_pai;
        }

        public function __construct($a){
            $this->atributo_do_pai = $a;
        }
    }
?>