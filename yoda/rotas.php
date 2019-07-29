<?php

$uri_original = $_SERVER['REQUEST_URI'];

$uri_tratada = trim($uri_original, '/');

$uri_partes = explode('/', $uri_tratada);


$controllerName = isset($uri_partes[0]) && !empty($uri_partes[0]) ?  $uri_partes[0] : CONTROLLER_PADRAO;
$funcaoName = $uri_partes[1] ?? FUNCAO_PADRAO;

$controllerName = ucfirst($controllerName);
$controllerFile = $controllerName . '.php';


$arquivos = scandir(CONTROLLERS_FOLDER);


$classeEncontrada = false;


foreach($arquivos as $arquivo){

    if($arquivo == $controllerFile){

       $classeEncontrada = true;

    }

}

if($classeEncontrada){
    // incluir o arquivo
    include CONTROLLERS_FOLDER . $controllerFile;

    // verificar se classe existe

    if(!class_exists($controllerName)){
        die('Classe: ' . $controllerName . ' não existe');
    }

    // instanciar classe
    $controller = new $controllerName();

    // funcao existe dentro da classe
    if(!method_exists($controller, $funcaoName)){
        die('Função: ' . $funcaoName . ' não existe, na Classe: ' . $controllerName);
    }
    // executar a funcao
    $controller->$funcaoName();

}else{
    include VIEWS_FOLDER . '404.php';
}


// var_dump([
//     'controllerName' => $controllerName,
//     'controllerFile' => $controllerFile,
//     'funcao' => $funcaoName,
//     'arquivos' => $arquivos,
//     'classeEncontrada' => $classeEncontrada,
// ]);

// include CONTROLLERS_FOLDER . 'Home.php';

// $home = new Home();

// $home->index();