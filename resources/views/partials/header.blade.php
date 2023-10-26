<header class="d-flex justify-content-between container">
    <div class="col-4 py-3">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" style="height: 86px;">
    </div>
    <div class="col-4 py-4">
        <nav class="navbar navbar-expand justify-content-center">
            <ul class="nav navbar-nav d-flex">
                @foreach (config('nav-items') as $item)
                <li><a href="{{$item['url']}}" class="nav-item nav-link">{{$item['voice']}}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
    <div class=" col-4 py-4">
        <form class="d-flex w-25" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</header>