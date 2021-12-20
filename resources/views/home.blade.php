@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="/css/welcome.css">
<link rel="stylesheet" href="/css/menu_list.css">
<link rel="stylesheet" href="/css/home_form.css">
@endsection

@section('content')

<div class="welcome_logo">
    <img src="/img/mcdoooonalds.png">
    <p> რესტორანი მთელი ოჯახისთვის! </p>
</div>

<div class="home_menu">
    <div class="sidebar">

        <a href="products">
            <button class="all_prods" action="index.blade.php">ყველა</button>
        </a>

        <a href="products/burgers">
            <button class="burgers">
                <img src="/img/burgar.png">
                <p>სენდვიჩები</p>
            </button>
        </a>
        
        <a href="products/drinks">
            <button class="drinks">
                <img src="/img/drink.png">
                <p>სასმელები</p>
            </button>
        </a>

        <hr>

        <div class="form_container">
            <form action="products" method="GET">
                <label class="input_label" for="">მოძებნე პროდუქტი</label>
                <input type="text" name="search_result" placeholder="ძიება">
            </form>
        </div>

    </div>

    <div class="menu">
        @foreach ($products as $product)
            <div class="menu_items">
            @if ($product->type == "burger")
                <img src="/img/burgar.png">
            @elseif($product->type == "drink")
                <img src="/img/drink.png">
            @endif
            <p> {{$product->name}} </p>
            <p> ${{$product->price}}</p>
        </div>
        @endforeach
    </div>
</div>

@endsection
