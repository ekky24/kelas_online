@extends('includes.admin-layout')
@section('content')

<div class="post-box">
	<h1>List Promo User</h1>
	<hr><br>
		<div class="container">
					<table class="table table-bordered table-hover table-condensed text-center well" style="width: 90%">
						<thead>
					   		<tr>
					    		<th style="width: 5%">No.</th>
					    		<th style="width: 30%">Nama</th>
					    		<th style="width: 30%">Email</th>
					    		<th>No HP</th>
					    	</tr>
					    </thead>
					    <tbody>
					    	@foreach($userpromo as $index => $row)
					    		<tr>
					    			<td>{{ $index+1 }}</td>
					    			<td>{{ $row->nama }}</td>
					    			<td>{{ $row->email }}</td>
					    			<td>{{ $row->no_telp }}</td>
					    		</tr>
					    	@endforeach
					    </tbody>
					</table>
		</div>
</div>

@endsection