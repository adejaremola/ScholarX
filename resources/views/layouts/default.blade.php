
<!DOCTYPE html>
<html lang="en">
<head>
        @include('includes.head')
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
    @include('includes.navbar')
</nav>

    @yield('content')

<footer class="text-center">
    @include('includes.footer')     
</footer>
    @include('includes.scripts')
</body>
</html>
