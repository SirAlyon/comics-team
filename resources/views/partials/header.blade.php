<div class="top_head">
    <div class="container">
        <a href="">DC POWER VISA</a>
        <a href="">ADDITIONAL DC SITE</a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <nav>
                <a href="{{ route('home') }}">
                    <img src="{{URL::asset('/img/dc-logo.png')}}" alt="">
                </a>
                <a href="" class="{{Route::currentRouteName() === 'products.characters' ? 'active' : '' }}">CHARACTERS</a>
                <a href="{{ route('products.index') }}" class="{{ Route::currentRouteName() === 'products.index' || Route::currentRouteName() === 'products.show' ? 'active' : '' }}">COMICS</a>
                <a href="" class="{{Route::currentRouteName() === 'products.movies' ? 'active' : '' }}">MOVIES</a>
                <a href="" class="{{Route::currentRouteName() === 'products.tv' ? 'active' : '' }}">TV</a>
                <a href="" class="{{Route::currentRouteName() === 'products.games' ? 'active' : '' }}">GAMES</a>
                <a href="" class="{{Route::currentRouteName() === 'products.collectables' ? 'active' : '' }}">COLLECTABLES</a>
                <a href="" class="{{Route::currentRouteName() === 'products.videos' ? 'active' : '' }}">VIDEOS</a>
                <a href="" class="{{Route::currentRouteName() === 'products.fans' ? 'active' : '' }}">FANS</a>
                <a href="" class="{{Route::currentRouteName() === 'products.news' ? 'active' : '' }}">NEWS</a>
                <a href="" class="{{Route::currentRouteName() === 'products.shop' ? 'active' : '' }}">SHOP</a>
            </nav>
        </div>
    </div>
</div>