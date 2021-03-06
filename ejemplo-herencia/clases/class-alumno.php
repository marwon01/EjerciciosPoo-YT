<?php
    include_once('class-persona.php');
    class Alumno extends Persona{
        private $cuenta;
        private $promedio;

        public function __construct (
            $nombre,                //traer los atributos del constructor de la clase padre
            $apellido,
            $edad,
            $genero,
            $carrera,
            $cuenta,
            $promedio
        ){
            //llamamos a los valores con el constructor de la clase padre
            parent::__construct($nombre,$apellido,$edad,$genero,$carrera);
            $this->cuenta = $cuenta; 
            $this->promedio = $promedio; 
        }

        public function cancelarClase(){
            echo ' cancelar clase del alumno ' . $this->nombre;
        }
        public function cambiarCarrera(){}

        /**
         * Get the value of cuenta
         */ 
        public function getCuenta()
        {
                return $this->cuenta;
        }

        /**
         * Set the value of cuenta
         *
         * @return  self
         */ 
        public function setCuenta($cuenta)
        {
                $this->cuenta = $cuenta;

                return $this;
        }  

        /**
         * Get the value of promedio
         */ 
        public function getPromedio()
        {
                    return $this->promedio;
        }

        /**
         * Set the value of promedio
         *
         * @return  self
         */ 
        public function setPromedio($promedio)
        {
                    $this->promedio = $promedio;

                    return $this;
        }

        //al momento de llamar la funcion en el index, utiliza la funcion sobre escrita, ya que el padre tiene la misma, puesta las 2, llama las 2 
        public function matricular(){
            //parent::matricular();       //llama al metodo del padre
            echo 'Matricular Alumno<br>';
        } 

        public function reprobar(){
            echo "Reprobar alumno <br>";
        }

        public function aprobar(){
            echo "Aprobar alumno <br>";
        }
    }
?>