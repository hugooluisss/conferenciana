<div class="row">
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
		<div id="dvLista">
			
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