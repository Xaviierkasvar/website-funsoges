<?php
class Oper
{
	private $cedula;
	private $nombre;
	private $apellido;
	private $clave;
	private $area;
	private $cargo;
	private $empresa;
	private $fec;
	private $id;
	private $Conexion;
	
	public function setCedula($cedula)
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
	
	public function setClave($clave)
	{
		$this->clave=$clave;
	}
	
	public function getSexo()
	{
		return ($this->clave);
	}
	
	public function setArea($area)
	{
		$this->area=$area;
	}
	
	public function getArea()
	{
		return ($this->area);
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
	public function setFec($fec)
	{
		$this->fec=$fec;
	}
	
	public function getFec()
	{
		return ($this->fec);
	}
	public function setId($id)
	{
		$this->id=$id;
	}
	
	public function getId()
	{
		return ($this->id);
	}
	
	public function Operador()
	{
		//$objConexion = Conectarse();
	}
	
	public function CrearOper($cedula,$nombre,$apellido,$clave,$area,$cargo,$empresa,$fec,$id)
	{
		$this->cedula=$cedula;
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->clave= md5($clave);
		$this->area=$area;
		$this->cargo=$cargo;
		$this->empresa=$empresa;
		$this->fec=$fec;
		$this->id=$id;
	}
	
	public function AgregarOper()
	{	
		$this->Conexion=Conectarse();
		$sql="insert into operador(ced_op,nom_op,ape_op,clave,area,carg_op,empresa,fec_registro,id_registrador)
values ('$this->cedula','$this->nombre','$this->apellido','$this->clave','$this->area','$this->cargo','$this->empresa','$this->fec','$this->id')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}

	
	public function ActualizarOper()
	{	
		$this->Conexion=Conectarse();
		$sql="update operador set ced_op='$this->cedula',nom_op='$this->nombre',ape_op='$this->apellido',clave='$this->clave',area='$this->area',carg_op='$this->cargo',empresa='$this->empresa',fec_actualizacion='$this->fec',id_actualizador='$this->id' where ced_op = '$this->cedula'";
		$sql1="insert into update_registros(fec_actualizacion,cedula_actualizador) values ('$this->fec','$this->id')";
		$resultado=$this->Conexion->query($sql);
		$resultado1=$this->Conexion->query($sql1);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function ConsultarTodosOper()
	{
		$this->Conexion=Conectarse();
		$sql="select * from operador";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function ConsultarOper($cedula)
	{
		$this->Conexion=Conectarse();
		$sql="select * from operador where ced_op='$cedula'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
}

?>