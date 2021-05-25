@extends('layouts.main-layout')

@section('title')
    ID Ospite: {{$ospite -> id}}
@endsection

@section('header-title')
    {{$ospite -> name}} {{$ospite -> lastname}}
@endsection

@section('content')
    <div id="guest">
        <div><strong>Guest ID: </strong>{{$ospite -> id}}</div>
        <div><strong>Name: </strong>{{$ospite -> name}}</div>
        <div><strong>Lastname: </strong>{{$ospite -> lastname}}</div>
        <div><strong>Date of Birth: </strong>{{$ospite -> date_of_birth}}</div>
        <div><strong>ID type: </strong>{{$ospite -> document_type}}</div>
        <div><strong>ID Number: </strong>{{$ospite -> document_number}}</div>
    </div>
@endsection