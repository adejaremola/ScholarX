@extends('layouts.default')


@section('content')
<section class="container" style="margin-top: 6%;">
	<h1 class="text-center" style="margin-top: 1%;">Payment</h1>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-1">
				<div class="list-group">
					<h2 class="list-group-item text-center"><span class="badge pull-left">1</span>Payment For:</h2>
					<p class="list-group-item"><span class="label left">Amount Needed</span><span class="label pull-right">#{{ $application->total }}</span></p>
					<p class="list-group-item"><span class="label left">Support</span><span class="label pull-right">#{{ $sponsor = $application->sponsor->lists('id')->sum() }}</span></p>
					<p class="list-group-item"><span class="label left">Remainder</span><span class="label pull-right">#{{ ($application->total) - ($application-> $sponsor) }}</span></p>
				</div>
	    </div>
	    <div class="col-lg-4 col-lg-offset-2">
	      	<div class="list-group">
				<h2 class="list-group-item text-center"><span class="badge pull-left">2</span>Make Payment:</h2>
				<div class="tab-content list-group-item">
				    <!--div id="home" class="tab-pane fade in active">
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
					@include('includes.modal')-->
					{!! Form::open(['style' => 'width: 90%; margin-left: 5%;',
									 'url' => '']) !!}
					<form role="form" style="">
					  	<div class="form-group">
						    <label for="amount">Enter desired amount for support:</label>
						    <input type="number" class="form-control" id="amount">
					  	</div>
					  	<div class="form-group">
						    <label for="comment">Add a Comment or Reaction (Optional)  :</label>
						    <textarea rows="3" class="form-control" name="comment"></textarea>
					  	</div>
					  	<button type="submit" class="btn btn-success btn-lg">Support!</button>
					</form>
				</div>

			</div>     
	    </div>   
	</div>
</section>
@stop