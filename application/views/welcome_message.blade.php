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

	<br>
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-list"></span> List user
					</h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>User name</th>
								<th>E-mail</th>
								<th>Token</th>
								<th>Created at</th>
								<th>Updated at</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($users AS $key => $user)
							<tr>
								<td>{{ $key+1 }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->remember_token }}</td>
								<td>{{ $user->created_at }}</td>
								<td>{{ $user->updated_at }}</td>
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




