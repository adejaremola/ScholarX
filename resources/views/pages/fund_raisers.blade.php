@extends('layouts.default')


@section('content')	
<section class="container" style="margin-top: 5%;">
	<h2 class="text-center">Fund A FundRaiser</h2>
	<ul class="nav nav-tabs" style="width: 50%; margin-left: 25%;">
	    <li><a data-toggle="tab" href="#sec"></a></li>
	    <li><a data-toggle="tab" href="#sec"></a></li>
	    <li><a data-toggle="tab" href="#sec"></a></li>
	    <li><a data-toggle="tab" href="#sec"></a></li>
	    <li><a data-toggle="tab" href="#sec"></a></li>
	    <li><a data-toggle="tab" href="#sec"></a></li>
	    <li class="active"><a data-toggle="tab" href="#sec">SS1 - 3</a></li>
	    <li><a data-toggle="tab" href="#uni">UNDERGRAD</a></li>
	</ul>

	<br>
	<div class="tab-content">
		<ul class="errors">
			@foreach($errors->all() as $message)
			<li>{{ $message }}</li>
			@endforeach
		</ul>
	    <div id="sec" class="tab-pane fade in active">
	    	<div class="row">
	    		<div id="products" class="row list-group">
		    		@foreach($fund_raisers_sec as $fund_raiser)
			        <div class="item  col-xs-6 col-lg-3">
			            <div class="thumbnail">
			                <img class="group list-group-image" src="{{ $fund_raiser->pic_url }}" alt="" />
			                <div class="caption">
			                    <h4 class="group inner list-group-item-heading">
			                        {{ $fund_raiser->name }}</h4>
			                    <p class="group inner list-group-item-text">
			                        {{ $fund_raiser->inst }}</p>
			                    <div class="row">
			                        <div class="col-xs-12 col-md-6">
			                            <p class="lead">
			                                {{ $fund_raiser->amt }}</p>
			                        </div>
			                        <div class="col-xs-12 col-md-6">
			                            <a class="btn btn-success" 
			                            href="{{ url('fund_raiser/'.$fund_raiser->id) }}">Details</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			        @endforeach
			    </div>
			</div>
	    </div>
	    <div id="uni" class="tab-pane fade">
	    	<div class="row">
	    		@foreach($fund_raisers_pry as $fund_raiser)
			        <div class="item  col-xs-6 col-lg-3">
			            <div class="thumbnail">
			                <img class="group list-group-image" src="{{ $fund_raiser->pic_url }}" alt="" />
			                <div class="caption">
			                    <h4 class="group inner list-group-item-heading">
			                        {{ $fund_raiser->name }}</h4>
			                    <p class="group inner list-group-item-text">
			                        {{ $fund_raiser->inst }}</p>
			                    <div class="row">
			                        <div class="col-xs-12 col-md-6">
			                            <p class="lead">
			                                {{ $fund_raiser->amt }}</p>
			                        </div>
			                        <div class="col-xs-12 col-md-6">
				                            <a class="btn btn-success" href="{{ url('fund_raiser/'.$fund_raiser->id) }}">Details</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
		        @endforeach
	    	</div>
	    </div>
	</div>
</section>
@stop