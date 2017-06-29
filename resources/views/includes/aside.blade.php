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
		    <li><a href="{{ route('edit_profile', $user->profile->id) }}">Profile</a></li>
		    <li><a href="{{ route('my_applications', $user->profile->id) }}">Applications</a></li>
		    <li><a href="{{ route('apply') }}">Apply</a></li>
		    @else
		    <li><a href="{{ route('create_profile') }}">Profile</a></li>
		    @endif
		</ul>
	</div>
</aside>