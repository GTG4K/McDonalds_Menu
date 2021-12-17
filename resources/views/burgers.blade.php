@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="/css/welcome.css">
<link rel="stylesheet" href="/css/menu_list.css">
@endsection


@section('content')


<div class="container">
<div class="menu">
    @foreach ($burgers as $burger)
        <div class="menu_items">
            <img src="/img/burgar.png">
        <p> {{$burger->name}} </p>
        <p> {{$burger->price}}</p>
    </div>
    @endforeach
</div>
</div>

@endsection

