
<header>
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo dc-comics">

    <nav>
        <ul>
            <li>
                <a href="{{ route('carachters') }}">carachters</a></a>
            </li>
            <li>
                <a href="{{ route('collectibles') }}">collectibles</a></a>
            </li>
            <li>
                <a href="{{ route('comics') }}">comics</a></a>
            </li>
            <li>
                <a href="{{ route('fans') }}">fans</a></a>
            </li>
            <li>
                <a href="{{ route('games') }}">games</a></a>
            </li>
            <li>
                <a href="{{ route('movies') }}">movies</a></a>
            </li>
            <li>
                <a href="{{ route('shop') }}">shop</a></a>
            </li>
            <li>
                <a href="{{ route('tv') }}">tv</a></a>
            </li>
            <li>
                <a href="{{ route('video') }}">video</a></a>
            </li>
        </ul>
      </nav>
      <input type="search" name="Search" id="" placeholder="Search">
</header>

<div class="jumbtron">
  <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron" />
</div>
