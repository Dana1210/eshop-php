<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Regisret form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<?php 
			if(isset($_GET['message'])){
				?>
					<div class="alert alert-danger">
						<?php 
							require_once'messages.php';
							echo $message[$_GET['message']];
						?>
					</div>
			<?php
			}
		?>
		<form id="regform" class="mt-5 w-50 mx-auto" action="register.php" method="POST">
			<div class="mb-3">
				<label for="fullname" class="form-label">Fullname</label>
				<input type="text" class="form-control" name="fullname" id="fullname" aria-describedby="fullnameHelp" required>
				<div id="fullnameHelp" class="form-text"></div>
			</div>
			<div class="mb-3">
				<label for="login" class="form-label">Login</label>
				<input type="text" class="form-control" name="login" id="login" aria-describedby="loginHelp" required>
				<div id="loginHelp" class="form-text"></div>
			</div>
			<div class="mb-3">
				<label for="password" class="form-label">Password</label>
				<input type="password" class="form-control" name="password" id="password" aria-describedby="passwordlHelp" required>
				<div id="passwordHelp" class="form-text"></div>
			</div>
			<div class="mb-3">
				<label for="repassword" class="form-label">Re-Password</label>
				<input type="password" class="form-control" name="repassword" id="repassword" aria-describedby="repasswordlHelp">
				<div id="repasswordHelp" class="form-text"></div>
			</div>
			<div class="mb-3 form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
	  		</div>
	  			<button type="button" onclick="register()" class="btn btn-primary">Register</button>
		</form>
	</div>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

	<script type="text/javascript">
		function register(){

			let ok= true;

			fullnameHelp.innerText ='';
			loginHelp.innerText ='';
			passwordHelp.innerText='';
			repasswordHelp.innerText='';

			if(fullname.value == ''){
				fullnameHelp.innerText = "Pleas fill fullname field";
				ok = false;
			}

			if(login.value == ''){
				loginHelp.innerText = "Pleas fill login field";
				ok = false;
			}

			if(password.value == ''){
				passwordHelp.innerText = "Pleas fill password field";
				ok = false;
			}

			if(repassword.value == ''){
				repasswordHelp.innerText = "Pleas fill repassword field";
				ok = false;
			}

			if(password.value != repassword.value){
				passwordHelp.innerText = repasswordHelp.innerText = "Password are defferent";
				ok = false;
				return;
			}

			if(password.value.length < 6){
				passwordHelp.innerText = "Password 6 dsimvolov";
				ok = false;
				return;
			}

			if(repassword.value.length < 6){
				repasswordHelp.innerText = "Re-Password 6 simvolov";
				ok = false;
			}

			if(ok)
				regform.submit();



		}
	</script>

</body>
</html>