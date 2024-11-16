<?php
class Alumno extends Miembro
{


    public $edad;
    private array $asignaturas = [];
    public bool $cursoAbonado;

    //Constructor
    public function __construct($id,  $nombre,  $apellidos,  $email, $edad,  $cursoAbonado)
    {
        parent::__construct($id,  $nombre,  $apellidos,  $email);
        $this->edad = $edad;
        $this->cursoAbonado = $cursoAbonado;
        $this->asignaturas = [];
    }

    //GETTER
    public function getEdad()
    {
        return $this->edad;
    }
    public function getAsignaturas()
    {
        return $this->asignaturas;
    }
    public function getCursoAbonado()
    {
        return $this->cursoAbonado;
    }
    //SETTER
    public function setEdad($edad): void
    {
        $this->edad = $edad;
    }
    public function setAsignaturas($asignaturas): void
    {
        $this->asignaturas = $asignaturas;
    }
    public function setCursoAbonado($cursoAbonado): void
    {
        $this->cursoAbonado = $cursoAbonado;
    }

    //Metodo muestra

    public static function crearAlumnosDeMuestra()
    {
        $alumnos = array(
            array("id" => 1, "nombre" => "Laura", "apellido" => "Martínez", "email" => "laura.martinez@email.com", "edad" => 22),
            array("id" => 2, "nombre" => "Sergio", "apellido" => "López", "email" => "sergio.lopez@email.com", "edad" => 25),
            array("id" => 3, "nombre" => "Carlos", "apellido" => "García", "email" => "carlos.garcia@email.com", "edad" => 24),
            array("id" => 4, "nombre" => "Marta", "apellido" => "Sánchez", "email" => "marta.sanchez@email.com", "edad" => 23),
            array("id" => 5, "nombre" => "Alba", "apellido" => "Fernández", "email" => "alba.fernandez@email.com", "edad" => 21),
            array("id" => 6, "nombre" => "David", "apellido" => "Rodríguez", "email" => "david.rodriguez@email.com", "edad" => 26),
            array("id" => 7, "nombre" => "Lucía", "apellido" => "Jiménez", "email" => "lucia.jimenez@email.com", "edad" => 20),
            array("id" => 8, "nombre" => "Jorge", "apellido" => "Pérez", "email" => "jorge.perez@email.com", "edad" => 22),
            array("id" => 9, "nombre" => "Elena", "apellido" => "Romero", "email" => "elena.romero@email.com", "edad" => 23),
            array("id" => 10, "nombre" => "Pablo", "apellido" => "Torres", "email" => "pablo.torres@email.com", "edad" => 24)
        );

        $personas = [];
        foreach ($alumnos as $alumno) {
            $personas[] = new Alumno(
                $alumno['id'],
                $alumno['nombre'],
                $alumno['apellido'],
                $alumno['email'],
                $alumno['edad'],
                false
            );
        }

        return $personas;
    }
    //METODO ABONAR CURSO
    function abonarCurso()
    {
        $this->cursoAbonado = true;
    }

    //METODO MATRICULAR ASIGNATURA
    public function matricularEnAsignatura(Asignatura $asignatura)
    {
        foreach ($this->asignaturas as $asig) {
            if ($asig->id === $asignatura->id) {
                //detiene la ejecucion si se ya esta matriculado.
                return;
            }
        }
        $this->asignaturas[] = $asignatura;
        
    }
}