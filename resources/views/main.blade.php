<!doctype html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
<div id="app">
    <header>
        @include('layouts.navbar')
    </header>
    <main>
        @yield('content')
    </main>
    <vue-footer></vue-footer>
</div>
</body>
</html>