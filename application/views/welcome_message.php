@extends('layouts.master')
@section('home', 'active')
@section('content')
<div class="container content-container">
	<div class="row">
		<div class="col-sm-12">
			<ol class="breadcrumb">
				<li>
					<a href="#"><span class="glyphicon glyphicon-home"></span> Home</a>
				</li>
				<li>
					<a href="#">Staff</a>
				</li>
				<li class="active">Staff Information</li>
			</ol>
		</div><!-- /.col-sm-12 -->
	</div><!-- /.row -->


	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">List staff</h3>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Index</th>
								<th>Fullname</th>
								<th>Birthday</th>
								<th>Gender</th>
								<th>Email</th>
								<th>Phone</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($welcome AS $k => $user)
							<tr>
								<td>{{ $k+1 }}</td>
								<td>{{ $user->shodem }}</td>
								<td>{{ $user->sngaysinh }}</td>
								<td>{{ $user->sgioitinh }}</td>
								<td>{{ $user->semail }}</td>
								<td>{{ $user->sdienthoai }}</td>
							</tr>

							@empty
							<tr>
								<td colspan="6">No data available.</td>
							</tr>
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div><!-- /.row -->
</div><!-- /.container -->
@endsection




