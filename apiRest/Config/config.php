<?php

define("ROOT_PATH", __DIR__ . "/../"); //define o diretório dos arquivos, neste caso a pasta raiz: "/../"
define("DATABASE_FILE", ROOT_PATH . 'database.json');//define o banco de dados a ser usado, nesta caso o arquivo json

require_once ROOT_PATH . "/controller/Api/BaseController.php"; //inclui o arquivo de controller padrão

require_once ROOT_PATH . "/Model/UserModel.php"; // inclui o arquivo de model padrão


?>