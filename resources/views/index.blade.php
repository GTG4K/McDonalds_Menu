@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="/css/welcome.css">
<link rel="stylesheet" href="/css/menu_list.css">
@endsection


@section('content')


<div class="container">
<div class="menu">
    @foreach ($products as $product)
        <div class="menu_items">
        @if ($product->type == "burger")
            <img src="/img/burgar.png">
        @elseif($product->type == "drink")
            <img src="/img/drink.png">
        @endif
        <p> {{$product->name}} </p>
        <p> {{$product->price}}</p>
    </div>
    @endforeach
</div>
</div>

@endsection

