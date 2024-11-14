<?php
    include("Veiculo.php");
    class Carro extends Veiculo{
        public static $tipo = "esportivo";
        private $marca;
        private $modelo;
        private $ano;


        public function __construct($marca,$modelo,$ano,$velocidadeMedia){
            parent::__construct($velocidadeMedia); 
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
        }

        public function __get($chave){
            return $this->$chave;
        }

        public function __set($chave,$valor){
            $this->$chave = $valor;
        }

        public function infos(){
            parent::infos();
            return "[
                marca: $this->marca,
                modelo: $this->modelo,
                ano: $this->ano,
                velocidade média: $this->velocidadeMedia
            ]";
        }

        public static function apresentar(){
            $tipo = Carro::$tipo;
            return "o carro $tipo é ideal para quem deseja adrenalina! faça o seu pedido!";
        }


    }


?>