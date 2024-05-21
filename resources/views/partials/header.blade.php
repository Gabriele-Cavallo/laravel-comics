<header>
   <section>
        <div class="container">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
            </div>
            <div class="nav-wrapper">
                <nav>
                    <ul>
                        <li>
                            <a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">HOME</a>
                        </li>
                        <li>
                            <a class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}" href="{{ route('characters') }}">CHARACTERS</a>
                        </li>
                        <li>
                            <a class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}" href="{{ route('comics') }}">COMICS</a>
                        </li>
                        <li>
                            <a class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{ route('movies') }}">MOVIES</a>
                        </li>
                        <li>
                            <a class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}" href="{{ route('tv') }}">TV</a>
                        </li>
                        <li>
                            <a class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}" href="{{ route('games') }}">GAMES</a>
                        </li>
                        <li>
                            <a class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}" href="{{ route('collectibles') }}">COLLECTIBLES</a>
                        </li>
                        <li>
                            <a class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}" href="{{ route('videos') }}">VIDEOS</a>
                        </li>
                        <li>
                            <a class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}" href="{{ route('fans') }}">FANS</a>
                        </li>
                        <li>
                            <a class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}" href="{{ route('news') }}">NEWS</a>
                        </li>
                        <li>
                            <a class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" href="{{ route('shop') }}">SHOP</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="jumbotron">
        </div>
    </section>
</header>