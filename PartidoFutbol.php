<?php
    class PartidoFutbol extends Partido {
        //Contructor
        public function __construct($idPar, $fec, $canGolE1, $canGolE2, $colObjEqu){
            parent::__construct($idPar, $fec, $canGolE1, $canGolE2, $colObjEqu);
        }

        //Funciones
        public function categoriaEquipo($objEquipo){
            switch($objEquipo->getObjCategoria()->getIdCategoria()){
                case 0: return 0.11;
                case 1: return 0.17;
                case 2: return 0.23;
            }
        }

        public function coeficientePartido($indice){
            $coeficiente = parent::coeficientePartido($indice);
            return $coeficiente + $coeficiente * $this->categoriaEquipo($this->getColeccionObjEquipo()[$indice]);
        }
    }