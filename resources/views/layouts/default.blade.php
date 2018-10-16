<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<header>
    @include('includes.header')
</header>
<body>
    <main role="main">
        @yield('content')



<footer class="row">
        @include('includes.footer')
</footer>
    </main>
</body>
</html>