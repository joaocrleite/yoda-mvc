<?php

function view($viewName, $data = []){

    $data = $data;
    $viewFile = $viewName . '.php';
    // verifica se o arquivo existe
    if(!file_exists(VIEWS_FOLDER . $viewFile)){
        die('View: ' . $viewName . ' não existe');
    }

    // inclui o arquivo
    include VIEWS_FOLDER . $viewFile;


}

function input($inputName){

    return isset($_POST[$inputName]) ? trim($_POST[$inputName]) : null;

}

function base_url($urlAdicional = ''){

    return DOMINIO . trim('/', $urlAdicional);

}