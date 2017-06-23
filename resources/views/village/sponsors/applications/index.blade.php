@extends('layouts.default')


@section('content')	
	<br>
	<br>
	<h1 class="title">Scholarship Applicants</h1>
    <h3 class="subtitle">Refine Search</h3>
    <div class="category-list-thumb row">
        <div class="col-lg-2 col-lg-offset-1 col-md-2 col-sm-2 col-xs-4"> 
        	<a href="category.html"><img src="{{ $applications->first()->profiler->pic_url }}" alt="Laptops (6)" /></a> 
        	<a data-toggle="tab" href="#all">
        		All Applications
        		({{ $applications->count() }})
        	</a> 
        </div>
        <div class="col-lg-2 col-2-offset-1 col-md-2 col-sm-2 col-xs-4"> 
        	<a href="category.html"><img src="{{ $secondary->last()->profiler->pic_url }}" alt="Laptops (6)" /></a> 
        	<a data-toggle="tab" href="#sec">
        		Secondary School Applicants
        		({{ $secondary->count() }})
        	</a> 
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> 
        	<a href="category.html"><img src="{{ $tertiary->last()->profiler->pic_url }}" alt="Cameras (2)" /></a> 
        	<a data-toggle="tab" href="#tertiary">
        		Tertiary School Applicants 
        		({{ $tertiary->count() }})
        	</a> 
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> 
        	<a href="category.html"><img src="{{ $approved->first()->profiler->pic_url }}" alt="Mobile Phones (4)" /></a> 
        	<a data-toggle="tab" href="#approved">
        		Yet Unfunded 
        		({{ $approved->count() }})
        	</a> 
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> 
        	<a href="category.html"><img src="{{ $in_fund->last()->profiler->pic_url }}" alt="TV &amp; Home Audio (11)" /></a> 
        	<a data-toggle="tab" href="#in_fund">
        		Partially Funded 
        		({{ $in_fund->count() }})
        	</a> 
        </div>
    </div>
    <br>
    <div class="product-filter">
        <div class="row">
          	<div class="col-md-4 col-sm-5">
                <div class="btn-group">
                  	<button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                  	<button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
                </div>
            </div>
        </div>
    </div>
  	<br />
  	<div class="row products-category tab-content">
  		<div class="tab-pane active" id="all">
	  		@foreach($applications as $application)
	        <div class="product-layout product-list col-xs-12">
	          	<div class="product-thumb">
	            	<div class="image">
	            		<a href="product.html">
	            			<img src="{{ $application->profiler->pic_url }}" alt="" title="" class="img-responsive" />
	            		</a>
	            	</div>
	            	<div>
	              		<div class="caption">
	                		<h4><a href="product.html">{{ $application->profiler->user->name }}</a></h4>
	                		<p class="description">{{ $application->profile }}</p>
	                		<p class="price"> 
	                			@if($application->sponsorAmt())
	                			<span class="price-new">{{ $application->total - $application->sponsorAmt() }}</span> 
	                			<span class="price-old">{{ $application->total }}</span> 
	                			<span class="saving">-26%</span> 
	                			@else
	                			<span class="price-new">{{ $application->total }}</span> 
	                			@endif
	                		</p>
	              		</div>
	              		<div class="button-group">
	                		<a class="btn-primary" type="button" href="{{ url('/applications/'.$application->id.'/details') }}"><span>Details</span></a>
	              		</div>
	            	</div>
	          	</div>
	        </div>
	        @endforeach
        </div>
        <div class="tab-pane" id="sec">
	  		@foreach($secondary as $application)
		        <div class="product-layout product-list col-xs-12">
		          	<div class="product-thumb">
		            	<div class="image">
		            		<a href="product.html">
		            			<img src="{{ $application->profiler->pic_url }}" alt="" title="" class="img-responsive" />
		            		</a>
		            	</div>
		            	<div>
		              		<div class="caption">
		                		<h4><a href="product.html">{{ $application->profiler->user->name }}</a></h4>
		                		<p class="description">{{ $application->profile }}</p>
		                		<p class="price"> 
		                			@if($application->sponsorAmt())
		                			<span class="price-new">{{ $application->total - $application->sponsorAmt() }}</span> 
		                			<span class="price-old">{{ $application->total }}</span> 
		                			<span class="saving">-26%</span> 
		                			@else
		                			<span class="price-new">{{ $application->total }}</span> 
		                			@endif
		                		</p>
		              		</div>
		              		<div class="button-group">
		                		<a class="btn-primary" type="button" href="{{ url('/applications/'.$application->id.'/details') }}"><span>Details</span></a>
		              		</div>
		            	</div>
		          	</div>
		        </div>
	        @endforeach
        </div>
        <div class="tab-pane" id="tertiary">
	  		@foreach($tertiary as $application)
		        <div class="product-layout product-list col-xs-12">
		          	<div class="product-thumb">
		            	<div class="image">
		            		<a href="product.html">
		            			<img src="{{ $application->profiler->pic_url }}" alt="" title="" class="img-responsive" />
		            		</a>
		            	</div>
		            	<div>
		              		<div class="caption">
		                		<h4><a href="product.html">{{ $application->profiler->user->name }}</a></h4>
		                		<p class="description">{{ $application->profile }}</p>
		                		<p class="price"> 
		                			@if($application->sponsorAmt())
		                			<span class="price-new">{{ $application->total - $application->sponsorAmt() }}</span> 
		                			<span class="price-old">{{ $application->total }}</span> 
		                			<span class="saving">-26%</span> 
		                			@else
		                			<span class="price-new">{{ $application->total }}</span> 
		                			@endif
		                		</p>
		              		</div>
		              		<div class="button-group">
		                		<a class="btn-primary" type="button" href="{{ url('/applications/'.$application->id.'/details') }}"><span>Details</span></a>
		              		</div>
		            	</div>
		          	</div>
		        </div>
	        @endforeach
        </div>
        <div class="tab-pane" id="approved">
	  		@foreach($approved as $application)
		        <div class="product-layout product-list col-xs-12">
		          	<div class="product-thumb">
		            	<div class="image">
		            		<a href="product.html">
		            			<img src="{{ $application->profiler->pic_url }}" alt="" title="" class="img-responsive" />
		            		</a>
		            	</div>
		            	<div>
		              		<div class="caption">
		                		<h4><a href="product.html">{{ $application->profiler->user->name }}</a></h4>
		                		<p class="description">{{ $application->profile }}</p>
		                		<p class="price"> 
		                			@if($application->sponsorAmt())
		                			<span class="price-new">{{ $application->total - $application->sponsorAmt() }}</span> 
		                			<span class="price-old">{{ $application->total }}</span> 
		                			<span class="saving">-26%</span> 
		                			@else
		                			<span class="price-new">{{ $application->total }}</span> 
		                			@endif
		                		</p>
		              		</div>
		              		<div class="button-group">
		                		<a class="btn-primary" type="button" href="{{ url('/applications/'.$application->id.'/details') }}"><span>Details</span></a>
		              		</div>
		            	</div>
		          	</div>
		        </div>
	        @endforeach
        </div>
        <div class="tab-pane" id="in_fund">
	  		@foreach($in_fund as $application)
		        <div class="product-layout product-list col-xs-12">
		          	<div class="product-thumb">
		            	<div class="image">
		            		<a href="product.html">
		            			<img src="{{ $application->profiler->pic_url }}" alt="" title="" class="img-responsive" />
		            		</a>
		            	</div>
		            	<div>
		              		<div class="caption">
		                		<h4><a href="product.html">{{ $application->profiler->user->name }}</a></h4>
		                		<p class="description">{{ $application->profile }}</p>
		                		<p class="price"> 
		                			@if($application->sponsorAmt())
		                			<span class="price-new">{{ $application->total - $application->sponsorAmt() }}</span> 
		                			<span class="price-old">{{ $application->total }}</span> 
		                			<span class="saving">-26%</span> 
		                			@else
		                			<span class="price-new">{{ $application->total }}</span> 
		                			@endif
		                		</p>
		              		</div>
		              		<div class="button-group">
		                		<a class="btn-primary" type="button" href="{{ url('/applications/'.$application->id.'/details') }}"><span>Details</span></a>
		              		</div>
		            	</div>
		          	</div>
		        </div>
	        @endforeach
        </div>
  	</div>
  	<div class="row">
        <div class="col-sm-6 text-left">
          	<ul class="pagination">
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">&gt;</a></li>
                <li><a href="#">&gt;|</a></li>
          	</ul>
        </div>
        <div class="col-sm-6 text-right">Showing 1 to 12 of 15 (2 Pages)</div>
  	</div>
@stop