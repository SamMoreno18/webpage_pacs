<?php


// depurar errores

ini_set("display_errors", 1);
ini_set("log_errors", 1);
ini_set("error_log ",   "D:\xampp\htdocs\webpage_pacs\web\php_error_log");





require_once "controllers/controller.template.php";

$index = new templateController();
$index->index();
