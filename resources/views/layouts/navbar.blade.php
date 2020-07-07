<nav class="wrapper navbar">
    <div class="navbar-left">
        <a class="nav-item" href="{{ route('home') }}">Titulinis</a>
        <a class="nav-item" href="{{ route('feedback') }}">Atsiliepimai</a>
    </div>
    @guest()
        <div class="navbar-right">
            <a class="nav-item" href="{{ route('register') }}">Registruotis</a>
            <a class="nav-item" href="{{ route('login') }}">Prisijungti</a>
        </div>
    @else
        <div class="navbar-right">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="nav-item" type="submit">Atsijungti</button>
            </form>
        </div>
    @endguest
</nav>