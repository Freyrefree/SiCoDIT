@extends('layouts.gral')
@section('title','Inicio')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Información Detallada Del Equipo De Computo</h4>
            <div class="table-responsive">
                <table class="table no-wrap">
                    <thead>
                        <tr>
                            <td colspan="7"><b><center><i class="mdi mdi-currency-usd"></i> Arrendamiento y Garantia <i class="mdi mdi-wrench"></i></center></b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>Financiera</b></td>
                            <td>HP OPERATION MÉXICO</td>
                            <td><b>Periodo De Arrendamiento</b></td>
                            <td> 6-Enero-2021 / 6-Enero-2024</td>
                        </tr>
                        <tr>
                            <td><b>Estado De Garantia</b></td>
                            <td>En Garantia</td>
                            <td><b>Periodo De Garantia</b></td>
                            <td> 6-Enero-2021 / 6-Enero-2024</td>
                        </tr>
                        <tr>
                            <td><b>Monto Del Equipo</b></td>
                            <td>$ 18,070.93</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
