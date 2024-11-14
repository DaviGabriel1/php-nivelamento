<?php
    abstract class Veiculo{
        public $velocidadeMedia;

        public function __construct($velocidadeMedia){
            $this->velocidadeMedia = $velocidadeMedia;
        }

        public function calcularVelocidadeMedia($velocidadeMedia){
            return $velocidadeMedia*1.5;
        }

        public function infos(){
            return "[velocidade média: $this->velocidadeMedia]";
        }
    }




?>