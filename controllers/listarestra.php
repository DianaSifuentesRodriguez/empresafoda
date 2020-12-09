<?php 
class Listarestra extends Controller{
    function __construct(){
        parent::__construct();
        
    }
    function render(){
        $this->view->render('listarestra/index');
    }
}

?>