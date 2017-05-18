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
		    		@foreach($applications as $application)
		    			@if($application->profiler->category == 1)
					        <div class="item  col-xs-6 col-lg-3">
					            <div class="thumbnail">
					                <img class="group list-group-image" src="{{ $application->profiler->pic_url }}" alt="" />
					                <div class="caption">
					                    <h4 class="group inner list-group-item-heading">
					                        {{ $application->profiler->user->name }}</h4>
					                    <p class="group inner list-group-item-text">
					                        {{ $application->profiler->institution }}</p>
					                    <div class="row">
					                        <div class="col-xs-12 col-md-6">
					                            <p class="lead">
					                                {{ $application->amount }}</p>
					                        </div>
					                        <div class="col-xs-12 col-md-6">
					                            <a class="btn btn-success" 
					                            href="{{ url('sponsor/'.$application->id.'/details') }}">Details</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					        </div>
					    @endif
			        @endforeach
			    </div>
			</div>
	    </div>
	    <div id="uni" class="tab-pane fade">
	    	<div class="row">
	    		@foreach($applications as $application)
	    			@if($application->profiler->category == 2)
					        <div class="item  col-xs-6 col-lg-3">
					            <div class="thumbnail">
					                <img class="group list-group-image" src="{{ $application->profiler->pic_url }}" alt="" />
					                <div class="caption">
					                    <h4 class="group inner list-group-item-heading">
					                        {{ $application->profiler->user->name }}</h4>
					                    <p class="group inner list-group-item-text">
					                        {{ $application->profiler->institution }}</p>
					                    <div class="row">
					                        <div class="col-xs-12 col-md-6">
					                            <p class="lead">
					                                {{ $application->amount }}</p>
					                        </div>
					                        <div class="col-xs-12 col-md-6">
					                            <a class="btn btn-success" 
					                            href="{{ url('sponsor/'.$application->id.'/details') }}">Details</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					        </div>
					    @endif
		        @endforeach
	    	</div>
	    </div>
	</div>
</section>
@stop