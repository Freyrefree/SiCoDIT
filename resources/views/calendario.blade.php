@extends('layouts.gral')
@section('title','Inicio')
@section('head')
	<!-- Calendar CSS -->
    <link href="{{url ('public/sistema/plugins/calendar/dist/fullcalendar.css')}}" rel="stylesheet" />
@endsection
@section('content')
                <div class="row">
                    <div class="col-md-12 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Arrastra y suelta tu tipo de mantenimiento</h4>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div id="calendar-events" class="mt-3">
                                            <div class="calendar-events" data-class="bg-info"><i class="fa fa-circle mb-3 text-info"></i>Mantenimiento Preventivo</div>
                                            <div class="calendar-events" data-class="bg-success"><i class="fa fa-circle mb-3 text-success"></i>Mantenimiento Correctivo</div>
                                            <div class="calendar-events" data-class="bg-danger"><i class="fa fa-circle mb-3 text-danger"></i> Limpieza De Perifericos</div>
                                        </div>
                                        <!-- checkbox -->
                                        <div class="checkbox mb-3">
                                            <input id="drop-remove" type="checkbox">
                                            <label for="drop-remove">
                                                Eliminar Despues De Soltar
                                            </label>
                                        </div>
                                        <a href="#" data-toggle="modal" data-target="#add-new-event" class="btn btn-danger btn-block waves-effect waves-light">
                                            <i class="ti-plus"></i> Agregar Nuevo Mantenimiento
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Add Category -->
                <div class="modal fade none-border" id="add-new-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Agregar </strong>nuevo mantenimiento.</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form role="form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Nombre Del Mantenimiento</label>
                                            <input class="form-control form-white" placeholder="Mantenimiento Preventivo" type="text" name="category-name" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Elige El Tipo De Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                <option value="success">Verde</option>
                                                <option value="danger">Rojo</option>
                                                <option value="info">Azul Claro</option>
                                                <option value="primary">Morado</option>
                                                <option value="warning">Amarillo</option>
                                                <option value="inverse">Negro</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Guardar</button>
                                <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
@section('script')
<script src="{{url ('public/sistema/plugins/calendar/jquery-ui.min.js')}}"></script>
<script src="{{url ('public/sistema/plugins/moment/moment.js')}}"></script>
<script src="{{url ('public/sistema/plugins/calendar/dist/fullcalendar.min.js')}}"></script>
<script src="{{url ('public/sistema/plugins/calendar/dist/cal-init.js')}}"></script>
<script src="{{url ('public/sistema/plugins/calendar/dist/es.js')}}"></script>
@endsection
