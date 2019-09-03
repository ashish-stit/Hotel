@extends('adminlayout.layout')
@section('content')
<div style="float: right;margin: 1rem;">
	<a href="#" class="btn btn-primary btn-sm " style="padding: 4px 2rem;letter-spacing: 1px;" data-toggle="modal" data-target="#addProfileModalForm">
		Add Profile
	</a>
</div>
<div class="container">
	<div class="row">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>S.No.</th>
					<th>Objective</th>
					<th>Name</th>
					<th>Email</th>
					<th>Skills</th>
					<th>Experience Year</th>
					<th>Experience Hotel</th>
					<th>Education</th>
					<th>Resume</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($view as $profile)
				<tr>
					<td>{{ $profile->id }}</td>
					<td>{{ $profile->objective }}</td>
					<td>{{ $profile->name }}</td>
					<td>{{ $profile->email }}</td>
					<td>{{ $profile->skills }}</td>
					<td>{{ $profile->experience_year }}</td>
					<td>{{ $profile->experience_hotel }}</td>
					<td>{{ $profile->education }}</td>
					<td>{{ $profile->resume }}</td>
					<td>
						<a id="{{ $profile->id }}" class="editProfile " style="margin-right: 1rem; background: #337ab7; padding: 2px 2rem; text-align: center; border-radius: 4px;cursor: pointer;">
							<i class="fa fa-edit" style="font-size: 15px; color: #fff;"></i></a>

							<a href="" class="btn btn-danger removeProfile" style="padding: 2px 2rem; text-align: center; border-radius: 4px;cursor: pointer;"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	@include('admin.add-document')
	@endsection