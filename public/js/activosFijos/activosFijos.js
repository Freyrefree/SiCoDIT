function sincronizar(){

    
    $("#loadingIcon").show();
   
    var url =  config.routes.rutaSincronizar;
    
    $.ajax({
           type: "POST",
           url: url,
           data: {opcion:1},
           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
         }).done(function(respuesta) {

            $("#loadingIcon").hide();

            if(respuesta== 1){
                
                swal({
                    title: 'Actualización Correcta',
                    text: 'Redireccionando...',
                    icon: 'success',
                    timer: 1500,
                    buttons: false,
                })
                .then(() => {
                    window.location = config.routes.rutaActivosFijos;
                })
             }else if(respuesta == 20){
                
                swal({
                    title: 'No existen datos para actualizar',
                    text: '',
                    icon: 'warning',
                    timer: 1500,
                    buttons: false,
                })             
            
            }else{
                swal({
                    title: 'Ocurrio Un Problema',
                    text: 'Valide con el area correspondiente',
                    icon: 'error',
                    timer: 5000,
                    buttons: false,
                })
             }
            
          });
}


function detalleActivoFijo(activoFijo){

    var fechaUltimoInventario = "";
    
    $("#loadingIcon").show();
   
    var url =  config.routes.rutaDetalleActivoFijo;
    
    $.ajax({
        type: "POST",
        url: url,
        data: {activoFijo:activoFijo},
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        }).done(function(respuesta) {

            
            r = JSON.parse(respuesta);

            console.log(r);

            fechaUltimoInventario = r[0]['ultimoInventario'];
            fechaUltimoInventario = fechaUltimoInventario.substring(0,4) + "/" + fechaUltimoInventario.substring(4,6)+ "/" + fechaUltimoInventario.substring(6,8);

            $("#activoFijoTitle").html(r[0]['activoFijo']);

            $("#activoFijo").html(r[0]['activoFijo']);            
            $("#subActivoFijo").html(r[0]['subActivoFijo']);
            $("#clase").html(r[0]['clase']);
            $("#sociedad").html(r[0]['sociedad']);

            $("#denominacion").html(r[0]['denominacionA'] + " " + r[0]['denominacionB']);
            $("#determinacionCuentas").html(r[0]['determinacionCuentas']);
            $("#numeroSerie").html(r[0]['numeroSerie']);
            $("#numeroInventario").html(r[0]['numeroInventario']);
            $("#cantidad").html(r[0]['cantidad']);

            $("#ultimoInventario").html(fechaUltimoInventario);
            $("#notaInventario").html(r[0]['notaInventario']);

            $("#fechaCapitalizacion").html(r[0]['fechaCapitalizacion']);
            $("#fechaContabilizacion").html(r[0]['fechaContabilizacion']);
            $("#primeraContabilizacion").html(r[0]['primeraContabilizacion']);
            $("#fechaDescapitalizacion").html(r[0]['fechaDescapitalizacion']);
            $("#fechaBajaPlanificada").html(r[0]['fechaBajaPlanificada']);
            $("#fechaPedido").html(r[0]['fechaPedido']);


            $("#centroCoste").html(r[1]['centroCoste']);
            $("#ordCostes").html(r[1]['ordCostes']);
            $("#centro").html(r[1]['centro']);
            $("#emplazamiento").html(r[1]['emplazamiento']);
            $("#local").html(r[1]['local']);
            $("#areaFuncional").html(r[1]['areaFuncional']); 
            
            
            $("#concepto1").html(r[0]['concepto1']); 
            $("#concepto2").html(r[0]['concepto2']); 
            $("#concepto3").html(r[0]['concepto3']); 
            $("#concepto4").html(r[0]['concepto4']); 
            $("#concepto5").html(r[0]['concepto5']); 


            $("#acreedor").html(r[0]['acreedor']); 
            $("#nombreAcreedor").html(r[0]['nombreAcreedor']); 
            $("#fabricante").html(r[0]['fabricante']); 
            $("#sociedadGL").html(r[0]['sociedadGL']); 
            $("#paisOrigen").html(r[0]['paisOrigen']);
            $("#denominacionDeTipo").html(r[0]['denominacionDeTipo']); 
            $("#anioAdquisicion").html(r[0]['anioAdquisicion']); 
            $("#valorAdquisicion").html(r[0]['valorAdquisicion']);   

            $("#clavepatrimonio").html(r[0]['clavepatrimonio']); 
            $("#indicadorPropiedad").html(r[0]['indicadorPropiedad']); 

            $("#divTablaValoracion").html(r[2]);
            tablaValoracion();
            
            $("#loadingIcon").hide();
            
        });
}

function opcionesQR(activoFijo){

    $("#loadingIcon").show();
    
    

    $("#activoFijoTitleQR").html(activoFijo);
    $("#imagenQR").removeAttr("src");

    var url =  config.routes.rutaOpcionesQR;
    
    $.ajax({
           type: "POST",
           url: url,
           data: {activoFijo : activoFijo},
           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
         }).done(function(respuesta) {


            $("#imagenQR").attr("src",respuesta);                

            $("#loadingIcon").hide();

          });

  
}


$(document).ready(function() {
    $('#exampleActivosFijos').DataTable({
		"ordering": true,
		"language": {
			"paginate": {
				"previous": "<i class='mdi mdi-chevron-left'>",
				"next": "<i class='mdi mdi-chevron-right'>"
			}
		},
		language: {
		"decimal": "",
		"emptyTable": "No hay información",
		"info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
		"infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
		"infoFiltered": "(Filtrado de _MAX_ total entradas)",
		"infoPostFix": "",
		"thousands": ",",
		"lengthMenu": "Mostrar _MENU_ Entradas",
		"loadingRecords": "Cargando...",
		"processing": "Procesando...",
		"search": "Buscar:",
		"zeroRecords": "Sin resultados encontrados",
		"paginate": {
			"first": "Primero",
			"last": "Ultimo",
			"next": "Siguiente",
			"previous": "Anterior"
		}
		},
	
	});
});


function tablaValoracion(){

    $('#tablaValoracion').DataTable({
		"ordering": true,
		"language": {
			"paginate": {
				"previous": "<i class='mdi mdi-chevron-left'>",
				"next": "<i class='mdi mdi-chevron-right'>"
			}
		},
		language: {
		"decimal": "",
		"emptyTable": "No hay información",
		"info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
		"infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
		"infoFiltered": "(Filtrado de _MAX_ total entradas)",
		"infoPostFix": "",
		"thousands": ",",
		"lengthMenu": "Mostrar _MENU_ Entradas",
		"loadingRecords": "Cargando...",
		"processing": "Procesando...",
		"search": "Buscar:",
		"zeroRecords": "Sin resultados encontrados",
		"paginate": {
			"first": "Primero",
			"last": "Ultimo",
			"next": "Siguiente",
			"previous": "Anterior"
		}
		},
	
	});

}