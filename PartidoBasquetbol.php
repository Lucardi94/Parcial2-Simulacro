<?php
    class PartidoBasquetbol extends Partido {
        //Atributos
        private $cantidadFaltaE1;
        private $cantidadFaltaE2;

        //Contructor
        public function __construct($idPar, $fec, $canGolE1, $canGolE2, $colObjEqu, $canFalE1, $canFalE2){
            parent::__construct($idPar, $fec, $canGolE1, $canGolE2, $colObjEqu);
            $this->cantidadFaltaE1 = $canFalE1;
            $this->cantidadFaltaE2 = $canFalE2;
        }

        //Metodos de Acceso
        public function getCantidadFaltaE1(){
            return $this->cantidadFaltaE1;
        }
        public function getCantidadFaltaE2(){
            return $this->cantidadFaltaE2;
        }

        public function setCantidadFaltaE1($nCanFalE1){
            $this->cantidadFaltaE1 = $nCanFalE1;
        }
        public function setCantidadFaltaE2($nCanFalE2){
            $this->cantidadFaltaE2 = $nCanFalE2;
        }

        //Funciones
        public function coeficientePartido($indice){
            $coeficiente = parent::coeficientePartido($indice);
            if ($indice == 0 ){
                return $coeficiente - 0.75 * $this->getCantidadFaltaE1();
            } else return $coeficiente - 0.75 * $this->getCantidadFaltaE2();
        }

        //ToString
        public function __toString(){
            $text = parent::__toString();
            $text.="\nFaltas Equipo 1: ".$this->getCantidadFaltaE1().
            "\nFaltas Equipo 2: ".$this->getCantidadFaltaE2();
            return $text;
        }
    }