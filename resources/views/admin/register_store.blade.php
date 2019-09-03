@extends('adminlayout.layout')
@section('content')
<div class="container">
	<div class="row">
		<table class="table table-border table-hover">
			<thead>
				<tr>
					<th>S.No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Password</th>
				</tr>
			</thead>
			<tbody>
				@foreach($show_data as $data)
				<tr>
					<td>{{ $data->id }}</td>
					<td>{{ $data->name }}</td>
					<td>{{ $data->email }}</td>
					<td>{{ $data->password }}</td>
				</tr>
				@endforeach
			</tbody>
			
		</table>
	</div>
</div>
@endsection