
<!DOCTYPE html>
<html lang="en">
<head>
        @include('includes.head')
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
    @include('includes.navbar')
</nav>

<section class="container" style="margin-top: 5%;">
<div class="row">

<div class="col-lg-2" style="margin-top: 5%;">
	<ul class="nav nav-pills nav-stacked">
	    <li><a href="{{ url('/user/profile/create') }}">Profile</a></li>
	    <li><a href="{{ url('/user/'.$profile->id.'/index') }}">Applications</a></li>
	    <li><a href="{{ url('/user/'.$profile->id.'/apply') }}">Apply</a></li>
	</ul>
</div>
<div class="col-lg-10">
    @yield('content')
</div>
</div>
</section>


<footer class="text-center">
    @include('includes.footer')     
</footer>
    @include('includes.scripts')
</body>
</html>
