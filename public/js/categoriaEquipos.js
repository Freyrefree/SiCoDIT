$("#formInsert").submit(function(e) {

    $("#loadingIconModalInsert").show();
    e.preventDefault();

    var form = $(this);
    var url =  form.attr('action');
    
    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(),
           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
         }).done(function(respuesta) {
            $("#loadingIconModalInsert").hide();
             if(respuesta== 1){
                
                swal({
                    title: 'Agregado Correctamente',
                    text: 'Redireccionando...',
                    icon: 'success',
                    timer: 1500,
                    buttons: false,
                })
                .then(() => {
                    window.location = config.routes.rutaCategoriaEquipos;
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

    
});

$("#formUpdate").submit(function(e) {

    $("#loadingIconModalUpdate").show();
    e.preventDefault();

    var form = $(this);
    var url =  form.attr('action');
    
    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(),
           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
         }).done(function(respuesta) {
            $("#loadingIconModalUpdate").hide();
             if(respuesta== 1){
                
                swal({
                    title: 'Actualizado Correctamente',
                    text: 'Redireccionando...',
                    icon: 'success',
                    timer: 1500,
                    buttons: false,
                })
                .then(() => {
                    window.location = config.routes.rutaCategoriaEquipos;
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

    
});

function activarDesactivar(id){
 $("#loadingIcon").show(); 

    $.ajax({
        type: "POST",
        url: config.routes.rutaActivarDesactivar,
        data: { id: id },
        headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
      }).done(function(respuesta) {
        $("#loadingIcon").hide();
          if(respuesta == 1){
             
             window.location=config.routes.rutaCategoriaEquipos;

          }
         
       });

}

function editar(id){
    $("#loadingIconModalUpdate").show();

    $("#nombreCategoriau").val("");
    $("#id").val("");

	$.ajax({
		type:"POST",       
        data: { id: id },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
		url: config.routes.rutaObtenerDatos,
		success:function(r){
            $("#loadingIconModalUpdate").hide();
            r = JSON.parse(r);            
            $("#nombreCategoriau").val(r[0]['nombre']);
            $("#id").val(r[0]['id']);
		}
	});      
   
   }


$(document).ready(function() {
    $('#example').DataTable({
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


    // global app configuration object

