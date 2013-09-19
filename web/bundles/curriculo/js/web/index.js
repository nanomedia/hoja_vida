// JavaScript Document

$(document).ready(function(){
	
	evaluacionAnt();
	llenarFooter();
	
	
	$("#hoja_vida").click(function(){
	
		if($("#dniEvalBus").val()!==""){
		var dni=($("#dniEvalBus").val()).split("-");
		
		location.href="http://info.cnm.gob.pe/hoja_vida/app_dev.php/index/"+dni[0];
		}else{
		alert("no ingresaste el postulante");
		}
		
	
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
	
	$( "#dialog-calculadora" ).dialog({
		autoOpen: false, height: 400, width: 300, resizable: true,
		buttons: {
					Cancelar: function() {
						$(this).dialog( "close" );
					}
		},
		close: function() {
		}
	});
	
	
	$( "#dialog-reporte" ).dialog({
		autoOpen: false, height: 700, width: 1000, modal: true, resizable: true,
		buttons: {
					Imprimir: function() {
						$( "#dialog-reporte" ).print();
					}
		},
		close: function() {
			
		}
	});
	
	$( "#dialog-modif-file" ).dialog({
		autoOpen: false, height: 200, width: 400, modal: true, resizable: true,
		buttons: {
					Cancelar: function() {
						$( "#dialog-modif-file" ).dialog("close");
					}
		},
		close: function() {
			
		}
	});
	
	$( "#dialog-foja" ).dialog({
		autoOpen: false, height: 200, width: 300, modal: true, resizable: true,
		buttons: {
					Aceptar: function() {
						$(this).dialog( "close" );
					}
		},
		close: function() {
		}
	});
	
	$( "#dialog-obse" ).dialog({
		autoOpen: false, height: 300, width: 400, modal: true, resizable: true,
		buttons: {
					Aceptar: function() {
						$(this).dialog( "close" );
					}
		},
		close: function() {
		}
	});
	
	$( "#dialog-obse2" ).dialog({
		autoOpen: false, height: 300, width: 400, modal: true, resizable: true,
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
		autoOpen: false, height: 500, width: 800, modal: true, resizable: true,
		close: function() {
			
		}
	});
	
	$( "#reportePorUsuario" ).dialog({
		autoOpen: false, height: 400, width: 800, modal: true, resizable: true,
		close: function() {
			
		}
	});
	
	$( "#leyenda" ).dialog({
		autoOpen: false, height: 600, width: 800, modal: true, resizable: true,
		close: function() {
			
		}
	});

	$( "#div_consultas" ).dialog({
		autoOpen: false, height: 350, width: 500, modal: true, resizable: true,
		buttons: {
					Enviar: function() {
						aa = 0;
						$(".form_consultas").each(function(){
							if($(this).val() == '') aa = 1;
						});
						if(aa == 1){
							abrir_alert("Complete todos los campos.");
						}else{
							prueba_email($("#email_consulta").val(),$("#telefono_consulta").val(),$("#consulta_consulta").val());
							//abrir_alert("Mensaje Enviado.");
							$( "#div_consultas" ).dialog("close");
						}
						$(".form_consultas").each(function(){
							$(this).val("");	
						});
						
						
					}
				},

				
		close: function() {
			
		}
	});

	

	$("body").delegate("#lugar","change",function(){
		$.ajax({
			type: "POST",
			url: "web/cargos_convocados.php",
			data: { id_lugar: $("#lugar").val()}
		}).done(function( msg ) {
			$("#cargos_convocados").html(msg);	
		});	
	});
	
	
	
	$("body").delegate(".selectSegundoNivel","change",function(){
		//$("#"+$(this).attr("xid")).html($(this).val());
		aux = $(this).attr("xid");
		$.ajax({
			type: "POST",
			url: "web/selectItem.php",
			data: {dni: $("#dni").val(), contrasenia: $("#contrasenia").val(), id_item : $(this).val(), aux: aux}
		}).done(function( msg ) {
			$("#"+aux).html(msg);
			$("#fecha").datepicker({changeMonth: true,changeYear: true});
			$("#fecha").datepicker('option', {dateFormat: 'dd-mm-yy'});
			$("#fecha_fin").datepicker({changeMonth: true,changeYear: true});
			$("#fecha_fin").datepicker('option', {dateFormat: 'dd-mm-yy'});
			$("#fecha_inicio").datepicker({changeMonth: true,changeYear: true});
			$("#fecha_inicio").datepicker('option', {dateFormat: 'dd-mm-yy'});
			$("#fecha_publicacion").datepicker({changeMonth: true,changeYear: true});
			$("#fecha_publicacion").datepicker('option', {dateFormat: 'dd-mm-yy'});
			
		});	
		//alert($(this).attr("xid"));
	});
	
	$("body").delegate(".selectSegundoNivelEval","change",function(){
		//$("#"+$(this).attr("xid")).html($(this).val());
		aux = $(this).attr("xid");
		$.ajax({
			type: "POST",
			url: "web/selectItemEval.php",
			data: {dni: $("#dni").val(), contrasenia: $("#contrasenia").val(), id_item : $(this).val(), aux: aux}
		}).done(function( msg ) {
			$("#"+aux).html(msg);
			$("#fecha").datepicker({changeMonth: true,changeYear: true});
			$("#fecha").datepicker('option', {dateFormat: 'dd-mm-yy'});
			$("#fecha_fin").datepicker({changeMonth: true,changeYear: true});
			$("#fecha_fin").datepicker('option', {dateFormat: 'dd-mm-yy'});
			$("#fecha_inicio").datepicker({changeMonth: true,changeYear: true});
			$("#fecha_inicio").datepicker('option', {dateFormat: 'dd-mm-yy'});
			$("#fecha_publicacion").datepicker({changeMonth: true,changeYear: true});
			$("#fecha_publicacion").datepicker('option', {dateFormat: 'dd-mm-yy'});
			
		});	
		//alert($(this).attr("xid"));
	});
	
	$("body").delegate(".selectSegundoNivelModif","change",function(){
		//$("#"+$(this).attr("xid")).html($(this).val());
		aux = $(this).attr("xid");
		$.ajax({
			type: "POST",
			url: "web/selectItemModif.php",
			data: {dni: $("#dni").val(), contrasenia: $("#contrasenia").val(), id_item : $(this).val(), aux: aux}
		}).done(function( msg ) {
			$("#"+aux).html(msg);
			$("#fecha").datepicker({changeMonth: true,changeYear: true});
			$("#fecha").datepicker('option', {dateFormat: 'dd-mm-yy'});
			$("#fecha_fin").datepicker({changeMonth: true,changeYear: true});
			$("#fecha_fin").datepicker('option', {dateFormat: 'dd-mm-yy'});
			$("#fecha_inicio").datepicker({changeMonth: true,changeYear: true});
			$("#fecha_inicio").datepicker('option', {dateFormat: 'dd-mm-yy'});
			$("#fecha_publicacion").datepicker({changeMonth: true,changeYear: true});
			$("#fecha_publicacion").datepicker('option', {dateFormat: 'dd-mm-yy'});
			
		});	
		//alert($(this).attr("xid"));
	});
	
	
	
	
	
	/*
	$("body").delegate(".selectDemas","change",function(){
		//$("#"+$(this).attr("xid")).html($(this).val());
		aux = $(this).attr("xid");
		$.ajax({
			type: "POST",
			url: "web/selectItem.php",
			data: {contrasenia: $("#contrasenia").val(), id_item : $(this).val(), aux: aux}
		}).done(function( msg ) {
			$("#"+aux).html($("#"+aux).html()+msg);	
		});	
		//alert($(this).attr("xid"));
	});
	*/

});

function abrir_alert(cad){
	$( "#dialog-alert div" ).text(cad);
	$( "#dialog-alert" ).dialog("open");
}

function llenarFooter(){
	$.ajax({
		type: "POST",
		url: "web/reporte_footer.php",
		data: { dni: $("#dni").val()}
	}).done(function( msg ) {
		$("#footer").html(msg);
	});
}

function calcularFecha(){
	i = 1; j = 0;
	var Y = 0;
	var M = 0;
	var D = 0;
	var f1 = new Array();
	var f2 = new Array();
	
	if($("#puntano").val() == ''){
		abrir_alert(utf8_encode("Ingrese los puntos por año."));
		return false;
	}
	
	$(".f1").each(function(){
		aux1 = $(this).val();
		aux2 = $("#e"+i).val();
		
		if(aux1!= '' && aux2!= ''){
			f1[j] = aux1;
			f2[j] = aux2;
			j++;
		}
		
		i++;
	});
	
	$.ajax({
		type: "POST",
		async: "true",
		url: "web/diff.php",
		data: { f1: f1, f2:f2}
	}).success(function( msg ) {
		//alert(msg);
		var aux = msg.split('-');
		
		Y = parseInt(aux[0]);
		M = parseInt(aux[1]);
		D = parseInt(aux[2]);
		
		M += parseInt(D/30);
		D = parseInt(D%30);
		
		Y += parseInt(M/12);
		M = parseInt(M%12);
		
		$("#result").html(Y+" Años, "+M+" Meses, "+D+" Dias.");
		$("#puntResult").html(""+parseInt(Y)*parseInt($("#puntano").val()));
		
		//alert(Y+'-'+M+'-'+D);
		
		//alert(D);
	});

	//alert(Y+'-'+M+'-'+D);
	

}

function mascolumnas(){
	i = 0;
	$(".f1").each(function(){
		i++;
	});
	
	$.ajax({
		type: "POST",
		async: "false",
		url: "web/masColumnas.php",
		data: { i: i+1 }
	}).done(function( msg ) {
		$("#tableCalc").append(msg);
		$(".f1").datepicker({changeMonth: true,changeYear: true});
		$(".f1").datepicker('option', {dateFormat: 'dd-mm-yy'});
		$(".f2").datepicker({changeMonth: true,changeYear: true});
		$(".f2").datepicker('option', {dateFormat: 'dd-mm-yy'});
	});
	
	
	
}

function calculadora(){
	
	$( "#dialog-calculadora" ).dialog("open");
	
	$.ajax({
		type: "POST",
		url: "web/calculadora.php"
	}).done(function( msg ) {
		$( "#dialog-calculadora" ).html(msg);
		$(".f1").datepicker({changeMonth: true,changeYear: true});
		$(".f1").datepicker('option', {dateFormat: 'dd-mm-yy'});
		$(".f2").datepicker({changeMonth: true,changeYear: true});
		$(".f2").datepicker('option', {dateFormat: 'dd-mm-yy'});
	});

}

function consensuar(id_curriculo){
	
	$.ajax({
		type: "POST",
		async: true,
		url: "web/consensuadoDetalle.php",
		data: { dni: $("#dni").val(), id_curriculo: id_curriculo }
	}).done(function( msg ) {
		$( "#divAreaTrabajo" ).html(msg);
		$(".input_consensuado").numeric();
	});

}

function consensuado(){

	$.ajax({
		type: "POST",
		async: true,
		url: "web/consensuado.php",
		data: { dni: $("#dni").val() }
	}).done(function( msg ) {
		$( "#divAreaTrabajo" ).html(msg);
		loadDatatable2('consensuado');
	});
	
}

function concluido(){

	$.ajax({
		type: "POST",
		async: true,
		url: "web/concluido.php",
		data: { dni: $("#dni").val() }
	}).done(function( msg ) {
		$( "#divAreaTrabajo" ).html(msg);
		loadDatatable2('concluido');
	});
	
}

function reporte_pdf_eval(id_curriculo, evaluacion){
	
	$.ajax({
		type: "POST",
		async: true,
		url: "web/reporte_pdf_ev"+evaluacion+".php",
		//data: { dni: $("#dni").val(), id_curriculo: xxx, id_padre_tab: $("#id_padre_tab").val()}
		data: { id_curriculo: id_curriculo}
	}).done(function( msg ) {
		$( "#dialog-reporte" ).html(msg);
		$( "#dialog-reporte" ).dialog("open");
		
	});
	
}

function reporteConcluido(id_curriculo){
	
	$.ajax({
		type: "POST",
		async: true,
		url: "web/reporteConcluido.php",
		//data: { dni: $("#dni").val(), id_curriculo: xxx, id_padre_tab: $("#id_padre_tab").val()}
		data: { id_curriculo: id_curriculo}
	}).done(function( msg ) {
		$( "#dialog-reporte" ).html(msg);
		$( "#dialog-reporte" ).dialog("open");
		
	});
	
}

function terminar_evaluacion(id_curriculo){

	$( "#dialog-confirm" ).dialog({
		autoOpen: false, height: 150, width: 300, modal: true, resizable: true,
		buttons: {
			Si: function() {
				$(this).dialog( "close" );
				$.ajax({
					type: "POST",
					url: "web/terminar_evaluacion.php",
					data: { dni: $("#dni").val(), id_curriculo: id_curriculo}
				}).done(function( msg ) {
					abrirEval();
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
	
	abrir_confirm("Esta seguro terminar de Evaluar este Curriculo??");

}

function terminar_consensuado(id_curriculo){

	$( "#dialog-confirm" ).dialog({
		autoOpen: false, height: 150, width: 300, modal: true, resizable: true,
		buttons: {
			Si: function() {
				$(this).dialog( "close" );
				aux = 0;
				$(".input_consensuado").each(function(){
					if($(this).val() == ''){
						abrir_alert('Debe completar todos los Items!');
						return false;
					}
				});
				
				$(".input_consensuado").each(function(){
					
					$.ajax({
						type: "POST",
						url: "mdl/curriculo_mdl.php",
						data: { actualizarItem: 1, dni: $("#dni").val(), id_curriculo_item: $(this).attr('xid'), valor : $(this).val()}
					}).done(function( msg ) {

					});
					
				});
				
				$.ajax({
					type: "POST",
					url: "mdl/curriculo_mdl.php",
					data: { terminarConsensuado: 1, dni: $("#dni").val(), id_curriculo: id_curriculo }
				}).done(function( msg ) {
					abrir_alert(msg);
				});
				
				/*
				$.ajax({
					type: "POST",
					url: "web/terminar_evaluacion.php",
					data: { dni: $("#dni").val(), id_curriculo: id_curriculo}
				}).done(function( msg ) {
					abrirEval();
					abrir_alert(msg);
				});*/
			},
			No: function() {
				$(this).dialog( "close" );
			}
		},
		close: function() {
		}
	});
	
	abrir_confirm("Esta seguro terminar el Consensuado de este Curriculo??");

}

function reactivar_evaluacion(id_curriculo){

	$( "#dialog-confirm" ).dialog({
		autoOpen: false, height: 150, width: 300, modal: true, resizable: true,
		buttons: {
			Si: function() {
				$(this).dialog( "close" );
				$.ajax({
					type: "POST",
					url: "web/reactivar_evaluacion.php",
					data: { dni: $("#dni").val(), id_curriculo: id_curriculo}
				}).done(function( msg ) {
					abrirEval();
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
	
	abrir_confirm("Esta seguro que desea Reactivar este Curriculo??");

}

function abrir_foja(){
	//$( "#dialog-foja div" ).html(cad+$( "#dialog-foja div" ).html());
	$( "#dialog-foja" ).dialog("open");
}

function abrir_obse(){
	//$( "#dialog-foja div" ).html(cad+$( "#dialog-foja div" ).html());
	$( "#dialog-obse" ).dialog("open");
}


function abrir_obse2(id_curriculo_item){
	$.ajax({
		type: "POST",
		url: "web/abrir_obse.php",
		data: {id_curriculo_item: id_curriculo_item}
	}).done(function( msg ) {
		$("#obse2").val(msg);
		$( "#dialog-obse2" ).dialog({
			autoOpen: false, height: 250, width: 400, modal: true, resizable: true,
			buttons: {
				Actualizar: function() {
					
					if($("#obse2").val() == ''){
						abrir_alert("Ingrese observacion !");
						return false;
					}
					
					$(this).dialog( "close" );
					$.ajax({
						type: "POST",
						url: "mdl/curriculo_mdl.php",
						data: { actualizarObse: 1, dni: $("#dni").val(), id_curriculo_item: id_curriculo_item, obse2: $("#obse2").val() }
					}).done(function( msg ) {
						//$("#detalleCurriculo").html(msg);	
						abrirEval();
						abrir_alert(msg);
						$("#obse2").val("");
					});
						
				},
				Cancelar: function() {
					$(this).dialog( "close" );
					
				}
			},
			close: function() {
				
			}
		});
		
		$( "#dialog-obse2" ).dialog("open");
	});	
		
	
}

function abrir_confirm(cad){
	var r;
	
	$( "#dialog-confirm div" ).text(cad);
	$( "#dialog-confirm" ).dialog("open");
}

function evaluacionAnt(){
	$.ajax({
		type: "POST",
		url: "web/evaluacionAnt.php"
		//data: { dni: '00428137'}
	}).done(function( msg ) {
		$("#divAreaTrabajo").html(msg);	
		
		$("#dniEvalBus").autocomplete({
        	minLength: 3,
			source: "web/dniAuto.php",
			
        	select: function (event, ui) {
            	$("#dniEval").val(ui.item.dni);
            	//$("#value").val(ui.value);
       		}
    	});
		
	});
}

function modificacion(){
	$.ajax({
		type: "POST",
		url: "web/modificacionAnt.php"
		//data: { dni: '00428137'}
	}).done(function( msg ) {
		$("#divAreaTrabajo").html(msg);	
		
		$("#dniEvalBus").autocomplete({
        	minLength: 3,
			source: "web/dniAuto.php",
			
        	select: function (event, ui) {
            	$("#dniEval").val(ui.item.dni);
            	//$("#value").val(ui.value);
       		}
    	});
		
	});
}

function reporte(){
	$.ajax({
		type: "POST",
		url: "web/evaluacionReporte.php"
		//data: { dni: '00428137'}
	}).done(function( msg ) {
		$("#divAreaTrabajo").html(msg);	
		
		$("#dniEvalBus").autocomplete({
        	minLength: 3,
			source: "web/dniAuto.php",
			
        	select: function (event, ui) {
            	$("#dniEval").val(ui.item.dni);
            	//$("#value").val(ui.value);
       		}
    	});
		
	});

}

function reportexUsuario(dni_user){
	$.ajax({
		type: "POST",
		url: "web/reporte_pdf.php",
		data: { dni: dni_user}
	}).done(function( msg ) {
		$("#divAreaTrabajo").html(msg);	
	});
}

function reactivarItem(id_curriculo_item, id_evaluacion){
	
	//alert(id_curriculo_item);
	//alert(valor);
	//alert(id_evaluacion);
		
	$( "#dialog-confirm" ).dialog({
		autoOpen: false, height: 150, width: 300, modal: true, resizable: true,
		buttons: {
			Si: function() {
				$(this).dialog( "close" );
				$.ajax({
					type: "POST",
					url: "mdl/curriculo_mdl.php",
					data: { reactivarItem: 1, dni: $("#dni").val(), id_curriculo_item: id_curriculo_item, id_evaluacion:id_evaluacion }
				}).done(function( msg ) {
					//$("#detalleCurriculo").html(msg);	
					cambiarPadreEval($("#id_padre_tab").val());
					//abrirEval();
					$("#tabs").tabs("select", "#tabs-"+$("#id_padre_tab").val());
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
	
	abrir_confirm("Esta seguro que desea Reactivar este Item?");
	

}

function eliminarNuevoItem(id_curriculo_item){
	
	$( "#dialog-confirm" ).dialog({
		autoOpen: false, height: 150, width: 300, modal: true, resizable: true,
		buttons: {
			Si: function() {
				$(this).dialog( "close" );
				$.ajax({
					type: "POST",
					url: "mdl/curriculo_mdl.php",
					data: { eliminarNuevoItem: 1, dni: $("#dni").val(), id_curriculo_item: id_curriculo_item }
				}).done(function( msg ) {
					//$("#detalleCurriculo").html(msg);	
					cambiarPadreEval($("#id_padre_tab").val());
					//abrirEval();
					$("#tabs").tabs("select", "#tabs-"+$("#id_padre_tab").val());
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
	
	abrir_confirm("Esta seguro que desea Eliminar este Item?");
	
}

function cancelarItem(id_curriculo_item, id_evaluacion){
	
	//alert(id_curriculo_item);
	//alert(valor);
	//alert(id_evaluacion);
		
	$( "#dialog-obse" ).dialog({
		autoOpen: false, height: 250, width: 400, modal: true, resizable: true,
		buttons: {
			Si: function() {
				
				if($("#obse").val() == ''){
					abrir_alert("Ingrese observacion !");
					return false;
				}
				
				$(this).dialog( "close" );
				$.ajax({
					type: "POST",
					url: "mdl/curriculo_mdl.php",
					data: { cancelarItem: 1, dni: $("#dni").val(), id_curriculo_item: id_curriculo_item, 
					id_evaluacion:id_evaluacion, obse: $("#obse").val() }
				}).done(function( msg ) {
					//$("#detalleCurriculo").html(msg);	
					cambiarPadreEval($("#id_padre_tab").val());
					//abrirEval();
					$("#tabs").tabs("select", "#tabs-"+$("#id_padre_tab").val());
					abrir_alert(msg);
					$("#obse").val("");
				});
					
			},
			No: function() {
				$(this).dialog( "close" );
				
			}
		},
		close: function() {
			
		}
	});
	
	abrir_obse();
	

}

function aceptarItem(id_curriculo_item, id_evaluacion){
	
	//alert(id_curriculo_item);
	//alert(valor);
	//alert(id_evaluacion);
	
	if($("#val-"+id_curriculo_item).val() == ''){
		abrir_alert("Complete la puntuacion correspondiente !");
		return false;
	}
	
	valor = $("#val-"+id_curriculo_item).val();
	
	$( "#dialog-foja" ).dialog({
		autoOpen: false, height: 200, width: 300, modal: true, resizable: true,
		buttons: {
			Si: function() {
				
				if($("#foja").val() == ''){
					abrir_alert("Ingrese el numero de Foja");
					return false;
				}
				
				$(this).dialog( "close" );
				$.ajax({
					type: "POST",
					url: "mdl/curriculo_mdl.php",
					data: { aprobarItem: 1, dni: $("#dni").val(), id_curriculo_item: id_curriculo_item, valor: valor, 
							id_evaluacion: id_evaluacion, foja:$("#foja").val() }
				}).done(function( msg ) {
					//$("#detalleCurriculo").html(msg);	
					cambiarPadreEval($("#id_padre_tab").val());
					//abrirEval();
					$("#tabs").tabs("select", "#tabs-"+$("#id_padre_tab").val());
					
					abrir_alert(msg);
					$("#foja").val("");
				});
					
			},
			No: function() {
				$(this).dialog( "close" );
				
			}
		},
		close: function() {
			
		}
	});
	
	abrir_foja();
	

}

function abrirReporte(){
	dniEval = $("#dniEval").val();
	$.ajax({
		type: "POST",
		url: "web/verificarCurriculo.php",
		data: { dni: $("#dni").val(), dniEval: dniEval}
	}).done(function( msg ) {
		
		if(msg == 0) {
			abrir_alert("No se encuentra DNI");
		}else{
			if(msg == 9999) {
				abrir_alert("Ya se evaluo este DNI");
			}else{
				reportexUsuario(dniEval);
				//abrir_curriculoEval(msg,dniEval);
				
				$("#fecha").datepicker();	
						
			}
		}
		
		

	});
}


function abrirEval(){
	dniEval = $("#dniEval").val();
	$.ajax({
		type: "POST",
		url: "web/verificarCurriculo.php",
		data: { dni: $("#dni").val(), dniEval: dniEval}
	}).done(function( msg ) {
		
		if(msg == 0) {
			abrir_alert("No se encuentra DNI");
		}else{
			if(msg == 9999) {
				abrir_alert("Ya se evaluo este DNI");
			}else{
				abrir_curriculoEval(msg,dniEval);
				
				$("#fecha").datepicker();	
						
			}
		}
		
		

	});
}

function abrirModif(){
	dniEval = $("#dniEval").val();
	$.ajax({
		type: "POST",
		url: "web/verificarCurriculoModif.php",
		data: { dni: $("#dni").val(), dniEval: dniEval}
	}).done(function( msg ) {
		if(msg == 0) {
			abrir_alert("No se encuentra DNI");
		}else{
			abrir_curriculoModif(msg,dniEval);
			$("#fecha").datepicker();	
		}
		
	});
}




function evaluacion(dniEval){
	$.ajax({
		type: "POST",
		url: "web/verificarCurriculo.php",
		data: { dni: $("#dni").val(), dniEval: dniEval}
	}).done(function( msg ) {
		abrir_curriculoEval(msg,dniEval);
		$("#fecha").datepicker();
	});
}

function abrir_curriculoEval(xxx,dniEval){
	
	$.ajax({
		type: "POST",
		url: "web/curriculoEval.php",
		data: { contrasenia: $("#contrasenia").val(), dni: $("#dni").val(), dniEval: dniEval, nombre_completo : $("#nombre_completo").val(), id_curriculo: xxx}
	}).done(function( msg ) {
		$("#divAreaTrabajo").html(msg);	
		$( "#tabs" ).tabs();
		
		$.ajax({
			type: "POST",
			async: true,
			url: "web/detalleCurriculoEval.php",
			data: {contrasenia: $("#contrasenia").val(), dni: $("#dni").val(), id_curriculo: xxx, id_padre_tab: $("#id_padre_tab").val()}
		}).done(function( msg ) {
			$("#detalleCurriculo-"+$("#id_padre_tab").val()).html(msg);	
			$(".val-input").numeric();
				//$( "#tabs" ).tabs();
		});
		$(".val-input").numeric();
	});
}

function abrir_curriculoModif(xxx,dniEval){
	
	$.ajax({
		type: "POST",
		url: "web/curriculoModif.php",
		data: { contrasenia: $("#contrasenia").val(), dni: $("#dni").val(), dniEval: dniEval, nombre_completo : $("#nombre_completo").val(), id_curriculo: xxx}
	}).done(function( msg ) {
		$("#divAreaTrabajo").html(msg);	
		$( "#tabs" ).tabs();
		
		$.ajax({
			type: "POST",
			async: true,
			url: "web/detalleCurriculoModif.php",
			data: {contrasenia: $("#contrasenia").val(), dni: $("#dniEval").val(), id_curriculo: xxx, id_padre_tab: $("#id_padre_tab").val()}
		}).done(function( msg ) {
			$("#detalleCurriculo-"+$("#id_padre_tab").val()).html(msg);	
			$(".val-input").numeric();
				//$( "#tabs" ).tabs();
		});
		$(".val-input").numeric();
	});
}

function prueba_email(email, telefono, consulta){
	$.ajax({
		type: "POST",
		async: true,
		url: "email/email.php",
		//data: { dni: $("#dni").val(), id_curriculo: xxx, id_padre_tab: $("#id_padre_tab").val()}
		data: { dni: $("#dni").val(), email: email, telefono:telefono, consulta: consulta}
	}).done(function( msg ) {
		abrir_alert(msg);
	});
}

function reporte_pdf(){
	$.ajax({
		type: "POST",
		async: true,
		url: "web/reporte_pdf.php",
		//data: { dni: $("#dni").val(), id_curriculo: xxx, id_padre_tab: $("#id_padre_tab").val()}
		data: { dni: $("#dni").val()}
	}).done(function( msg ) {
		abrir_alert(msg);
	});
}

function consultas_email(){
	/*
	$.ajax({
		type: "POST",
		async: true,
		url: "web/traerEmail.php",
		//data: { dni: $("#dni").val(), id_curriculo: xxx, id_padre_tab: $("#id_padre_tab").val()}
		data: { dni: $("#dni").val()}
	}).done(function( msg ) {
		//alert(msg);
		$("#email_defecto").html(msg);
	});
	*/	
	$( "#div_consultas" ).dialog("open");
	
}

function curriculo(){
	
	$.ajax({
		type: "POST",
		url: "web/verificarCurriculo.php",
		data: { dni: $("#dni").val()}
	}).done(function( msg ) {
		abrir_curriculo(msg);
		$("#fecha").datepicker();
	});
	
}

function abrir_curriculo(xxx){
	$.ajax({
		type: "POST",
		url: "web/curriculo.php",
		data: { contrasenia: $("#contrasenia").val(), dni: $("#dni").val(), nombre_completo : $("#nombre_completo").val(), id_curriculo: xxx}
	}).done(function( msg ) {
		$("#divAreaTrabajo").html(msg);	
		$( "#tabs" ).tabs();
		
		$.ajax({
			type: "POST",
			async: true,
			url: "web/detalleCurriculo.php",
			data: {contrasenia: $("#contrasenia").val(), dni: $("#dni").val(), id_curriculo: xxx, id_padre_tab: $("#id_padre_tab").val()}
		}).done(function( msg ) {
			$("#detalleCurriculo-"+$("#id_padre_tab").val()).html(msg);	
			
			//$( "#tabs" ).tabs();
		});
	});
}

function cambiarPadre(id){
	$(".selectSegundoNivel option[value=0]").attr("selected",true);
	//$("body").delegate(".selectSegundoNivel","change");
	//$(".selectSegundoNivel").trigger("change");
	$(".tabs-sup").html("");
	$("#id_padre_tab").val(id);
	$.ajax({
		type: "POST",
		url: "web/detalleCurriculo.php",
		data: {contrasenia: $("#contrasenia").val(), dni: $("#dni").val(), id_curriculo: $("#id_curriculo_grabar").val(), id_padre_tab: $("#id_padre_tab").val()}
	}).done(function( msg ) {
		$("#detalleCurriculo-"+$("#id_padre_tab").val()).html(msg);	
		
		//$("#fecha").datepicker();
		//$( "#tabs" ).tabs();
	});
}

function cambiarPadreEval(id){
	
	$(".selectSegundoNivelEval option[value=0]").attr("selected",true);
	//$("body").delegate(".selectSegundoNivel","change");
	//$(".selectSegundoNivel").trigger("change");
	$(".tabs-sup").html("");
	$("#id_padre_tab").val(id);
	$.ajax({
		type: "POST",
		url: "web/detalleCurriculoEval.php",
		data: {contrasenia: $("#contrasenia").val(), dni: $("#dni").val(), id_curriculo: $("#id_curriculo_grabar").val(), id_padre_tab: $("#id_padre_tab").val()}
	}).done(function( msg ) {
		$("#detalleCurriculo-"+$("#id_padre_tab").val()).html(msg);	
		$(".val-input").numeric();
		//$("#fecha").datepicker();
		//$( "#tabs" ).tabs();
	});
}

function cambiarPadreModif(id){
	
	$(".selectSegundoNivelModif option[value=0]").attr("selected",true);
	//$("body").delegate(".selectSegundoNivel","change");
	//$(".selectSegundoNivel").trigger("change");
	$(".tabs-sup").html("");
	$("#id_padre_tab").val(id);
	$.ajax({
		type: "POST",
		url: "web/detalleCurriculoModif.php",
		data: {contrasenia: $("#contrasenia").val(), dni: $("#dniEval").val(), id_curriculo: $("#id_curriculo_grabar").val(), id_padre_tab: $("#id_padre_tab").val()}
	}).done(function( msg ) {
		$("#detalleCurriculo-"+$("#id_padre_tab").val()).html(msg);	
		$(".val-input").numeric();
		//$("#fecha").datepicker();
		//$( "#tabs" ).tabs();
	});
}


function grabarItem(){

	$( "#dialog-confirm" ).dialog({
		autoOpen: false, height: 150, width: 300, modal: true, resizable: true,
		buttons: {
			Si: function() {
				$(this).dialog( "close" );
				
				id_campo = new Array();
				descripcion = new Array();	
				i = 0;
				au = 0;
				$(".campos").each(function(index, element) {
					//alert($(this).attr("xid"));
					if($(this).val() == ''){
						au = 1;
					}
					id_campo[i] = $(this).attr("xid");
					descripcion[i] = $(this).val();
					i++;
				});	
				//return false;
				if(au == 1){
					abrir_alert("Complete todos los campos."); 
					return false;
				}
				
				if($("#file").val() == ''){
					abrir_alert("Cargue el archivo."); 
					return false;
				}
				
				com = comprueba_extension($("#file").val());
				
				if(com != '1'){
					abrir_alert(com); 	
					return false;
				}
				//return false;
				
				$.ajax({
					type: "POST",
					url: "mdl/curriculo_mdl.php",
					data: { grabarItem: 1, dni: $("#dni").val(), id_campo : id_campo, descripcion : descripcion, id_item: $("#id_item_grabar").val(), id_curriculo: $("#id_curriculo_grabar").val()}
				}).done(function( msg ) {
					//alert($("#file").val()); return false;
					//alert(msg); return false;
					$(".selectSegundoNivel option[value=0]").attr("selected",true);
					$("body").delegate(".selectSegundoNivel","change");
					abrir_alert("Se registro el Item Correctamente.");
					abrir_curriculo($("#id_curriculo_grabar").val());
					$("#id_curriculo_item_up").val(msg);
					$("#dni_up").val($("#dni").val());
					$("#upload").submit();
					//$(".selectSegundoNivel").trigger("change");					
				});	
					
			},
			No: function() {
				$(this).dialog( "close" );
				
			}
		},
		close: function() {
			
		}
	});
	
	abrir_confirm("Esta seguro que desea Agregar el Item?");

}


function grabarItemModif(){
	$("#loading")
	.ajaxStart(function(){
		$(this).show();
	});
	
	
	$( "#dialog-confirm" ).dialog({
		autoOpen: false, height: 150, width: 300, modal: true, resizable: true,
		buttons: {
			Si: function() {
				$(this).dialog( "close" );
				
				id_campo = new Array();
				descripcion = new Array();	
				i = 0;
				au = 0;
				$(".campos").each(function(index, element) {
					//alert($(this).attr("xid"));
					if($(this).val() == ''){
						au = 1;
					}
					id_campo[i] = $(this).attr("xid");
					descripcion[i] = $(this).val();
					i++;
				});	
				//return false;
				if(au == 1){
					abrir_alert("Complete todos los campos."); 
					return false;
				}
				
				if($("#file").val() == ''){
					abrir_alert("Cargue el archivo."); 
					return false;
				}
				
				com = comprueba_extension($("#file").val());
				
				if(com != '1'){
					abrir_alert(com); 	
					return false;
				}
				//return false;
				
				
					
					
				
				$.ajax({
					type: "POST",
					url: "mdl/curriculo_mdl.php",
					asyn: "true",
					data: { grabarItem: 1, dni: $("#dniEval").val(), id_campo : id_campo, descripcion : descripcion, id_item: $("#id_item_grabar").val(), id_curriculo: $("#id_curriculo_grabar").val()}
				}).done(function( msg ) {
					//alert($("#file").val()); return false;
					//alert(msg); return false;
					
					
					$("#id_curriculo_item_up").val(msg);
					$("#dni_up").val($("#dniEval").val());
					//$("#upload").submit();
					
					
					
			
					$.ajaxFileUpload
					(
						{
							url:'web/upload_file2.php',
							secureuri:false,
							fileElementId:'file',
							dataType: 'html',
							data:{dni_up:$("#dni_up").val(), id_curriculo_item_up:$("#id_curriculo_item_up").val()},
							success: function (msg)
							{
								/*
								if(typeof(data.error) != 'undefined')
								{
									if(data.error != '')
									{
										alert('A-'+data.error);
									}else
									{
										alert('B-'+data.msg);
									}
								}*/
								abrir_alert(msg);
								$(".selectSegundoNivelModif option[value=0]").attr("selected",true);
								$("body").delegate(".selectSegundoNivelModif","change");
								abrir_alert("Se registro el Item Correctamente.");
								abrir_curriculoModif($("#id_curriculo_grabar").val(), $("#dniEval").val());
								$("#loading").hide();
							},
							error: function (data, status, e)
							{
								alert('C-'+e);
							}
						}
					);
					
					
					
					
					//$(".selectSegundoNivel").trigger("change");					
				});	
					
			},
			No: function() {
				$(this).dialog( "close" );
				
			}
		},
		close: function() {
			
		}
	});
	
	abrir_confirm("Esta seguro que desea Agregar el Item?");

}



function modif_file_grabar(){
	//$("#upload").submit();
	
	
	$("#loading")
	.ajaxStart(function(){
		$(this).show();
	});
	
	
	$( "#dialog-confirm" ).dialog({
		autoOpen: false, height: 150, width: 300, modal: true, resizable: true,
		buttons: {
			Si: function() {
				$(this).dialog( "close" );
				
				$.ajaxFileUpload
				(
					{
						url:'web/modif_file.php',
						secureuri:false,
						fileElementId:'file',
						dataType: 'html',
						data:{dni_modif:$("#dniEval").val(), id_curriculo_item_modif:$("#id_curriculo_item_modif").val()},
						success: function (msg)
						{
							/*
							if(typeof(data.error) != 'undefined')
							{
								if(data.error != '')
								{
									alert('A-'+data.error);
								}else
								{
									alert('B-'+data.msg);
								}
							}*/
							abrir_alert(msg);
							$(".selectSegundoNivelModif option[value=0]").attr("selected",true);
							$("body").delegate(".selectSegundoNivelModif","change");
							$( "#dialog-modif-file" ).dialog("close");
							abrir_alert("Se actualizo el Item Correctamente.");
							abrir_curriculoModif($("#id_curriculo_grabar").val(), $("#dniEval").val());
							$("#loading").hide();
						},
						error: function (data, status, e)
						{
							alert('C-'+e);
						}
					}
				);
					
			},
			No: function() {
				$(this).dialog( "close" );
				
			}
		},
		close: function() {
			
		}
	});
	
	abrir_confirm("Esta seguro que desea Modificar el Archivo?");
	
}

function modif_file(dni, id_curriculo_item, md5_curriculo_item){

	$.ajax({
		type: "POST",
		url: "web/modificarFile.php",
		data: { dni: $("#dni").val(), dni:dni, id_curriculo_item: id_curriculo_item, md5_curriculo_item: md5_curriculo_item}
	}).done(function( msg ) {
		$( "#dialog-modif-file" ).html(msg);
		$( "#dialog-modif-file" ).dialog("open");
						
	});			

}



function grabarItemEval(){

	$( "#dialog-confirm" ).dialog({
		autoOpen: false, height: 150, width: 300, modal: true, resizable: true,
		buttons: {
			Si: function() {
				$(this).dialog( "close" );
				
				$.ajax({
					type: "POST",
					url: "mdl/curriculo_mdl.php",
					data: { grabarItemEval: 1, dni: $("#dni").val(), id_item: $("#id_item_grabar").val(), id_curriculo: $("#id_curriculo_grabar").val()}
				}).done(function( msg ) {
					//alert($("#file").val()); return false;
					//alert(msg); return false;
					$(".selectSegundoNivelEval option[value=0]").attr("selected",true);
					$("body").delegate(".selectSegundoNivelEval","change");
					abrir_alert("Se registro el Item Correctamente.");
					
					cambiarPadreEval($("#id_padre_tab").val());
					//abrirEval();
					$("#tabs").tabs("select", "#tabs-"+$("#id_padre_tab").val());
					//abrir_curriculo($("#id_curriculo_grabar").val());
					
					//$(".selectSegundoNivel").trigger("change");					
				});	
					
			},
			No: function() {
				$(this).dialog( "close" );
				
			}
		},
		close: function() {
			
		}
	});
	
	abrir_confirm("Esta seguro que desea Agregar el Item?");

}


function comprueba_extension(archivo) {
   extensiones_permitidas = new Array(".gif", ".jpg", ".pdf");
   tipos_permitidas = new Array("PDF", "JPG", "GIF");
   ret = "0";

      //recupero la extensión de este nombre de archivo
      extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();
      //alert (extension);
      //compruebo si la extensión está entre las permitidas
      permitida = false;
      for (var i = 0; i < extensiones_permitidas.length; i++) {
         if (extensiones_permitidas[i] == extension) {
         permitida = true;
         break;
         }
      }
      if (!permitida) {
         ret = ("Solo se pueden subir archivos de tipo: ") + tipos_permitidas.join();
       }else{
          //submito!
         ret = "1"
       }

   //si estoy aqui es que no se ha podido submitir
   return ret;
} 


function eliminarItem(id){
	
	$( "#dialog-confirm" ).dialog({
		autoOpen: false, height: 150, width: 300, modal: true, resizable: true,
		buttons: {
			Si: function() {
				$(this).dialog( "close" );
				$.ajax({
					type: "POST",
					url: "mdl/curriculo_mdl.php",
					data: { eliminarItem: 1, dni: $("#dni").val(), id_curriculo_item: id}
				}).done(function( msg ) {
					$("#detalleCurriculo").html(msg);	
					curriculo();
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
	
	abrir_confirm("Esta seguro que desea Eliminar el Item?");
	


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
		"aaSorting": [[0,'desc']],
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

		"iDisplayLength": 100,
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

function loadDatatable3(id){
	
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
			"sSearch": "",
			
		
			"sProcessing": "Procesando Informaci&oacute;n...",
			"sInfoFiltered": "(Filtrado de un total de _MAX_ registros)",
			"sZeroRecords": "No se encontro registros",
			"sInfoEmpty": "No hay registros para mostrar"
			
		},

		"iDisplayLength": 15,
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

function utf8_decode (str_data) {
  // http://kevin.vanzonneveld.net
  // +   original by: Webtoolkit.info (http://www.webtoolkit.info/)
  // +      input by: Aman Gupta
  // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +   improved by: Norman "zEh" Fuchs
  // +   bugfixed by: hitwork
  // +   bugfixed by: Onno Marsman
  // +      input by: Brett Zamir (http://brett-zamir.me)
  // +   bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +   bugfixed by: kirilloid
  // *     example 1: utf8_decode('Kevin van Zonneveld');
  // *     returns 1: 'Kevin van Zonneveld'

  var tmp_arr = [],
    i = 0,
    ac = 0,
    c1 = 0,
    c2 = 0,
    c3 = 0,
    c4 = 0;

  str_data += '';

  while (i < str_data.length) {
    c1 = str_data.charCodeAt(i);
    if (c1 <= 191) {
      tmp_arr[ac++] = String.fromCharCode(c1);
      i++;
    } else if (c1 <= 223) {
      c2 = str_data.charCodeAt(i + 1);
      tmp_arr[ac++] = String.fromCharCode(((c1 & 31) << 6) | (c2 & 63));
      i += 2;
    } else if (c1 <= 239) {
      // http://en.wikipedia.org/wiki/UTF-8#Codepage_layout
      c2 = str_data.charCodeAt(i + 1);
      c3 = str_data.charCodeAt(i + 2);
      tmp_arr[ac++] = String.fromCharCode(((c1 & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
      i += 3;
    } else {
      c2 = str_data.charCodeAt(i + 1);
      c3 = str_data.charCodeAt(i + 2);
      c4 = str_data.charCodeAt(i + 3);
      c1 = ((c1 & 7) << 18) | ((c2 & 63) << 12) | ((c3 & 63) << 6) | (c4 & 63);
      c1 -= 0x10000;
      tmp_arr[ac++] = String.fromCharCode(0xD800 | ((c1>>10) & 0x3FF));
      tmp_arr[ac++] = String.fromCharCode(0xDC00 | (c1 & 0x3FF));
      i += 4;
    }
  }

  return tmp_arr.join('');
}

function utf8_encode (argString) {
  // http://kevin.vanzonneveld.net
  // +   original by: Webtoolkit.info (http://www.webtoolkit.info/)
  // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +   improved by: sowberry
  // +    tweaked by: Jack
  // +   bugfixed by: Onno Marsman
  // +   improved by: Yves Sucaet
  // +   bugfixed by: Onno Marsman
  // +   bugfixed by: Ulrich
  // +   bugfixed by: Rafal Kukawski
  // +   improved by: kirilloid
  // +   bugfixed by: kirilloid
  // *     example 1: utf8_encode('Kevin van Zonneveld');
  // *     returns 1: 'Kevin van Zonneveld'

  if (argString === null || typeof argString === "undefined") {
    return "";
  }

  var string = (argString + ''); // .replace(/\r\n/g, "\n").replace(/\r/g, "\n");
  var utftext = '',
    start, end, stringl = 0;

  start = end = 0;
  stringl = string.length;
  for (var n = 0; n < stringl; n++) {
    var c1 = string.charCodeAt(n);
    var enc = null;

    if (c1 < 128) {
      end++;
    } else if (c1 > 127 && c1 < 2048) {
      enc = String.fromCharCode(
         (c1 >> 6)        | 192,
        ( c1        & 63) | 128
      );
    } else if (c1 & 0xF800 != 0xD800) {
      enc = String.fromCharCode(
         (c1 >> 12)       | 224,
        ((c1 >> 6)  & 63) | 128,
        ( c1        & 63) | 128
      );
    } else { // surrogate pairs
      if (c1 & 0xFC00 != 0xD800) { throw new RangeError("Unmatched trail surrogate at " + n); }
      var c2 = string.charCodeAt(++n);
      if (c2 & 0xFC00 != 0xDC00) { throw new RangeError("Unmatched lead surrogate at " + (n-1)); }
      c1 = ((c1 & 0x3FF) << 10) + (c2 & 0x3FF) + 0x10000;
      enc = String.fromCharCode(
         (c1 >> 18)       | 240,
        ((c1 >> 12) & 63) | 128,
        ((c1 >> 6)  & 63) | 128,
        ( c1        & 63) | 128
      );
    }
    if (enc !== null) {
      if (end > start) {
        utftext += string.slice(start, end);
      }
      utftext += enc;
      start = end = n + 1;
    }
  }

  if (end > start) {
    utftext += string.slice(start, stringl);
  }

  return utftext;
}