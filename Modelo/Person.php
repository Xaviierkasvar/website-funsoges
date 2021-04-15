<?php
class Person
{
	private $cedula;
	private $nombre;
	private $apellido;
	private $arl;
	private $empresa;
	private $cargo;
	private $nit;
	private $autoriza;
	private $desde;
	private $hasta;
	private $nota;
	private $fec;
	private $tipo;
	private $placa;
	private $marcaca;
	private $codigo;
	private $id;
	private $Conexion;
	
	public function setCedula($Cedula)
	{
		$this->cedula=$cedula;
	}
	
	public function getCedula()
	{
		return ($this->cedula);
	}
	
	public function setNombre($nombre)
	{
		$this->nombre=$nombre;
	}
	
	public function getNombre()
	{
		return ($this->nombre);
	}
	
	public function setApellido($apellido)
	{
		$this->apellido=$apellido;
	}
	
	public function getApellido()
	{
		return ($this->apellido);
	}
	
	public function setCargo($cargo)
	{
		$this->cargo=$cargo;
	}
	
	public function getCargo()
	{
		return ($this->cargo);
	}
	
	public function setEmpresa($empresa)
	{
		$this->empresa=$empresa;
	}
	
	public function getEmpresa()
	{
		return ($this->empresa);
	}

	public function setArl($arl)
	{
		$this->arl=$arl;
	}
	
	public function getArl()
	{
		return ($this->arl);
	}
	public function setNit($nit)
	{
		$this->nit=$nit;
	}
	
	public function getNit()
	{
		return ($this->nit);
	}
	public function setAutoriza($autoriza)
	{
		$this->autoriza=$autoriza;
	}
	
	public function getAutoriza()
	{
		return ($this->autoriza);
	}
	public function setDesde($desde)
	{
		$this->desde=$desde;
	}
	
	public function getDesde()
	{
		return ($this->desde);
	}
	public function setHasta($hasta)
	{
		$this->hasta=$hasta;
	}
	
	public function getHasta()
	{
		return ($this->hasta);
	}
	public function setFec($fec)
	{
		$this->fec=$fec;
	}
	
	public function getFec()
	{
		return ($this->fec);
	}
	public function setTipo($tipo)
	{
		$this->tipo=$tipo;
	}
	
	public function getTipo()
	{
		return ($this->tipo);
	}
	public function setPlaca($placa)
	{
		$this->placa=$placa;
	}
	
	public function getPlaca()
	{
		return ($this->placa);
	}
	public function setMarca($marca)
	{
		$this->marca=$marca;
	}
	
	public function getMarca()
	{
		return ($this->marca);
	}
	public function setCodigo($codigo)
	{
		$this->codigo=$codigo;
	}
	
	public function getCodigo()
	{
		return ($this->codigo);
	}
	public function setNota($nota)
	{
		$this->nota=$nota;
	}
	
	public function getNota()
	{
		return ($this->nota);
	}
	public function setId($id)
	{
		$this->id=$id;
	}
	
	public function getId()
	{
		return ($this->id);
	}
	public function Personal()
	{
		//$objConexion = Conectarse();
	}
	
	
	public function CrearPerson($cedula,$nombre,$apellido,$fec,$arl,$empresa,$cargo,$nit,$autoriza,$desde,$hasta,$nota,$id)
	{
		$this->cedula=$cedula;
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->fec=$fec;
		$this->arl=$arl;
		$this->empresa=$empresa;
		$this->cargo=$cargo;
		$this->nit=$nit;
		$this->autoriza=$autoriza;
		$this->desde=$desde;
		$this->hasta=$hasta;
		$this->nota=$nota;
		$this->id=$id;		
	}
	
