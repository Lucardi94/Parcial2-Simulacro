<?php
    class Torneo {
        //Atributos
        private $colPartidos;
        private $importe;

        //Contructor
        public function __construct($colPar, $imp){
            $this->colPartidos = $colPar;
            $this->importe = $imp;            
        }

        //Metodos de Acceso
        public function getColPartidos(){
            return $this->colPartidos;
        }
        public function getImporte(){
            return $this->importe;
        }

        public function setColPartidos($nColPar){
            $this->colPartidos = $nColPar;
        } 
        public function setImporte($nImp){
            $this->importe = $nImp;
        }

        //ToString()
    }