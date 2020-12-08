<?php 
class LoginModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function insert($datos){
        try{
            // $query= $this->db->connect()->prepare('INSERT INTO bd_empresa.empresa values (:emp_ruc,:emp_razon_social,:emp_direccion,:emp_mision,:emp_vision,:emp_objetivo,:emp_factor,:emp_propuesta,:emp_estado,:emp_condicion)');
            // $query->execute(['emp_ruc'=>$datos['emp_ruc'],'emp_razon_social'=>$datos['emp_razon_social'],'emp_direccion'=>$datos['emp_direccion'],'emp_mision'=>$datos['emp_mision'],'emp_vision'=>$datos['emp_vision'],'emp_objetivo'=>$datos['emp_objetivo'],
            // 'emp_factor'=>$datos['emp_factor'],'emp_propuesta'=>$datos['emp_propuesta'],'emp_estado'=>$datos['emp_estado'],'emp_condicion'=>$datos['emp_condicion']]);
            
        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
            return false;
        }
        
    }
}
?>