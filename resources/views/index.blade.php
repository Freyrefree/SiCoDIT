@extends('layouts.gral') 
@section('title','Inicio') 
@section('content')
 <h4>Bienvenido . {{ auth()->user()->name }} </h4>
 @endsection