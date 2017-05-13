@extends('layouts.default')


@section('content')	
<section class="container" style="margin-top: 5%;">	


	<div class="tab-content">		
    	<div class="row">
    		
    		<div id="products" class="row list-group">
	    		@foreach($applicants as $applicant)
		        <div class="item  col-xs-6 col-lg-3">
		            <div class="thumbnail">
		                <img class="group list-group-image" src="{{ $applicant->profiler->pic_url }}" alt="" />
		                <div class="caption">
		                    <h4 class="group inner list-group-item-heading">
		                        {{ $applicant->profiler->user->name }}</h4>
		                    <p class="group inner list-group-item-text">
		                        {{ $applicant->profiler->institution }}</p>
		                    <div class="row">
		                        <div class="col-xs-12 col-md-6">
		                            <p class="lead">
		                                {{ $applicant->amount }}</p>
		                        </div>
		                        <div class="col-xs-12 col-md-6">
		                            <a class="btn btn-success" 
		                            href="{{ url('/applicants/'.$applicant->profiler->id) }}">Details</a>
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