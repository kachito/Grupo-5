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
       $this->idEstudiante = $idEstudiante;
     } 
     function getIdDemo(){
       return $this->idEstudiante;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     function setApellido($apellido){
       $this->apellido = $apellido;
     } 
     function getApellido(){
       return $this->apellido;
     } 
     function setEdad($edad){
       $this->edad = $edad;
     } 
     function getEdad(){
       return $this->edad;
     } 
     function setCedula($cedula){
       $this->cedula = $cedula;
     } 
     function getCedula(){
       return $this->cedula;
     } 
     function setGenero($genero){
       $this->genero = $genero;
     } 
     function getGenero(){
       return $this->genero;
     } 
     function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     } 
}
?>
