@extends('layouts.sidebar')


@section('content')	
	<br>		
	<h1 class="title">Applications</h1>
	<br>	
	@if (session('message'))
	<!-- Form Error List -->
  	<div class="alert alert-success">
    	<strong>{{ session('message') }}</strong>

    	<br>
  	</div>
    @endif	
    <div class="table-responsive">
    	<table class="table table-hover">
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
		    <tbody>
		    @foreach($applications as $application)
		      	<tr>
		        	<td>{{ $i++ }}</td>
		        	<td style="width: 65%;">{{ $application->profile }}</td>
		        	<td>{{ $application->amount }}</td>
		        	<td>{{ $application->getStatus() }}</td>
		        	<td class="text-left">
		        		@if($application->canAlter())
				    	{!! Form::open(['url' => '/application/'.$application->id.'/delete']) !!}
						{!! method_field('DELETE') !!}
		        		<button type="submit" class="btn btn-danger">Delete</button>
		        		{!! Form::close() !!}
		        		<a href="{{ url('/application/'.$application->id.'/edit') }}" class="btn btn-info" role="button">Edit</a>
		        		@else
		        		<a href="{{ url('/application/'.$application->id.'/edit') }}" class="btn btn-info" role="button">View Sponsors</a>
		        		@endif
		        	</td>
		      	</tr>
		    </tbody>
		    @endforeach
		</table>
	</div>
@stop