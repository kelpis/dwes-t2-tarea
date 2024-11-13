<?php
abstract Class  Miembro  {
public $id;
public $nombre;
public $apellidos;
public $email;

//CONSTRUCTOR
public function __construct( $id,  $nombre,  $apellidos,  $email){
    $this->id = $id;
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->email = $email;
}
	
//GETTER
public function getId() {return $this->id;}

public function getNombre() {return $this->nombre;}

public function getApellidos() {return $this->apellidos;}

public function getEmail() {return $this->email;}

//SETTER
public function setId( $id): void {$this->id = $id;}

public function setNombre( $nombre): void {$this->nombre = $nombre;}

public function setApellidos( $apellidos): void {$this->apellidos = $apellidos;}

public function setEmail( $email): void {$this->email = $email;}

//TOSTRING

public function __toString() {
    return "ID: $this->id, 
    Nombre: $this->nombre, 
    Apellidos: $this->apellidos,
    Email: $this->email";
    }
		

}
