@extends('layout.layout')
@section('tytul','O nas')
@section('podtytul', 'Strona o nas')
@section('tresc')
    <div>
        Treść dla strony o nas <br>
        @isset($zadania)
        <ol>
            @foreach ($zadania as $zadanie)
                <li>{{ $zadanie }}</li>
            @endforeach
        </ol>            
        @endisset
    </div>
@endsection

