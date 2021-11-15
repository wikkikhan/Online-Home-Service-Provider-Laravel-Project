<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
   
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/styles.css')}}">

</head>
<body>
<div class="container" style="margin-top: 50px;">
<br><br>
<h2 style="text-align:center ;color:white;" >--Admin Portal--</h2>
	<div class="d-flex justify-content-center " >
   
        <div class="card" style="height: 490px;" >
			<div class="card-header text-center">
          
         <br><br>
            <h3 style="text-align:center;">Create Account</h3>
            </div>
			<div class="card-body" >
				<form action="/admin/SignUp" method="POST">
                    @csrf
                <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="User Name" name="username" required>
                    </div>
                    
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="abc@gmail.com" name="email" required>
                    </div>
                   
                   
                    
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-id-badge"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="admin_id" name="admin_id" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password"  id="psw" name="password" required>
					</div>
					
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>

					<div class="form-group">
						<input type="submit" value="SignUp" class="btn float-right login_btn" name="signUp">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account? <a href="http://127.0.0.1:8000/admin/login">Sign In</a>
				</div>
				
			</div>
			
		</div>
	</div>
</div>

</body>
</html>

