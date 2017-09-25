<?php
global $objModulo;

switch($objModulo->getId()){
	case 'logout':
		unset($_SESSION['usuario']);
		session_destroy();
		
		header('Location: index.php');
	break;
	default:
		switch($objModulo->getAction()){
			case 'login':
				$db = TBase::conectaDB();
				$sql = "select idUsuario, pass from usuario where upper(correo) = upper('".$_POST['usuario']."') and visible = true";
				$rs = $db->query($sql) or errorMySQL($db, $sql);
				$result = array('band' => false, 'mensaje' => 'Error al consultar los datos');
				
				$row = $rs->fetch_assoc();
				
				if($rs->num_rows == 0)
					$result = array('band' => false, 'mensaje' => 'El usuario no existe');
				elseif(strtoupper($row['pass']) <> strtoupper($_POST['pass']))
					$result = array('band' => false, 'mensaje' => 'Contraseña inválida');
				else{
					$obj = new TUsuario($row['idUsuario']);
					$result = array('band' => true, 'mensaje' => 'Acceso denegado', 'tipo' => $obj->getIdTipo());
				}
				
				if($result['band']){
					$obj = new TUsuario($row['idUsuario']);
					$sesion['usuario'] = $obj->getId();
					$sesion['perfil'] = $obj->getIdTipo();
					
					$_SESSION[SISTEMA] = $sesion;
				}
				
				$result['datos'] = $sesion;
				echo json_encode($result);
			break;
			case 'logout':
				$_SESSION[SISTEMA] = array();
				session_destroy();
				
				header ("Location: index.php");
			break;
		}
	break;
}
?>