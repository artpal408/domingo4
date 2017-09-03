<?php

//var_dump($_POST);
//var_dump($_GET);

require_once 'driver.php';

$enlace = new DMysqli();
$estado = $enlace->query("insert into cliente VALUES(DEFAULT, 'Maria','Managua',30) ");
if ($estado == true){
    echo 'Exito agregando datos';
}
else {
    echo 'Fallo al agregar datos';
}