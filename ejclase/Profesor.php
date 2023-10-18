<?php

    class Profesor extends Persona
    {
        private $codProfesor;
        
        public function __construct($nombre,$edad,$codProfesor)
        {
            parent::__construct($nombre,$edad);
            $this->codProfesor = $codProfesor;
        }
        public function getcodProfesor(){
            return $this->codProfesor;
        }

        public function setcodProfe($codProfesor){
            $this->codProfesor = $codProfesor;
        }
        function __toString()
        {
            $aux = parent::__toString();
            return $aux . " Profesor con codigo " . $this->getcodProfesor();    
        }

    }
    