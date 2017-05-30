@extends('layouts.default')

@section('content')



<section class="container" style="width: 50%; margin-left: 25%; margin-top: 5%;">
	<h2 class="text-center">Apply For Sponsorship</h2>
  @if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>Whoops! Something went wrong!</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
	
	<ul class="nav nav-pills nav-justified">
		<li class="active"><a data-toggle="pill" href="#edit">Edit Profile Before Application?</a></li>
		<li><a data-toggle="pill" href="#apply">APPLY!</a></li>
	</ul>

  	<div class="tab-content">
  		<div class="tab-pane fade in active" id="edit">
			@include('profile.edit')
  		</div>
  		<div class="tab-pane fade" id="apply">
			@include('application.apply')
  		</div>
  	</div>

	
	
</section>


	
@stop