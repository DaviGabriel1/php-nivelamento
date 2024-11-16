<?php
    include_once "./abstracts/Funcionario.php";
    class Assistente extends Funcionario{
        
        public function __construct($nome,$salarioBase){
            parent::__construct($nome,$salarioBase);
        }

        public function calcularSalario(){
            if(is_null($this->salarioBase)){
                throw new Exception("erro ao calcularSalario");
            }
            return $this->salarioBase*1.25+300;
        }
    }


?>