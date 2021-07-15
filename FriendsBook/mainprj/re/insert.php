<?php
//database connectivity
include("conn.php");
//checking submit button
if(isset($_POST['submit']))
{
//fetching value from form

	$first_name= $_POST['u_fname'];
	$middle_name= $_POST['u_mname'];
	$last_name= $_POST['u_lname'];
	$mbno= $_POST['u_mno'];
	$email= $_POST['u_email'];
	$passwd= $_POST['u_paswd'];
	$r_passwd= $_POST['ur_paswd'];
	$dob =$_POST['u_bday'];
	$sex= $_POST['u_gender'];

//inserting record
$c="insert into register (first_name, middle_name, last_name, mobile_no, email,password, re_password, dob, gender) values ('$first_name','$middle_name','$last_name','$mbno','$email','$passwd','$r_passwd','$dob','$sex')";
$d=mysqli_query($c);
}

?>


	<form action="insert.php" method="post">
			<input type="text" placeholder="first name" name="u_fname"  required>
			<input type="text" placeholder="middle name" name="u_mname">
			<input type="text" placeholder="last name" name="u_lname"  required>
			<input type="num" placeholder="Mobile Number" name="u_mno" required>
			<input type="mail" placeholder="Email" name="u_email" required>
			<input type="password" placeholder="Password" name="u_paswd"  required>
			<input type="password" placeholder="Re-enter Password" name="ur_paswd"  required>
			<div class="dob"><b>Birthday:- </b></div>
			<input type="date" name="u_bday"  required>
			<div class="sex" name="u_gender"><b>Gender:- </b>
				<select name="u_gender" required>
					<option selected hidden value="">Select Gender</option>
					<option value="male">male</option>
					<option value="female">female</option>
				</select>
			</div>
			<button type="submit" name="submit">Sign in</button>
		</form>

</form>