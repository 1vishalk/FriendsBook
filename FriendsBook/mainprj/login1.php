<?php
	/*$server="localhost";
	$uname="root";
	$pwd="";
	$database="social";
	$con= mysqli_connect($server,$uname,$pwd,$database);
	if(!$con)
	{
		die("could not connect");
	}
	else
	{	
		header("location:hom.php");
		echo"<h1>Welcome to FriendsBook</h1>";
	}
	/*
	$first_name= $_POST['fn'];
	$middle_name= $_POST['mn'];
	$last_name= $_POST['ln'];
	$mbno= $_POST['mno'];
	$email= $_POST['ml'];
	*/
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
		header("location:fb_files\fb_home\home.php");
		echo"<h1>Welcome to FriendsBook</h1>";
	}
	$mbno= $_POST['u_mno'];
	//$email= $_POST['u_email'];
	$passwd= $_POST['u_paswd'];
	echo $mbno;
	/*
	$sql= "insert into cllg(first_name,middle_name,last_name,mobile_no,email_id) values('$first_name','$middle_name','$last_name','$mbno','$email')";
	$r=$con->query($sql);
	if (!$r)
		{
				echo mysqli_error($con);
		}
		echo"insert";
	*/
	$sq="select * from register where mobile_no ='$mbno' && password ='$passwd'";
	$result= mysqli_query($con, $sq);
	if($result)
	{
		echo "runned";
	}
	else{
		echo "not running";
	}
	$num= mysqli_num_rows($result);
	
	if($num==1)
	{
		echo"<h1>Welcome to FriendsBook</h1>";
		header("location:fb_files\fb_home\home.php");
		//echo "<script>alert('change email or phone number')</script>";
	}
	else
	{
		header("location:index.php");
	}
?>