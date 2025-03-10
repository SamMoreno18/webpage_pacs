<?php

class templateController
{
    public function index()
    {
        include "views/template.php";
    }

    /*Ruta principal o dominio de sitio*/ 
    

    static public function path(){
        if(!empty($_SERVER["HTTPS"]) && ("on" == $_SERVER["HTTPS"])){
            return "https://".$_SERVER["SERVER_NAME"]."/";
        }
        else {
            return "http://".$_SERVER["SERVER_NAME"]."/";
        }

    }
}
