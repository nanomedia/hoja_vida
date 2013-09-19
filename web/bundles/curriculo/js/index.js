// JavaScript Document


// JavaScript Document

$(document).ready(function(){
	
	$.ajax({
		type: "POST",
		url: "web/preguntas.php"
	}).done(function( msg ) {
		$("#divAreaTrabajo").html(msg);
	});
	
	
	$( "#dialog-alert" ).dialog({
		autoOpen: false, height: 180, width: 300, modal: true, resizable: true,
		buttons: {
					Aceptar: function() {
						$(this).dialog( "close" );
					}
		},
		close: function() {
		}
	});
	
	$( "#dialog-confirm" ).dialog({
		autoOpen: false, height: 180, width: 300, modal: true, resizable: true,
		close: function() {
			
		}
	});
	
	$( "#actualizar-pregunta" ).dialog({
		autoOpen: false, height: 400, width: 800, modal: true, resizable: true,
		close: function() {
			
		}
	});
	
	
});

function abrir_alert(cad){
	$( "#dialog-alert div" ).text(cad);
	$( "#dialog-alert" ).dialog("open");
}
function abrir_confirm(cad){
	var r;
	
	$( "#dialog-confirm div" ).text(cad);
	$( "#dialog-confirm" ).dialog("open");
}

function exportarTodo(){
	
}

function reportes(){
	$.ajax({
		type: "POST",
		url: "web/reportes.php",
		data: { dni: $("#dni").val()}
	}).done(function( msg ) {
		$("#divAreaTrabajo").html(msg);	
		loadDatatable2("tablaTemas");
		loadDatatable2("tablaUsuarios");
	});
}

function reportePorTema(){

}

function listadoPreguntas(){
	
	if($("#dni").val() == 'prueba' || $("#dni").val() == 'administrador' || $("#dni").val() == 'jalarcon'){
		$.ajax({
			type: "POST",
			url: "web/listadoPreguntasAdm.php",
			data: { dni: $("#dni").val()}
		}).done(function( msg ) {
			$("#divAreaTrabajo").html(msg);
			loadDatatable2("tablaPreguntas");
		});
	}else{
		$.ajax({
			type: "POST",
			url: "web/listadoPreguntas.php",
			data: { dni: $("#dni").val()}
		}).done(function( msg ) {
			$("#divAreaTrabajo").html(msg);
			loadDatatable2("tablaPreguntas");
		});
	}
	
	
	
}

function preguntas(){
	
	$.ajax({
		type: "POST",
		url: "web/preguntas.php"
	}).done(function( msg ) {
		$("#divAreaTrabajo").html(msg);
	});
	
}

function agregarPregunta(){
	
	tema = $("#tema").val();
	pregunta = $("#pregunta").val();
	opcion1 = $("#opcion1").val();
	opcion2 = $("#opcion2").val();
	opcion3 = $("#opcion3").val();
	opcion4 = $("#opcion4").val();
	dni = $("#dni").val();
	
	if(tema == ''){ abrir_alert("Seleccione el Tema"); return false; }
	if(pregunta == ''){ abrir_alert("Ingrese la Pregunta"); return false; }
	if(opcion1 == '' || opcion2 == '' || opcion3 == '' || opcion4 == '' ){ abrir_alert("Ingrese Todas las Opciones"); return false; }

	$.ajax({
		type: "POST",
		url: "mdl/preguntas_mdl.php",
		data: { grabar: '1', dni: dni, tema: tema, pregunta: pregunta, opcion1: opcion1, opcion2: opcion2, opcion3: opcion3, opcion4: opcion4}
	}).done(function( msg ) {
		limpiar();
		abrir_alert(msg);
		
	});

}

function editarPregunta(id_pregunta){
	$.ajax({
		type: "POST",
		url: "web/actualizarPregunta.php",
		data: { dni: $("#dni").val(), id_pregunta: id_pregunta}
	}).done(function( msg ) {
		$("#actualizar-pregunta").html(msg);
		$("#actualizar-pregunta").dialog('open');
	});
}

function actualizarPregunta(id_pregunta){
	

	tema = $("#tema").val();
	pregunta = $("#pregunta").val();
	opcion1 = $("#opcion1").val();
	opcion2 = $("#opcion2").val();
	opcion3 = $("#opcion3").val();
	opcion4 = $("#opcion4").val();
	dni = $("#dni").val();
	
	if(tema == ''){ abrir_alert("Seleccione el Tema"); return false; }
	if(pregunta == ''){ abrir_alert("Ingrese la Pregunta"); return false; }
	if(opcion1 == '' || opcion2 == '' || opcion3 == '' || opcion4 == '' ){ abrir_alert("Ingrese Todas las Opciones"); return false; }

	$.ajax({
		type: "POST",
		async: "true",
		url: "mdl/preguntas_mdl.php",
		data: { actualizar: '1', id_pregunta:id_pregunta, dni: dni, tema: tema, pregunta: pregunta, opcion1: opcion1, opcion2: opcion2, opcion3: opcion3, opcion4: opcion4}
	}).done(function( msg ) {
		limpiar();
		$("#actualizar-pregunta").dialog('close');
		$.ajax({
			type: "POST",
			url: "web/listadoPreguntas.php",
			data: { dni: $("#dni").val()}
		}).done(function( msg ) {
			$("#divAreaTrabajo").html(msg);
			loadDatatable2("tablaPreguntas");
		});
		abrir_alert(msg);
		
	});
	
}

