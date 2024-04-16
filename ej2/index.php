<?php

$personas = include('personas.php');

foreach ($personas as $persona) {
    echo "<p>
            <a href='datos.php?id=" . $persona["id"] . "'>" .
        $persona['nombre'] . " " . $persona['apellido'] . "</a>
          </p>";
}
