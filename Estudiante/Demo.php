<?php

class Demo
{
    private $idEstudiante;
    private $nombre;
    private $apellido;
    private $edad;
    private $cedula;
    private $genero;
    private $email;
    
    
    
     function __construct($idEstudiante, $nombre,$apellido,$edad,$cedula,$genero,$email) {
       $this->idEstudiante = $idEstudiante;
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->edad = $edad;
       $this->cedula = $cedula;
       $this->genero = $genero;
       $this->email = $email;
     }
    
     function setIdDemo($idDemo){
       $this->idDemo = $idDemo;
     } 
     function getIdDemo(){
       return $this->idDemo;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
}
?>
