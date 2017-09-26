<?php /* Smarty version Smarty-3.1.11, created on 2017-09-26 15:18:25
         compiled from "templates/plantillas/modulos/juntas/listaParticipantes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11060620159cab5661be870-14339164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f3263fba8f1d0a5129fee417fddee72fd260ca2' => 
    array (
      0 => 'templates/plantillas/modulos/juntas/listaParticipantes.tpl',
      1 => 1506457102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11060620159cab5661be870-14339164',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59cab5662402c4_93440395',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cab5662402c4_93440395')) {function content_59cab5662402c4_93440395($_smarty_tpl) {?><table id="tblParticipantes" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Categoría</th>
			<th>Correo</th>
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
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['categoria'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['correo'];?>
</td>
				<td class="text-right">
					<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idJunta'];?>
"><i class="fa fa-times"></i></button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>