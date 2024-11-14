<?php
    abstract class Funcionario{
        protected $nome;
        protected $salarioBase;

        public function __construct($nome, $salarioBase){
            $this->nome = $nome;
            $this->salarioBase = $salarioBase;
        }

        public abstract function calcularSalario();

    }


?>