@extends('layouts.default')


@section('content')	
<section class="container" style="margin-top: 8%; margin-bottom: 5%;">
	<div class="col-lg-8 col-lg-offset-2 sect">
		<div class="col-lg-5" id="well">
			<img style="margin-left: 10%" width="80%" src="{{ '/'.$applicant->pic_url }}">
			<h2 class="text-center"></h2>
			<div class="row">
				<div class="col-lg-4">
					<p>Institution: </p>
				</div>
				<div class="col-lg-8">
					<p>{{ $applicant->institution }}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<p>Faculty: </p>
				</div>
				<div class="col-lg-8 text-left">
					<p>{{ $applicant->faculty }}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<p class="text-right">Department: </p>
				</div>
				<div class="col-lg-8 text-left">
					<p class="norm">{{ $applicant->department }}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<p>Level: </p>
				</div>
				<div class="col-lg-8 text-left">
					<p class="norm">{{ $applicant->level }}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<p>CGPA: </p>
				</div>
				<div class="col-lg-8 text-left">
					<p class="norm">{{ $applicant->cgpa }}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<p>Amount:</p>
				</div>
				<div class="col-lg-8 text-left">
					<p class="norm">{{ $applicant->application->amount }}</p>
				</div>
			</div>
			<p><span></span></p>
		</div> 
		<div class="col-lg-7" id="tell">
			<h4 class="text-center" id="p">PROFILE</h4>
			<p class="we">{{ $applicant->application->profile }}</p>
			<div class="text-center" style="margin-top: 5%;">
				<a href="#" class="btn btn-success" role="button">Verify</a>
				<a href="#" class="btn btn-warning" role="button">Reject</a>
				<a href="{{ url('/applicants/'.$applicant->id.'/fund')}}" class="btn btn-info" role="button">Fund</a>
			</div>
		</div>
	</div>
</section>
@stop