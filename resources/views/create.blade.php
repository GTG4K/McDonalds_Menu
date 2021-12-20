@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="/css/welcome.css">
<link rel="stylesheet" href="/css/menu_list.css">
<link rel="stylesheet" href="/css/form.css">

@endsection


@section('content')

<div class="container">
    <div class="form_container">
    <h1 class= form_title>დაამატეთ ახალი პროდუქტი</h1>

    <form action="/products" method="POST">
        @csrf
        <label class="input_label" for="name">სახელი</label>
        <input type="text" name="name" id="name">

        <label class="input_label" for="name">ფასი</label>
        <input type="text" name="price" id="price">


        <div class="select_forms">
            <label class="input_label" for="name">მთავარი</label>
            <select name="featured" id="featured">
                <option value="1"> მთავარი </option>
                <option value="0"> ნოთ!!! მთავარი </option>
            </select>

            <label class="input_label" for="type">კატეგორია</label>
            <select name="type" id="type">
                <option value="burger">სენდვიჩი</option>
                <option value="drink">გამაგრილებელი სასმელი</option>
            </select>
        </div>

        <input class="form_inp_sub" type="submit" value="Add Product">
    </form>
    </div>
    
    <hr>

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
                <div class="buttons">
                <a href={{"edit/".$product->id}}><button> დააედიტე </button></a>
                <a href={{"delete/".$product->id}}><button> წაშალე </button></a>
                </div>
            </div>
            @endforeach
        </div>
        </div>


</div>

@endsection

