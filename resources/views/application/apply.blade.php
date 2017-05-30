
{!! Form::open(['url' => '/apply', 
				'class' => 'form-horizontal']) !!}
	<div class="form-group">
		{!! Form::label('name', 'Full Name:', 
						['class' => 'control-label col-sm-2']) !!}
    	<div class="col-sm-10">
      		<p class="form-control-static">{{ Auth::user()->name }}</p>
    	</div>
  	</div>
  	<div class="form-group">
	  	{!! Form::label('amount', 'Amount:', 
						['class' => 'control-label col-sm-2']) !!}
    	<div class="col-sm-10">
    		{!! Form::number('amount', null,
							['class' => 'form-control', 
               'step' => 'any', 
               'required' => 'true']) !!} 
    	</div>
  	</div>
  	<div class="form-group">
	  	{!! Form::label('profile', 'Profile:', 
					   ['class' => 'control-label col-sm-2']) !!}
    	<div class="col-sm-10"> 
    		{!! Form::textarea('profile', null,
    					  ['class' => 'form-control', 'required' => 'true']) !!}
    	</div>
  	</div>
  	<div class="form-group"> 
    	<div class="col-sm-offset-2 col-sm-10">
    		{!! Form::submit('Submit', ['class' => 'btn btn-success btn-lg']) !!}
    	</div>
  	</div>
{!! Form::close() !!}
