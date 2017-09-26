<div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td>{$row.nombre}</td>
						<td class="text-right">
							<button type="button" class="btn btn-primary btn-xs" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-edit"></i></button>
							<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="{$row.idCategoria}"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>