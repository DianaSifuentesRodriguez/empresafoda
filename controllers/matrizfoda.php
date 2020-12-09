<?php 
class Matrizfoda extends Controller{
    function __construct(){
        parent::__construct();
        
    }
    function render(){
        $this->view->render('matrizfoda/index');
    }
}

?>