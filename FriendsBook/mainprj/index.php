<html>
	<head>
		<link rel="stylesheet" href="css files/login_registration.css">
	</head>
	
	<body>
		<div class="header">
			<div class="fbn"><b>FriendsBook</b></div>
			
			<form action="login1.php" method="post">
				<div class="epn">Email or Phone No.</div>
				<input type="text" id="epnt" required>
				<div class="pass">Password</div>
				<input type="password" id="passt" required>
				<button type="submit" id="lbtn">Log In</button>
				<a href="#" class="fap"><u>Forgotten Account or Password?</u></a>
			</form>
		</div>
		
		
		<div class="fbld">
			FriendsBook helps you connect and share with the people in your life.<br><br>
			<img src="pics/frnd.png" width="400px" height="275px">
		</div>

		<div class="ca"><h1><u>Create an Account</u></h1></div>
		<div class="ca1"><b>It's free and always will be</b></div>
		<form action="fg.php" method="post">
			<input type="text" placeholder="first name" name="u_fname" id="fname" required>
			<input type="text" placeholder="middle name" name="u_mname" id="mname">
			<input type="text" placeholder="last name" name="u_lname" id="lname" required>
			<input type="num" placeholder="Mobile Number" name="u_mno" id="mno" required>
			<input type="mail" placeholder="Email" name="u_email" id="email"required>
			<input type="password" placeholder="Password" name="u_paswd" id="passw" required>
			<input type="password" placeholder="Re-enter Password" name="ur_paswd" id="rpassw" required>
			<div class="dob"><b>Birthday:- </b></div>
			<input type="date" name="u_bday" id="bday" required>
			<div class="sex" name="u_gender"><b>Gender:- </b>
				<select name="u_gender" required>
					<option selected hidden value="">Select Gender</option>
					<option value="male">male</option>
					<option value="female">female</option>
				</select>
			</div>
			<button type="submit" id="sbtn">Sign in</button>
		</form>
	</body>
</html>