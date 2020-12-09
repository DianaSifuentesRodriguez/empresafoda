<?php
class Editarempresa extends Controller{
     function __construct(){
         parent::__construct();
         
         
     }
     function render(){
        $this->view->render('editarempresa/index');
     }
 }

?>