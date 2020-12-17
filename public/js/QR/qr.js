function escanear(){   
   var Musique = new Audio();
   $("#loadingIcon").show();
   
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
      console.log(content);
         if(content!=''){

            $.ajax({
               type: "POST",
               url: config.routes.rutaScan,
               data: {datos : content},
               headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
             }).done(function(respuesta) {
    
                $("#loadingIcon").hide();

                if(respuesta == 1){
                  scanner.stop()
                  
                  swal("Existe", "OK !", "success");
                  Musique.src = config.routes.rutaAudio;
                  Musique.play();

                }else{
                  scanner.stop()
                  swal("No Existe", "OK !", "error");
                  Musique.src = config.routes.rutaAudioError;
                  Musique.play();
                }
    
                
              });
         
         }
      
      });
      Instascan.Camera.getCameras().then(function (cameras) {
      if (cameras.length > 0) {
         scanner.start(cameras[0]);
      } else {
         console.error('No cameras found.');
      }
      }).catch(function (e) {
      console.error(e);
      });
}


$("#formGuardar").submit(function(e) {

    $("#loadingIcon").show();
    $("#formImprimir").hide();
    e.preventDefault();

    var form = $(this);
    var url =  config.routes.rutaGuardar;
    
    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(),
           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
         }).done(function(respuesta) {

            $("#loadingIcon").hide();

            // console.log(respuesta);
            
            $("#imagenValue").val(respuesta);
            $("#rutaIMG").attr("src", 'public/qrcodes/' + respuesta + '.png ');
            $("#formImprimir").show();
            
          });

    
});




