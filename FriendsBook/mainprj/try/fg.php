<?php
	$server="localhost";
	$uname="root";
	$pwd="";
	$database="social";
	$con= new mysqli($server,$uname,$pwd,$database);
	if(!$con)
	{
		die("could not connect");
	}
	else
	{	
		header("location:fg1.php");
		echo"<h1>Welcome to FriendsBook</h1>";
	}
	/*
	$first_name= $_POST['fn'];
	$middle_name= $_POST['mn'];
	$last_name= $_POST['ln'];
	$mbno= $_POST['mno'];
	$email= $_POST['ml'];
	*/
	$first_name= $_POST['u_fname'];
	$middle_name= $_POST['u_mname'];
	$last_name= $_POST['u_lname'];
	$mbno= $_POST['u_mno'];
	$email= $_POST['u_email'];
	$passwd= $_POST['u_paswd'];
	$r_passwd= $_POST['ur_paswd'];
	$dob =$_POST['u_bday'];
	$sex= $_POST['u_gender'];
	/*
	$sql= "insert into cllg(first_name,middle_name,last_name,mobile_no,email_id) values('$first_name','$middle_name','$last_name','$mbno','$email')";
	$r=$con->query($sql);
	if (!$r)
		{
				echo mysqli_error($con);
		}
		echo"insert";
	*/
	$sq="select * from register where mobile_no ='$mbno' && email ='$email'";
	$result= mysqli_query($con, $sq);
	$num= mysqli_num_rows($result);
	
	if($num==1)
	{
		header("location: fg1.php");
		//echo "<script>alert('change email or phone number')</script>";
	}
	else
	{
		$insert="insert into register (first_name,middle_name,last_name,mobile_no,email,password,re_password,dob,gender) values ('$first_name','$middle_name','$last_name','$mbno','$email','$passwd','$r_passwd','$dob','$sex')";
		$sql=$con->query($insert);
		if (!$sql)
		{
				echo mysqli_error($con);
				
		}
	}
?>