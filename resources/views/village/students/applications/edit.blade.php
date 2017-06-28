@extends('layouts.sidebar')

@section('content')

	
	@if (count($errors) > 0)
	    <!-- Form Error List -->
	    <div class="alert alert-danger">
	        <strong>Whoops! Something went wrong!</strong>

	        <br><br>

	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	@if (session('message'))
    	<!-- Form Error List -->
      	<div class="alert alert-success">
        	<strong>{{ session('message') }}</strong>

        	<br><br>

      	</div>
    @endif
    <br>
	@if($method == 'edit')
	<h1 class="title"> Edit Application </h1>
    <br>
	<div>
    	{!! Form::model($application, ['url' => '/application/'.$application->id, 
				    					'class' => 'form-horizontal']) !!}
		{!! method_field('PUT') !!}
    @else
    <h1 class="title">Create Application</h1>
    <br>
	<div>
    	{!! Form::open(['url' => '/user/'.$user->profile->id, 
    					'class' => 'form-horizontal']) !!}
    @endif
    		<div class="form-group">
    			{!! Form::label('name', 'Full Name:', 
    							['class' => 'control-label col-sm-2']) !!}
		    	<div class="col-sm-10">
		      		<p class="form-control-static">{{ $user->name }}</p>
		    	</div>
		  	</div>
		  	<div class="form-group">
		  		{!! Form::label('institution', 'Institution:', 
    							['class' => 'control-label col-sm-2']) !!}
		    	<div class="col-sm-10">
		      		<p class="form-control-static">{{ $user->profile->institution }}</p>
		    	</div>
		  	</div>
		  	<div class="form-group">
		  		{!! Form::label('amount', 'Amount:', 
    							['class' => 'control-label col-sm-2']) !!}
		    	<div class="col-sm-10">
		    		{!! Form::number('amount', null,
							    	['class' => 'form-control',
    								'required' => 'true']) !!}
		  		</div>
		  	</div>
		  	<div class="form-group">
			  	{!! Form::label('profile', 'Profile:', 
    							['class' => 'control-label col-sm-2']) !!}
		    	<div class="col-sm-10">
		    		{!! Form::textarea('profile', null,
    								['class' => 'form-control',
    								'required' => 'true']) !!}
		    	</div>
		  	</div>
		  	<div class="form-group"> 
		    	<div class="col-sm-offset-2 col-sm-10">
		    		{!! Form::submit($method == 'edit'? 'Update' : 'Submit', ['class' => 'btn btn-success btn-lg']) !!}
		    		<a href="{{ url('/user/profile/create') }}" class="btn btn-warning btn-lg">Back</a>
		    	</div>
		  	</div>
		{!! Form::close() !!}
    </div>
    <br>
@stop