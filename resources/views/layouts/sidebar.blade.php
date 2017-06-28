<!DOCTYPE html>
<html>
	<head>
		@include('includes.head')
	</head>
	<body>
		<div class="wrapper-wide">
  			<div id="header">
    			<!-- Main Menu Start-->
			    @include('includes.header')
			    <!-- Main Menu End-->
  			</div>
			<div id="container">
			    <div class="container">
			      	<div class="row">
			        	<!-- Left Part Start-->
				        @include('includes.aside')
			        	<!-- Left Part End-->
				        <!--Middle Part Start-->
				        <div id="content" class="col-sm-10">
					        @yield('content')
				        </div>
				        <!--Middle Part End-->
			      	</div>
			    </div>
			</div>
		  	<!--Footer Start-->
		  	<footer id="footer">
		    	@include('includes.footer')
		  	</footer>
		  	<!--Footer End-->
		</div>
		<!-- JS Part Start-->
		@include('includes.scripts')
		<!-- JS Part End-->
	</body>
</html>

