<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
	<script>
				$().ready(function()
		{
			$(".login").validate(
			{
				rules:
				{
					username: 
					{
						required: true
					},
									
					Email: 
					{
						required: true,
						email: true
					},
					password: 
					{
						required: true,
						minlength: 5
					},
					cpassword: 
					{
						required: true,
						minlength: 5,
						equalTo: "#password"
					}
					
				},

				messages:
				{
					username: 
					{
						required: "Enter your Username"
					},
					
					Email:
					{
						required: "Enter your Email address",
						email: "Enter valid email address"
					},
					
					password: 
					{
						required: "Enter password",
						minlength: "Minimun length should be 5"
					},
					cpassword: 
					{
						required: "Enter this field",
						minlength: "Minimun lenght should be 5",
						equalTo: "Passwords don't match"
					}
				}
			});
		});

		/*$.validator.setDefaults(
		{
			submitHandler: function()
			{
				alert("Voila!! You have signed up succesfully!!");
			}
		});*/
	</script>
</head>
<body>

<header>
	Not yet registered? Sign Up
</header>

<div class="content">
	<div class="formHolder">
		<form class="login" name="login" action="registercontrol.php" method="post">
			<input type="text" name="username" placeholder="Enter your username"><br><br>
			
			<input type="Email" name="Email" placeholder="Enter your Email-id"><br><br>
			<input type="password" name="password" placeholder="Enter password" id="password"><br><br>
			<input type="password" name="cpassword" placeholder="confirm password"><br><br>
			<input type="Submit" name="Sign In" value="Sign In"><br><br>
		</form>
	</div>
</div>

</body>
</html>