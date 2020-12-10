@extends('layouts.gral')
@extends('modalAddCategoriaEquipos')
@extends('modalUpdatecategoriaEquipos')
@section('title','CategoriaEquipo')
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
            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha Registro</th>
                        <th>Estatus</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($datosCategoria as $dato)

                        <tr>

                            <td>{{$dato->nombre}}</td>
                            <td>{{$dato->fechaRegistro}}</td>
                            
                            @if($dato->estatus == 1)   
                            <td><a href="#" onclick="activarDesactivar({{$dato->id}})"><span class="badge badge-success">Activo</span></a></td>
                            @elseif($dato->estatus == 0)
                            <td><a href="#" onclick="activarDesactivar({{$dato->id}})"><span class="badge badge-danger">Inactivo</span></a></td>
                            @endif

                            <td><a href="#" onclick="editar({{$dato->id}})" title="Editar"><span class="badge badge-warning" data-toggle="modal" data-target="#ModalActualizar"><i class="fa fa-pencil-square fa-3" aria-hidden="true"></i></span></a></td>

                        </tr>
                
                    @endforeach
                </tbody>
            </table>







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
        
    var config = {
        routes: {
        rutaActivarDesactivar: "{{route('activarDesactivar')}}",
        rutaCategoriaEquipos: "{{route('categoriaEquipo')}}",
        rutaObtenerDatos: "{{route('obtenerDatosCategoriaEquipo')}}"
        }
    };
</script>

@stop
