@extends('template.layouts')
@section('content')
        <h1>Product List</h1>
        <ul>
            @foreach($products as $product)
                <li>{{ $product['name'] }}</li>
            @endforeach
        </ul>
@endsection