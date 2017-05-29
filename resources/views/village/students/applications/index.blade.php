@extends('layouts.sidebar')


@section('content')	
	<div class="tab-content">
		<h1 class="text-center">Applications</h1>
		<br>		
		<br>	
		@if (session('message'))
    	<!-- Form Error List -->
      	<div class="alert alert-success">
        	<strong>{{ session('message') }}</strong>

        	<br>
      	</div>
	    @endif	
    	<table class="table">
		    <thead>
			    <tr>
			        <th>#</th>
			        <th>Profile</th>
			        <th>Amount</th>
			        <th>Status</th>
			        <th>Action</th>
			    </tr>
		    </thead>
		    <?php
		    	$i = 1;
		    ?>
		    @foreach($applications as $application)
		    <tbody>
		      	<tr>
		        	<td>{{ $i++ }}</td>
		        	<td>{{ $application->profile }}</td>
		        	<td>{{ $application->amount }}</td>
		        	<td>{{ $application->getStatus() }}</td>
		        	<td>
		        		<div class="btn-group">
				    	{!! Form::open(['url' => '/application/'.$application->id.'/delete']) !!}
						{!! method_field('DELETE') !!}
		        		<button type="submit" class="btn btn-danger">Delete</button>
		        		{!! Form::close() !!}
		        		<a href="{{ url('/application/'.$application->id.'/edit') }}" class="btn btn-info" role="button">Edit</a>
		        		</div>
		        	</td>
		      	</tr>
		    </tbody>
		    @endforeach
		</table>
	</div>
@stop