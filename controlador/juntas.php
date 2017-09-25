<?php
global $objModulo;
switch($objModulo->getId()){
	case 'juntas':
	break;
	case 'listaJuntas':
		$db = TBase::conectaDB();
		global $sesion;
		$sql = "select * from junta a where a.visible = true";
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'cjuntas':
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