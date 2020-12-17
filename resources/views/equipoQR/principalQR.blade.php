@extends('layouts.gral')
@section('title','QR')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-6"><h4 class="card-title">QR</h4></div>
                <div class="col-6 text-right">
                    <i id="loadingIcon" class="fa fa-circle-o-notch fa-spin fa-fw" style="display:none;"></i>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAgregar">Agregar <i class="fa fa-plus-square" aria-hidden="true"></i></button>
                </div>
            </div>
            <hr><br>
            <div class="row">
                <div class="col-12">
                    <form id="formGuardar" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-6">
                                <label for="">Nombre Equipo</label>
                                <input class="form-control" type="text" name="nombreEquipo" id="nombreEquipo">
                            </div>
                            <div class="col-6">
                                <label for="">Serie Equipo</label>
                                <input class="form-control" type="text" name="serieEquipo" id="serieEquipo">
                            </div>            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 text-right">                        
                                <button type="submit" class="btn btn-primary">Guardar</button>                    
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
            <hr><br>

            <div class="row">

                <div class="col-1">
                </div>

                <div class="col-5 text-right">
                    <img id="rutaIMG" src="" alt="">
                </div>
                <div class="col-5 text-left">
                    <form id="formImprimir" action="" style="display:none">

                        <input type="hidden" name="imagenValue" id="imagenValue">
                        <button type="submit" class="btn btn-success btn-lg">Imprimir</button>

                    </form>
                </div>
                <div class="col-1">
                </div>

            </div>         
            
            

        </div>
    </div>
</div>
@endsection

@section('script')

<script src="{{ URL::asset('public/js/QR/qr.js') }}"></script>
<script src="{{url('public/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script src="{{url('public/bower_components/sweetalert/sweetalert2@8.js')}}"></script>
<script src="{{url('public/bower_components/sweetalert/sweetalert.min.js')}}"></script>


<script type="text/javascript">
        
    var config = {
        routes: {
        rutaGuardar: "{{route('guardarQR')}}",
        rutaQR: "{{route('equipoQR')}}"
        //,
        // rutaObtenerDatos: "{{route('obtenerDatosCategoriaEquipo')}}"
        }
    };

</script>

@stop