	public function AgregarPerson()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into personal(cedula,nom_tra,ape_tra,fec_registro)
        values ('$this->cedula','$this->nombre','$this->apellido','$this->fec')";
        $sql0="insert into registros1(ced_enc,arl_tra,emp_tra,carg_tra,nit,autoriza,desde,hasta,nota,fec_registro) values ('$this->cedula','$this->arl','$this->empresa','$this->cargo','$this->nit','$this->autoriza','$this->desde','$this->hasta','$this->nota','$this->fec')";
        $sql1="insert into update_registros(fec_actualizacion,cedula_actualizador) values ('$this->fec','$this->id')";
		$resultado=$this->Conexion->query($sql);
		$resultado0=$this->Conexion->query($sql0);
		$resultado1=$this->Conexion->query($sql1);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function ConsultarPerson($cedula)
	{
		$this->Conexion=Conectarse();
		$sql="select * from personal where cedula='$cedula'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	public function ActualizarPerson()
	{	
		$this->Conexion=Conectarse();
		$sql="update personal set cedula='$this->cedula',nom_tra='$this->nombre',ape_tra='$this->apellido',fec_actualizacion='$this->fec' where cedula ='$this->cedula'";
		$sql0="insert into registros1(ced_enc,arl_tra,emp_tra,carg_tra,nit,autoriza,desde,hasta,nota,fec_actualizacion) values ('$this->cedula','$this->arl','$this->empresa','$this->cargo','$this->nit','$this->autoriza','$this->desde','$this->hasta','$this->nota','$this->fec')";
		$sql1="insert into update_registros(fec_actualizacion,cedula_actualizador) values ('$this->fec','$this->id')";
		$resultado=$this->Conexion->query($sql);
		$resultado0=$this->Conexion->query($sql0);
		$resultado1=$this->Conexion->query($sql1);
		$this->Conexion->close();
		return $resultado;	
	}	
	public function ConsultaPerson($cedula){
		$this->Conexion=Conectarse();
		$sql="select personal.*,registros1.* from personal,registros1 where personal.cedula='$cedula' AND registros1.ced_enc='$cedula' ORDER BY id DESC LIMIT 1 ";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
    }
    public function ConsultarTools($cedula){
    	$this->Conexion=Conectarse();
		$sql="select * from herramientas where ced_enc='$cedula' ORDER by id desc LIMIT 50 ";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
    }
    public function AgregarTools($valoresQ){
    	$this->Conexion=Conectarse();
		$sql = "insert into herramientas (ced_enc, fec_ingreso, tipo_her, can_her,id_registrador) 
                      values $valoresQ";
		$resultado=$this->Conexion->query($sql)or mysql_error();
		$this->Conexion->close();
		return $resultado;
    }
    public function OutTools($valoresQ){
    	$this->Conexion=Conectarse();
		$sql = "insert into herramientas (ced_enc, fec_salida, tipo_her, can_her,id_registrador) 
                      values $valoresQ";
		$resultado=$this->Conexion->query($sql) or mysql_error();
		$this->Conexion->close();
		return $resultado;
    }
    public function RegistrarPerson($cedula,$fec,$arl,$empresa,$cargo,$nit,$autoriza,$desde,$hasta,$tipo,$placa,$marca,$codigo,$nota,$id)
	{
		$this->cedula=$cedula;
		$this->fec=$fec;
		$this->arl=$arl;
		$this->empresa=$empresa;
		$this->cargo=$cargo;
		$this->nit=$nit;
		$this->autoriza=$autoriza;
		$this->desde=$desde;
		$this->hasta=$hasta;
		$this->tipo=$tipo;
		$this->placa=$placa;
		$this->marca=$marca;
		$this->codigo=$codigo;
		$this->nota=$nota;
		$this->id=$id;	
	}
	public function IngresarPerson()
	{
		$this->Conexion=Conectarse();
		$sql="insert into registros1(ced_enc,fec_ingreso,arl_tra,emp_tra,carg_tra,nit,autoriza,desde,hasta,tipo_veh,placa_veh,marca_por,cod_por,nota)
        values ('$this->cedula','$this->fec','$this->arl','$this->empresa','$this->cargo','$this->nit','$this->autoriza','$this->desde','$this->hasta','$this->tipo','$this->placa','$this->marca','$this->codigo','$this->nota')";
        $sql1="insert into update_registros(fec_actualizacion,cedula_actualizador) values ('$this->fec','$this->id')";
		$resultado=$this->Conexion->query($sql);
		$resultado1=$this->Conexion->query($sql1);
		$this->Conexion->close();
		return $resultado;
	}
	public function SalidaPerson()
	{
		$this->Conexion=Conectarse();
		$sql="insert into registros1(ced_enc,fec_salida,arl_tra,emp_tra,carg_tra,nit,autoriza,desde,hasta,tipo_veh,placa_veh,marca_por,cod_por,nota)
        values ('$this->cedula','$this->fec','$this->arl','$this->empresa','$this->cargo','$this->nit','$this->autoriza','$this->desde','$this->hasta','$this->tipo','$this->placa','$this->marca','$this->codigo','$this->nota')";
        $sql1="insert into update_registros(fec_actualizacion,cedula_actualizador) values ('$this->fec','$this->id')";
		$resultado=$this->Conexion->query($sql);
		$resultado1=$this->Conexion->query($sql1);
		$this->Conexion->close();
		return $resultado;
	}
}

?>