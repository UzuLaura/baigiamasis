<nav class="wrapper navbar">
    <div class="navbar-left">
        <a class="nav-item" href="{{ route('home') }}">{{ __('titles.index') }}</a>
        <a class="nav-item" href="{{ route('feedback') }}">{{ __('titles.feedback') }}</a>
    </div>
    @guest()
        <div class="navbar-right">
            <a class="nav-item" href="{{ route('register') }}">{{ __('titles.register') }}</a>
            <a class="nav-item" href="{{ route('login') }}">{{ __('titles.login') }}</a>
        </div>
    @else
        <div class="navbar-right">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="nav-item" type="submit">{{ __('titles.logout') }}</button>
            </form>
        </div>
    @endguest
</nav>