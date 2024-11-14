<?php
    include_once "./abstracts/Funcionario.php";
    include_once "./traits/salarioTrait.php";
    class Gerente extends Funcionario{
        use SalarioTrait;
        public function __construct($nome,$salarioBase){
            parent::__construct($nome,$salarioBase);
        }

        public function calcularSalario(){
            return $this->salarioBase*2.5+1000;
        }
    }

?>