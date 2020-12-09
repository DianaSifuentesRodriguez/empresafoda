<?php 
class Regfactores extends Controller{
    function __construct(){
       
        parent::__construct();
        
    }
    function render(){
        $this->view->render('regfactores/index');
    }
}

?>