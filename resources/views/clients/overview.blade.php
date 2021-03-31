
{{-- Define the parent --}}
@extends('layout')

{{-- Define the content that will be placed in the parent --}}
@section('content')
    <form action="{{ route('clients.index') }}" method="POST">
        @method("POST")
        @csrf
        <input type="text" value="{{ $search }}" name="client" placeholder="Geef een klant in">
        <button type="submit">Filter</button>
    </form>

    <ul>
        @foreach($klanten as $client)
            <li> {{ $client->name }}  </li>
        @endforeach
    </ul>
@endsection

@section('color', '#CCC')

@section('hero')
    <h1>Alle klanten</h1>
@endsection
