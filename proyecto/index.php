<!DOCTYPE html>
<html lang="es">

<?php
    include("/xampp/htdocs/tema2/tareaTema2/proyecto/clases/Miembro.php");
    include("/xampp/htdocs/tema2/tareaTema2/proyecto/clases/Alumno.php");
    include("/xampp/htdocs/tema2/tareaTema2/proyecto/clases/Profesor.php");
    include("/xampp/htdocs/tema2/tareaTema2/proyecto/clases/Asignatura.php");
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <h2>Alumnos</h2>

    <?php
    $personas = Alumno::crearAlumnosDeMuestra();

        echo "<ul>";
        foreach ($personas as $persona) {
            echo "<li>
                Nombre: {$persona->nombre}
                {$persona->apellidos},
                Email: {$persona->email}</li>";
        }
        echo "</ul>";
    ?>

    <h2>Profesores</h2>
    <?php
    $profesores = Profesor::crearProfesoresDeMuestra();

        echo "<ul>";
        foreach ($profesores as $profesor) {
            echo "<li>
                Nombre: {$profesor->nombre}
                {$profesor->apellidos},
                Email: {$profesor->email}</li>";
        }
        echo "</ul>";

    ?>

    <h2>Asignaturas</h2>
    <?php
    $modulos = Asignatura::crearMuestraAsignatura();
        echo "<ul>";
        foreach ($modulos as $modulo) {
            echo "<li>
                Nombre: {$modulo->nombre},
                Creditos: {$modulo->creditos}</li>";
        }
        echo "</ul>";

    ?>

    <h2>Alumnos <=23</h2>

    <?php
    $alumnos = Alumno::crearAlumnosDeMuestra();

    $alumnosMenores23 = array_filter($alumnos, function ($alumno) {
                return $alumno->edad <= 23;
            });

        echo "<ul>";
        foreach ($alumnosMenores23 as $alumno) {
            echo "<li>
                Nombre:  {$alumno->nombre}
                {$alumno->apellidos},
                Email:{$alumno->email}</li>";
            }
        echo "</ul>";
    ?>

    <h2>Alumnos con al menos 2 asignaturas</h2>

    <?php

        $alumnos = Alumno::crearAlumnosDeMuestra();
        $asignaturas = Asignatura::crearMuestraAsignatura();

            $alumnos[0]->matricularEnAsignatura($asignaturas[0]);
            $alumnos[1]->matricularEnAsignatura($asignaturas[0]);
            $alumnos[1]->matricularEnAsignatura($asignaturas[1]);
            $alumnos[2]->matricularEnAsignatura($asignaturas[0]);
            $alumnos[2]->matricularEnAsignatura($asignaturas[2]);
            $alumnos[3]->matricularEnAsignatura($asignaturas[0]);
            $alumnos[4]->matricularEnAsignatura($asignaturas[0]);
            $alumnos[4]->matricularEnAsignatura($asignaturas[1]);
            $alumnos[4]->matricularEnAsignatura($asignaturas[2]);
            $alumnos[5]->matricularEnAsignatura($asignaturas[0]);
            $alumnos[6]->matricularEnAsignatura($asignaturas[1]);
            $alumnos[6]->matricularEnAsignatura($asignaturas[1]);
            $alumnos[7]->matricularEnAsignatura($asignaturas[2]);
            $alumnos[8]->matricularEnAsignatura($asignaturas[1]);
            $alumnos[9]->matricularEnAsignatura($asignaturas[0]);

            
        $alumnosConAsignaturas = array_filter($alumnos, function ($alumno) {
                return count($alumno->getAsignaturas()) >= 2;
            });

            
            echo "<ul>";
            foreach ($alumnosConAsignaturas as $alumno) {
                echo "<li>
                    Nombre: {$alumno->getNombre()}
                    {$alumno->getApellidos()},
                    Email: {$alumno->getEmail()}</li>";
            }
            echo "</ul>";
    ?>
    
    <h2>Asignaturas con algun alumno matriculado</h2>

    <?php

            foreach ($asignaturas as $asignatura) {
                $alumnosMatriculados = false;
        
                foreach ($alumnos as $alumno) {
                    foreach ($alumno->getAsignaturas() as $asig) {
                        if ($asig->id === $asignatura->id) {
                            $alumnosMatriculados = true;
                            break;
                        }
                    }
                    if ($alumnosMatriculados) {
                        break;
                    }
                }
               
                if ($alumnosMatriculados) {
                    echo "<ul>";
                        echo "<li>
                            Nombre: {$asignatura->nombre}, 
                            Créditos: {$asignatura->creditos}</li>";
                    echo "</ul>";
                }
            }
    ?>

</body>

</html>