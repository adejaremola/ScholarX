<aside id="column-left" class="col-sm-2">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="box-category">
	    <ul class="cat_accordion">
		    @if($user->profile)
		    <li><a href="{{ url('/user/'.$user->profile->id.'/edit') }}">Profile</a></li>
		    <li><a href="{{ url('/user/'.$user->profile->id.'/index') }}">Applications</a></li>
		    <li><a href="{{ url('/user/apply') }}">Apply</a></li>
		    @else
		    <li><a href="{{ url('/user/profile/create') }}">Profile</a></li>
		    @endif
		</ul>
	</div>
</aside>