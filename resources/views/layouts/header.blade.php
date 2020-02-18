<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" id="nav">
    <a class="navbar-brand" href="/">{{ config('app.name') }}</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            @php
                $top_zones = \App\Models\Zone::all();
            @endphp
            @foreach ($top_zones as $item)
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home').'?zone_id='.$item->id}}">{{$item->name}}</a>
                </li>
            @endforeach
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Library</a>
                <div class="dropdown-menu active" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Zone App</a>
                    <a class="dropdown-item" href="#">Conservation Report</a>
                    <a class="dropdown-item" href="#">Erro App</a>
                    <a class="dropdown-item" href="#">STOI's</a>
                    <a class="dropdown-item" href="#">QR Manager</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"></a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>            
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav ml-3">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Sign Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</nav>