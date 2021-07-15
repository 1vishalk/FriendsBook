<?php
	header("connection/conn.php")
	$f_name= $_POST['fname'];
	$m_name= $_POST['mname'];
	$l_name= $_POST['lname'];
	$mobile_no.= $_POST['mno'];
	$u_email= $_POST['email'];
	$password= $_POST['passw'];
	$r_password= $_POST['rpassw'];
	$dob= $_POST['bday'];
	$sex= $_POST['gender'];
	
	/*if(!empty($f_name)||!empty($l_name)||!empty($mobile_no)||!empty($u_email)||!empty($password)||!empty($r_password)||
	!empty($dob)||!empty($sex))
	{
		include("connection/conn.php")
	}
	else
	{
		echo"All fields are required";
		die();
	}*/
	
	$select= "select * from fb_register where mobile_no= '$mobile_no' && email= '$u_email'";
	$result= mysqli_query($con, $select);
	$check= mysqli_num_rows($result);
	if($check==1)
	{
		echo"dupicate data";
	}
	else
	{
		$insert= "insert into fb_register(first_name, middle_name, last_name, mobile_no, email, password, re_password, dob, gender)
		values('$f_name','$m_name','$l_name','$mobile_no','$u_email','$password','$r_password','$dob','$sex')";
		mysqli_query($con,$insert);
	}
?>