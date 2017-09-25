<?php
/**
* TJunta
* Juntas
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TJunta{
	private $idJunta;
	private $nombre;
	private $semilla;
	private $inicia;
	private $fin;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TJunta($id = ''){
		$this->setId($id);		
		return true;
	}
	
	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->query("select * from junta a where idJunta = ".$id);
		
		foreach($rs->fetch_assoc() as $field => $val){
			switch($field){
				default:
					$this->$field = $val;
			}
		}
		
		return true;
	}
	
	/**
	* Retorna el identificador del objeto
	*
	* @autor Hugo
	* @access public
	* @return integer identificador
	*/
	
	public function getId(){
		return $this->idJunta;
	}
	
	/**
	* Establece el nombre
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setNombre($val = ''){
		$this->nombre = $val;
		return true;
	}
	
	/**
	* Retorna el nombre
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getNombre(){
		return $this->nombre;
	}
	
	/**
	* Establece semilla
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setSemilla($val = ''){
		$this->semilla = $val;
		return true;
	}
	
	/**
	* Retorna semilla
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getSemilla(){
		return $this->semilla;
	}
	
	/**
	* Establece el inicio
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setInicio($val = ''){
		$this->inicio = $val;
		return true;
	}
	
	/**
	* Retorna el inicio
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getInicio(){
		return $this->inicio == ''?date("Y-m-d"):$this->inicio;
	}
	
	/**
	* Establece el fin
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setFIn($val = ''){
		$this->fin = $val;
		return true;
	}
	
	/**
	* Retorna el fin
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getFin(){
		return $this->fin == ''?date("Y-m-d"):$this->fin;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->query("INSERT INTO junta(visible) VALUES(true);");
			if (!$rs) return false;
				
			$this->idJunta = $db->insert_id;
		}		
		
		if ($this->getId() == '')
			return false;
		
		$sql = "UPDATE junta
			SET
				nombre = '".$this->getNombre()."',
				inicio = '".$this->getInicio()."',
				fin = '".$this->getFin()."',
				semilla = '".$this->getSemilla()."'
			WHERE idJunta = ".$this->getId();
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
			
		return $rs?true:false;
	}
	
	/**
	* Elimina el objeto de la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "update usuario set visible = false where idUsuario = ".$this->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		return $rs?true:false;
	}
}
?>