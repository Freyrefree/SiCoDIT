@extends('layouts.gral')
<!-- @extends('modalAddCategoriaEquipos')
@extends('modalUpdatecategoriaEquipos') -->
@section('title','')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-6"><h4 class="card-title">Categoría de Equipos</h4></div>
                <div class="col-6 text-right">
                    <i id="loadingIcon" class="fa fa-circle-o-notch fa-spin fa-fw" style="display:none;"></i>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAgregar">Agregar <i class="fa fa-plus-square" aria-hidden="true"></i></button>
                </div>
            </div>
            
            
            <div class="table-responsive">





            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script src="{{ URL::asset('public/js/categoriaEquipos.js') }}"></script>
<script src="{{url('public/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script src="{{url('public/bower_components/sweetalert/sweetalert2@8.js')}}"></script>
<script src="{{url('public/bower_components/sweetalert/sweetalert.min.js')}}"></script>


<script type="text/javascript">
        
    // var config = {
    //     routes: {
    //     rutaActivarDesactivar: "{{route('activarDesactivar')}}",
    //     rutaCategoriaEquipos: "{{route('categoriaEquipo')}}",
    //     rutaObtenerDatos: "{{route('obtenerDatosCategoriaEquipo')}}"
    //     }
    // };

</script>

@stop
