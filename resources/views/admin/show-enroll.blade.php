@extends('includes.admin-layout')
@section('content')

<div class="post-box">
	<h1>Enrollment</h1>
	<hr><br>
		<div class="container">
					<table class="table table-bordered table-hover table-condensed text-center well" style="width: 90%">
						<thead>
					   		<tr>
					    		<th style="width: 5%">No.</th>
					    		<th style="width: 30%">Email</th>
					    		<th style="width: 20%">Username</th>
					    		<th>Kelas yang diikuti</th>
					    	</tr>
					    </thead>
					    <tbody>
					    	@foreach($enroll as $index => $row)
					    		<tr>
					    			<td>{{ $index+1 }}</td>
					    			<td>{{ $row->get_user->email }}</td>
					    			<td>{{ $row->get_user->username }}</td>
					    			<td>{{ $row->get_sub_kelas->nama }}</td>
					    		</tr>
					    	@endforeach
					    </tbody>
					</table>
		</div>
</div>

@endsection