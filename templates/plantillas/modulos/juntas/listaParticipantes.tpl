<table id="tblParticipantes" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Categoría</th>
			<th>Correo</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr>
				<td>{$row.nombre}</td>
				<td>{$row.categoria}</td>
				<td>{$row.correo}</td>
				<td class="text-right">
					<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="{$row.idJunta}"><i class="fa fa-times"></i></button>
				</td>
			</tr>
		{/foreach}
	</tbody>
</table>