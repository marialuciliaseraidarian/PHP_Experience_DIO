<?php

require __DIR__ . "/Config/config.php"; //carrega o arquivo config.php com tudo que está incluído dentro dele

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); //parse da url
$uri = explode('/', $uri); //quebra a url em um array com várias posições

//O if verifica se a url não está seguindo o padrão correto, se não estiver dá erro 404
if((isset($uri[1]) && $uri[1] != 'api') || (isset($uri[2]) && $uri[2] != 'v1')) {
    header("HTTP/1.1 404 Not Found");
    exit(); //corta o fluxo da aplicação.    
}else if((isset($uri[3]) && $uri[3] != 'user') || !isset($uri[4])){
        header("HTTP/1.1 404 Not Found");
        exit();
    }

//se o padrão estiver correto o require irá carregar o arquivo UserController
require ROOT_PATH . "/Controller/Api/UserController.php";

//instancia o objeto da classe UserController:
$user = new UserController();
//Chama o método 
$methodName = $uri[4] . 'Action';
$user->{$methodName}();

?>