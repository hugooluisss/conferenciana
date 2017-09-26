<?php /* Smarty version Smarty-3.1.11, created on 2017-09-26 15:15:31
         compiled from "templates/plantillas/modulos/juntas/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166677355359c96a28d05d39-72304450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d15b436a0a46e5d2b4ebff03b6f2060647aec49' => 
    array (
      0 => 'templates/plantillas/modulos/juntas/panel.tpl',
      1 => 1506456896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166677355359c96a28d05d39-72304450',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59c96a28d608c4_58714315',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c96a28d608c4_58714315')) {function content_59c96a28d608c4_58714315($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de juntas</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar / Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvListaJuntas">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">
					<div class="form-group">
						<label for="txtNombre" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-6">
							<input class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label for="txtNombre" class="col-sm-2 control-label">Semilla</label>
						<div class="col-sm-3">
							<input class="form-control" id="txtSemilla" name="txtSemilla">
						</div>
					</div>
					<div class="form-group">
						<label for="txtInicio" class="col-sm-2 control-label">Duración</label>
						<div class="col-sm-3">
							<input class="form-control" id="txtInicio" name="txtInicio" placeholder="Inicia" readonly="true">
						</div>
						<div class="col-sm-3">
							<input class="form-control" id="txtFin" name="txtFin" placeholder="Termina" readonly="true">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/juntas/winListaParticipantes.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>