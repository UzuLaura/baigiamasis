<nav class="wrapper navbar">
    <div class="navbar-left">
        <a class="nav-item" style="{{ request()->path() === '/' ? 'color: gray;' : '' }}" href="{{ route('home') }}">{{ __('titles.index') }}</a>
        <a class="nav-item" style="{{ request()->path() === 'atsiliepimai' ? 'color: gray;' : '' }}" href="{{ route('feedback') }}">{{ __('titles.feedback') }}</a>
    </div>
    @guest()
        <div class="navbar-right">
            <a class="nav-item" style="{{ request()->path() === 'register' ? 'color: gray;' : '' }}" href="{{ route('register') }}">{{ __('titles.register') }}</a>
            <a class="nav-item" style="{{ request()->path() === 'login' ? 'color: gray;' : '' }}" href="{{ route('login') }}">{{ __('titles.login') }}</a>
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