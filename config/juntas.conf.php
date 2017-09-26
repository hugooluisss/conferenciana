<?php
global $conf;

$conf['juntas'] = array(
	'controlador' => 'juntas.php',
	'vista' => 'juntas/panel.tpl',
	'descripcion' => 'Administración de juntas',
	'seguridad' => true,
	'js' => array('junta.class.js'),
	'jsTemplate' => array('juntas.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaJuntas'] = array(
	'controlador' => 'juntas.php',
	'vista' => 'juntas/lista.tpl',
	'descripcion' => 'Lista de juntas',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cjuntas'] = array(
	'controlador' => 'juntas.php',
	'descripcion' => 'Controlador de juntas',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
	
$conf['listaParticipantes'] = array(
	'controlador' => 'participantes.php',
	'vista' => 'juntas/listaParticipantes.tpl',
	'descripcion' => 'Lista de participantes de una junta',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cparticipantes'] = array(
	'controlador' => 'participantes.php',
	'descripcion' => 'Controlador de participantes de las juntas',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
?>