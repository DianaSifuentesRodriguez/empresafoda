<?php
class Listarempresa extends Controller{
     function __construct(){
         parent::__construct();   
     }
     function render(){
        $this->view->render('listarempresa/index');
     }
     function getEmpresa(){
            echo json_encode($this->model->getEmpresa());
     }
 }

?>