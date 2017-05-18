@extends('layouts.default')


@section('content')
<section class="container" style="margin-top: 6%;">
	<h1 class="text-center" style="margin-top: 1%;">Payment</h1>
	<div class="row">
		<div class="col-lg-4">
				<div class="list-group">
					<h2 class="list-group-item text-center"><span class="badge pull-left">1</span>Payment For:</h2>
					<p class="list-group-item"><span class="label left">Scholar Fund</span><span class="label pull-right">#{{ $applicant->application->amount }}</span></p>
					<p class="list-group-item"><span class="label left">Admin Charge</span><span class="label pull-right">#{{ $applicant->application->amount / 100 * 5}}</span></p>
					<p class="list-group-item"><span class="label left">Total</span><span class="label pull-right">#{{ ($applicant->application->amount / 100 * 5) + ($applicant->application->amount) }}</span></p>
				</div>
	    </div>
	    <div class="col-lg-4">
	      	<div class="list-group text-center">
				<h2 class="list-group-item"><span class="badge pull-left">2</span>Payment Options:</h2>
				<p class="list-group-item"><span class="label " data-toggle="pill" href="#home">Foreign Payment</span></p>
		    	<p class="list-group-item"><img src="/images/or_image.png" id="img2"></p>
				<p class="list-group-item"><span class="label " data-toggle="pill" href="#menu1">Local Payment</span></p>							
			</div>      
	    </div>       
	    <div class="col-lg-4">
	      	<div class="list-group">
				<h2 class="list-group-item text-center"><span class="badge pull-left">3</span>Make Payment:</h2>
				<div class="tab-content list-group-item">
				    <div id="home" class="tab-pane fade in active">
					    <a href="#"><img class="img-responsive" src="/images/Stripe Logo (blue).png"></a>
				    </div>
				    <div id="menu1" class="tab-pane fade">
				    	<form >
							<script src="https://js.paystack.co/v1/inline.js"></script>
					    	<a type="submit" role="button" onclick="payWithPaystack()"><img src="/images/two-toned.png" id="img1"></a><br>
						</form>
				    	<br>
				    	<img src="/images/or_image.png" id="img2">
				    	<br>
				    	<br>
				    	<button type="button" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#transfer">Bank Transfer</button>
				    </div>
				@include('includes.modal')
				</div>

			</div>     
	    </div>   
	</div>
</section>
@stop