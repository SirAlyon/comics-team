@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{asset('css/comics.css')}}">
<link rel="stylesheet" href="{{asset('css/single-comic.css')}}">

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
            @forelse($characters as $character)
                
                    <div class="col-2">
                        <div class="serie-logo">
                            <a href="{{route ('guest.characters.show', $character->id)}}">
                                <img src="{{$character['thumb']}}">
                            </a>
                            <div class="price">{{$character['price']}}</div>
                        </div>
                    <div class="serie-title mt-2">{{$character['title']}}</div>
                </div>

                
                @empty
                <h2>Nothing to show here...</h2>

            @endforelse

        </div>
        <div class="btn btn_load">LOAD MORE</div>

        <div class="btn btn_current">CURRENT SERIES</div>
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