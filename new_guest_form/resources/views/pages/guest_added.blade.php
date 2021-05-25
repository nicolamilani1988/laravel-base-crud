@extends('layouts.main-layout')

@section('title')
    ID Ospite: {{$ospite -> id}}
@endsection

@section('header-title')
    {{$ospite -> name}} {{$ospite -> lastname}}
@endsection

@section('content')
    <h2>Ospite aggiunto correttamente</h2>
@endsection