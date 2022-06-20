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
                <a href="{{ route('guest.characters.index') }}" class="{{Route::currentRouteName() === 'guest.characters.index' ? 'active' : '' }}">CHARACTERS</a>
                <a href="{{ route('comics.index') }}" class="{{ Route::currentRouteName() === 'comics.index' || Route::currentRouteName() === 'comics.show' ? 'active' : '' }}">COMICS</a>
                <a href="{{ route('admin.characters.index') }}" class="{{Route::currentRouteName() === 'comics.movies' ? 'active' : '' }}">MOVIES</a>
                <a href="" class="{{Route::currentRouteName() === 'comics.tv' ? 'active' : '' }}">TV</a>
                <a href="" class="{{Route::currentRouteName() === 'comics.games' ? 'active' : '' }}">GAMES</a>
                <a href="" class="{{Route::currentRouteName() === 'comics.collectables' ? 'active' : '' }}">COLLECTABLES</a>
                <a href="" class="{{Route::currentRouteName() === 'comics.videos' ? 'active' : '' }}">VIDEOS</a>
                <a href="" class="{{Route::currentRouteName() === 'comics.fans' ? 'active' : '' }}">FANS</a>
                <a href="" class="{{Route::currentRouteName() === 'comics.news' ? 'active' : '' }}">NEWS</a>
                <a href="" class="{{Route::currentRouteName() === 'comics.shop' ? 'active' : '' }}">SHOP</a>
            </nav>
        </div>
    </div>
</div>