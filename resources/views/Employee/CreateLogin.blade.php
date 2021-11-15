<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/styles.css')}}">

</head>
<body>
<div class="container" style="margin-top: 50px;">
	<div class="d-flex justify-content-center " >

        <div class="card" style="height: 620px;" >
     @if(session()->get('emp'))
       
    <div  style="color:white;background:red;">{{session()->get('emp')}}</div>
    @endif
			<div class="card-header text-center">
				<h3>Create Account</h3>
				
			</div>
			<div class="card-body" >
				<form action="/employee/SignUp" method="POST">
                    @csrf
                <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Empolyee Name" name="name" required>
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Empolyee FatherName" name="fname" required>
                    </div>
                    
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="abc@gmail.com" name="email" required>
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-mobile"></i></span>
						</div>
						<input type="number" class="form-control" placeholder="phone number" name="phone" required>
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-city"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Empolyee City" name="city" required>
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-city"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Empolyee Experince" name="experiance" required>
                    </div>
                    
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-id-badge"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="CNIC" name="CNIC" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password"  id="psw" name="password" required>
					</div>
					
					<div class="form-group">
						<input type="submit" value="Create Acount" class="btn float-right btn-primary" name="createacount">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account? <a href={{"Login"}}>Sign In</a>
				</div>
				
			</div>
			
		</div>
	</div>
</div>

</body>
</html>

