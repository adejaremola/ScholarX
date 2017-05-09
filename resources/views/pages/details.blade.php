@extends('layouts.default')


@section('content')	
<section class="container" style="margin-top: 8%; margin-bottom: 5%;">
	<div class="col-lg-8 col-lg-offset-2 sect">
		<div class="col-lg-5" id="well">
			<img style="margin-left: 10%" width="80%" src="{{ '/'.$fund_raiser->pic_url}}">
			<h2 class="text-center">{{ $fund_raiser->name }}</h2>
			<div class="row">
				<div class="col-lg-4">
					<p>Institution: </p>
				</div>
				<div class="col-lg-8 text-left">
					<p class="norm">{{ $fund_raiser->inst }}</p>
				</div>
			</div>
			@if($fund_raiser->faculty != '')
			<div class="row">
				<div class="col-lg-4">
					<p>Faculty: </p>
				</div>
				<div class="col-lg-8 text-left">
					<p class="norm">{{ $fund_raiser->faculty }}</p>
				</div>
			</div>
			@endif
			@if($fund_raiser->dept != '')
			<div class="row">
				<div class="col-lg-4">
					<p class="text-right">Department: </p>
				</div>
				<div class="col-lg-8 text-left">
					<p class="norm">{{ $fund_raiser->dept }}</p>
				</div>
			</div>
			@endif
			@if($fund_raiser->level != '')
			<div class="row">
				<div class="col-lg-4">
					<p>Level: </p>
				</div>
				<div class="col-lg-8 text-left">
					<p class="norm">{{ $fund_raiser->level }}</p>
				</div>
			</div>
			@endif
			@if($fund_raiser->cgpa != '')
			<div class="row">
				<div class="col-lg-4">
					<p>CGPA: </p>
				</div>
				<div class="col-lg-8 text-left">
					<p class="norm">{{ $fund_raiser->cgpa }}</p>
				</div>
			</div>
			@endif
			<div class="row">
				<div class="col-lg-4">
					<p>Amount:</p>
				</div>
				<div class="col-lg-8 text-left">
					<p class="norm">{{ $fund_raiser->amt }}</p>
				</div>
			</div>
			<p><span></span></p>
		</div> 
		<div class="col-lg-7" id="tell">
			<h4 class="text-center" id="p">PROFILE</h4>
			<p class="we">{{ $fund_raiser->profile }}</p>
			<div class="text-center" style="margin-top: 5%;">
				<a href="#" class="btn btn-success" role="button">Verify</a>
				<a href="#" class="btn btn-warning" role="button">Reject</a>
				<a href="{{ route('payment', $fund_raiser->id) }}" class="btn btn-info" role="button">Fund</a>
			</div>
		</div>
	</div>
</section>
@stop