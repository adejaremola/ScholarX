@extends('layouts.default')

@section('content')



<section class="container" style="width: 70%; margin-left: 15%; margin-top: 5%;">
	<h2 class="text-center">Verify Applicants</h2>
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
	
  	<div class="tab-content">
  		<table class="table table-hover">
		    <thead>
		      	<tr>
			        <th>#</th>
			        <th>Full Name</th>
			        <th>Institution</th>
			        <th>Department</th>
			        <th>Level</th>
			        <th>CGPA</th>
			        <th>Amount</th>
		      	</tr>
		    </thead>
		    <tbody>
		    	@for($i = 0; $i < $applicants->count(); $i++)
		      	<tr>
			        <td>{{ $i + 1 }}</td>
			        <td>{{ $applicants[$i]->profiler->user->name }}</td>
			        <td>{{ $applicants[$i]->profiler->institution }}</td>
			        <td>{{ $applicants[$i]->profiler->department }}</td>
			        <td>{{ $applicants[$i]->profiler->level }}</td>
			        <td>{{ $applicants[$i]->profiler->cgpa }}</td>
			        <td>{{ $applicants[$i]->amount }}</td>
			        <td>
			        	{!! Form::open(['url' => 'verify/'.$applicants[$i]->id]) !!}
				        	{!! Form::submit('Verify', ['class' => 'btn btn-success btn-sm']) !!}
			        	{!! Form::close() !!}
			        </td>
			        <td>
				        {!! Form::open(['url' => 'reject/'.$applicants[$i]->id]) !!}
				        	{!! Form::submit('Reject', ['class' => 'btn btn-danger btn-sm']) !!}
			        	{!! Form::close() !!}
			        </td>
		      	</tr>
		      	@endfor
		    </tbody>
		</table>
  	</div>

	
	
</section>


	
@stop


