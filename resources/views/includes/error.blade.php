@if(count($errors))
	<br><br><div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li class="item_error">{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif