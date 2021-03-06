$(document).ready(function(){
	$("#txtInicio").datepicker();
	$("#txtFin").datepicker();
	getLista();
	
	$("#panelTabs li a[href=#add]").click(function(){
		$("#frmAdd").get(0).reset();
		$("#id").val("");
		$("form:not(.filter) :input:visible:enabled:first").focus();
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtInicio: "required",
			txtNombre: "required",
			txtFin: "required",
			txtSemilla: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TJunta;
			obj.add({
				id: $("#id").val(), 
				nombre: $("#txtNombre").val(), 
				semilla: $("#txtSemilla").val(),
				inicio: $("#txtInicio").val(),
				fin: $("#txtFin").val(),
				fn: {
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
						}else{
							alert("Upps... " + datos.mensaje);
						}
					}
				}
			});
        }
    });
		
	function getLista(){
		$.get("listaJuntas", function( data ) {
			$("#dvListaJuntas").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TJunta;
					obj.del({
						id: $(this).attr("identificador"), 
						fn: {
							after: function(data){
								getLista();
							}
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idJunta);
				$("#txtNombre").val(el.nombre);
				$("#txtSemilla").val(el.semilla);
				$("#txtInicio").val(el.inicio);
				$("#txtFin").val(el.fin);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=invitados]").click(function(){
				$("#winListaParticipantes").attr("datos", $(this).attr("datos"));
			});
			
			$("#tblDatos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
	
	
	$("#winListaParticipantes").on('shown.bs.modal', function(e){
		var junta = jQuery.parseJSON($(this).attr("datos"));
		ventana = $("#winListaParticipantes");
		
		$.each(junta, function(campo, valor){
			$("[campo=" + campo + "]").text(valor);
		});
		
		$.post("listaParticipantes", {
			"id": junta.idJunta
		}, function(resp){
			ventana.find(".modal-body").html(resp);
			
			$("#tblParticipantes").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	});
});