<?php
class Profesor extends Miembro
{
    public $titular;

    public $asignatura;
    //CONSTRUCTOR
    public function __construct($id,  $nombre,  $apellidos,  $email, $titular)
    {
        parent::__construct($id,  $nombre,  $apellidos,  $email);
        $this->titular = false;
    }
    //METODO CREAR MUESTRA
    public static function crearProfesoresDeMuestra()
    {
        $profesores = array(
            array("id" => 1, "nombre" => "Steve", "apellidos" => "Wozniak", "email" => "steve@apple.com", "asignatura" => "DWES"),
            array("id" => 2, "nombre" => "Ada", "apellidos" => "Lovelace", "email" => "ada@gmail.com", "asignatura" => "DIW"),
            array("id" => 3, "nombre" => "Taylor", "apellidos" => "Otwell", "email" => "taylor@laravel.com", "asignatura" => "DWEC"),
            array("id" => 4, "nombre" => "Rasmus", "apellidos" => "Lerdoff", "email" => "rasmus@php.com", "asignatura" => "DAW")

        );
        $profes = [];
        foreach ($profesores as $profesor) {
            $profes[] = new Profesor(
                $profesor['id'],
                $profesor['nombre'],
                $profesor['apellidos'],
                $profesor['email'],
                $profesor['asignatura']
            );
        }
        return $profes;
    }
}
