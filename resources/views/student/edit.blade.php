{!! Form::model($academic_profile, ['url' => '/profile/'.$academic_profile->id, 
				'class' => 'form-horizontal',
				'files' => 'true']) !!}
	{{ method_field('PUT') }}
	<div class="form-group">
		{!! Form::label('name', 'Full Name:', 
						['class' => 'control-label col-sm-2']) !!}
    	<div class="col-sm-10">
      		<p class="form-control-static">{{ Auth::user()->name }}</p>
    	</div>
  	</div>
  	<div class="form-group">
  		{!! Form::label('email', 'Email:', 
						['class' => 'control-label col-sm-2']) !!}
    	<div class="col-sm-10">
      		<p class="form-control-static">{{ Auth::user()->email }}</p>
    	</div>
  	</div>
  	<div class="form-group">
  		{!! Form::label('category', 'Category:', 
						['class' => 'control-label col-sm-2']) !!}
    	<div class="col-sm-10">
		  	<select class="form-control" id="category" name="category" required>
			    <option>-Select One-</option>
			    <option value="1">Senior Secondary</option>
			    <option value="2">Tertiary</option>
	  		</select>
  		</div>
  	</div>
		<input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" required>
  	<div class="form-group">
  		{!! Form::label('institution', 'Institution:', 
  						['class' => 'control-label col-sm-2']) !!}
    	<div class="col-sm-10">
    		{!! Form::text('institution', null,
					    	['class' => 'form-control',
							'required' => 'true']) !!}
    	</div>
  	</div>			  	
  	<div class="form-group" id="fc">
  		{!! Form::label('faculty', 'Faculty:', 
						['class' => 'control-label col-sm-2']) !!}
    	<div class="col-sm-10">
	    	{!! Form::text('faculty', null,
					    	['class' => 'form-control']) !!} 
    	</div>
  	</div>			  	
  	<div class="form-group">
	  	{!! Form::label('department', 'Department:', 
						['class' => 'control-label col-sm-2']) !!}
    	<div class="col-sm-10">
    		{!! Form::text('department', null,
							['class' => 'form-control',
							'required' => 'true']) !!}
    	</div>
  	</div>
  	<div class="form-group">
      {!! Form::label('level', 'Level:', 
            ['class' => 'control-label col-sm-2']) !!}
      <div class="col-sm-10">
        {!! Form::number('level', null,
              ['class' => 'form-control',
               'required' => 'true']) !!} 
      </div>
    </div>
    <div class="form-group">
	  	{!! Form::label('matric_no', 'Matric Number:', 
						['class' => 'control-label col-sm-2']) !!}
    	<div class="col-sm-10">
	    	{!! Form::text('matric_no', null,
						  ['class' => 'form-control',
						   'required' => 'true']) !!} 
    	</div>
  	</div>
  	<div class="form-group">
	  	{!! Form::label('cgpa', 'CGPA:', 
						['class' => 'control-label col-sm-2']) !!}
    	<div class="col-sm-10">
    		{!! Form::number('cgpa', null,
							['class' => 'form-control', 
							'step' => 'any']) !!} 
    	</div>
  	</div>
  	<div class="form-group">
	  	{!! Form::label('pic_url', 'Upload Pic:', 
					   ['class' => 'control-label col-sm-2']) !!}
    	<div class="col-sm-10"> 
    		{!! Form::file('pic_url', null,
    					  ['class' => 'control-label', 				'required' => 'true']) !!}
    	</div>
  	</div>
  	<div class="form-group"> 
    	<div class="col-sm-offset-2 col-sm-10">
    		{!! Form::submit('Submit', ['class' => 'btn btn-success btn-lg']) !!}
    	</div>
  	</div>
{!! Form::close() !!}
