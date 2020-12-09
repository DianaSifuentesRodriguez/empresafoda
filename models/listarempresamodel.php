<?php 
class ListarempresaModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function getEmpresa(){
      try{
            $query=$this->db->connect()->prepare("SELECT * FROM empresa");
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $query->execute();
            return $query->fetchAll();

      }catch(PDOException $e){
        print_r('Error connection: ' . $e->getMessage());
        return $e->getMessage();
    }
  }

}



?>