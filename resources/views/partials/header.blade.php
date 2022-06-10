<header>
    <div class="top">
        <div class="container text-uppercase">
            <div class="row justify-content-end">
                <div class="col-2">
                    <small>dc power&trade; visa&reg;</small>
                </div>
                <div class="col-2">
                    <small>additional dc sites <i class="fas fa-caret-down"></i></small>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-2 flex align-items-center">
                    <a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">
                        <img width="80" src="{{asset('../img/dc-logo.png')}}" alt="logo DC" />
                    </a>
                </div>
                <div class="col-8">
                    <ul>
                        <li><a class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}}" href="{{route('characters')}}">characters</a></li>
                        <li><a class="{{Route::currentRouteName() === 'comics.index' || Route::currentRouteName() === 'comics.show' ? 'active' : ''}}" href="{{route('comics.index')}}">comics</a></li>
                        <li><a class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">movies</a></li>
                        <li><a class="{{Route::currentRouteName() === 'tv' ? 'active' : ''}}" href="{{route('tv')}}">tv</a></li>
                        <li><a class="{{Route::currentRouteName() === 'games' ? 'active' : ''}}" href="{{route('games')}}">games</a></li>
                        <li><a class="{{Route::currentRouteName() === 'collectibles' ? 'active' : ''}}" href="{{route('collectibles')}}">collectibles</a></li>
                        <li><a class="{{Route::currentRouteName() === 'videos' ? 'active' : ''}}" href="{{route('videos')}}">videos</a></li>
                        <li><a class="{{Route::currentRouteName() === 'fans' ? 'active' : ''}}" href="{{route('fans')}}">fans</a></li>
                        <li><a class="{{Route::currentRouteName() === 'news' ? 'active' : ''}}" href="{{route('news')}}">news</a></li>
                        <li><a class="{{Route::currentRouteName() === 'shop' ? 'active' : ''}}" href="{{route('shop')}}">shop <i class="fa-solid fa-caret-down"></i></a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <div class="search d-flex align-items-center justify-content-end ms-auto">
                        <input type="text" name="search" id="search" placeholder="Search">
                        <i class="fas fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>
