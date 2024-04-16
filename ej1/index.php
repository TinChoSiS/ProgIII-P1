<?php

if (!isset($_GET['n1']) || !isset($_GET['op']) || !isset($_GET['n2'])) {
    echo 'Faltan Datos (GET: n1, op, n2)';
    echo "<p>Pureba con el siguiente link de ejemplo:
            <a href=\"{$_SERVER['REQUEST_URI']}/?n1=4&n2=5&op=sum\">Sumar: 4 + 5</a></br></p>";    
    return;
}

$numero1 = $_GET['n1'];
$numero2 = $_GET['n2'];
$operacion = $_GET['op'];


if (!is_numeric($numero1) || !is_numeric($numero2)) {
    echo 'Los valores ingresados no son numéricos';
    return;
}

if ($operacion === 'sum') {
    echo "{$numero1} +  {$numero2} = " . $numero1 + $numero2;
    return;
}
if ($operacion === 'res') {
    echo "{$numero1} -  {$numero2} = " . $numero1 - $numero2;
    return;
}
if ($operacion === 'mul') {
    echo "{$numero1} *  {$numero2} = " . $numero1 * $numero2;
    return;
}
if ($operacion === 'div') {
    if ($numero2 == 0) {
        echo 'No se puede dividir por 0';
        return;
    }
    echo "{$numero1} /  {$numero2} = " . $numero1 / $numero2;
    return;
}
if ($operacion === 'cuad') {
    echo "{$numero1} ^ 2 = " . $numero1 ** 2;
    return;
}

echo 'Operación no válida';
