@extends('layouts.default')


@section('content')	
<section class="container" style="margin-top: 5%; margin-bottom: 5%;">
	<h1 class="text-center">Details</h1>
	<br>
	<br>
	<div class="col-lg-8 col-lg-offset-2 sect">
		<div class="col-lg-5" id="well">
			<img style="margin-left: 10%" width="80%" src="{{ $application->profiler->pic_url }}">
			<h2 class="text-center"></h2>
			<div class="row">
				<div class="col-lg-4">
					<p>Institution: </p>
				</div>
				<div class="col-lg-8">
					<p>{{ $application->profiler->institution }}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<p>Faculty: </p>
				</div>
				<div class="col-lg-8 text-left">
					<p>{{ $application->profiler->faculty }}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<p class="text-right">Department: </p>
				</div>
				<div class="col-lg-8 text-left">
					<p class="norm">{{ $application->profiler->department }}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<p>Level: </p>
				</div>
				<div class="col-lg-8 text-left">
					<p class="norm">{{ $application->profiler->level }}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<p>CGPA: </p>
				</div>
				<div class="col-lg-8 text-left">
					<p class="norm">{{ $application->profiler->cgpa }}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<p>Amount:</p>
				</div>
				<div class="col-lg-8 text-left">
					<p class="norm">{{ $application->amount }}</p>
				</div>
			</div>
			<p><span></span></p>
		</div> 
		<div class="col-lg-7" id="tell">
			<h4 class="text-center" id="p">PROFILE</h4>
			<p class="we">{{ $application->profile }}</p>
			@if(Auth::user())
			<div class="text-center" style="margin-top: 5%;">
				<a href="#" class="btn btn-success" role="button">Verify</a>
				<a href="#" class="btn btn-warning" role="button">Reject</a>
			</div>
			@else
			<div class="text-center" style="margin-top: 5%;">
				<a href="{{ url('/sponsor/'.$application.'/fund') }}" class="btn btn-info" role="button">Fund</a>
			</div>
			@endif
		</div>
	</div>
</section>
@stop