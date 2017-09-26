<?php /* Smarty version Smarty-3.1.11, created on 2017-09-26 14:58:30
         compiled from "templates/plantillas/modulos/juntas/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17550379059c96a294c2e26-22081932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18d20db13ffb8d3bb5c47b0123e2a6e7e7c1688f' => 
    array (
      0 => 'templates/plantillas/modulos/juntas/lista.tpl',
      1 => 1506455738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17550379059c96a294c2e26-22081932',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59c96a2952cd66_35952239',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c96a2952cd66_35952239')) {function content_59c96a2952cd66_35952239($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Inicio</th>
					<th>Fin</th>
					<th>Nombre</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['inicio'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fin'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td class="text-right">
							<button type="button" class="btn btn-success btn-xs" action="invitados" title="Invitados" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
' identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idJunta'];?>
" data-toggle="modal" data-target="#winListaParticipantes"><i class="fa fa-list-alt"></i></button>
							<button type="button" class="btn btn-primary btn-xs" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-edit"></i></button>
							<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idJunta'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>