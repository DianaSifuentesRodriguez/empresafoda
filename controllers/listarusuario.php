<?php 
class Listarusuario extends Controller{
    function __construct(){
       
        parent::__construct();
        
    }
    function render(){
        $this->view->render('listarusuario/index');
    }
}

?>