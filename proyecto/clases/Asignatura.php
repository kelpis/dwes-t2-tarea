<?php
class Asignatura
{
    public $id;
    public $nombre;
    public $creditos;
    //CONSTRUCTOR
    public function __construct($id,  $nombre,  $creditos)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }

    //METODO MUESTRA
    public static function crearMuestraAsignatura()
    {
        $asignaturas = array(
            array("id" => 1, "nombre" => "DWES", "creditos" => 7),
            array("id" => 2, "nombre" => "DWEC", "creditos" => 6),
            array("id" => 3, "nombre" => "DIW", "creditos" => 4),
            array("id" => 4, "nombre" => "DAW", "creditos" => 4),

        );
        $modulos = [];
        foreach ($asignaturas as $asignatura) {
            $modulos[] = new Asignatura(
                $asignatura['id'],
                $asignatura['nombre'],
                $asignatura['creditos']
            );
        }

        return $modulos;
    }
}