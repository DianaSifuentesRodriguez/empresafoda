<?php 
class Login extends Controller{
    function __construct(){
        echo'Hola mundo';
        parent::__construct();
        
    }
    function render(){
        $this->view->render('login/index');
    }
}

?>