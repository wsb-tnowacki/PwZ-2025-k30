@extends('layout.template')
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
        @isset($zadania)
        <ol>
            @forelse ($tasks as $task)
                <li>{{$task}}</li>
            @empty
                <li>Brak elementów</li>
            @endforelse
        </ol>            
        @endisset
    </div>
@endsection

