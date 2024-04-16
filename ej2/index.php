<?php

$personas = include('personas.php');
$baseUrl = $_SERVER['REQUEST_URI'];

foreach ($personas as $persona) {
  echo "<p>
          <a href='{$baseUrl}/datos.php?id={$persona["id"]}'>
            {$persona['nombre']} {$persona['apellido']}
          </a>
        </p>";
}
