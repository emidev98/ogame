<nav class="nav-extended light-blue darken-3">
    <div class="nav-wrapper">
        <a class="brand-logo" href="{{ url('/') }}">
            {{ config('app.name', 'UGame') }}
        </a>
        @auth
            <div class="brand-logo center" id="materials">
                <div class="metal">
                    <div class="description">
                        <span class="name">Metal

                            <small>(lvl{{$planet->metal_mine_lvl}})</small>
                        </span>
                        <span class="status">
                            0/{{$planet->metal_capacity}}
                        </span>
                    </div>
                    <img src="{{ asset('img/minerals/metal.png') }}">
                </div>
                <div class="deuterium">
                    <div class="description">
                        <span class="name">Deuterium

                            <small>(lvl{{$planet->deuterium_mine_lvl}})</small>
                        </span>
                        <span class="status">
                            0/{{$planet->deuterium_capacity}}
                        </span>
                    </div>
                    <img src="{{ asset('img/minerals/deuterium.png') }}">
                </div>
                <div class="crystal">
                    <div class="description">
                        <span class="name">Crystal

                            <small>(lvl{{$planet->crystal_mine_lvl}})</small>
                        </span>
                        <span class="status">
                            0/{{$planet->crystal_capacity}}
                        </span>
                    </div>
                    <img src="{{ asset('img/minerals/crystal.png') }}">
                </div>
            </div>
        @endauth

        <ul class="right hide-on-med-and-down">
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li>
                    <a class="logout"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ Auth::user()->name }} Logout <i class="material-icons">clear</i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endguest
        </ul>
    </div>

    @auth
        <div class="nav-content light-blue darken-3">
            <div class="nav-items">
                <div><a id="nav-home"href="{{route('app')}}">Home</a></div>
                <div><a id="nav-galaxy"href="{{route('galaxy')}}">Galaxy</a></div>
                <div><a id="nav-fleet"href="{{route('fleet', $planet)}}">Fleet</a></div>
                <div><a id="nav-hangar"href="{{route('hangar', $planet)}}">Hangar</a></div>
            </div>
        </div>
    @endauth

</nav>
