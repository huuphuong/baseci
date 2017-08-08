<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'VtigerCRM - Hệ thống quan trị quan hệ khách hàng')</title>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
	
		<?php $data = Request::getName(); ?>
		{!! print_r($data) !!}
		<form action="store" method="POST" role="form">
			<legend>Form title</legend>
		
			<div class="form-group">
				<label for="">label</label>
				<input type="text" class="form-control" name="username" placeholder="Input field">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
    </div>

</div>

</body>
</html>