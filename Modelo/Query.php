<?php 
class Query
{
	private $fec;
	private $Conexion;

	public function setFec($fec)
	{
		$this->fec=$fec;
	}
	
	public function getFec()
	{
		return ($this->fec);
	}

	public function ConsultaIngreso($query,$fec){
		$this->Conexion=Conectarse();
		$sql="select personal.*,registros1.* from personal,registros1 where personal.cedula=registros1.ced_enc and registros1.fec_ingreso between '$query' and '$fec' order by registros1.id desc";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function ConsultaSalida($query,$fec){
		$this->Conexion=Conectarse();
		$sql="select personal.*,registros1.* from personal,registros1 where personal.cedula=registros1.ced_enc and registros1.fec_salida between '$query' and '$fec' order by registros1.id desc";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function ConsultaVehiculo($search){
		$this->Conexion=Conectarse();
		$sql="select * from registros1 where placa_veh='$search'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function ConsultarVehiculo($search){
		$this->Conexion=Conectarse();
		$sql="select personal.*,registros1.* from personal,registros1 where personal.cedula=registros1.ced_enc and registros1.placa_veh='$search' order by registros1.id desc";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function ConsultaComputador($search){
		$this->Conexion=Conectarse();
		$sql="select * from registros1 where marca_por='$search'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function ConsultarComputador($search){
		$this->Conexion=Conectarse();
		$sql="select personal.*,registros1.* from personal,registros1 where personal.cedula=registros1.ced_enc and registros1.marca_por='$search' order by registros1.id desc";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function ConsultarPerson($search){
		$this->Conexion=Conectarse();
		 $sql="select personal.*,registros1.* from personal,registros1 where personal.cedula=registros1.ced_enc and registros1.ced_enc='$search' order by registros1.id desc";
        $resultado=$this->Conexion->query($sql);
        $this->Conexion->close();
		return $resultado;
	}
	public function ConsultaPerson($search)
	{
		$this->Conexion=Conectarse();
		$sql="select * from personal where cedula='$search'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	public function ConsultaHerramienta($search){
		$this->Conexion=Conectarse();
		$sql="select * from herramientas where ced_enc='$search' or tipo_her='$search'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function ConsultarHerramienta($search){
		$this->Conexion=Conectarse();
		$sql="select personal.*,herramientas.* from personal,herramientas where personal.cedula= herramientas.ced_enc and herramientas.ced_enc='$search' order by herramientas.id desc";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function ConsultaTipoHerramienta($search){
		$this->Conexion=Conectarse();
		$sql="select tipo_her from herramientas where tipo_her='$search'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function ConsultarTipoHerramienta($search){
		$this->Conexion=Conectarse();
		$sql="select personal.*,herramientas.* from personal,herramientas where personal.cedula= herramientas.ced_enc and herramientas.tipo_her='$search' order by herramientas.id desc";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function EsIng($desde,$hasta){
		$this->Conexion=Conectarse();
		$sql="select personal.*,registros1.* from personal,registros1 where personal.cedula=registros1.ced_enc and registros1.fec_ingreso between '$desde' and '$hasta' order by registros1.id desc";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function EsIngVeh($desde,$hasta){
		$this->Conexion=Conectarse();
		$sql="select * from registros1 where not (tipo_veh='') and fec_ingreso between '$desde' and '$hasta'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function EsIngPor($desde,$hasta){
		$this->Conexion=Conectarse();
		$sql="select * from registros1 where not (marca_por='') and fec_ingreso between '$desde' and '$hasta'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function EsSal($desde,$hasta){
		$this->Conexion=Conectarse();
		$sql="select personal.*,registros1.* from personal,registros1 where personal.cedula=registros1.ced_enc and registros1.fec_salida between '$desde' and '$hasta' order by registros1.id desc";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function EsSalVeh($desde,$hasta){
		$this->Conexion=Conectarse();
		$sql="select * from registros1 where not (tipo_veh='') and fec_salida between '$desde' and '$hasta'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function EsSalPor($desde,$hasta){
		$this->Conexion=Conectarse();
		$sql="select * from registros1 where not (marca_por='') and fec_salida between '$desde' and '$hasta'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function EsIngHer($desde,$hasta){
		$this->Conexion=Conectarse();
		$sql="select * from herramientas where fec_ingreso between '$desde' and '$hasta'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function EsCanHer($desde,$hasta){
		$this->Conexion=Conectarse();
		$sql="select sum(can_her) as total from herramientas where fec_ingreso between '$desde' and '$hasta'";
		$suma=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $suma;
	}
	public function EsCaHer($desde,$hasta){
		$this->Conexion=Conectarse();
		$sql="select sum(can_her) as total from herramientas where fec_salida between '$desde' and '$hasta'";
		$suma=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $suma;
	}
	public function EsSalHer($desde,$hasta){
		$this->Conexion=Conectarse();
		$sql="select * from herramientas where fec_salida between '$desde' and '$hasta'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function ConsultarIngresoHerramienta($desde,$hasta){
		$this->Conexion=Conectarse();
		$sql="select personal.*,herramientas.* from personal,herramientas where personal.cedula=herramientas.ced_enc and herramientas.fec_ingreso between '$desde' and '$hasta' order by herramientas.id desc";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	public function ConsultarSalidaHerramienta($desde,$hasta){
		$this->Conexion=Conectarse();
		$sql="select personal.*,herramientas.* from personal,herramientas where personal.cedula= herramientas.ced_enc and herramientas.fec_salida between '$desde' and '$hasta' order by herramientas.id desc";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
}
?>