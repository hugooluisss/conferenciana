<?php
global $objModulo;
switch($objModulo->getId()){
	case 'categorias':
	break;
	case 'listaCategorias':
		$db = TBase::conectaDB();
		global $sesion;
		$sql = "select * from categoria a where a.visible = true";
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'ccategorias':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TCategoria();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				
				$band = $obj->guardar();
				
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TCategoria($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>