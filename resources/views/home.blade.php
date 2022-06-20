@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{asset('css/comics.css')}}">
@endsection

@section('jumbotron')
    <div class="jumbotron">
        <img src="{{URL::asset('/img/jumbotron.jpg')}}" alt="">
    </div>
@endsection

@section('content')

<div class="main_content">
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-3">TOP RATED COMICS</h1>
            <div class="serie-logo">
            </div>
        </div>
    </div>
</div>

@endsection

@section('call_to_actions')

    <div class="call_to_actions">
        <div class="actions container">
            <div class="action">
                <img src="{{URL::asset('/img/buy-comics-digital-comics.png')}}">
                <span>DIGITAL COMICS</span>
            </div>
            <div class="action">
                <img src="{{URL::asset('/img/buy-comics-merchandise.png')}}">
                <span>DC MERCHANDISE</span>
            </div>
            <div class="action">
                <img src="{{URL::asset('/img/buy-comics-shop-locator.png')}}">
                <span>COMIC SHOP LOCATOR</span>
            </div>
            <div class="action">
                <img src="{{URL::asset('/img/buy-comics-subscriptions.png')}}">
                <span>SUBSCRIPTIONS</span>
            </div>
            <div class="action">
                <img src="{{URL::asset('/img/buy-dc-power-visa.svg')}}">
                <span>DC POWER VISA</span>
            </div>
        </div>
    </div>
    
@endsection