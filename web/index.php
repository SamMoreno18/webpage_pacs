<?php

// depurar errores

ini_set("display_errors", 1);
ini_set("log_errors", 1);
ini_set("error_log ",   "D:\XAMP\htdocs\webpage_pacs\web\php_error_log");


require_once "controllers/controller.template.php";

// en esta parte vamos a instanciar la clase llamada templateController que a su vez 
// traera la funcion index

$index = new templateController();
$index->index();
