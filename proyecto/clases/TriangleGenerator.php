<?php

class TriangleGenerator
{
    public static function generateTriangle(int $altura): string
    {
        if ($altura < 0) {
            return "";
        }

        $triangulo = "";

        for ($i = 0; $i < $altura; $i++) {

            $espacio = $altura - $i - 1;
            $asterisco = 2 * $i + 1;


            $triangulo .= "<p>" . str_repeat("&nbsp;", $espacio) . str_repeat("*", $asterisco) . "</p>\n";
        }

        return $triangulo;
    }
}
