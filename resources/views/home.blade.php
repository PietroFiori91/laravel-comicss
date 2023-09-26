@extends('layouts.public')

@section('title', 'Lista Fumetti')

@section('content')
    <h1>Lista dei Fumetti</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <h2>{{ $comic['title'] }}</h2>
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
                <p>Autore: {{ $comic['authors'][0] }}</p>
                <p>Prezzo: {{ $comic['price'] }}</p>
                <p>Data di vendita: {{ $comic['sale_date'] }}</p>
                <p>Descrizione: {{ $comic['description'] }}</p>
            </li>
        @endforeach
    </ul>
@endsection
