<?php

// para não ficar dando varios require
spl_autoload_register(function ($class){
   //verificar se o arquivo existe
    if(file_exists($class. '.class.php')){
        require_once($class. '.class.php');
    }
});

$obj = new bola();
$obj->setCor('azul');

echo "A cor da bola é: " .$obj->getCor();

?>