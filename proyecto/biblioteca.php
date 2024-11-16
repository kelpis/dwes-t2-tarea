<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>

    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $libros = [
        "libro1" => [
            "titulo" => "PHP para Principiantes",
            "autor" => "Carlos Ruiz",
            "precio" => 19.99,
            "categoria" => "Desarrollo web"
        ],
        "libro2" => [
            "titulo" => "JavaScript Avanzado",
            "autor" => "Laura García",
            "precio" => 25.99,
            "categoria" => "Desarrollo web"
        ],
        "libro3" => [
            "titulo" => "Algoritmos en Python",
            "autor" => "Miguel Fernández",
            "precio" => 29.99,
            "categoria" => "Algoritmos"
        ]
    ];

    ?>
    <h2>Información de todos los libros</h2>
    <table>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Precio</th>
            <th>Categoria</th>
        </tr>
        <?php
        foreach ($libros as $libro) {
            echo "<tr>";
            echo "<td>" . $libro["titulo"] . "</td>";
            echo "<td>" . $libro["autor"] . "</td>";
            echo "<td>" . $libro["precio"] . "€</td>";
            echo "<td>" . $libro["categoria"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <h2>Libros de la categoría 'Desarrollo web'</h2>
    <?php
    $librosWeb = array_filter($libros, function ($libro) {
        return $libro["categoria"] == 'Desarrollo web';
    });
    echo "<ol>";
    foreach ($librosWeb as $libro) {

        echo "<li>" . $libro["titulo"] . "</li>";
    }
    echo "</ol>";
    ?>
</body>

</html>