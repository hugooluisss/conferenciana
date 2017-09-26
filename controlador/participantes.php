<?php
global $objModulo;
switch($objModulo->getId()){
	case 'participantes':
	break;
	case 'listaParticipantes':
		$db = TBase::conectaDB();
		global $sesion;
		$sql = "select * from participante a where idJunta = ".$_POST['id'];
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'cparticipantes':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TJunta();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setSemilla($_POST['semilla']);
				$obj->setInicio($_POST['inicio']);
				$obj->setFin($_POST['fin']);
				
				$band = $obj->guardar();
				
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TJunta($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>