function eliminarPregunta(id_pregunta){
	
	$( "#dialog-confirm" ).dialog({
		autoOpen: false, height: 150, width: 300, modal: true, resizable: true,
		buttons: {
			Si: function() {
				$(this).dialog( "close" );
					
				$.ajax({
					type: "POST",
					async: "true",
					url: "mdl/preguntas_mdl.php",
					data: { eliminar: '1', id_pregunta:id_pregunta}
				}).done(function( msg ) {
					limpiar();
					$.ajax({
						type: "POST",
						url: "web/listadoPreguntas.php",
						data: { dni: $("#dni").val()}
					}).done(function( msg ) {
						$("#divAreaTrabajo").html(msg);
						loadDatatable2("tablaPreguntas");
					});
					abrir_alert(msg);
					
				});
			},
			No: function() {
				$(this).dialog( "close" );
				
			}
		},
		close: function() {
			
		}
	});
	
	abrir_confirm("Esta seguro que desea Eliminar la Pregunta?");

}

function enviarPendientes(){
	
	$( "#dialog-confirm" ).dialog({
		autoOpen: false, height: 180, width: 300, modal: true, resizable: true,
		buttons: {
			Si: function() {
				$(this).dialog( "close" );
					
				$.ajax({
					type: "POST",
					async: "true",
					url: "mdl/preguntas_mdl.php",
					data: { enviarPendientes: '1', dni: $("#dni").val()}
				}).done(function( msg ) {
					limpiar();
					$.ajax({
						type: "POST",
						url: "web/listadoPreguntas.php",
						data: { dni: $("#dni").val()}
					}).done(function( msg ) {
						$("#divAreaTrabajo").html(msg);
						loadDatatable2("tablaPreguntas");
						/*
						$.ajax({
							type: "POST",
							url: "email/email.php",
							data: { dni: $("#dni").val()}
						}).done(function( msg ) {
							abrir_alert(msg);
						});
						*/
						
					});
					abrir_alert(msg);
					
				});
			},
			No: function() {
				$(this).dialog( "close" );
			}
		},
		close: function() {
			
		}
	});
	
	$.ajax({
		type: "POST",
		url: "web/contarPendientes.php",
		data: { dni: $("#dni").val()}
	}).done(function( msg ) {
		if(msg == '1'){
			abrir_confirm("Esta seguro que desea Enviar Todos las Preguntas Pendientes?");		
		}else{
			abrir_alert("No tiene ninguna Pregunta Pendiente de envio");
		}
	});
	
	
}

function limpiar(){
	$("input[type=text]").val("");
	$("textarea").val("");
	$("select").val("0");
}


function loadDatatable(id,ruta){
	
	$("#"+id).dataTable({"sPaginationType": "full_numbers",
		"bProcessing": true,
		"bDestroy": true,
		"bServerSide": true,
		"sPaginationType": "full_numbers",
		"oLanguage"	: {
			"oPaginate" : { 
				"sFirst" : "Primero",
				"sNext" : "Siguiente",
				"sPrevious" : "Anterior",
				"sLast" : "Ultimo"
			},
			"sInfo" : "_START_ a _END_ de _TOTAL_ registros",
			"sLengthMenu": "Mostrar _MENU_ registros",
			"sSearch": "Buscar: ",
			
		
			"sProcessing": "Procesando Informaci&oacute;n...",
			"sInfoFiltered": "(Filtrado de un total de _MAX_ registros)",
			"sZeroRecords": "No se encontro registros",
			"sInfoEmpty": "No hay registros para mostrar"
			
		},

		"iDisplayLength": 15,
		"aLengthMenu": [ 15, 30, 50 ],
		//"bJQueryUI" : true,
		
		"sAjaxSource": ruta,

		
		"fnCreatedRow" : function (nRow, aData, iDataIndex) { 
			//$(nRow.getElementsByTagName('td')[0]).attr("hidden","true");
			$(nRow.getElementsByTagName('td')[0]).css("display","none");
		},
		
		"fnHeaderCallback": function( nHead, aData, iStart, iEnd, aiDisplay ) {
			//$(nHead.getElementsByTagName('th')[0]).attr("hidden","true");
			$(nHead.getElementsByTagName('th')[0]).css("display","none");
		}

	
	});		
	
}


function loadDatatable2(id){
	
	$("#"+id).dataTable({"sPaginationType": "full_numbers",
		"bProcessing": true,
		"bDestroy": true,
		"sPaginationType": "full_numbers",
		"oLanguage"	: {
			"oPaginate" : { 
				"sFirst" : "Primero",
				"sNext" : "Siguiente",
				"sPrevious" : "Anterior",
				"sLast" : "Ultimo"
			},
			"sInfo" : "_START_ a _END_ de _TOTAL_ registros",
			"sLengthMenu": "",
			"sSearch": "Buscar: ",
			
		
			"sProcessing": "Procesando Informaci&oacute;n...",
			"sInfoFiltered": "(Filtrado de un total de _MAX_ registros)",
			"sZeroRecords": "No se encontro registros",
			"sInfoEmpty": "No hay registros para mostrar"
			
		},

		"iDisplayLength": 5,
		//"aLengthMenu": [ 15, 30, 50 ],
		//"bJQueryUI" : true,
		
	
		"fnCreatedRow" : function (nRow, aData, iDataIndex) { 
			//$(nRow.getElementsByTagName('td')[0]).attr("hidden","true");
			$(nRow.getElementsByTagName('td')[0]).css("display","none");
		},
		
		"fnHeaderCallback": function( nHead, aData, iStart, iEnd, aiDisplay ) {
			//$(nHead.getElementsByTagName('th')[0]).attr("hidden","true");
			$(nHead.getElementsByTagName('th')[0]).css("display","none");
		}

	
	});		
	
}