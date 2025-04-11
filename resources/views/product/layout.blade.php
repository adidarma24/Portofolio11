@extends('layout')
@section('content')
    <h1>Produkt List</h1>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product['name']}}</li>
            @endforeach
    </ul>    
@endsection