<?php 
class RegempresaModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function insertEmpresa($datos){
      try{
        $query= $this->db->connect()->prepare('INSERT INTO bdempresafoda.empresa values (:Ruc,:NombreComercial,:RazonSocial,:TipoContribuyente,:Email,:Direccion,:Telefono)');
        $query->execute(['Ruc'=>$datos['Ruc'],'NombreComercial'=>$datos['NombreComercial'],'RazonSocial'=>$datos['RazonSocial'],'TipoContribuyente'=>$datos['TipoContribuyente'],'Email'=>$datos['Email'],'Direccion'=>$datos['Direccion'],'Telefono'=>$datos['Telefono']]);

        //información institucional;
        $query= $this->db->connect()->prepare('INSERT INTO bdempresafoda.info_institucional values (:Mision,:Vision,:PropuestaValor,:FactorDiferenciador,:ObjetivoEstrategico)');
        $query->execute(['Mision'=>$datos['Mision'],'Vision'=>$datos['Vision'],'PropuestValor'=>$datos['PropuestValor'],'FactorDiferenciador'=>$datos['FactorDiferenciador'],'ObjetivoEstrategico'=>$datos['ObjetivoEstrategico']]);

        return "that's ok";
        
      }catch(PDOException $e){
        print_r('Error connection: ' . $e->getMessage());
        return $e->getMessage();
    }
  }

}



?>