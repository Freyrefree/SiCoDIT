@extends('layouts.gral')
@section('title','CapturaQR')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-6"><h4 class="card-title">QR</h4></div>
                <div class="col-6">
                    <button onclick="escanear()" type="button" class="btn btn-primary" >Escanear Código</button>
                </div>
            </div>
            <hr><br>
            <div class="row">
                <div class="col-12">
                    <video id="preview"></video>
                </div>
            </div>
            <hr><br>

            <div class="row">



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

<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<script type="text/javascript" src="{{url('public/bower_components/scanQR/instascan.min.js')}}"></script>

<script src="{{ URL::asset('public/js/QR/qr.js') }}"></script>

<script type="text/javascript">
        
        var config = {
            routes: {
            rutaScan: "{{route('escanear')}}",
            rutaAudio: "{{url('public/audios/AmongUsSound.wav')}}",
            rutaAudioError: "{{url('public/audios/AmongUsFail.wav')}}"
            }
        };
        
</script>

<!-- @stop -->
