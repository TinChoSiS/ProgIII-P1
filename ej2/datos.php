<?php

$personas = include('personas.php');

$id = $_GET['id'];

if (!isset($id)) {
    echo "No se ha especificado un ID (GET: id)";
    return;
}

foreach ($personas as $persona) {
    if ($persona['id'] == $id) {
        echo "<p>ID: {$persona['id']} </p>
              <p>Nombre: {$persona['nombre']} </p>
              <p>Apellido: {$persona['apellido']} </p>
              <p>Edad: {$persona['edad']} </p>
              <p>Correo Electrónico: {$persona['correoElectronico']}</p>";

        return;
    }
}
echo "No se encontro la persona con ID: $id";