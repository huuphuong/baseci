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
					<a href="#">Student</a>
				</li>
				<li class="active">Stuent Information</li>
			</ol>
		</div><!-- /.col-sm-12 -->
	</div><!-- /.row -->


	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Student Infomation</h3>
				</div>
				<div class="panel-body">
					<form action="" method="POST" role="form">
						<div class="form-group">
							<label for="">Full name*:</label>
							<input type="text" class="form-control" id="" placeholder="Input field">
						</div>

						<div class="form-group">
							<label for="">Email*:</label>
							<input type="text" class="form-control" id="" placeholder="Input field">
						</div>


						<div class="form-group">
							<label for="">Gender:</label>
							<div class="radio">
								<label class="radio-inline">
									<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
								</label>
								<label class="radio-inline">
									<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
								</label>
							</div>
						</div>

						<div class="form-group">
							<label for="">Hobbies:</label>
							<div class="radio">
								<label class="checkbox-inline">
								<input type="checkbox" id="inlineCheckbox1" value="option1"> Game
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2"> Book
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox3" value="option3"> Music
								</label>

								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox3" value="option3"> Other
								</label>
							</div>
						</div>
					</form>
				</div>

				<div class="panel-footer">
					<button type="reset" class="btn btn-default">Cancel</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div><!-- /.panel-footer -->
			</div>
		</div><!-- /.col-sm-4 -->


		<div class="col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">List student</h3>
				</div>
				<div class="panel-body">
					Panel content
				</div>
			</div>
		</div>
	</div><!-- /.row -->
</div><!-- /.container -->
@endsection




