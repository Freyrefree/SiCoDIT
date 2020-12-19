@extends('layouts.gral')
@extends('activosFijos.modalDetalle')
@extends('activosFijos.modalOpcionesQR')
@section('title','Activos Fijos')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-6"><h4 class="card-title">Activos Fijos</h4></div>
                <div class="col-6 text-right">
                    <i id="loadingIcon" class="fa fa-circle-o-notch fa-spin fa-fw" style="display:none;"></i>
                    <button type="button" id="sincronizar" name="sincronizar" class="btn btn-primary" onclick="sincronizar();" >Sincronizar <i class="fa fa-refresh" aria-hidden="true"></i></button>
                </div>
            </div>
            
            
            <div class="table-responsive">
            <table id="exampleActivosFijos" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Activo Fijo</th>
                        <!-- <th>Estatus</th> -->
                        <th>Fecha Registro <br> SiCoDIT</th>                        
                        <!-- <th>QR</th>
                        <th>RutaQR</th> -->
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($datosActivosFijos as $dato)

                        <tr>

                            <td>{{$dato->activoFijo}}</td>                       
                            
                            <!-- @if($dato->estatus == 1)   
                            <td><a href="#" onclick="activarDesactivar({{$dato->id}})"><span class="badge badge-success">Activo</span></a></td>
                            @elseif($dato->estatus == 0)
                            <td><a href="#" onclick="activarDesactivar({{$dato->id}})"><span class="badge badge-danger">Inactivo</span></a></td>
                            @endif -->

                            <td>{{$dato->fechaRegistro}}</td>
                            <!-- <td>{{$dato->qr}}</td>
                            <td>{{$dato->rutaqr}}</td> -->


                            <td>
                                <a href="#" onclick="detalleActivoFijo('{{$dato->activoFijo}}')" title="Detalles"><span class="badge badge-info" data-toggle="modal" data-target="#ModalDetalle"><i class="fa fa-info-circle" aria-hidden="true"></i></span></a>
                                <a href="#" onclick="opcionesQR('{{$dato->activoFijo}}')" title="Opciones QR"><span class="badge badge-primary" data-toggle="modal" data-target="#ModalQR"><i class="fa fa-qrcode" aria-hidden="true"></i></span></a>

                            </td>

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


<script src="{{url('public/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script src="{{url('public/bower_components/sweetalert/sweetalert2@8.js')}}"></script>
<script src="{{url('public/bower_components/sweetalert/sweetalert.min.js')}}"></script>


<script src="{{ URL::asset('public/js/activosFijos/activosFijos.js') }}"></script>


<script type="text/javascript">
        
    var config = {
        routes: {
        rutaSincronizar: "{{route('sincronizar')}}",
        rutaActivosFijos: "{{route('activosFijos')}}",
        rutaDetalleActivoFijo: "{{route('detalleActivoFijo')}}",
        rutaOpcionesQR: "{{route('opcionesQR')}}",
        rutaQR:"",
        }
    };
</script>

@stop
