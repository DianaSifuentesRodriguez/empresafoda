<?php
class Regempresa extends Controller{
     function __construct(){
         parent::__construct();
         
         
     }
     function render(){
        $this->view->render('regempresa/index');
     }
 }

?>