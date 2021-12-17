@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="/css/welcome.css">
<link rel="stylesheet" href="/css/menu_list.css">
@endsection


@section('content')


<div class="container">
<div class="menu">
    @foreach ($drinks as $drink)
    <div class="menu_items">
        <img src="/img/drink.png">
        <p> {{$drink->name}} </p>
        <p> {{$drink->price}}</p>
    </div>
    @endforeach
</div>
</div>

@endsection

