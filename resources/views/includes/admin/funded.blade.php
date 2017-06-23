	<div class="category-list-thumb row">
	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> 
	    	<a data-toggle="tab" href="#tertiary4">
	    		Tertiary Applications
	    	</a> 
	    </div>
	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> 
	    	<a data-toggle="tab" href="#sec4">
	    	Secondary Secondary Applicants
	    	</a> 
	    </div>
	</div>
    <br>
	<div class="row products-category tab-content">
	    <div class="tab-pane active" id="tertiary4">
	    	<div class="table-responsive">
		    	<table class="table table-hover">
			    	<thead>
				    	<tr>
					        <th>#</th>
					        <th>Name</th>
					        <th>Institution</th>
					        <th>Faculty</th>
					        <th>Department</th>
					        <th>Level</th>
					        <th>CGPA</th>
					        <th>Amount</th>
					        <th>Action</th>
					    </tr>
				    </thead>
				    <?php
				    	$i = 1;
				    ?>
				    <tbody>
					    @foreach($applications as $application)
					    	@if($application->profiler->category == 2)
						      	<tr>
						        	<td>{{ $i++ }}</td>
						        	<td>{{ $application->profiler->user->name }}</td>
						        	<td>{{ $application->profiler->institution }}</td>
						        	<td>{{ $application->profiler->faculty }}</td>
						        	<td>{{ $application->profiler->department }}</td>
						        	<td>{{ $application->profiler->level }}</td>
						        	<td>{{ $application->profiler->cgpa }}</td>
						        	<td>{{ $application->amount }}</td>
						        	<td class="text-left">
						        		<a href="{{ url('/admin/applications/'.$application->id) }}" class="btn btn-info" role="button">View Details</a>
						        	</td>
						      	</tr>
				      		@endif
					    @endforeach
				    </tbody>
				</table>
			</div>
	   	</div>
	   	<div class="tab-pane" id="sec4">
	   		<div class="table-responsive">
	   			<table class="table table-hover">
			    	<thead>
				    	<tr>
					        <th>#</th>
					        <th>Name</th>
					        <th>Institution</th>
					        <th>Faculty</th>
					        <th>Department</th>
					        <th>Level</th>
					        <th>CGPA</th>
					        <th>Amount</th>
					        <th>Action</th>
					    </tr>
				    </thead>
				    <?php
				    	$i = 1;
				    ?>
				    <tbody>
					    @foreach($applications as $application)
					    	@if($application->profiler->category == 1)
						      	<tr>
						        	<td>{{ $i++ }}</td>
						        	<td>{{ $application->profiler->user->name }}</td>
						        	<td>{{ $application->profiler->institution }}</td>
						        	<td>{{ $application->profiler->faculty }}</td>
						        	<td>{{ $application->profiler->department }}</td>
						        	<td>{{ $application->profiler->level }}</td>
						        	<td>{{ $application->profiler->cgpa }}</td>
						        	<td>{{ $application->amount }}</td>
						        	<td class="text-left">
						        		<a href="{{ url('/admin/applications/'.$application->id) }}" class="btn btn-info" role="button">View Details</a>
						        	</td>
						      	</tr>
				      		@endif
					    @endforeach
				    </tbody>
				</table>
			</div>
	   	</div>
  	</div>
