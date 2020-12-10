@extends('layouts.gral')
@section('title','Inicio')
@section('content')
<div class="col-12">
    <div class="card">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">General</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Información Detallada</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Extra</a>
            </div>
        </nav>


        <div class="tab-content" id="nav-tabContent">

            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                <div class="card-body">
                    <h3 class="card-title text-center">Datos Generales</h3>

                    <div class="row">
                        <div class="col-3">Denominación</div>
                        <div class="col-9">CINTHYA PALMA LENOVO T440P</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">Determ.Cuentas</div>
                        <div class="col-3">32001</div>
                        <div class="col-5">Equipo de Computo Arrendado</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">Número de Serie</div>
                        <div class="col-6">PC094L9H</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">Número de Inventario</div>
                        <div class="col-6">F08971</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">Cantidad</div>
                        <div class="col-6">0.00 Piezas</div>
                    </div>

                </div> 
                
                <hr>

                <div class="card-body">
                    <h3 class="card-title text-center">Inventario</h3>

                    <div class="row">
                        <div class="col-6">Último Iventario</div>
                        <div class="col-6">08.09.2020</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">Nota de Inventario</div>
                        <div class="col-6">ASIGNADA</div>
                    </div>
                </div> 

                <hr>
                
                <div class="card-body">
                    <h3 class="card-title text-center">Información Contabilización</h3>

                    <div class="row">
                        <div class="col-6">Capitalizado el</div>
                        <div class="col-6">________</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">Alta Original el</div>
                        <div class="col-6">________</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">Año de Alta</div>
                        <div class="col-6">________</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">Descapitalización el</div>
                        <div class="col-6">________</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">Baja Planificada el</div>
                        <div class="col-6">________</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">Pedido el</div>
                        <div class="col-6">________</div>
                    </div>
                </div>


               
            </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                
                <div class="card-body">
                    <h4 class="card-title">Información Detallada Del Equipo De Computo</h4>
                    <div class="table-responsive">
                        <table class="table no-wrap">
                            <thead>
                                <tr>
                                    <td colspan="7"><b><center><i class="mdi mdi-laptop"></i> Datos Tecnicos</center></b></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>Marca</b></td>
                                    <td>Lenovo</td>
                                    <td><b>Modelo</b></td>
                                    <td>T440P</td>
                                </tr>
                                <tr>
                                    <td><b>Tipo De Disco Duro</b></td>
                                    <td>Mecanico</td>
                                    <td><b>Capacidad De Disco Duro</b></td>
                                    <td>500 GB</td>
                                </tr>
                                <tr>
                                    <td><b>Sistema Operativo</b></td>
                                    <td>Windows 10</td>
                                    <td><b>Arquitectura de S.O</b></td>
                                    <td>64 <code>bits</code></td>
                                </tr>
                                <tr>
                                    <td><b>Memoria RAM</b></td>
                                    <td>8 GB</td>
                                    <td><b>Procesador</b></td>
                                    <td>Intel Core I7</td>
                                </tr>
                                <tr>
                                    <td><b>Tipo De Equipo</b></td>
                                    <td>Laptop</td>
                                    <td><b>HostName</b></td>
                                    <td>MP-TI</td>
                                </tr>
                                <tr>
                                    <td><b>Numero De Serie</b></td>
                                    <td>PC08J32K</td>
                                    <td><b>Tipo De Máquina</b></td>
                                    <td>20AW</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> 

            </div>

            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">CSSS</div>
        </div>



    </div>
</div>
@endsection
