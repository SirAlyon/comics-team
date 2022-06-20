@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{asset('css/comics.css')}}">
<link rel="stylesheet" href="{{asset('css/single_comic.css')}}">
@endsection

@section('jumbotron')
    <div class="jumbotron">
        <img src="{{URL::asset('/img/jumbotron.jpg')}}" alt="">
    </div>
@endsection

@section('content')
<div class="main_content">
    <div class="content-head"></div>
    <div class="container">
        <div class="row"> 
            <div class="col-8">
                <div class="single-comic">
                    <div class="thumb">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <div class="serie-title">{{$comic['title']}}</div>
                    <div class="comic_price">
                        <span>
                            U.S. Price: 
                            <span class="text-white">{{$comic['price']}}</span>
                        </span>
                        <div class="in_stock h-100 d-flex align-items-center">
                            AVAIABLE
                            <span class="check d-flex align-items-center">
                                Check Avaibility
                            </span>
                        </div>
                    </div>
                    <div class="mt-3 text-start">{{$comic['description']}}</div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-3">
                <div class="adv">
                    <div class="text-end">ADVERTISEMENT</div>
                    <img src="https://picsum.photos/200/300" alt="">  
                </div>
            </div>
        </div>
    </div>
</div>
<div class="full-infos">
    <div class="container">
        <div class="row gx-5">
            <div class="col-6">
                <h4>Talent</h4>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3">Art by:</div>
                        <div class="col-9">

                            @forelse($comic['artists'] as $artist)
                                @if(!$loop->last)
                                    <a href="">{{$artist}}</a>,
                                @else
                                    <a href="">{{$artist}}</a>
                                @endif
                            
                            @empty
                            <span>No artists to show...</span>
                            @endforelse

                        </div>
                        <div class="col-3">Written by:</div>
                        <div class="col-9">

                            @forelse($comic['writers'] as $writer)
                                @if(!$loop->last)
                                    <a href="">{{$writer}}</a>,
                                @else
                                    <a href="">{{$writer}}</a>
                                @endif
                            @empty
                            <span>No artists to show...</span>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h4>Specs</h4>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3">
                            Series:
                        </div>
                        <div class="col-3">
                            <a href="">{{$comic['series']}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3">U.S. Price:</div>
                        <div class="col-3">{{$comic['price']}}</div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3">On Sale Date:</div>
                        <div class="col-3">{{$comic['sale_date']}}</div>
                    </div>
                </div>
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