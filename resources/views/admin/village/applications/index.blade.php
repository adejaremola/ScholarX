@extends('layouts.admin')

@section('content')	
	<br>
	<br>
	<h1 class="title">Scholarship Applicants</h1>
	@if (session('message'))
    	<!-- Form Error List -->
      	<div class="alert alert-success">
        	<strong>{{ session('message') }}</strong>

        	<br>
      	</div>
	@endif
    <h3 class="subtitle">Refine Search</h3>
    <div class="tab-content">
    	<div  class="tab-pane active" id="pending">		    		   
		  	@include('includes.admin.pending')
	  	</div>
	  	<div  class="tab-pane" id="approved">		    		   
		  	@include('includes.admin.approved')
	  	</div>
	  	<div  class="tab-pane" id="open">		    		   
		  	@include('includes.admin.open')
	  	</div>
	  	<div  class="tab-pane" id="funded">		    		   
		  	@include('includes.admin.funded')
	  	</div>
	  	<div  class="tab-pane" id="rejected">		    		   
		  	@include('includes.admin.rejected')
	  	</div>
    </div>
@stop
