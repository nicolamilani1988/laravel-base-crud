@extends('layouts.main-layout')

@section('title')
    HomePage
@endsection

@section('header-title')
    GUESTLIST
@endsection

@section('content')
    <div id="homepage">
        <ul>
            @foreach ($ospiti as $ospite)
                <li>
                    <a href="">
                        [{{$ospite->id}}] - {{$ospite -> name}} {{$ospite->lastname}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection