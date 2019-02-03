<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="row">
		
			<div class="col-md-4"></div>
				
				<div class="col-md-4" style="margin-top: 90px;">
				<h5 style="text-align:center;">Here is the Notification with Email and SMS using Laravel</h5>
				<form action="{{url('/createUser')}}" method="POST">
				{{ csrf_field() }}
				  <div class="form-group">
					<label for="Name">Name:</label>
					<input type="text" class="form-control" name="name" placeholder="Enter Name">
				  </div>
				  <div class="form-group">
					<label for="Email">Email:</label>
					<input type="text" class="form-control" name="email" placeholder="Enter Email">
				  </div>
				  <div class="form-group">
					<label for="MobileNumber">Mobile Number:</label>
					<input type="text" class="form-control" name="phone" placeholder="Enter Mobile Number">
				  </div>
				  <div class="form-group">
					<label for="password">Password:</label>
					<input type="text" class="form-control" name="password" placeholder="Enter Password">
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
				
			</div>
			<div class="col-md-4"></div>
        </div>
    </body>
</html>