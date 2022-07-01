<?php

//En un archivo index y respetando la arquitectura propuesta.
//Esperar mediante POST los datos de 4 personas (todos obligatorios)
//Nombre
//Edad
//CantidadHijos.
//Y devolver lo siguiente
//Las personas con hijos son:
//Nombre de las personas y la cantidad de hijos de las personas con hijos. Si ninguna
// persona tiene hijos, el texto ‘Ninguna persona tiene hijos’
//Las personas mayores de 18 años son:
//Nombre de las personas y la edad de las personas mayores a 18 años. Si ninguna
// persona es mayor de 18 años, el texto ‘Ninguna persona es mayor de 18 años’
//Las personas que tengan entre 30 y 40 años son:
//Nombre de las personas y la edad de las personas que tengan entre 30 y 40 años de edad. Si ninguna cumple la regla, el texto ‘Ninguna persona tiene entre 30 y 40 años de edad’
//En caso de faltar algún dato, indicar únicamente el mensaje. ‘Ingresar todos los datos’.


$listhijos = [];
$listmayores = [];
$list30 = [];

if ((isset($_POST['n1']) == false)
    or (isset($_POST['n2']) == false)
    or (isset($_POST['n3']) == false)
    or (isset($_POST['n4']) == false)
    or (isset($_POST['e1']) == false)
    or (isset($_POST['e2']) == false)
    or (isset($_POST['e3']) == false)
    or (isset($_POST['e4']) == false)
    or (isset($_POST['h1']) == false)
    or (isset($_POST['h2']) == false)
    or (isset($_POST['h3']) == false)
    or (isset($_POST['h4']) == false)
) {
    echo 'Ingresar todos los datos';
}

if ($_POST['h1'] > 0) {
    $listhijos[] =
        $_POST['n1'] . ' hijos: ' .  $_POST['h1'];
}
if ($_POST['h2'] > 0) {
    $listhijos[] =
        $_POST['n2'] . ' hijos: ' .  $_POST['h2'];
}
if ($_POST['h3'] > 0) {
    $listhijos[] =
        $_POST['n3'] . ' hijos: ' .  $_POST['h3'];
}
if ($_POST['h4'] > 0) {
    $listhijos[] =
        $_POST['n4'] . ' hijos: ' .  $_POST['h4'];
}

if (count($listhijos) > 0) {
    echo 'Las personas con hijos son <hr>';
    foreach ($listhijos as $perconhijos) {
        echo $perconhijos . '<hr>';
    }
} else {
    echo ' Ninguna de las personas tiene hijos <hr>';
}

if ($_POST['e1'] > 18) {
    $listmayores[] =
        $_POST['n1'] . ' edad: ' .  $_POST['e1'];
}
if ($_POST['e2'] > 18) {
    $listmayores[] =
        $_POST['n2'] . ' edad: ' .  $_POST['e2'];
}
if ($_POST['e3'] > 18) {
    $listmayores[] =
        $_POST['n3'] . ' edad: ' .  $_POST['e3'];
}
if ($_POST['e4'] > 18) {
    $listmayores[] =
        $_POST['n4'] . ' edad: ' .  $_POST['e4'];
}
if (count($listmayores) > 0) {
    echo 'Las personas mayores son: <hr>';
    foreach ($listmayores as $mayores) {
        echo $mayores . '<hr>';
    }
} else {
    echo ' Ninguna de las personas es mayor <hr>';
}


if ($_POST['e1'] > 29 && $_POST['e1'] < 41) {
    $list30[] =
        $_POST['n1'] . ' edad: ' .  $_POST['e1'];
}
if ($_POST['e2'] > 29 && $_POST['e2'] < 41) {
    $list30[] =
        $_POST['n2'] . ' edad: ' .  $_POST['e2'];
}
if ($_POST['e3'] > 29 && $_POST['e3'] < 41) {
    $list30[] =
        $_POST['n3'] . ' edad: ' .  $_POST['e3'];
}
if ($_POST['e4'] > 29 && $_POST['e4'] < 41) {
    $list30[] =
        $_POST['n4'] . ' edad: ' .  $_POST['e4'];
}
if (count($list30) > 0) {
    echo 'Las personas que tienen entre 30 y 40 años son: <hr>';
    foreach ($list30 as $mayores30) {
        echo $mayores30 . '<hr>';
    }
} else {
    echo ' Ninguna de las personas tiene entre 30 y 40 años<hr>';
}
