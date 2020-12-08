<?php
require_once 'controllers/errorx.php';
class App{
    function __construct(){
        $url=isset($_GET['url'])? $_GET['url']:null ;
        $url=rtrim($url,'/');
        $url = explode('/',$url);
        $archivoController = 'controllers/'. $url[0]. '.php';
        if(empty($url[0])){
            $archivoController = 'controllers/login.php';
            require_once $archivoController;
            $controller= new Login();
            $controller->loadModel('login');
            $controller->render();
            return false;
        }
        if(file_exists($archivoController)){
            require_once $archivoController;

            $controller = new $url[0];
            $controller ->loadModel($url[0]);
            
            
            if(isset($url[1])){
                $controller->{$url[1]}();
            }else{
                $controller->render();
            }
        }
        else{
            $controller = new Errorx();

        }
    }
}


?>