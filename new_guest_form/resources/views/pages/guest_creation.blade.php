@extends('layouts.main-layout')

@section('title')
    Aggiungi ospite
@endsection

@section('header-title')
    NUOVO OSPITE
@endsection

@section('content')
    <div id="guest-creation">
        <form method = "POST" action="{{route('store')}}">
            @csrf
            @method('POST')
            <div class="data-input">
                <label for="name">Name</label>
                <input id="guest-name" type="text" name="name" placeholder="Insert Name">
            </div>
            <div class="data-input">
                <label for="lastname">Lastname</label>
                <input id="guest-lastname" type="text" name="lastname" placeholder="Insert Lastname">
            </div>
            <div class="data-input">
                <label for="date_of_birth">Date of Birth</label>
                <input id="guest-date_of_birth" type="date" name="date_of_birth" placeholder="Insert Birthday">
            </div>
            <div class="data-input">
                <label for="document_type">Document Type</label>
                <input id="guest-document_type" type="text" name="document_type" placeholder="Insert Document type">
            </div>
            <div class="data-input">
                <label for="document_number">Document Number</label>
                <input id="guest-document_number" type="text" name="document_number" placeholder="Insert Document Number">
            </div>
            <div class="submit-button">
                <button type="submit">CREATE</button>
            </div>
        </form>
    </div>
@endsection