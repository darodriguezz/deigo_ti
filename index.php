<?php

# Index.php:En el que mostraremos la salida de las vistas al usuario(a) y tambien a traves de el enviaremos las distintas aciones que el usuario envie.

require_once"models/model.php";
require_once"models/crudusers.php";
require_once"controllers/controller.php";

$in = new inicio();
$in -> Template();


  ?>