<!DOCTYPE html>
<html>
<head>
	<title>Employee Login</title>
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/styles.css')}}">

</head>
<body>
<div class="container">
	<br>
	@if(session()->get('emp2'))
			<h2 style="background: yellow;color:black;">{{session()->get('emp2')}}</h2>
			@endif
			<br><br>

<h3 style="text-align:center;color:white">--Employee Portal--</h3>
			
			
	<div class="d-flex justify-content-center ">
		<div class="card">
			
			<div class="card-header">
				<h3 style="text-align:center;">Login In</h3>
			</div>
			<div class="card-body">
				<form action="/employee/login" method="POST">
					@CSRF
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="employee_id (CNIC)" name="emp_id">
				
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password">
					</div>
                    <br><br>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="http://127.0.0.1:8000/employee/SignUp">Sign Up</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>