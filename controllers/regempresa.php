<?php
class Regempresa extends Controller{
     function __construct(){
         parent::__construct();
     }
     function render(){
        $this->view->render('regempresa/index');
     }
     function insertEmpresa(){
         //variables
         $ruc=$_POST['Ruc'];
         $nomc=$_POST['NombreComercial'];
         $rsocial=$_POST['RazonSocial'];
         $tipoc=$_POST['TipoContribuyente'];
         $email=$_POST['Email'];
         $direc=$_POST['Direccion'];
         $tel=$_POST['Telefono'];

         $mis=$_POST['Mision'];
         $vis=$_POST['Vision'];
         $pvalor=$_POST['PropuestaValor'];
         $fdif=$_POST['FactorDiferenciador'];
         $obe=$_POST['ObjetivoEstrategico'];
         
         echo $this->model->insert(['Ruc'=>$ruc,'NombreComercial'=>$nomc,
         'RazonSocial'=>$rsocial,'TipoContribuyente'=>$tipoc,'Email'=>$email,'Direccion'=>$direc,
         'Telefono'=>$tel,'Mision'=>$mis,'Vision'=>$vis,'PropuestValor'=>$pvalor,'FactorDiferenciador'=>$fdif,'ObjetivoEstrategico'=>$obe]);    

     }
     
 }

?>