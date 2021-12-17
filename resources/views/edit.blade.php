@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="/css/welcome.css">
<link rel="stylesheet" href="/css/menu_list.css">
<link rel="stylesheet" href="/css/form.css">

@endsection


@section('content')

<div class="container">
    <div class="form_container">
    <h1 class= form_title>შეცვალეთ პროდუქტი</h1>

    <form action="/products/modify" method="POST">
        @csrf
        <input type="hidden" value="{{$product->id}}" name="id">
        <label class="input_label" for="name">სახელი</label>
        <input type="text" name="name" id="name" value="{{$product->name}}">

        <label class="input_label" for="name">ფასი</label>
        <input type="text" name="price" id="price" value="{{$product->price}}">


        <div class="select_forms">
            <label class="input_label" for="name">მთავარი</label>
            <select name="featured" id="featured" value="{{$product->featured}}">
                <option value="1"> მთავარი </option>
                <option value="0"> ნოთ!!! მთავარი </option>
            </select>

            <label class="input_label" for="type">კატეგორია</label>
            <select name="type" id="type" value="{{$product->type}}">
                <option value="burger">სენდვიჩი</option>
                <option value="drink">გამაგრილებელი სასმელი</option>
            </select>
        </div>

        <input type="submit">
    </form>
    </div>
    
    <hr>

    <div class="container">
        <div class="menu">
                <div class="menu_items">
                @if ($product->type == "burger")
                    <img src="/img/burgar.png">
                @elseif($product->type == "drink")
                    <img src="/img/drink.png">
                @endif
                <p> {{$product->name}} </p>
                <p> {{$product->price}}</p>
            </div>
        </div>
        </div>

</div>

@endsection

