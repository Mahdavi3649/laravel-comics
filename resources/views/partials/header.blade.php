    <header id="site_header">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-2">
                  <img width="60" src="{{asset('../img/dc-logo.png')}}" alt="logo" />
                </div>
                <div class="col-8">
                    <nav class="nav justify-content-center">
                        <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{route('home')}}">Home</a>
                        <a class="nav-link {{Route::currentRouteName() === 'comics' ? 'active' : '' }}" href="{{route('comics')}}">comics</a>
                        <a class="nav-link" href="{{route('movies')}}">movies</a>
                        <a class="nav-link" href="{{route('tv')}}">tv</a>
                        <a class="nav-link" href="{{route('games')}}">games</a>
                        <a class="nav-link" href="{{route('collectibiles')}}">collectibiles</a>
                        <a class="nav-link" href="{{route('videos')}}">videos</a>
                        <a class="nav-link" href="{{route('fans')}}">fans</a>
                        <a class="nav-link" href="{{route('news')}}">news</a>
                        <a class="nav-link" href="{{route('shop')}}">shop</a>
                    </nav>
                </div>
                <div class="col-2">
                    <div class="search d-flex align-items-center justify-content-end">
                            <input type="text" name="search" id="search" placeholder="Search">
                            <i class="fas fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
        </div>
        
    </header>